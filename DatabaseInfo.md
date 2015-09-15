**Table of contents:**


The aim of this page is to document the creation and administration of the SQL database.


---


# THbanhistory\_table #
This is a new table that contains all expired bans, thus making it easier to verify the history for a particular IP or IP range.  It works a lot like THbans\_table. **_Added for drydock 0.3.1_**

| Field name | MySQL declaration | SQLite declaration | Description |
|:-----------|:------------------|:-------------------|:------------|
| id         | `` `id` int unsigned NOT NULL auto_increment `` | ` id INTEGER PRIMARY KEY ` | Now necessary just because the _combination_ of octet fields forms a unique identifier, as opposed to a single IP |
| ip\_octet1 | `` `ip_octet1` int NOT NULL `` | ` ip_octet1 INT `  | The first octet (i.e. ???.xxx.xxx.xxx) of the banned IP address. |
| ip\_octet2 | `` `ip_octet2` int NOT NULL `` | ` ip_octet2 INT `  | The second octet (i.e. xxx.???.xxx.xxx) of the banned IP address. |
| ip\_octet3 | `` `ip_octet3` int NOT NULL `` | ` ip_octet3 INT `  | The third octet (i.e. xxx.xxx.???.xxx) of the banned IP address.  Set to -1 to ban the class C subnet. |
| ip\_octet4 | `` `ip_octet4` int NOT NULL `` | ` ip_octet4 INT `  | The fourth octet (i.e. xxx.xxx.xxx.???) of the banned IP address.  Set to -1 to ban the subnet, which would be the equivalent of the subnet bit in the old THbans\_table. |
| publicreason | `` `publicreason` text  NOT NULL `` | ` publicreason TEXT ` | (User was banned for this reason) |
| privatereason | `` `privatereason` text  NOT NULL `` | ` privatereason TEXT ` | Seen only by the person banned, used for sending notes to the person banned |
| adminreason | `` `adminreason` text  NOT NULL `` | ` adminreason TEXT ` | Displayed in the admin ban page, can be used for sending notes on the ban to other admins |
| postdata   | `` `postdata` longtext  NOT NULL `` | ` postdata LONGTEXT ` | The contents of the post |
| duration   | `` `duration` int(11) NOT NULL default '-1' `` | ` duration INT(11) ` | Duration of ban in hours.  Default -1 is permaban, 0 is just a warning that will expire on viewing |
| bantime    | `` `bantime` int(11) unsigned NOT NULL `` | ` bantime INT(11)  ` | The time the ban was set |
| bannedby   | `` `bannedby` varchar(100)  NOT NULL `` | ` bannedby VARCHAR(100) ` | Who did the banning? |
| unbaninfo  | `` `unbaninfo` text  NOT NULL `` | ` unbaninfo TEXT ` | Used to explain why this ban is expired (either naturally, or because an admin manually removed it- in which case, they should probably include a rationale). |

| Additional MySQL declarations |
|:------------------------------|
| `` PRIMARY KEY  (`id`) ``     |


---


# THbans\_table #
This is the new version of the bans table, created such that subnet banning is easier. **_Added for drydock 0.3.1_**

| Field name | MySQL declaration | SQLite declaration | Description |
|:-----------|:------------------|:-------------------|:------------|
| id         | `` `id` int unsigned NOT NULL auto_increment `` | ` id INTEGER PRIMARY KEY ` | Now necessary just because the _combination_ of octet fields forms a unique identifier, as opposed to a single IP |
| ip\_octet1 | `` `ip_octet1` int NOT NULL `` | ` ip_octet1 INT `  | The first octet (i.e. ???.xxx.xxx.xxx) of the banned IP address. |
| ip\_octet2 | `` `ip_octet2` int NOT NULL `` | ` ip_octet2 INT `  | The second octet (i.e. xxx.???.xxx.xxx) of the banned IP address. |
| ip\_octet3 | `` `ip_octet3` int NOT NULL `` | ` ip_octet3 INT `  | The third octet (i.e. xxx.xxx.???.xxx) of the banned IP address.  Set to -1 to ban the class C subnet. |
| ip\_octet4 | `` `ip_octet4` int NOT NULL `` | ` ip_octet4 INT `  | The fourth octet (i.e. xxx.xxx.xxx.???) of the banned IP address.  Set to -1 to ban the subnet, which would be the equivalent of the subnet bit in the old THbans\_table. |
| publicreason | `` `publicreason` text  NOT NULL `` | ` publicreason TEXT ` | (User was banned for this reason) |
| privatereason | `` `privatereason` text  NOT NULL `` | ` privatereason TEXT ` | Seen only by the person banned, used for sending notes to the person banned |
| adminreason | `` `adminreason` text  NOT NULL `` | ` adminreason TEXT ` | Displayed in the admin ban page, can be used for sending notes on the ban to other admins |
| postdata   | `` `postdata` longtext  NOT NULL `` | ` postdata LONGTEXT ` | The contents of the post |
| duration   | `` `duration` int(11) NOT NULL default '-1' `` | ` duration INT(11) ` | Duration of ban in hours.  Default -1 is permaban, 0 is just a warning that will expire on viewing |
| bantime    | `` `bantime` int(11) unsigned NOT NULL `` | ` bantime INT(11)  ` | The time the ban was set |
| bannedby   | `` `bannedby` varchar(100)  NOT NULL `` | ` bannedby VARCHAR(100) ` | Who did the banning? |

