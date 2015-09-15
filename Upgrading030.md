# Why upgrade? #
In addition to a few security features being added or tweaked, 0.3.0 adds the following features:
  * Smarty cache functionality restored - This means faster load times and reduced database calls
  * Moderater functionality improved
  * New template stuff!  Per board picture settings, improved appearance of anonbbs template set, and more
  * Administrative log viewer (so now you can look at those logs you didn't know it was making)
  * Plus more

# Prep #
Before upgrading, it is STRONGLY suggested that you enable the email functions related to profiles.
The way passwords are encrypted in the database has been changed so after upgrading, passwords will no longer be valid.  While this is an inconvenience, this will not be required in the future.

If your server cannot send emails (or for some reason you don't want to enable this feature) you can manually hash your password with the salt and then copy the hashed password back into the users table.

# The steps to upgrading #
  1. BACKUP YOUR DATABASE AND CONFIG.PHP FILE
  1. Define THsecret\_salt in config.php as a 16 digit integer
  1. Either enable password emailing or be prepared to manually generate your new password
  1. Ensure that you have a working email address associated with your account
  1. Paste the following code block into a php file on your server that can be executed
```
<?php
include("common.php");
//Increase board folder to 50 chars from 5 chars
mysql_query("ALTER TABLE `".THboards_table."` CHANGE `folder` `folder` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL");

//Add new board stuff
mysql_query("ALTER TABLE `".THboards_table."` ADD `maxres` INT( 5 ) NOT NULL DEFAULT '3000' AFTER `maxfilesize`");
mysql_query("ALTER TABLE `".THboards_table."` ADD `thumbres` INT( 5 ) NOT NULL DEFAULT '150' AFTER `maxres`");
mysql_query("ALTER TABLE `".THboards_table."` ADD `pixperpost` INT( 2 ) NOT NULL DEFAULT '8' AFTER `thumbres`");
mysql_query("ALTER TABLE `".THboards_table."` ADD `boardlayout` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'drydock-image' AFTER `filter`");

//Clean up
mysql_query("ALTER TABLE `".THreplies_table."` DROP `futrip`");
mysql_query("ALTER TABLE `".THthreads_table."` DROP `futrip`");
if(THspamlist_table) { mysql_query("DROP TABLE `".THspamlist_table."`"); }
?>
```
  1. Execute this script and remove the file.
  1. Download and unpack the drydock archive file, overwriting all files.
  1. Remove the configure.php file.
  1. In profiles.php, request a new password sent to you.
  1. Log on with new password
  1. Rebuild in housekeeping
  1. ?????
  1. PROFIT!
