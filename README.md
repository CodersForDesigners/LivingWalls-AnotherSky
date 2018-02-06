
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
- [ ] Fix the modal code in `/index.php`.(!!! High Priority)
- [ ] Plonk in the analytics code in `/index.php` and `/pages/apartment-pricing.php`.
- [ ] Add those campaign links that were in the build folder.
- [ ] Figure out the favicons scene.
- [ ] Remove the 'smtp connect' log statements from the mailing libraries.
- [x] Figure out what to do with the `optimized_contents` folder — 
- [ ] Delete `optimized_contents` folder + Delete all Hotjar Stuff + Review all the Markup for junk/commented out code we're not using anymore.
- [ ] Figure out what `remarketing.html` is for - prolly being used in pricing page form submission; brought in in an iframe

## /
- [ ] remove all PDF Generator code except the API Request Form
- [ ] Delete Composer
- [ ] rename manual-form css & js to paperless
- [ ] Upgrade all the current carousels to Slick Carousels and delete legacy code/files.
- [ ] 

## /index.php
- [ ] bring back the picture element srcset polyfill
- [ ] 
- [ ] 

# deployment
Following are things to do before, on and after deploying the site to the live server.

1. Change the e-mail credentials in `/server/mailer.php`.
2. Change the e-mail credentials in `/server/discounter.php`.
3. Change the e-mail addressees in `/server/overview_contact_smtp_builder.php`.
4. Un-comment the Google Sheets API push in `/server/overview_contact_smtp_builder.php`.
5. Change the e-mail addressees in `/server/pricing_contact_smtp_builder.php`.
6. Un-comment the Google Sheets API push in `/server/pricing_contact_smtp_builder.php`.

