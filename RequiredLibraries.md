# Overall functionality #
  * The most recent version of PHP 5 is suggested, as some PHP 5-only functions are used in certain sections of the code
  * MySQL 5 and, as of 0.3.0, SQLite are the only supported DBIs
  * The GD image library (typically part of PHP) is required to thumbnail images.
  * The Smarty template engine is no longer included with drydock and must be downloaded separately

# Admin functions #
  * PHP with libcurl enabled is currently required to automate [the blacklisting of certain keywords](http://wakaba.c3.cx/antispam/).  However, placing URLs, one for each line, in a file named "spam.txt" in the /unlinked/ folder will achieve the same result.  One may even use both simultaneously, in case there are specific URLs that one wishes to block _in addition_ to those provided by WAHa.06x36.

# Posting functions #
  * Certain PEAR modules are required for SVG support, and optional for SWF support depending on the configuration (see below).
  * ImageMagick or rsvg may be installed for SVG thumbnailing, depending on the configured thumbnailer

# PEAR modules required #
  * For SWF metadata functionality, [File\_SWF](http://www.sephiroth.it/swfreader.php) is required and must be installed in **<PEAR path>/File/**.  Note that this is only required if the SWF metadata option is enabled.
  * For SVG functionality, two PEAR modules are required:
    * [XML\_HTMLSax3](http://pear.php.net/package/XML_HTMLSax3) must be installed in **<PEAR path>/XML/**.
    * [HTML\_Safe](http://pear.php.net/package/HTML_Safe) must be installed in **<PEAR path>/HTML/HTML\_Safe/**.