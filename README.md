This is boilerplate for a WordPress plugin. It is meant to be a starting point for plugin development.

## Structure
- `plugin-name.php` - The main plugin file. This is the file that WordPress will look for when activating the plugin.
- `admin/` - This directory contains all of the files that are included in the admin area of the plugin.
- `public/` - This directory contains all of the files that are included in the public-facing side of the site.
- `inc/` - Contain files that are included in both the admin area and the public-facing side of the site.
    - `controllers/` - Contains all of the files that are used to control the plugin.
    - `models/` - Contains all of the files that are used to interact with the database.
    - `views/` - Contains all of the files that are used to display the plugin.
    - `functions/` - Contains all of the files that are used to perform functions.
- `languages/` - Contains the .pot file and all of the translations for the plugin.