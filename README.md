
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
## /
- [ ] remove all PDF Generator code except the API Request Form
- [ ] Delete Composer



# deployment
Following are things to do before, on and after deploying the site to the live server.

1. Change the e-mail credentials in `/server/mailer.php`.
2. Change the e-mail credentials in `/server/discounter.php`.
3. Change the e-mail addressees in `/server/overview_contact_smtp_builder.php`.
4. Un-comment the Google Sheets API push in `/server/overview_contact_smtp_builder.php`.
5. Change the e-mail addressees in `/server/pricing_contact_smtp_builder.php`.
6. Un-comment the Google Sheets API push in `/server/pricing_contact_smtp_builder.php`.
7. `<head>` Restore Canonical Path
