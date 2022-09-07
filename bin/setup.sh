#!/bin/bash
#
# Setup Development Site.
#
# Run script in docker via
# `docker-compose -f ./.docker/docker-compose.yml --env-file ./.docker/.env run wpcli bash ./bin/setup.sh`.

# Set WP Options
wp language core install en_GB --quiet
wp site switch-language en_GB --quiet
echo '✔ Installed and activated en_GB'

## General Settings.

### Empty Blog description.
wp option update blogdescription "" --quiet
echo '✔ Removed blog description'

### Membership: Anyone can register.
wp option update users_can_register "0" --quiet
echo '✔ Disabled user registration'

### New User Default Role.
wp option update default_role "subscriber" --quiet
echo '✔ Set default role to Subscriber'

### Timezone
wp option update timezone_string "Europe/London" --quiet
echo '✔ Set timezone to Europe/London'

### Date Format.
wp option update date_format "l j F Y" --quiet
echo '✔ Set the date format to be `l j F Y`'

### Time Format.
wp option update time_format "g:i a" --quiet
echo '✔ Set time format to be `g:i a`'

### Week Starts On
wp option update start_of_week "1" --quiet
echo '✔ Set the week to start on Monday'

## Discussion Settings.

### Default Post Settings
wp option update default_pingback_flag "" --quiet
wp option update default_ping_status "" --quiet
wp option update default_comment_status "" --quiet
echo '✔ Disabled Pingbacks and Comment status'

### Avatar Display
wp option update show_avatars "" --quiet
echo '✔ Disabled avatars'

## Media Settings

### Image sizes
wp option update thumbnail_size_w "480" --quiet
wp option update thumbnail_size_h "480" --quiet
wp option update thumbnail_crop "1" --quiet
wp option update medium_size_w "1024" --quiet
wp option update medium_size_h "1024" --quiet
wp option update large_size_w "2000" --quiet
wp option update large_size_h "2000" --quiet
echo '✔ Set default image sizes'

### Uploading Files
wp option update uploads_use_yearmonth_folders "1" --quiet
echo '✔ Set uploads to use yearmonth folders'

## Permalink Settings

### Common Settings
wp option update permalink_structure "/%category%/%postname%" --quiet
echo '✔ Set permalink structure to `/%category%/%postname%`'

## Posts
wp post delete 1 --force --quiet
echo '✔ Removed default post'

## Pages
wp post delete 2 --force --quiet
echo '✔ Removed default page'

# Create test users.
# wp user create editor editor@client.test --role=editor --user_pass=password --quiet
# echo '✔ Created default users'

# Activate theme.
# wp theme activate theme-name --quiet
# echo '✔ Activated the theme'

# Activate plugins.
wp plugin activate disable-emojis wp-robots-txt aryo-activity-log better-passwords redirection wordpress-seo debug-bar-post-types duplicate-post log-deprecated-notices query-monitor redis-cache rewrite-rules-inspector rewrite-testing transients-manager user-switching wordpress-beta-tester wordpress-importer wp-crontrol --quiet
echo '✔ Activated the plugins'

# Create menus
wp menu create "Main Menu" --quiet
wp menu create "Footer Menu" --quiet
echo '✔ Created the menus'

# Build homepage hero
homepage="$(wp post create --post_title="Homepage" --post_type=page --post_status=publish --porcelain --quiet)"
wp option update show_on_front page --quiet
wp option update page_on_front $homepage --quiet
echo '✔ Created homepage and set as page_on_front'

echo '✔ All done, time for a brew.'
