# MailArchiver
[![version](https://badgen.net/github/release/Pierre-Lannoy/wp-mailarchiver/)](https://wordpress.org/plugins/mailarchiver/)
[![php](https://badgen.net/badge/php/7.2+/green)](https://wordpress.org/plugins/mailarchiver/)
[![wordpress](https://badgen.net/badge/wordpress/5.2+/green)](https://wordpress.org/plugins/mailarchiver/)
[![license](https://badgen.net/github/license/Pierre-Lannoy/wp-mailarchiver/)](/license.txt)

__MailArchiver__ is a free WordPress plugin to capture and log events on your site. It allows to view these events in your WordPress dashboard and send them to logging or alerting services.

See [WordPress directory page](https://wordpress.org/plugins/mailarchiver/). 

__MailArchiver__ is a tool that aims to:
* capture events generated by the core of WordPress and themes / plugins;
* enrich these events with many details regarding their triggering;
* record these events in the WordPress database and/or send them to external services for logging, monitoring and alerting;
* view (and filter) events recorded in the WordPress database.

It supports multisite logs delegation and contains many features to help to protect personal information (user pseudonymization, IP obfuscation, etc.).

It can be used in dev/debug phases or on production sites.

At this time, MailArchiver can send events:
* by mail (alerting);
* in the browser console (for debugging purpose);
* to its internal logging storage and viewer;
* to external archiver, like Syslog or Fluentd;
* to external logging services, like Logentries / insightOps or Loggly;
* to external alerting services, like Pushover or Slack;
* to local or network storage (with file rotation);

Based on the amazing [Monolog 2](https://github.com/Seldaek/monolog) archiver, MailArchiver is a free and open source plugin for WordPress. It integrates many other free and open source works (as-is or modified). Please, see 'about' tab in the plugin settings to see the details.

## Installation

1. From your WordPress dashboard, visit _Plugins | Add New_.
2. Search for 'MailArchiver'.
3. Click on the 'Install Now' button.

You can now activate **MailArchiver** from your _Plugins_ page.

## Support

For any technical issue, or to suggest new idea or feature, please use [GitHub issues tracker](https://github.com/Pierre-Lannoy/wp-mailarchiver/issues). Before submitting an issue, please read the [contribution guidelines](CONTRIBUTING.md).

Alternatively, if you have usage questions, you can open a discussion on the [WordPress support page](https://wordpress.org/support/plugin/mailarchiver/). 

## Contributing

__MailArchiver__ lets you use its logging features inside your plugins or themes. To understand how it works and how to use it to log your own events, please read the [developer documentation](DEVELOPER.md).

Before submitting an issue or a pull request, please read the [contribution guidelines](CONTRIBUTING.md).

> ⚠️ The `master` branch is the current development state of the plugin. If you want a stable, production-ready version, please pick the last official [release](https://github.com/Pierre-Lannoy/wp-mailarchiver/releases).
