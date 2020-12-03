# FirstCondo.ca - Developer Notes

## Migration 2020-12

* Migration to Opalstack required because Webfaction was shutting down.
* Webfaction version was spread across several areas:
  * /webapps/www_dc - dynamic content - bootstrapping PHP code
  * /webapps/www_sc - static content - images, PDFs
  * /webcode/www_dc - main PHP code (why? outside Apache's docroot)
* Opalstack version merged these into one directory
  * ./* - from /webapps/www_dc
  * ./sc - from /webapps/www_sc
  * ./webcode - from /webcode/www_dc
  * PLUS: necessary code changes to point to new locations


## History
* Website created in 2008-Q1.  Well before PHP's Composer (2012) enabled
  easy use of external libraries.  Just as mobile (varying screen widths)
  was becoming a thing (so this site just missed the "new ways").