| Additional MySQL declarations |
|:------------------------------|
| `` PRIMARY KEY  (`id`) ``     |


---


# THblotter\_table #
The update blotter (viewable on board view in most templates under the post block)
| Field name | MySQL declaration | SQLite declaration | Description |
|:-----------|:------------------|:-------------------|:------------|
| id         | `` `id` mediumint(8) unsigned NOT NULL auto_increment `` | ` id INTEGER PRIMARY KEY ` | ID number for tracking |
| time       | `` `time` int(11) unsigned NOT NULL `` | ` time INT(11) `   | Time updated |
| entry      | `` `entry` text collate utf8_unicode_ci NOT NULL `` | ` entry TEXT `     | The text of the blotter entry |
| board      | `` `board` smallint(5) unsigned NOT NULL `` | ` board SMALLINT(5)  ` | Which boards is it available on (0 for all) |

|Additional MySQL declarations|
|:----------------------------|
|`` PRIMARY KEY  (`id`) ``    |


---


# THboards\_table #
The boards we have set up
| Field name | MySQL declaration | SQLite declaration | Description |
|:-----------|:------------------|:-------------------|:------------|
| id         | `` `id` smallint(5) unsigned NOT NULL auto_increment `` | ` id INTEGER PRIMARY KEY ` | Board ID for tracking |
| globalid   | `` `globalid` int unsigned NOT NULL default '0' `` | ` globalid INT `   | Current "top post" value |
| name       | `` `name` text  NOT NULL `` | ` name TEXT `      | The title of the board ("Anime/Random") |
| folder     | `` `folder` varchar(50)  NOT NULL `` | ` folder VARCHAR(50) ` | The folder ("b" for the board "/b/") |
| about      | `` `about` text  NOT NULL `` | ` about TEXT `     | A description of the board ("that's why they call it /b/ xD") |
| rules      | `` `rules` text  NOT NULL `` | ` rules TEXT `     | Specific rules ("don't post here") |
| perpg      | `` `perpg` tinyint(3) unsigned NOT NULL default '20' `` | ` perpg TINYINT(3) ` | Per-page display limit.  Default 20 threads per page |
| perth      | `` `perth` tinyint(3) unsigned NOT NULL default '4' `` | ` perth TINYINT(3) ` | Replies visible per thread on board view.  Default shows top post and 4 recent replies |
| hidden     | `` `hidden` tinyint(1) unsigned NOT NULL default '0' `` | ` hidden TINYINT(1) ` | Is the board hidden from the board list? |
| allowedformats | `` `allowedformats` tinyint(3) unsigned NOT NULL default '7' `` | ` allowedformats TINYINT(3) ` | Which file formats are allowed? |
| forced\_anon | `` `forced_anon` tinyint(1) NOT NULL default '0' `` | ` forced_anon TINYINT(1) ` | Is forced\_anon turned on? |
| maxfilesize | `` `maxfilesize` int(11) unsigned NOT NULL default '2097152' `` | ` maxfilesize INT(11) ` | Max file size in bytes.  Default 2MB |
| maxres     | `` `maxres` int(5) unsigned NOT NULL default '3000' `` | ` maxres INT(5) `  | Maximum resolution in pixels |
| thumbres   | `` `thumbres` int(5) unsigned NOT NULL default '150' `` | ` thumbres INT(5) ` | Thumb resolution (matches x or y or both) |
| pixperpost | `` `pixperpost` int(2) unsigned NOT NULL default '8' `` | ` pixperpost INT(2) ` | Pictures allowed per posting.  Default is 8.  Should work at any value (untested past 16) |
| allowvids  | `` `allowvids` tinyint(1) unsigned NOT NULL default '0' `` | ` allowvids TINYINT(1) ` | Allow youtube/myspace etc video posts |
| customcss  | `` `customcss` tinyint(1) unsigned NOT NULL default '0' `` | ` customcss TINYINT(1) ` | A custom css can be defined, named the same as the board folder.css |
| filter     | `` `filter` tinyint(1) unsigned NOT NULL default '1' `` | ` filter TINYINT(1) ` | Apply wordfilters? |
| boardlayout | `` `boardlayout` char(255) NOT NULL default 'drydock-image' `` | ` boardlayout VARCHAR(255) ` | Which board template should we use?  Should match folder name in tpl/ |
| requireregistration | `` `requireregistration` tinyint(1) NOT NULL default '0' `` | ` requireregistration TINYINT(1) ` | Does the board require a registered profile?  Useful for admin/mod boards or sites with registration |
| tlock      | `` `tlock` tinyint(1) unsigned NOT NULL default '0' `` | ` tlock TINYINT(1) ` | Allow new threads? |
| rlock      | `` `rlock` tinyint(1) unsigned NOT NULL default '0' `` | ` rlock TINYINT(1) ` | Allow new replies? |
| tpix       | `` `tpix` tinyint(1) unsigned NOT NULL default '0' `` | ` tpix TINYINT(1) ` | Require new threads to have pictures? |
| rpix       | `` `rpix` tinyint(1) unsigned NOT NULL default '0' `` | ` rpix TINYINT(1) ` | Allow pictures in replies? |
| tmax       | `` `tmax` smallint(5) unsigned NOT NULL default '100' `` | ` tmax SMALLINT(5) ` | Max number of threads |
| lasttime   | `` `lasttime` int(11) unsigned NOT NULL default '0' `` | ` lasttime INT(11)  ` | Last post timestamp |

