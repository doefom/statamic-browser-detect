# Statamic Browser Detect

A wrapper for `hisorange/browser-detect` (https://github.com/hisorange/browser-detect).

## Features

This provides a tag that can be used in antlers templates to find out all sorts of information about the requesting
browser, device, operating system and more.

## How to Install

You can search for this addon in the `Tools > Addons` section of the Statamic control panel and click **install**, or run the following command from your project root:

``` bash
composer require doefom/statamic-browser-detect
```

## How to Use

The tag exactly uses the original Browser facade's API. Since all the methods called on the tag are proxied to the
Browser facade, you can use the tag like you would use the facade. You can find the documentation here:
https://github.com/hisorange/browser-detect#available-api-calls

### Examples

In your antlers template you may use the tag like so:

```text
{{ if browser:isMobile }}
   <p>It's a mobile device!</p>
{{ /if }}
```

```text
{{ browser:browserFamily }} // "Chrome" 
```
