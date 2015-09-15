# CAPCODE Settings #
### Setting capcodes ###
  * The first box should include the user's hashed tripcode.  This means the !RTV242.ddt value, not the #passphrase value.
  * The second box should contain valid HTML.  There is no requirement that you use any HTML tags, however.  Anything you put in this box will be displayed in place of the user's name and tripcode.
  * The last box is for notes.  This can be anything to who the tripcode belongs to, to the last date it was changed.

### Using CAPCODEs ###
For a user to use a CAPCODE, they must type CAPCODE#[normal tripcode](their.md).  This will trigger the replacement code and display the user's CAPCODE in place of their name/tripcode.


---


# Filter Settings #
### Setting filters ###
  * The first box should include the search text, what you want to replace.  Accepts [PCRE-style regexes](http://www.php.net/manual/en/pcre.pattern.php).
  * The second box should contain the replace value, whatever you want the seach value to be replaced with.
  * The last box is for notes.


---


# Housekeeping functions #
### Rebuilds ###
From time to time you may need to force a rebuild of a file.  There is no progress indicator, so generally once your browser stops loading, the job is done. For more information about the behavior of the blacklist, view RequiredLibraries.

### Database dumps ###
These will dump your database.  Please do not share these dumps without checking first to make sure that is a good idea.


---


# Recent Pics & Recent Posts #
### What is this? ###
Added to emulate futabalite from 4chan, ThornLight pulls the most recently posted images.  ThornQuasilight does a similar function, but will display the text and other information as well.