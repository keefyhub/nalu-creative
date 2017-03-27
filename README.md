# Blank Wordpress Sites

## Prerequisites
- Must have `npm`, `mysql`, `wp-cli`, and `php` installed, recommend `php7`
- Recommend installing `homebrew` for managing the packages
- Install `GULP` (must be global) using `npm i gulp -g`

## Initial Setup
- Run `mysql.server start`
- Using `Sequel Pro` (or another MySQL db manager), create a new table and a new user then given it full permissions (or use `root`). Flush privileges after doing this.
- Run `wp core download --locale="en_GB"` or download Wordpress
- `cd` to theme folder and remove default themes (`rm -rf twenty*`)
- `git clone git@github.com:DesignImage/blank-theme.git && cd blank-theme` in to `theme` folder
- Install dependencies from `package.json` using `npm i`

## Running the Project
- Start the server using `npm run start` (will be served on `http://0.0.0.0:8000`)
- Compile images/styles/js using `npm run build` or `npm run watch` for developing

## Required Plugins
- Advanced Custom Fields Pro (register licence from ACF account for updates)
- Contact Form 7

## Recommended Plugins
- WP Smush
- Regenerate Thumbnails
- Velvet Blues Update URLs (only required on Staging or Live sites)
- Yoast SEO (free version)
- iThemes Security (change wp-admin url, everything else is automatic)