|Additional MySQL declarations|
|:----------------------------|
|`` PRIMARY KEY  (`id`) ``    |


---


# THcapcodes\_table #
Capcodes
| Field name | MySQL declaration | SQLite declaration | Description |
|:-----------|:------------------|:-------------------|:------------|
| id         | `` `id` smallint(5) unsigned NOT NULL auto_increment `` | ` id INTEGER PRIMARY KEY ` | ID number for db tracking |
| capcodefrom | `` `capcodefrom` varchar(11)  NOT NULL `` | ` capcodefrom VARCHAR(11) ` | The hashed tripcode  |
| capcodeto  | `` `capcodeto` text  NOT NULL `` | ` capcodeto TEXT ` | What do we change it to? |
| notes      | `` `notes` text  NOT NULL `` | ` notes TEXT  `    | Notes for admin page |

|Additional MySQL declarations|
|:----------------------------|
|`` PRIMARY KEY  (`id`) ``    |


---


# THextrainfo\_table #
EXIF and metadata info
| Field name | MySQL declaration | SQLite declaration | Description |
|:-----------|:------------------|:-------------------|:------------|
| id         | `` `id` int unsigned NOT NULL auto_increment `` | ` id INTEGER PRIMARY KEY ` |  ID for tracking |
| extra\_info | `` `extra_info` longtext  NOT NULL `` | ` extra_info LONGTEXT  ` | Contents of exif data (or other metadata) |

|Additional MySQL declarations|
|:----------------------------|
|`` PRIMARY KEY  (`id`) ``    |


---


# THfilters\_table #
Wordfilters
| Field name | MySQL declaration | SQLite declaration | Description |
|:-----------|:------------------|:-------------------|:------------|
| id         | `` `id` int unsigned NOT NULL auto_increment `` | ` id INTEGER PRIMARY KEY ` | ID for tracking |
| filterfrom | `` `filterfrom` text collate utf8_unicode_ci NOT NULL `` | ` filterfrom TEXT ` | Word/regex we filter from |
| filterto   | `` `filterto` text collate utf8_unicode_ci NOT NULL `` | ` filterto TEXT `  | What do we change it to |
| notes      | `` `notes` text collate utf8_unicode_ci NOT NULL `` | ` notes TEXT  `    | Comments    |

|Additional MySQL declarations|
|:----------------------------|
|`` PRIMARY KEY  (`id`) ``    |


---


