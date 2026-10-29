<?php
/**
 * Fetch the next event date from the working proxy script and cache it.
 */
function get_cached_eventfrog_date() {
    // Check if the date is already saved in WordPress cache
    $cached_date = get_transient('eventfrog_next_date');
    
    if ($cached_date !== false) {
        return $cached_date;
    }

    // Replace this URL with the exact, absolute URL to your working production script
    $proxy_url = 'https://pubcrawlluzern.ch/eventfrog-proxy.php'; 

    // Fetch data using WordPress's secure HTTP API
    $response = wp_remote_get($proxy_url, array('timeout' => 5));

    if (is_wp_error($response)) {
        return 'No upcoming event'; // Fallback if the script times out or fails
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);
    
    // Extract the date, default to fallback string if missing
    $event_date = !empty($data['date']) ? $data['date'] : 'No upcoming event';

    // Store the result in the WordPress database for 10 minutes (600 seconds)
    set_transient('eventfrog_next_date', $event_date, 10 * MINUTE_IN_SECONDS);

    return $event_date;
}

/**
 * Register the [eventfrog_date] shortcode.
 */
function register_eventfrog_date_shortcode() {
    // Check if our helper function exists to prevent fatal errors
    if ( function_exists('get_cached_eventfrog_date') ) {
        return get_cached_eventfrog_date();
    }
    return 'No upcoming event';
}
add_shortcode('eventfrog_date', 'register_eventfrog_date_shortcode');

