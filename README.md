![Logo](https://github.com/afroraydude/nozomi-core/blob/master/src/img/icon-left-font.png)

[![version](https://img.shields.io/badge/dynamic/json.svg?label=version&url=https%3A%2F%2Fraw.githubusercontent.com%2Fafroraydude%2Fnozomi-core%2Fmaster%2Fcomposer.json&query=%24.version&colorB=orange&prefix=v&suffix=-alpha&longCache=true&style=flat-square)](https://github.com/afroraydude/nozomi-core)
[![GitHub license](https://img.shields.io/github/license/afroraydude/nozomi.svg?style=flat-square)](https://github.com/afroraydude/nozomi/blob/master/LICENSE)


Nozomi is a simple, lightweight CMS built on top of Slim Framework. It is meant to be a spiritual successor to Muttnick.

## Difference between Nozomi and Muttnick

Nozomi is a more robust and secure update to Muttnick. It integrates itself closer to the underlying Slim Framework and works with the internal functions better. The template system is completely changed with usage of Twig over PHP View, and removal of exposure of templates and site code outside of the public directory. Routing is cleaned up with most code being run within classes in the `nozomi` directory, as well as a lot of under the hood improvements to authentication and database interaction. Overall, Nozomi is a more secure, safer, and less buggy upgrade from Muttnick, with an all new sleek look.

## Install

### Requirements:
* PHP 7.2+
* MySQL/MariaDB
* Composer

### How to install
1. Clone the git repository:
```
git clone https://github.com/afroraydude/nozomi.git
```

2. cd nozomi
```
cd nozomi
```

3. Install prerequisites through composer
```
composer install
```

4. Link your `public/index.php` file to your preferred web server (see [this](https://github.com/afroraydude/nozomi-site/blob/master/install/server.md) for more info)

5. Visit your site at `http://localhost` and follow the instructions there.
