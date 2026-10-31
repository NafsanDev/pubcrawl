<?php
/**
 * Fetch the next event date from the working proxy script, cache it,
 * and translate it dynamically based on the current Polylang language.
 */
function get_cached_eventfrog_date() {
    // 1. Check cache using a language-specific transient key so languages don't cross-contaminate
    $current_lang = function_exists('pll_current_language') ? pll_current_language() : 'en';
    $transient_key = 'eventfrog_next_date_' . $current_lang;
    
    $cached_date = get_transient($transient_key);
    if ($cached_date !== false) {
        return $cached_date;
    }

    $proxy_url = 'https://pubcrawlluzern.ch/eventfrog-proxy.php'; 

    $response = wp_remote_get($proxy_url, array('timeout' => 5));

    if (is_wp_error($response)) {
        // Translate fallback text
        return ($current_lang === 'fr') ? 'Aucun événement à venir' : 'No upcoming event';
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);
    
    $raw_date = !empty($data['date']) ? $data['date'] : '';

    if (empty($raw_date)) {
        return ($current_lang === 'fr') ? 'Aucun événement à venir' : 'No upcoming event';
    }

    // 2. Turn the raw string ("31 October 2026") into a PHP timestamp
    $timestamp = strtotime($raw_date);

    if ($timestamp) {
        // 3. Format the date dynamically using WordPress locale settings
        if ($current_lang === 'fr') {
            // French format: "31 octobre 2026"
            $formatted_date = wp_date('j F Y', $timestamp);
        } else {
            // English format: "31 October 2026"
            $formatted_date = wp_date('j F Y', $timestamp); 
        }
    } else {
        $formatted_date = $raw_date; // Fallback to raw API string if parse fails
    }

    // Store the translated result for 10 minutes
    set_transient($transient_key, $formatted_date, 10 * MINUTE_IN_SECONDS);

    return $formatted_date;
}

/**
 * Register the [eventfrog_date] shortcode.
 */
function register_eventfrog_date_shortcode() {
    if ( function_exists('get_cached_eventfrog_date') ) {
        return get_cached_eventfrog_date();
    }
    
    $current_lang = function_exists('pll_current_language') ? pll_current_language() : 'en';
    return ($current_lang === 'fr') ? 'Aucun événement à venir' : 'No upcoming event';
}
add_shortcode('eventfrog_date', 'register_eventfrog_date_shortcode');
