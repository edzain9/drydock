# Global Settings #

### Image thumbnail JPEG quality ###
All images are by default thumbnailed to JPEG.  This setting adjusts the quality of the thumbnail.  Default is 65%

### Don't allow upload of duplicate images ###
When enabled, this disallows the uploading of files with the same hash.  It is suggested you do not disable this.  Default is on (duplicates disabled).

### mod\_rewrite ###
Allows the use of "pretty" URLs.  Instead of drydock/drydock.php?b=board, drydock/board can be used instead.  Not supported by all webhosts.

### Default template set ###
Defines the template that newly created boards will use.  Templates can be changed after the boards have been created from the board settings page.

### Template Testing Mode ###
Bypasses cache functions for some things.  Slows down processing slightly as parts pages must be built each time they are accessed.

### Anti spam methods ###
  * CAPTCHA - Enables CAPTCHA.  Please use this only if your board is experiencing heavy spam as CAPTCHA discourages posting by forcing users to read a scrambled image.  Requires GD libraries.
  * Human test - Adds an extra text box in the postblock that attempts to outsmart most spam bots.

### Delete cache ###
If for some reason your cache file is messed up, or if you have made template changes with testing mode disabled, use this to clear the cache files.

### Time offset ###
If your webserver's time is not accurate or you would rather use a different timezone (GMT for example) you may adjust it here.  Default is 0 min.

### Date formatting string ###
Changes the way date strings are displayed throughout the script.  Default is %m/%d/%y(%a)%H:%M:%S, which appears as 07/14/07(Sat)05:23:53

### Site name ###
The name of the image board installation.  Please try to make this something other than (something)chan.

### News board/moderator board ###
Setting a board as newsboard causes it to be fed to the front page (if the news page script is installed.  Moderator board causes the selected board to be used for moderator discussion.  Defaults to none for both.

### Default text/name ###
Allows you to select what will display when a user does not enter text into the name field or text field.  Name will not display on a forced anonymous board.

### Path to PEAR ###
Location on your webserver that PEAR can be found.  See RequiredLibraries for more information.

### Use SVG functions ###
Allows the upload of SVG images.  See RequiredLibraries for more information.

### SVG behavior ###
Defines how SVG images will be handled- either thumbnailed by ImageMagick or rsvg (if properly configured), or a standard "This is an SVG" thumbnail will be used

### Use SWF metatag functions ###
By default, SWF files can be uploaded without issue.  The metatag functions are optional.  See RequiredLibraries for more information.

### Use cURL functions ###
Helps with spam black listing.  See RequiredLibraries for more information.

### Registration email ###
These settings are for profile registration.  There is no need to change them if you do not wish to use profiles for your users and only wish to use them for administrative purposes.