# THimages\_table #
Posted images
| Field name | MySQL declaration | SQLite declaration | Description |
|:-----------|:------------------|:-------------------|:------------|
| id         | `` `id` int unsigned NOT NULL `` | ` id INT  `        | ID for finding them to pair with posts |
| hash       | `` `hash` varchar(40) NOT NULL default '' `` | ` hash VARCHAR(40) ` | Hashed value of the image |
| name       | `` `name` tinyblob NOT NULL `` | ` name TINYBLOB `  | Filename    |
| width      | `` `width` smallint(5) unsigned NOT NULL default '0' `` | ` width SMALLINT(5)  ` | Image width |
| height     | `` `height` smallint(5) unsigned NOT NULL default '0' `` | ` height SMALLINT(5)  ` | Image height  |
| tname      | `` `tname` tinyblob NOT NULL `` | ` tname TINYTBLOB ` | Thumb filename |
| twidth     | `` `twidth` smallint(5) unsigned NOT NULL default '0' `` | ` twidth SMALLINT(5)  ` | Thumb width |
| theight    | `` `theight` smallint(5) unsigned NOT NULL default '0' `` | ` theight SMALLINT(5)  ` | Thumb height |
| fsize      | `` `fsize` smallint(5) unsigned NOT NULL default '0' `` | ` fsize SMALLINT(5)  ` | File size   |
| anim       | `` `anim` tinyint(1) unsigned default '0' `` | ` anim TINYINT(1)  ` | Animated flag  |
| extra\_info | `` `extra_info` int(11) unsigned NOT NULL default '0' `` | ` extrainfo INT(11) `  | EXIF ID (Matches ID in extra\_info table) |

|Additional MySQL declarations|
|:----------------------------|
|`` PRIMARY KEY  (`id`) ``    |


---


# THpages\_table #
Static pages
| Field name | MySQL declaration | SQLite declaration | Description |
|:-----------|:------------------|:-------------------|:------------|
| id         | `` `id` int unsigned NOT NULL auto_increment `` | ` id INTEGER PRIMARY KEY ` | ID for tracking |
| name       | `` `name` varchar(50) NOT NULL `` | ` name VARCHAR(50) ` | The unique name of the page |
| title      | `` `title` TEXT NOT NULL `` | ` title TEXT `     | The title to display |
| content    | `` `content` LONGTEXT NOT NULL `` | ` content LONGTEXT ` | The content of the page  |
| publish    | `` `publish` smallint(5) unsigned NOT NULL default '0' `` | ` publish SMALLINT(5) ` | Publish status (0 for admin-viewable only, 1 for moderator-viewable only, 2 for registered-user viewable only, 3 for publically viewable) |

|Additional MySQL declarations|
|:----------------------------|
|`` PRIMARY KEY  (`id`) ``    |


---


