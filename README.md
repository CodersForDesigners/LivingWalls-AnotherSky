
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
[ ] Plonk in the analytics code in `/index.php` and `/pages/apartment-pricing.php`.
[ ] Add those campaign links that were in the build folder.
[ ] Fix the modal code in `/index.php`.
[ ] Figure out the favicons scene.
[ ] Remove the 'smtp connect' log statements from the mailing libraries.
[ ] Figure out what to do with the `optimized_contents` folder.
[ ] Figure out what `remarketing.html` is for.


# deployment
Following are things to do before, on and after deploying the site to the live server.

1. Change the e-mail credentials in `/server/mailer.php`.
2. Change the e-mail credentials in `/server/discounter.php`.
3. Change the e-mail addressees in `/server/overview_contact_smtp_builder.php`.
4. Un-comment the Google Sheets API push in `/server/overview_contact_smtp_builder.php`.
5. Change the e-mail addressees in `/server/pricing_contact_smtp_builder.php`.
6. Un-comment the Google Sheets API push in `/server/pricing_contact_smtp_builder.php`.
