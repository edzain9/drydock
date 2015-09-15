drydock is an image board script written in PHP and based on the now defunct Thorn project.

It currently supports MySQL and SQLite (as of the 0.3.1 release) and has functionality that is not present in most other image board scripts.

Some of drydock's features include:
  * Use of the Smarty template engine for ease of redesign and plugin system (from Thorn)
  * Modular database setup, allowing new database types to be supported with relative ease
  * A profile system (with optional open registration functionality)
  * Account-based administration/moderation (which allows for accountability and specific enumeration of abilities)
  * Robust moderator/admin functionality, which includes a logging system
  * Quick and easy board set up
  * Many per-board options allow wide range of possibilities (including per-board forced anonymous posting)
  * Support for board-specific formatting
  * Thornlight and ThornQuasilight tools (developed for use on 573chan)
  * Supports SVG images (requires PEAR) - a first for image boards
  * Supports Flash files
  * Support for various Flash based movie player embed tags (like YouTube, Google Video, MySpace Video)
  * Support for customized capcodes ( ## Admin, ## Moderator, ## Whatever you want )
  * Wordfilters and other plugins
  * Blotter functionality for global news
  * Board-unique post numbers with massive backend rewrites from Thorn (no more ugly URLs)
  * Spam blacklisting and other anti-spam functionality
  * RSS fed news page (generates from specified news board)
  * Working quotereply (>>573)
  * Metadata parsing for images (and Flash animation with PEAR)
  * Manager posts
  * Random banner script
