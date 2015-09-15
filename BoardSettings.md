# Board Settings #
## Creating a new board ##

### Board name ###
Name of the board.  Example:  Cats, Random, Photography

### Board folder ###
The directory location of the board.  Example:  /c/, /b/, /photo/.  Maximum value of 50 characters.

### Board description ###
A brief summary of the board.  Example:  A board to post pictures of cats.

### Board rules ###
Per-board rules.  Appears as text under the posting block.  Example:  Please keep this board work safe and post pictures of cats enjoying a day in the sun.

## Editing an existing board ##
### Global thread index ###
Internal number for post tracking.  Probably not a good idea to edit this number lower than it is.  Raising it higher should not be an issue.  It is suggested that you lock posting on the board and save changes before editing this number so as to avoid duplicate post ids.  **Advanced users only**

### Threads per page ###
How many threads will show up on each page?  Default 20.

### Replies per thread ###
How many replies will be shown on the board view?  Does not change the maximum replies a thread can have, nor does it change the thread view.  This only changes the number displayed on board view.  Default 4.

### Hide from index/linkbar ###
Will mark a board as secret.  This is on by default when you create a new board to give you time to set it up before users post.  When you are finished making changes, it is suggested you uncheck this box.  Should be used for moderator/secret boards.

### forced\_anon ###
Disables use of names and subject fields.  Defaults to off.

### Allow embedded video ###
Allows the use of video embedding tags.

### Require registration ###
Require a user be logged in to a registered user account to view this board.  Should not be used in most cases, but is suggested for use on moderator boards.

### Use custom css ###
Allows you to override certain CSS settings.  With this enabled, place a .css file in the /tpl/ folder with a name corresponding with that of the folder (e.g. "rnd.css" would be for a board with a folder name of "rnd").

### Thread lock ###
Only admins/moderators can post new threads

### Reply lock ###
Only admins/moderators can reply to threads

### Images in threads/replies ###
Allowed setting allows images to be posted.  Not allowed will disable image posting.  Required will reject the post if an image is not included

### Max threads ###
Number of threads to allow on the board before older/less popular threads are deleted

### Max image size ###
Maximum file size in bytes.

### Allowed image formats ###
Certain file formats require extra libraries.  See RequiredLibraries for extra info.  It is suggested only advanced users use the raw edit box.

### Delete ###
Will permanently and completely delete the board from the database.