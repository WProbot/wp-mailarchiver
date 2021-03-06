# Changelog
All notable changes to **MailArchiver** are documented in this *changelog*.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), and **MailArchiver** adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased - Will be 1.4.0]
### Added
- Full compatibility with [APCu Manager](https://wordpress.org/plugins/apcu-manager/).
### Fixed
- The header extraction of the "from" field may produce an error.

## [1.3.0] - 2020-01-03
### Added
- Full compatibility (for internal cache) with Redis and Memcached.
- Using APCu rather than database transients if APCu is available.
- New Site Health "status" sections about OPcache and object cache. 
- New Site Health "status" section about i18n extension for non `en_US` sites.
- New Site Health "info" sections about OPcache and object cache.
- New Site Health "info" section about the plugin itself.
- New Site Health "info" section about archivers settings. 
### Changed
- Upgraded Monolog library from version 2.0.1 to version 2.0.2.

## [1.2.0] - 2019-12-19
### Added
- Support for plugged (custom) `wp_mail` function (mu-plugins or themes).
### Changed
- Mail subject can now contains emojis.
- WordPress archivers now report full source of mail (even for plugged `wp_mail`).
- The "from" field is now detected for Post SMPT plugin.
### Fixed
- In some rare cases, recording a mail error may produce a PHP warning.
- Some plugin options may be not saved when needed (thanks to [Lucas Bustamante](https://github.com/Luc45)).
- Typo in a string.

## [1.1.0] - 2019-12-12
### Added
- Full compatibility with WP Mail SMTP.
- Full compatibility with Post SMTP.
- "from" field is now visible in the mail details in WordPress archiver.
### Changed
- The detection of the "from" field has been improved.
### Fixed
- Some strings are not translatable.
- Some typos in inline help. 

## [1.0.0] - 2019-12-03
### Initial release
