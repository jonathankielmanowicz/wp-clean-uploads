=== Upload Directory Cleaner ===
Contributors: jonathankielmanowicz
Tags: uploads, media, images, files, delete, clean
Requires at least: 4.6
Tested up to: 4.7
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin is designed to clean your uploads folder. Use it when the files in your Media section don\'t match that of your uploads directory.

== Description ==
What exactly does it do?

Simply, this plugin searches your WordPress \"postmeta\" table in your database, compares the files to that of your uploads directory, and permanently deletes the files from your uploads directory (so be sure you have all of your files backed up if you are afraid to lose them).

How do you use it?

Install the plugin and activate it (in your plugins section of WordPress). Then, a new section will appear in your Admin lefthand sidebar on WordPress called \"Clean Media.\" Click the tab, then you\'ll see two big ol\' buttons that say \"DELETE SELECTED\" and \"DELETE ALL.\" Either select the files you\'d like to delete and click the blue \"Delete Selected\" button, or just click the red \"Delete All\" button to get rid of them all!

NOTE: Be sure that you would like to delete the files you have selected. Once you click the button, they are gone.

Why?

While creating a site on a specific web hosting server, I discovered a bug in their \"One-Click-Staging\" which resulted in images that were deleted in staging remaining in the production uploads folder when pushed. This is an incredibly specific case, but after searching online for solutions, I’ve found plenty of other cases where this would have come in handy.

Capabilities:
- delete all files that exist in uploads directory but not in media library
- delete a select few files that exist in uploads directory but not in media library

== Installation ==
1. Upload the theme to your blog
2. Activate it in the \"Plugins\" section of your admin page
3. A new section will be added to the left navigation menu titled \"Clean Media\" (it\'ll be ready for use immediately)