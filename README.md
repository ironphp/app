<h1 align="center">IronPHP Application Skeleton</h1>
<p align="center">
    <a href="https://packagist.org/packages/ironphp/app" target="_blank">
        <img alt="Total Downloads" src="https://poser.pugx.org/ironphp/app/d/total.svg">
    </a>
    <a href="https://packagist.org/packages/ironphp/app" target="_blank">
        <img alt="Latest Stable Version" src="https://poser.pugx.org/ironphp/app/v/stable.svg">
    </a>
    <a href="https://packagist.org/packages/ironphp/app" target="_blank">
        <img alt="Latest Dev Version" src="https://poser.pugx.org/ironphp/app/v/unstable.svg">
    </a>
    <a href='https://coveralls.io/github/ironphp/app?branch=master'>
        <img alt='Coverage Status' src='https://coveralls.io/repos/github/ironphp/app/badge.svg?branch=master'>
    </a>
    <a href="https://travis-ci.org/ironphp/app" target="_blank">
        <img alt="Travis-CI Build Status" src="https://api.travis-ci.org/ironphp/app.svg">
    </a>
    <a href="https://ci.appveyor.com/project/gaurangkumar/ironphp/branch/master" target="_blank">
        <img alt="AppVeyor Build Status" src="https://ci.appveyor.com/api/projects/status/gaurangkumar/ironphp/branch/master?svg=true">
    </a>
    <a href="https://opensource.org/licenses/MIT" target="_blank">
        <img alt="Software License" src="https://poser.pugx.org/ironphp/app/license.svg">
    </a>
</p>

## About IronPHP

The IronPHP Framework 1.0 skeleton to create application which
uses Front Controller, and MVC.

The Framework source code can be found here: [ironphp/ironphp](https://github.com/ironphp/ironphp).

> **Note:** No stable release yet - [IronPHP Framework alpha1](https://github.com/ironphp/ironphp/releases/tag/1.0.0-alpha1) version has been released. 

## Table of Contents

- [Requirements](#requirements)
- [Installing IronPHP via Composer](#installing-ironphp-via-composer)
- [Update](#update)
- [Configuration](#configuration)
- [Community](#community)
- [Get Support](#get-support)
- [Security](#security)
- [Credits](#credits)
- [License](#license)

## Requirements

IronPHP requires PHP 5.5 or later; we recommend using the latest PHP version whenever possible.

## Installing IronPHP via Composer

You can install IronPHP as your project using
[Composer](https://getcomposer.org)  as
a starting point. you can run the following:

1. Download [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist ironphp/app [dir_name]`.


If Composer is installed globally, run

``` bash
$ composer create-project ironphp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
$ composer create-project --prefer-dist ironphp/app myapp
```

Go to myapp dir, if installed with myapp dirname:

```bash
$ cd myapp
```

Go to ironphp dir, if installed without dirname:

```bash
$ cd app
```

You can now use php developement webserver to view the default home page:

```bash
$ php jarvis serve
```

Then visit `http://localhost:8000` to see the welcome page.

## Update

Since this is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades atleast for NOT FOR NOW, so you have to do any updates manually.

## Configuration

Read and edit `'Configuraton'` in `config/app.php` and setup the `'Datasource'` in `config/database.php`.

## Community

* IronPHP on [GitHub][1]
* Follow us on [FaceBook][2]

## About Us

IronPHP development is led by the [GaurangKumar Parmar](https://twitter.com/gaurangkumarp).

## Get Support

* [GitHub Issues](https://github.com/ironphp/app/issues) - Got issues? Please tell us!

## Security

If you’ve found a security issue in IronPHP, please use the following procedure instead of the normal bug reporting system. Instead of using the bug tracker, mailing list or IRC please send an email to gaurangkumarp@gmail.com.

For each report, we try to first confirm the vulnerability. Once confirmed, the IronPHP will take the following actions:

- Acknowledge to the reporter that we’ve received the issue, and are working on a fix. We ask that the reporter keep the issue confidential until we announce it.
- Get a fix/patch prepared.
- Prepare a post describing the vulnerability, and the possible exploits.
- Release new versions of all affected versions.
- Prominently feature the problem in the release announcement.

## Authors

- GaurangKumar Parmar  | [GitHub](https://github.com/gaurangkumar)  | [Twitter](https://twitter.com/gaurangkumarp) | [Patreon](https://www.patreon.com/gaurangkumar) | <gaurangkumarp@gmail.com>

[1]: https://github.com/ironphp
[2]: https://www.facebook.com/IronPHP-Framwork-325690624644002