=== Remove Yoast Canonical URL for Social ===
Contributors: anthonyeden
Tags: facebook, seo, yoast, canonical, social
Requires at least: 4.0.0
Tested up to: 5.4.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

This plugin removes manually entered Yoast SEO Canonical URLs when social media networks such as Facebook crawl any page on your website.

== Description ==

When Facebook crawls your site, it uses the Canonical URL and links directly to this in all Facebook posts. This plugin prevents
Facebook from seeing the Custom Canonical URL entered into the Yoast SEO plugin. This means it will always
link to your own website, even if you've set the Canonical URL to another site.

== Installation ==

The easiest way to install this plugin is via the Wordpress Plugin Directory.

Alternatively, download the ZIP and upload it to your Wordpress website. This plugin will start working as soon as it is activated.

Once installed, there are no settings to configure. All pages will have the Canonical URL removed whenever Facebook crawls your site.

== Frequently Asked Questions ==

= Are there any settings? =

No.

= What if Facebook has already cached a page on my site? =

You can try using the [Sharing Debugger](https://developers.facebook.com/tools/debug/) to clear the Facebook cache.

= Can I disable this for specific pages? =

Unfortunatly not. It applies site-wide.

== Changelog ==

= 1.0.2 =
* Alter the og:url meta tag too

= 1.0.1 =
* Rename the plugin

= 1.0 =
* Initial release

