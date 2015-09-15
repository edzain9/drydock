# Pre installation checklist #
Drydock has some important files that it uses in its default setup that you'll need to have installed and correctly configured in order to achieve the best results.
  * Smarty template engine (http://smarty.net) - any version should work, but we have tested 2.6 builds (2.6.22 being the latest tested).  This is not currently included in the download packages (as of svn128).  Please unpack the Smarty files (internals/, plugins/, Config\_File.php and others) to the `_`Smarty/ directory
  * The newest version of PHP5 with GD enabled
  * The newest version of MySQL 5 or SQLite (_as of 0.3.0_)
  * Apache - IIS SHOULD work, but I do not do extensive testing or development on the machine here with IIS.  I know it runs stock Thorn code just fine once PHP is installed.  Windows machines must use C:/htdocs/drydock/ or similar layout using forward slashes instead of backward slashes. You must also be sure to have some way of preventing outside users from accessing the /unlinked/ folder (the provided .htaccess will do this for Apache)

# Optional modules (See RequiredLibraries for more information) #
  * PEAR - for SWF metadata parsing using File\_SWF and some svg handling
  * imagemagick - "convert" command for converting images and thumbnailing
  * librsvg (optional) - for converting svg files

# Database information #
Drydock by default stores its databases with no prefix in the following tables - the prefix drydock`_` should be added to these names
  * banhistory (_as of 0.3.0_)
  * bans
  * blotter
  * boards
  * capcodes
  * extra\_info
  * filters
  * imgs
  * replies
  * reports (_as of 0.3.0_)
  * threads
  * users

These values can be changed ahead of time in the configuration script.  Search for "default table names" and edit if needed.

It is suggested that drydock be installed to its own database, but it can play along with existing databases by simply defining the table prefix string during the configuration.

Please take great care if you are in a situation where you have tables with these names, as the installation script will **ERASE COMPLETELY** all information in these tables.

Therefore it is suggested that EVEN IF YOU ARE SURE that you will not lose any information, **PLEASE USE THE DATABASE PREFIX**.

The script will **NOT** erase all information in the database, only in the tables it uses.

# chmod #
The following files and directories must be writable on the installation script will fail.
  * drydock/
  * drydock/compd/
  * drydock/cache/
  * drydock/captchas/
  * drydock/images/
  * drydock/unlinked/
  * drydock/config.php
  * drydock/menu.php
  * drydock/linkbar.php
  * drydock/rss.xml
  * drydock/.htaccess
  * drydock/unlinked/.htaccess

If the install script cannot write to these files it will fail and give a list of which files are the problem and how to fix it.