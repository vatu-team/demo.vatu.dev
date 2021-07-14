# Demo Site

## Project URLS

- [Readme](https://github.com/vatu-team/demo.vatu.dev/blob/main/readme.md)
- [Local](https://www.demo.test/)
- [QA](https://demo.vatu.dev/)
- [Production](https://demo.vatu.dev/)

## Dependencies

### Development

These tools are needed to develop the site locally.

- [GIT](https://git-scm.com/downloads)
- [PHP](https://php.net/)
  - [Composer](https://getcomposer.org/)
  - [PHP dotenv](https://github.com/vlucas/phpdotenv)
	- [PHIVE](https://phar.io/)
- [MySQL](https://mysql.com/)
- [ [Apache](https://httpd.apache.org/) | [Nginx](https://www.nginx.com/) ]
- [NodeJS](https://nodejs.org/en/)

Most of this can be acquired using [MAMP](https://www.mamp.info/en/mamp-pro/) or [Docker](https://www.docker.com/).
Use you preferred method for developing locally.

## Documentation

During the Alpha/Beta stages, due to constant changes, documentation will be mainly written in-line. With a dedicated section being created at the first major release.

## Folder Structure

```
├── config
├── public
│   ├── index.php
│   ├── wp-config.php
│   ├── app
│   │   ├── plugins
│   │   ├── mu-plugins
│   │   ├── themes
│   │   └── languages
│   └── wp
├── vendor
├── example.env
├── package.json
└── composer.json

```

- `/public` files that need to be accessed by the public.
- `/public/app/` contains WordPress dependencies.
- `/vendor` is where the Composer managed dependencies are installed to.
- `composer.json` loads the PHP dependencies for this project.
- `example.env` sampled file with our environment variables are set.

## Setup

- Set the http authentication for composer eg `composer config -g http-basic.composer.deliciousbrains.com <username> <password>`.
- Install composers dependencies `composer install`.
- Update environment variables in the `.env` file. Wrap values that may contain non-alphanumeric characters with quotes, or they may be incorrectly parsed. * Database variables
  - `DB_NAME` - Database name
  - `DB_USER` - Database user
  - `DB_PASSWORD `- Database password
  - `DB_HOST` - Database host
  - Optionally, you can define `DATABASE_URL` for using a DSN instead of using the variables above (e.g. `mysql://user:password@127.0.0.1:3306/db_name`)
  - `WP_ENV `- Set to environment (`development`, `staging`, `production`)
  - `WP_HOME` - Full URL to WordPress home (https://example.com)
  - `WP_SITEURL` - Full URL to WordPress including subdirectory (https://example.com/wp)
  - `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`
  - Generate with [wp-cli-dotenv-command] (https://github.com/aaemnnosttv/wp-cli-dotenv-command)
  - Generate with [our WordPress salts generator](https://roots.io/salts.html)

## Testing

### Static Analysis

Installing our static analaysis tools is done via the inital composer install and updates.

Running the tests locally:

PHP CodeSniffer: `./tools/phpcs/vendor/bin/phpcs -p -s --standard=./phpcs.xml --runtime-set testVersion 7.3-`

### Acceptance Testing

```
$(npm bin)/cypress open --config baseUrl=http://www.demo.test/
```

## Deploying

### Git Based Deployment.

Deployable branches should be appended with `-built` (eg. `main-built`). For development environments this could be`develop-built`.

You should never push code to built branches. All code should be pushed to the corrisponding branch. Where the built branch will pull from.

## Contributing

To contribute to this project:

- Create a branch off `main` eg, `feature/feature-name`, `hotfix/broken-part`, or `{issue-number}-{name-of-feature}`
- Push code to this branch once is becomes usable. Checking against our Coding Standards `composer run test`. Pushing often giving other chance to review and run QA tests against your new code. Rebasing from `main` will let you check you code works against production code
- When finished or requiring feedback, test your code on staging, pushing it to a branch prefixed with `staging/` to deploy to this projects staging server
- Any fixes should be applied to the origin branch and merged into your staging branch
- Once ready to be signed-off, create a pull request from your original branch in to `main`, assign a review and message the appropriate developer or channel. Detailing any changes that need to be made to the database/CMS
- With sign-off and passings tests, rebase and merge your branch into `main`

## Reporting Issues

If you spot any issues please create a ticket via the project's Issue Tracker. Including the issue, the browser and operating system, and how to replicate it. If the issue is security related please use the contact information below.

## Contributing to this project

This project follow the WordPress Coding Standard for [PHP](https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/), [HTML](https://make.wordpress.org/core/handbook/best-practices/coding-standards/html/), [CSS](https://make.wordpress.org/core/handbook/best-practices/coding-standards/css/) and [JavaScript](https://make.wordpress.org/core/handbook/best-practices/coding-standards/javascript/).

## Contact

Vatu - [info@vatu.co.uk](info@vatu.co.uk)
