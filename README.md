#WP Clean Uploads

This plugin is designed to clean out your uploads folder on WordPress.

### What exactly does it do?
Simply, this plugin searches your WordPress "postmeta" table in your database, compares the files to that of your uploads directory, and **permanently deletes** the files from your uploads directory (so be sure you have all of your files backed up).

### How do you use it?
Install the plugin and activate it (in your plugins section of WordPress). Then, a new section will appear in your Admin lefthand sidebar on WordPress called "**Clean Media**." Click the tab, then you'll see two big ol' buttons that say "**DELETE SELECTED**" and "**DELETE ALL**." Either selected the files you'd like to delete and click the blue "Delete Selected" button, or just click the red "Delete All" button to get rid of them all!

### Why?
While creating a site on Media Temple, I discovered a bug in their "One-Click-Staging" which resulted in images that were deleted in staging remaining in the production uploads folder when pushed. This is an incredibly specific case, but I'm sure there are other scenarios that it may come in handy for. Also, feel free to fork and modify it to suit your project.