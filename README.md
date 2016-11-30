# WordPress Boilerplate

An opinionated WordPress boilerplate, including [Advanced Custom Fields](https://www.advancedcustomfields.com/) and [Timber](https://upstatement.com/timber/), and using [phpdotenv](https://github.com/vlucas/phpdotenv).


## Dependencies

* [Composer](https://getcomposer.org/download/).
* [WP-CLI](http://wp-cli.org/).
* [WP-CLI Dotenv Command](https://github.com/aaemnnosttv/wp-cli-dotenv-command).


### Usage
* From the project root, run `composer install` to get dependencies, including WordPress itself.
* Run `$ wp dotenv init --template=.env.example --interactive --with-salts` to add your credentials and generate new keys and salts.
* Install WordPress as usual.


### This looks different to the WordPress I am used to...
As this uses Composer it is necessary to move WordPress to a subfolder so updates and/or another developer pulling the repo will not overwrite anything. Think of this as a repo for your _theme_ that has WordPress as a dependency rather than your theme being an extension of WordPress. Key differences:

* `wp-content` now lives at the project root.
* Vital plugins are placed in `wp-content/mu-plugins` by composer. This causes them to be enabled automatically and hidden from the plugins page in wp-admin. Adding any other plugins to `composer.json` (from [WordPress Packagist](https://wpackagist.org/)) will place them in the `plugins` folder to be installed as usual, unless specified otherwise.
* British English language for the admin area.
* The bundled Hello Dolly plugin and standard themes have been removed.
* The barebones boilerplate theme included uses Timber for templating, and includes:
  * Most standard templates.
  * A custom post type.
  * A custom taxonomy.
  * Register two menus ('main menu' and 'social menu').
  * Remove junk added by `wp_head()`.
  * Allow SVG upload in admin.
  * Conditionally load minified assets (or not) based on the environment.


### Anything else?
* This assumes you have a database elsewhere.
* No kind of task runner/build system (Gulp, SASS, Browserify, whatever) is included in the theme.
