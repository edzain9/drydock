

# Introduction #

This wiki page is intended to give a broad overview of the many options made available to administrators and moderators of a drydock-based imageboard.

# Global Settings (admin.php) #

From this page, administrators are capable of viewing and modifying various basic settings related to the everyday functionality of a drydock imageboard.  More information can be found in the GlobalSettings wiki page.

# Board Setup (admin.php) #

From this page, administrators are capable of adding new boards, modifying the settings of existing boards, and even deleting existing boards.  More information can be found in the BoardSettings wiki page.

# Blotter Posts (admin.php) #

From this page, administrators are capable of viewing, making, and modifying "blotter" posts, which are small blurbs of text which appear below the main posting form and above the contents of a thread or board.  These are useful for short news updates.

## Blotter Edit ##

This section lists all of the current blotter entries.  For each blotter entry, one may elect to delete it, alter the text of the blotter entry, or alter the board to which it was posted (or modify it to display for all boards).

## Blotter Add ##

This section allows an administrator to add a new blotter entry, which will be visible for the selected board (or all boards, if that option is selected).

# Static Pages (admin.php) #

From this page, administrators are capable of viewing, making, and modifying static pages, which are pages that may contain HTML (but not PHP) and are made entirely within the software.  Each page has a unique name.  For example, a given static page with the name "rules" and the title "Global Rules" would be accessible through the following URL: `misc.php?action=getpage&page=rules` and would display with the title "Global Rules".

## Static Pages List ##

This section contains a list of all static pages in existence.  As previously mentioned, each page has a unique name, by which it may be accessed through misc.php, a title, which does not have to be unique, and a visibility setting.  By default only administrators may view a static page.  However, one may configure a page to instead be viewable to global moderators and administrators only, registered users only, or everyone (i.e. public).  To edit or delete a static page, click the relevant link next to each page.

## Add Static Page ##

This section is the method by which new pages are created.  New pages must have a unique name, which is verified before the page is created.  By default, new pages have blank content and are only visible to administrators.

## Edit Static Page ##

This only displays if an administrator has elected to edit a single page.  The name of any static page may be changed, so long as it is unique.  The title, content, and visibility status of a single page may be changed as well.  The content is the text that will be displayed for the page.  It may contain HTML but not PHP.

# Bans (admin.php) #

This section allows administrators to view, add, and delete current bans.

## Ban list ##

This will display one of two things.  If no specific ban has been selected, abbreviated information for all current bans will be shown, with the option to delete that ban or view specific information about each ban.  If a specific ban has been selected, all information about that ban will be displayed, with all history affecting the banned IP included.  A rationale field is included so that administrators can explain why they are removing a particular ban or bans.

## Add New Ban ##

This section allows an administrator to add a new ban.  This is useful if an administrator notices a steady source of abuse from a particular IP or IP range.  The duration field is an integer - 0 for a warning, -1 for a permaban, or any other value for a duration in hours.

## Ban Lookup ##

This section allows an administrator to view specific ban information for a particular IP.  Note that if multiple active bans are affecting a particular IP, the administrator will be redirected to only one such ban.

# Capcodes (admin.php) #

Capcodes are a special tool for users to hide their traditional username and tripcode combinations.  Explanations are provided in the following sections.

## The CAPCODE system ##

For a user to use a CAPCODE, they must type `CAPCODE#normal tripcode`. This will trigger the replacement code and display the user's CAPCODE in place of their name/tripcode.   For example, given the user "Joe!QkO1sgFXdY" who wished to have the "Joe ## COOLER THAN COOL 28]" capcode for his tripcode of "#cool" would have "QkO1sgFXdY" (the hashed value of "#cool") in the capcode from field, with "Joe ## COOLER THAN COOL 28]" in the capcode to field.

## Capcodes list ##

This is a list of all current capcodes.  Through this, one may modify or delete existing entries as appropriate.  The capcode from field should contain the user's hashed tripcode.  The capcode to field should contain valid HTML and is what will be displayed in place of the traditional username/tripcode.  Notes fields for information about each capcode are provided, but are optional.

## Add New Capcode ##

This section allows an administrator to add a new capcode.  The fields are the same as previously mentioned.

# Filters (admin.php) #

This section allows administrators to add, modify, and delete wordfilters.  Wordfilters are only applied to boards which have it explicitly enabled (see BoardSettings for more information).

## Wordfilters list ##

