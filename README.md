Metatags 0.8.16
=================
Generic meta data.

<p align="center"><img src="metatags-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/GiovanniSalmeri/yellow-metatags/archive/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to add meta data

This extension generates additional meta data (for example `Robots` or `Googlebot`) through the page settings at the top of a page.

If you need the same meta data for all the pages, it is more convenient to add them in the HTML header, for example in file `system/layouts/header.html`. Meta data for social media sites are best added with the extension [Meta](https://github.com/annaesvensson/yellow-meta).

## Examples

Content file with meta data:

    ---
    Title: Example page
    Description: Example for your website
    Robots: noindex, nofollow
    Googlebot: noindex, nofollow
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`Metatags` (default: `color-scheme, google, googlebot, referrer, robots, theme-color`) = names recognised in the page settings  

## Developer

Giovanni Salmeri. [Get help](https://datenstrom.se/yellow/help/).