# THreplies\_table #
Replies to threads
| Field name | MySQL declaration | SQLite declaration | Description |
|:-----------|:------------------|:-------------------|:------------|
| id         | `` `id` int unsigned NOT NULL auto_increment `` | ` id INTEGER PRIMARY KEY ` | ID for tracking |
| globalid   | `` `globalid` int unsigned NOT NULL default '0' `` | ` globalid INT `   | The publically displayed ID (board-specific, so not unique) |
| board      | `` `board` smallint(5) unsigned NOT NULL default '0' `` | ` board SMALLINT(5) ` | What board it is on (ID) |
| thread     | `` `thread` int unsigned NOT NULL default '0' `` | ` thread INT `     | What thread does it apply to (corresponds with a thread's ID) |
| title      | `` `title` text `` | ` title TEXT `     | Title of the post |
| name       | `` `name` text  NOT NULL `` | ` name TEXT `      | Name associated with the post |
| trip       | `` `trip` varchar(11) NOT NULL default '' `` | ` trip VARCHAR(11) ` | Hash of tripcode used |
| body       | `` `body` longtext  NOT NULL `` | ` body LONGTEXT `  | Post content |
| time       | `` `time` int(11) unsigned NOT NULL default '0' `` | ` time INT(11) `   | When post was made |
| ip         | `` `ip` int(11) NOT NULL default '0' `` | ` ip INT(11) `     | Poster's IP |
| pin        | `` `pin` tinyint(1) NOT NULL `` | ` pin TINYINT(1) ` | Has this been stickied? (should be irrelevant) |
| lawk       | `` `lawk` tinyint(1) NOT NULL `` |` lawk TINYINT(1) `  | Has this been locked? (should be irrelevant) |
| bump       | `` `bump` tinyint(1) unsigned NOT NULL default '1' `` | ` bump INT(11) `   | When thread was last bumped (should be irrelevant) |
| imgidx     | `` `imgidx` mediumint(8) unsigned NOT NULL default '0' `` | ` imgidx MEDIUMINT(8) ` | Matches image ID in images table |
| visible    | `` `visible` tinyint(1) NOT NULL default '1' `` | ` visible TINYINT(1) ` | Is this post visible? |
| unvisibletime | `` `unvisibletime` int(11) NOT NULL default '0' `` | ` unvisibletime INT(11) ` | When post was hidden |
| permasage  | `` `permasage` tinyint(1) unsigned NOT NULL default '0' `` | ` permasage TINYINT(1) ` | Has this been permasaged? (should be irrelevant) |
| link       | `` `link` text  NOT NULL `` | ` link TEXT  `     | The link field (example: "sage") |
| password   | ```password` varchar(32) default NULL`` | `password VARCHAR(32)` | The password associated with this post, used for later deletion as requested, Wakaba-style (null for legacy posts). **_Added for drydock 0.3.1_** |

| Additional MySQL declarations |
|:------------------------------|
| `` PRIMARY KEY  (`id`) ``     |


---


# THreports\_table #
This is a new table that contains user-generated reports. **_Added for drydock 0.3.1_**

| Field name | MySQL declaration | SQLite declaration | Description |
|:-----------|:------------------|:-------------------|:------------|
| id         | `` `id` int unsigned NOT NULL auto_increment `` | ` id INTEGER PRIMARY KEY ` | ID number for tracking |
| ip         | `` `ip` int(11) NOT NULL default '0' `` | ` ip INT(11) `     | IP of reporter |
| time       | `` `time` int(11) unsigned NOT NULL `` | ` time INT(11)  `  | Timestamp of the report |
| postid     | `` `postid` int unsigned NOT NULL default '0' `` | ` postid INT `     | The (non-unique) ID of the post being reported  |
| board      | `` `board` smallint(5) unsigned NOT NULL default '0' `` | ` board SMALLINT(5) ` | The ID of the board for the report |
| category   | `` `category` tinyint(1) unsigned NOT NULL default '0' `` | ` category TINYINT(1) ` | The nature of the report (currently unused, for future expansion) |
| status     | `` `status` tinyint(1) unsigned NOT NULL default '0' `` | ` status TINYINT(1) ` | The status of this report (0 = unreviewed, 1 = reviewed and considered "valid", 2 = reviewed and considered invalid, 3 = reviewed but neither outright valid/invalid) |

| Additional MySQL declarations |
|:------------------------------|
| `` PRIMARY KEY  (`id`) ``     |


---


# THthreads\_table #
Threads table
| Field name | MySQL declaration | SQLite declaration | Description |
|:-----------|:------------------|:-------------------|:------------|
| id         | `` `id` int unsigned NOT NULL auto_increment `` | ` id INTEGER PRIMARY KEY ` | ID for tracking |
| globalid   | `` `globalid` int unsigned NOT NULL default '0' `` | ` globalid INT `   | The publically displayed ID (board-specific, so not unique) |
| board      | `` `board` smallint(5) unsigned NOT NULL default '0' `` | ` board SMALLINT(5) ` | What board it is on (ID) |
| thread     | `` `thread` int unsigned NOT NULL default '0' `` | ` thread INT `     | What thread does it apply to (this should be 0, it's to preserve parallel structure with the replies table) |
| title      | `` `title` text `` | ` title TEXT `     | Title of the post |
| name       | `` `name` text  NOT NULL `` | ` name TEXT `      | Name associated with the post |
| trip       | `` `trip` varchar(11) NOT NULL default '' `` | ` trip VARCHAR(11) ` | Hash of tripcode used |
| body       | `` `body` longtext  NOT NULL `` | ` body LONGTEXT `  | Post content |
| time       | `` `time` int(11) unsigned NOT NULL default '0' `` | ` time INT(11) `   | When thread was posted |
| ip         | `` `ip` int(11) NOT NULL default '0' `` | ` ip INT(11) `     | Poster's IP |
| pin        | `` `pin` tinyint(1) NOT NULL `` | ` pin TINYINT(1) ` | Has this been stickied? |
| lawk       | `` `lawk` tinyint(1) NOT NULL `` |` lawk TINYINT(1) `  | Has this been locked? |
| bump       | `` `bump` tinyint(1) unsigned NOT NULL default '1' `` | ` bump INT(11) `   | When thread was last bumped |
| imgidx     | `` `imgidx` mediumint(8) unsigned NOT NULL default '0' `` | ` imgidx MEDIUMINT(8) ` | Matches image ID in images table |
| visible    | `` `visible` tinyint(1) NOT NULL default '1' `` | ` visible TINYINT(1) ` | Is this post visible? |
| unvisibletime | `` `unvisibletime` int(11) NOT NULL default '0' `` | ` unvisibletime INT(11) ` | When post was hidden |
| permasage  | `` `permasage` tinyint(1) unsigned NOT NULL default '0' `` | ` permasage TINYINT(1) ` | Has this been permasaged? |
| link       | `` `link` text  NOT NULL `` | ` link TEXT  `     | The link field (example: "sage") |
| password   | ```password` varchar(32) default NULL`` | ` password VARCHAR(32)` | The password associated with this post, used for later deletion as requested, Wakaba-style (null for legacy posts). **_Added for drydock 0.3.1_** |

| Additional MySQL declarations |
|:------------------------------|
| `` PRIMARY KEY  (`id`) ``     |


---


# THusers\_table #
Registered (or unregistered, as the case may be) users
| Field name | MySQL declaration | SQLite declaration | Description |
|:-----------|:------------------|:-------------------|:------------|
| username   | `` `username` varchar(30) NOT NULL default '' `` | ` username VARCHAR(30) PRIMARY KEY ` | Username    |
| passsword  | `` `password` varchar(32) default NULL `` | ` password VARCHAR(32) ` | Password (after MD5 hashing, utilizing the secret salt) |
| userid     | `` `userid` varchar(32) default NULL `` | ` userid VARCHAR(32) ` | 32-char user ID (unique, updated upon userlogins) |
| userlevel  | `` `userlevel` tinyint(1) unsigned NOT NULL default '1' `` | ` userlevel TINYINT(1)  ` | Userlevel (for future userlevels - it is envisioned that admin status will be 9)  |
| email      | `` `email` varchar(50) default NULL `` | ` email VARCHAR(50) ` | Email address |
| mod\_array | `` `mod_array` text `` | ` mod_array TEXT ` | Where can they mod? **_Modified for drydock 0.3.1_** |
| mod\_global | `` `mod_global` tinyint(1) unsigned NOT NULL default '0' `` | ` mod_global TINYINT(1)  ` | Global moderator? |
| mod\_admin | `` `mod_admin` tinyint(1) unsigned NOT NULL default '0' `` | ` mod_admin TINYINT(1)  ` | Global administrator? |
| timestamp  | `` `timestamp` int(11) unsigned NOT NULL default '0' `` | ` timestamp INT(11)  ` | Timestamp of last login |
| age        | `` `age` tinyint(3)  default NULL `` | ` age VARCHAR(3) ` | User's age  |
| gender     | `` `gender` varchar(1)  default NULL `` | ` gender VARCHAR(1) ` | User's gender |
| location   | `` `location` text  `` | ` location TEXT `  | User's location |
| contact    | `` `contact` longtext  `` | ` contact LONGTEXT ` | Other contact info |
| description | `` `description` longtext  `` | ` description LONGTEXT ` | Whatever the user wants to say about him/her/itself |
| capcode    | `` `capcode` varchar(11)  default NULL `` | ` capcode VARCHAR(11) ` | If the user has been granted a capcode, this is their hash for it (this corresponds with a capcodefrom entry in the capcodes table) |
| has\_picture | `` `has_picture` varchar(4)  default NULL `` | ` has_picture VARCHAR(4) ` | Picture is in images/profiles and matches the filename pattern username.ext - this field holds ext (jpg/png/etc) |
| approved   | `` `approved` tinyint(1) NOT NULL default '0' `` | ` approved TINYINT(1) ` | Approved user? Set to 0 for unapproved, 1 for approved, and -1 for locked out (good for keeping already-used emails in the database without giving the corresponding users active status)  |
| pic\_pending | `` `pic_pending` varchar(4)  default NULL `` | ` pic_pending VARCHAR(4) ` | Has a pending picture, format is same as has\_picture |
| proposed\_capcode | `` `proposed_capcode` text  default NULL `` | ` proposed_capcode TEXT  ` | The user has proposed this for their capcodeto value (if approved, the capcodeto corresponding with the row that has a capcodefrom value matching this user's capcode gets altered) |

|Additional MySQL declarations|
|:----------------------------|
|`` PRIMARY KEY  (`username`) ``|