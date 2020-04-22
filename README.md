# Oxid security

## Description

Set http security headers to prevent security problems.
To test your shop you can use:

    https://observatory.mozilla.org/
    https://securityheaders.com/
    
Documentation about the settings:
    
    https://infosec.mozilla.org/guidelines/web_security
    
## Important settings

#### SSL

Your shop must be reachable via https all the time. All pages. To force the browser always use https 
you maybe have to add some derectives to the ".htaccess". The settings can be different within other 
hosting providers. Please contact them and ask how it work within there servers.

Example "domainfactory":

        #always redirect to "www"
        RewriteCond %{HTTP_HOST} !^www.myshop.de
        RewriteRule ^(.*)$ https://www.myshop.de/$1 [L,R=301]
    
        #always set to "https"
        RewriteCond %{SERVER_PORT} !=443
        RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]

You have to add the settings next to "RewriteBase /".

#### Cookies

In the "config.inc.php" in the shop root, the urls has to set with "https"

        $this->sShopURL     = 'https://www.myshop.de'; // eShop base url, required
        $this->sSSLShopURL  = 'https://www.myshop.de'; // eShop SSL url, optional

Otherwiese the shop can´t set the cookie security correctly.

#### Basic settings

The basic setting shipped with this module should work but maybe you have to change them because of the 
modules/scripts you use in your shop. Also you hosting provider maybe add some security header by default and
the settings are useless or will override by the hosting provider.

If you don´t need one of the settings, remove all the text and leave it blank. With this, the module
ignore the setting.

#### Good to know

With only the basic settings you will not solve all issues but some. Issues are inline CSS 
and inline JavaScript which used by the shop out of the box. To get 100% within the test pages above
you have to modify your templates and remove the inline CSS/Javascript and adjust the settings. 
But this extension is a good starting point for your improvements.

You can add your own header titles and value in the module settings to extend the system with 
other/new security headers. 

Following http headers use by this module:

* Strict-Transport-Security
* Content-Security-Policy
* X-Content-Type-Options
* X-Frame-Options
* X-XSS-Protection
* Referrer-Policy

## Install

1. Copy files into following directory

        source/modules/rs/security
        
2. Add following to composer.json on the shop root

        "autoload": {
            "psr-4": {
                "rs\\security\\": "./source/modules/rs/security"
            }
        },
    
3. Refresh autoloader files with composer.

        composer dump-autoload
        
4. Enable module in the oxid admin area, Extensions => Modules
5. Changes settings in the module itself if nessesary.