This is a list of all current wordfilters.  Through this, one may modify or delete existing entries as appropriate.  The filter from field should be
the search text (whatever you want to replace) in [PCRE-style regex form](http://www.php.net/manual/en/pcre.pattern.php).  The filter to field is whatever you want to replace all matches of the search text with.  The last box is for notes, which are not required.

## Filter Creation ##

This section allows an administrator to add a new wordfilter.  The fields are the same as previously mentioned.

# Profile Admin (admin.php) #

This section allows an administrator to review pending registration, profile picture, and capcode requests, as well as manually add new users.

## Pending Registrations ##

Depending on the registration settings (in GlobalSettings), there may be pending registrations.  This section allows administrators to review pending registration requests and either approve or deny registrations.

## Pending Pictures ##

As part of the profiles system, users are allowed to upload a profile picture.  However, before a profile picture is publically displayed, it must first be reviewed and approved by an administrator.  This section allows administrators to review these pending requests.

## Pending Capcodes ##

As part of the profiles system, some users may have been granted a capcode permission.  Such users are allowed to update their own capcodes through the profile system, thus bypassing the need to ask an administrator to do it for them via the previously-mentioned Capcodes section.  However, such capcodes must still be manually approved by an administrator before they take effect.

## Manually Add User Account ##

Depending on the stringency of the registration settings, it may not be possible to add a user through conventional means.  Because of this fact, this section is provided for administrators to manually add users into the profiles system, which will bypass any existing approval process and automatically approve the user.

# Housekeeping (admin.php) #

This section is provided to perform miscellaneous functions related to the smooth and clean operation of a drydock imageboard.

## Rebuilds ##

From time to time an administrator may need to force a rebuild of a file.  There is no progress indicator, so generally once the browser stops loading, the job is done. For more information about the behavior of the spam blacklist, view RequiredLibraries.

## Database Dumps (may not appear, depending on the database selected) ##

These will dump the selected contents of a database.  Please do not share these dumps without checking first to make sure that is a good idea.

# Log Viewer (logviewer.php) #

Various significant actions, such as the addition, deletion, or modification of boards, moderation actions, or other such changes to the settings, are stored in various logs (available in the /unlinked/ subdirectory).  Individual logs may be viewed and paged through in this tool.

# Recent Pics (recentpics.php) #

This section allows administrators and moderators to view the most recent pictures that have been posted, in an attempt to quickly locate illegal/rulebreaking content.  These pictures are paged, and administrators and moderators may move back and forth between pages.  A (currently experimental) board filtering option is also provided.  A small form for each image is provided to allow quick moderation.

# Recent Posts (recentposts.php) #

This section allows administrators and moderators to view the most recent threads or replies that have been posted, in an attempt to quickly locate illegal/rulebreaking content.  These posts are paged, and administrators and moderators may move back and forth between pages.  A board filtering option is also provided.  A small form for each post is provided to allow quick moderation.  If a post has already been moderated, it will be noted as such.

# Reports (reports.php) #

This tool allows administrators and moderators to view the "top" reports.  Reports are first sorted by their average category ascending, so that reports with an average category of 1 (illegal content) will appear first.  The second criteria for sorting is the number of reporters descending, so that the more a post is reported the higher a priority it will have.  The final criteria for sorting is the time it was first reported, so that older items will be addressed first.  The reports page is stylistically very similar to the recent posts page, and the information displayed on both have much in common.

# Lookup Tools (lookups.php) #

These tools allow administrators and moderators to perform various lookup functions to aid in their moderation duties.

## Find post from image ##

This section will, given a full image URL (including domain and all), attempt to locate the post to which the image belongs and immediately redirect the user to it for easy moderation and the like.

## Look up history from IP ##

This section will look up the recent history associated with an IP.  This history includes:

  * Most recent posts (up to 10)
  * Most recently reviewed reports (up to 15)
  * Current bans affecting the IP (if any)
  * Ban history associated with the IP

This is intended to allow moderators to look at an IP's past history when evaluating what moderation actions to perform.

# Moderator Window (editpost.php) #

This section allows a moderator or administrator to perform a wide variety of actions related to a post.

Using this, moderators are able to:
  * Ban the poster
  * Hide the post
  * Sticky, lock, or permasage the post (only takes effect if it is the OP of a thread)

Administrators are able to do all of the prior actions plus:
  * Deleting the post
  * Deleting images in the post
  * Editing the contents of the post
  * Banning everyone who posted in a thread (only if the post in question is the OP of a thread)

An explanation of the different types of banning reasons:
<dl>
<dt>Admin reason<br>
<dd>The reason shown only in the bans section, not shown to the banned user</dd>
</dt>
<dt>Public reason<br>
<dd>The reason publically shown (appended to the post content)</dd>
</dt>
<dt>Private reason<br>
<dd>The reason shown only to administrators and the banned user</dd>
</dt>
</dl>
