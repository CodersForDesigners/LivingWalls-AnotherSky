
This is the repository for LivingWalls' Another Sky project.

# pages
overview
	/ => /index.php
apartment pricing
	/apartment-pricing => /pages/apartment-pricing.php
discount-engine
	/discount-engine => /pages/discount-engine.php
manual-form
	/manual-form => /pages/manual-form.php
privacy-policy
	/privacy-policy => /pages/privacy-policy.php

# to-do
- [ ] Plonk in the analytics code in `/index.php` and `/pages/apartment-pricing.php`.
- [ ] Remove the 'smtp connect' log statements from the mailing libraries.

## /
- [ ] remove all PDF Generator code except the API Request Form
- [ ] Delete Composer

## index.php
- [ ] Fill in `<head>` meta data — Description, Keywords, Open Graph content and Thumbnail Images, Facebook App ID
- [ ] Clean up form submit code of 'content-text' modal form
- [ ] Figure out what the hell 'breakdance' is
- [ ] Convert "don't watch this" video carousel to slick
- [ ] Look into `<!-- Script for Firefox srcset Fix -->
<script type="text/javascript" src="js/overview/browser_specific.js"></script>`
- [ ] Replace All Standard Google Analytics, tracking and pixel with Google Tag Manager Hook

## apartment-pricing.php
- [ ] Fill in `<head>` meta data ( *same as index.php* )
- [ ] Replace All Standard Google Analytics, tracking and pixel with Google Tag Manager Hook

## discount-engine.php
- [ ] Fill in `<head>` meta data ( *same as index.php* )
- [ ] Replace All Standard Google Analytics, tracking and pixel with Google Tag Manager Hook


# deployment
Following are things to do before, on and after deploying the site to the live server.

1. Change the e-mail credentials in `/server/mailer.php`.
2. Change the e-mail credentials in `/server/discounter.php`.
3. Change the e-mail addressees in `/server/overview_contact_smtp_builder.php`.
4. Un-comment the Google Sheets API push in `/server/overview_contact_smtp_builder.php`.
5. Change the e-mail addressees in `/server/pricing_contact_smtp_builder.php`.
6. Un-comment the Google Sheets API push in `/server/pricing_contact_smtp_builder.php`.
7. `<head>` Restore Canonical Path
