**Table of contents:**


# Introduction #

The aim of this page is to document the behavior of the profiles system at work for drydock imageboards.  The profiles system has a wide variety of features.  Not all of them may be used but some of them are strictly necessary for everyday moderation and administration activities.  The moderation and administration system is entirely account-based.  Each individual moderator and administrator should have his or her own individual account, so that each moderation and administration action can be properly logged and accounted for.

The underlying database structure can be found in the DatabaseInfo page, in the THusers\_table section.  Essentially every user has certain properties, with the most notable of these being the mod array, global moderator flag, global administrator flag, and userlevel.  The mod array contains a comma-separated list of board folder names, allowing a user to be moderator of only a few specific boards.  The global moderator flag grants a user the ability to moderate all boards, and the global administrator flag, unsurprisingly, allows a user to administrate the entire site.  The userlevel is only used in a few places at present, and is currently primarily used to prevent a user from modifying the permissions/access levels of another user with a higher access level.

It is up to the administrators to determine what kind of options should be set for the profiles system.  At a base level, the accounts themselves must be used for the aforementioned administrative/moderation duties.  However, administrators might desire to use individual users' profiles to actively maintain contact information for all staff members, and configuration options can be set in such a way to facilitate this.  Or, some administrators may want to emphasize a more social type of imageboard, and thus having registration open to non-staff members might help towards that end.

# Registration #

User registration, depending on the setting (see GlobalSettings for more information), can either be entirely closed, entirely open, or open but subject to administrator approval.  Regardless of this setting, however, administrators will always be able to add users through the administration panel.  Also depending on the settings, users who register or attempt to register may receive an email notifying them of their account status.  This email address is unique, and one may not register multiple accounts with a single email address.  Names containing certain words are banned through conventional registration.

# Login / Logout #

Logging in and logging out is straightforward, as a link to this action (depending on if the user is logged in or not) is displayed as part of the menu.  When a user logs in, their cookies are modified to store their supposed username and login ID.  This username and login ID information is periodically checked - and, if found invalid, results in the user's session data being reset, effectively logging out the user.  Logging out is another method by which this session data is cleared.

# Member list #

The member list, depending on the setting (see GlobalSettings for more information), can either be entirely public, only visible to moderators and administrators, or only visible to registered users.  This setting also applies to the visibility of individual user profiles (see below).

# Individual profiles #

TODO

# Permissions #

TODO