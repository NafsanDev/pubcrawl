# Pub Crawl Zurich — WordPress Theme

Converted from `HOME_EN_21_70_27.html`. One-page design, translation-ready, Polylang/WPML compatible.

## Install
1. Zip the `pubcrawl-zurich` folder (or use the provided zip) → **Appearance → Themes → Add New → Upload**.
2. Activate. In **Settings → Reading** choose "Your latest posts" or any static page – `front-page.php` is always used for the home page.
3. **Add the images** (not included in the upload) to `assets/images/`:
   - `Logo-White.png` (or set a Custom Logo in the Customizer)
   - `hero-fallback.jpg` (the former `ChatGPT_Image_Jun_9__2026__09_27_32_AM.png`, renamed)
   - `shots-icon.png`, `glow-sticks-icon-v2.png`, `red-photo.jpg`
4. **Appearance → Menus**: assign menus to *Primary* and *Footer* (a built-in fallback menu is used otherwise).
5. **Appearance → Customize → Pub Crawl Zurich Settings**: hero video, ticket links, prices, contact info, social links, meeting point, newsletter (Brevo) embed code.

## Multilingual
- Every string uses text domain `pubcrawl-zurich`; template is `languages/pubcrawl-zurich.pot`.
- **Option A – Polylang / WPML (recommended):** install the plugin, add EN/DE/FR. The nav language switcher (desktop + mobile) is rendered automatically from the plugin. Translate theme strings via *Languages → Translations* (Polylang) or *WPML → String Translation*, and menus per language.
- **Option B – .mo files:** create `pubcrawl-zurich-de_DE.mo` / `-fr_FR.mo` in `languages/` (e.g. with Loco Translate or Poedit). Works with one WordPress install per language.
- Without any plugin a static EN/DE/FR switcher is shown (edit URLs via the `pcz_fallback_languages` filter).
- Customizer text values (hero title, next-event line, prices, meeting info) show translated defaults until you override them; with WPML/Polylang, per-language values can be provided via the `pcz_option_{key}` filter or by translating the theme_mod strings.

## Files
`404.php`, `search.php`, `searchform.php`, `front-page.php` (+ `template-parts/front-page/*`), `index.php`, `page.php`, `single.php`, `comments.php`, `header.php`, `footer.php`, `functions.php`, `inc/*`, `js/*`.

## Notes
- Gallery photos and the hero video still point to the original Wix URLs; swap them via the `pcz_gallery_images` filter or Customizer video URL once you host them in the Media Library.
- The contact form opens the visitor's mail client (as in the original template). Use a form plugin if you need server-side delivery.
- No `screenshot.png` is included; add a 1200×900 image if you want a theme preview.
