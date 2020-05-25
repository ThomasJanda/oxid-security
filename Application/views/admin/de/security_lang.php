<?php
$sLangName = "Deutsch";

$aLang = array(
    'charset' => 'UTF-8',

    'SHOP_MODULE_GROUP_rs-security_main' => 'Standard headers',

    'SHOP_MODULE_GROUP_rs-security_Strict-Transport-Security' => 'Header Strict-Transport-Security',
    'SHOP_MODULE_rs-security_Strict-Transport-Security_enable' => 'Enabled?',
    'SHOP_MODULE_rs-security_Strict-Transport-Security' => 'Default: max-age=63072000; includeSubDomains; preload',

    'SHOP_MODULE_GROUP_rs-security_Content-Security-Policy' => 'Header Content-Security-Policy',
    'SHOP_MODULE_rs-security_Content-Security-Policy_enable' => 'Enabled?',
    'SHOP_MODULE_rs-security_Content-Security-Policy_01' => "Part 1 (Default: default-src 'self' https:)",
    'SHOP_MODULE_rs-security_Content-Security-Policy_02' => "Part 2 (Default: object-src 'none')",
    'SHOP_MODULE_rs-security_Content-Security-Policy_03' => "Part 3 (Default: style-src 'self' 'unsafe-inline' https://fonts.googleapis.com)",
    'SHOP_MODULE_rs-security_Content-Security-Policy_04' => "Part 4 (Default: font-src 'self' data: https://fonts.googleapis.com  https://fonts.gstatic.com)",
    'SHOP_MODULE_rs-security_Content-Security-Policy_05' => "Part 5 (Default: script-src 'self' 'unsafe-inline' 'unsafe-eval' https://www.paypal.com/paymentwall/payment-selection https://www.paypalobjects.com https://www.google-analytics.com)",
    'SHOP_MODULE_rs-security_Content-Security-Policy_06' => "Part 6 (Default: img-src 'self' data: https://www.google-analytics.com www.google-analytics.com https://stats.g.doubleclick.net)",
    'SHOP_MODULE_rs-security_Content-Security-Policy_07' => "Part 7 (Default: connect-src 'self' https://www.google-analytics.com www.google-analytics.com https://stats.g.doubleclick.net)",
    'SHOP_MODULE_rs-security_Content-Security-Policy_08' => "Part 8 (Default: frame-ancestors 'self')",
    'SHOP_MODULE_rs-security_Content-Security-Policy_09' => "Part 9 (Default: form-action 'self' https://www.paypal.com/paymentwall/payment-selection)",
    'SHOP_MODULE_rs-security_Content-Security-Policy_10' => "Part 10 (Default: base-uri 'self')",
    'SHOP_MODULE_rs-security_Content-Security-Policy_11' => "Part 11",
    'SHOP_MODULE_rs-security_Content-Security-Policy_12' => "Part 12",
    'SHOP_MODULE_rs-security_Content-Security-Policy_13' => "Part 13",
    'SHOP_MODULE_rs-security_Content-Security-Policy_14' => "Part 14",

    'SHOP_MODULE_GROUP_rs-security_X-Content-Type-Options' => 'Header X-Content-Type-Options',
    'SHOP_MODULE_rs-security_X-Content-Type-Options_enabled' => 'Enabled?',
    'SHOP_MODULE_rs-security_X-Content-Type-Options' => 'Default: nosniff',

    'SHOP_MODULE_GROUP_rs-security_X-Frame-Options' => 'Header X-Frame-Options',
    'SHOP_MODULE_rs-security_X-Frame-Options_enabled' => 'Enabled?',
    'SHOP_MODULE_rs-security_X-Frame-Options' => 'X-Frame-Options (Default: SAMEORIGIN)',

    'SHOP_MODULE_GROUP_rs-security_X-XSS-Protection' => 'Header X-XSS-Protection',
    'SHOP_MODULE_rs-security_X-XSS-Protection_enabled' => 'Enabled?',
    'SHOP_MODULE_rs-security_X-XSS-Protection' => 'Default: 1; mode=block',

    'SHOP_MODULE_GROUP_rs-security_Referrer-Policy' => 'Header Referrer-Policy',
    'SHOP_MODULE_rs-security_Referrer-Policy_enabled' => 'Enabled?',
    'SHOP_MODULE_rs-security_Referrer-Policy' => 'Default: same-origin',

    'SHOP_MODULE_GROUP_rs-security_sub' => 'Header additional',
    'SHOP_MODULE_rs-security_OtherName1' => 'Another header title (1)',
    'SHOP_MODULE_rs-security_OtherValue1' => 'Value for the header (1)',
    'SHOP_MODULE_rs-security_OtherName2' => 'Another header title (2)',
    'SHOP_MODULE_rs-security_OtherValue2' => 'Value for the header (2)',
    'SHOP_MODULE_rs-security_OtherName3' => 'Another header title (3)',
    'SHOP_MODULE_rs-security_OtherValue3' => 'Value for the header (3)',

    'SHOP_MODULE_GROUP_rs-security_cookie_SameSite' => 'Cookie SameSite',
    'SHOP_MODULE_rs-security_cookie_SameSite_enabled' => 'Enabled? (Only use if shop is in SSL mode!)',
    'SHOP_MODULE_rs-security_cookie_SameSite' => 'Default: Strict, Other options: None, Lax',

    /*
    'SHOP_MODULE_GROUP_rs-security_cookie_prefix' => 'Cookie prefix',
    'SHOP_MODULE_rs-security_cookie_prefix_enabled' => 'Enabled?',
    'SHOP_MODULE_rs-security_cookie_prefix' => 'Default: __Secure-',
     */
);
