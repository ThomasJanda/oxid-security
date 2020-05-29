<?php
$sMetadataVersion = '2.0';

$aModule = array(
    'id'          => 'rs-security',
    'title'       => '*RS Security',
    'description' => 'Optimize security',
    'thumbnail'   => '',
    'version'     => '0.0.1',
    'author'      => '',
    'url'         => '',
    'email'       => '',
    'extend'      => array(
        \OxidEsales\Eshop\Core\Output::class                     => \rs\security\Core\Output::class,
        \OxidEsales\Eshop\Core\UtilsServer::class                => \rs\security\Core\UtilsServer::class,
    ),
    'controllers' => array(

    ),
    'templates'   => array(

    ),
    'settings'    => array(

        /* ----- */
        array(
            'group' => 'rs-security_Strict-Transport-Security',
            'name' => 'rs-security_Strict-Transport-Security_enabled',
            'type' => 'bool',
            'value' => true,
        ),
        array(
            'group' => 'rs-security_Strict-Transport-Security',
            'name'  => 'rs-security_Strict-Transport-Security',
            'type'  => 'str',
            'value' => 'max-age=63072000; includeSubDomains; preload',
        ),

        /* ----- */
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_enabled',
            'type'  => 'bool',
            'value' => true,
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_01',
            'type'  => 'str',
            'value' => "default-src 'self' https:",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_01_domains',
            'type' => 'arr',
            'value' => [],
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_02',
            'type'  => 'str',
            'value' => "object-src 'none'",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_02_domains',
            'type' => 'arr',
            'value' => [],
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_03',
            'type'  => 'str',
            'value' => "style-src 'self' 'unsafe-inline'",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_03_domains',
            'type' => 'arr',
            'value' => [
                'https://fonts.googleapis.com'
            ],
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_04',
            'type'  => 'str',
            'value' => "font-src 'self' data:",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_04_domains',
            'type' => 'arr',
            'value' => [
                'https://fonts.googleapis.com',
                'https://fonts.gstatic.com'
            ],
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_05',
            'type'  => 'str',
            'value' => "script-src 'self' 'unsafe-inline' 'unsafe-eval'",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_05_domains',
            'type' => 'arr',
            'value' => [
                 'https://www.paypal.com/paymentwall/payment-selection',
                 'https://www.paypalobjects.com https://www.google-analytics.com'
            ],
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_06',
            'type'  => 'str',
            'value' => "img-src 'self' data:",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_06_domains',
            'type' => 'arr',
            'value' => [
                'https://www.google.com',
                'https://www.google-analytics.com',
                'www.google-analytics.com',
                'https://stats.g.doubleclick.net'
            ],
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_07',
            'type'  => 'str',
            'value' => "connect-src 'self'",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_07_domains',
            'type' => 'arr',
            'value' => [
                'https://www.google-analytics.com',
                'www.google-analytics.com',
                'https://stats.g.doubleclick.net'
            ],
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_08',
            'type'  => 'str',
            'value' => "frame-ancestors 'self'",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_08_domains',
            'type' => 'arr',
            'value' => [],
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_09',
            'type'  => 'str',
            'value' => "form-action 'self'",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_09_domains',
            'type' => 'arr',
            'value' => [
                'https://www.paypal.com/paymentwall/payment-selection'
            ],
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_10',
            'type'  => 'str',
            'value' => "base-uri 'self'",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_10_domains',
            'type' => 'arr',
            'value' => [],
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_11',
            'type'  => 'str',
            'value' => "",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_11_domains',
            'type' => 'arr',
            'value' => [],
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_12',
            'type'  => 'str',
            'value' => "",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_12_domains',
            'type' => 'arr',
            'value' => [],
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_13',
            'type'  => 'str',
            'value' => "",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_13_domains',
            'type' => 'arr',
            'value' => [],
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name'  => 'rs-security_Content-Security-Policy_14',
            'type'  => 'str',
            'value' => "",
        ),
        array(
            'group' => 'rs-security_Content-Security-Policy',
            'name' => 'rs-security_Content-Security-Policy_14_domains',
            'type' => 'arr',
            'value' => [],
        ),
        /* ----- */
        array(
            'group' => 'rs-security_X-Content-Type-Options',
            'name'  => 'rs-security_X-Content-Type-Options_enabled',
            'type'  => 'bool',
            'value' => true,
        ),
        array(
            'group' => 'rs-security_X-Content-Type-Options',
            'name'  => 'rs-security_X-Content-Type-Options',
            'type'  => 'str',
            'value' => 'nosniff',
        ),

        /* ----- */
        array(
            'group' => 'rs-security_X-Frame-Options',
            'name'  => 'rs-security_X-Frame-Options_enabled',
            'type'  => 'bool',
            'value' => true,
        ),
        array(
            'group' => 'rs-security_X-Frame-Options',
            'name'  => 'rs-security_X-Frame-Options',
            'type'  => 'str',
            'value' => 'SAMEORIGIN',
        ),

        /* ----- */
        array(
            'group' => 'rs-security_X-XSS-Protection',
            'name'  => 'rs-security_X-XSS-Protection_enabled',
            'type'  => 'bool',
            'value' => true,
        ),
        array(
            'group' => 'rs-security_X-XSS-Protection',
            'name'  => 'rs-security_X-XSS-Protection',
            'type'  => 'str',
            'value' => '1; mode=block',
        ),

        /* ----- */
        array(
            'group' => 'rs-security_Referrer-Policy',
            'name'  => 'rs-security_Referrer-Policy_enabled',
            'type'  => 'bool',
            'value' => true,
        ),
        array(
            'group' => 'rs-security_Referrer-Policy',
            'name'  => 'rs-security_Referrer-Policy',
            'type'  => 'str',
            'value' => 'same-origin',
        ),

        /* ----- */
        array(
            'group' => 'rs-security_sub',
            'name'  => 'rs-security_OtherName1',
            'type'  => 'str',
            'value' => '',
        ),
        array(
            'group' => 'rs-security_sub',
            'name'  => 'rs-security_OtherValue1',
            'type'  => 'str',
            'value' => '',
        ),
        array(
            'group' => 'rs-security_sub',
            'name'  => 'rs-security_OtherName2',
            'type'  => 'str',
            'value' => '',
        ),
        array(
            'group' => 'rs-security_sub',
            'name'  => 'rs-security_OtherValue2',
            'type'  => 'str',
            'value' => '',
        ),
        array(
            'group' => 'rs-security_sub',
            'name'  => 'rs-security_OtherName3',
            'type'  => 'str',
            'value' => '',
        ),
        array(
            'group' => 'rs-security_sub',
            'name'  => 'rs-security_OtherValue3',
            'type'  => 'str',
            'value' => '',
        ),

        /* ----- */
        array(
            'group' => 'rs-security_cookie_SameSite',
            'name' => 'rs-security_cookie_SameSite_enabled',
            'type' => 'bool',
            'value' => true,
        ),
        array(
            'group' => 'rs-security_cookie_SameSite',
            'name' => 'rs-security_cookie_SameSite',
            'type' => 'str',
            'value' => 'Lax',
        ),

        /* ----- */
        /*
        array(
            'group' => 'rs-security_cookie_prefix',
            'name' => 'rs-security_cookie_prefix_enabled',
            'type' => 'bool',
            'value' => true,
        ),
        array(
            'group' => 'rs-security_cookie_prefix',
            'name' => 'rs-security_cookie_prefix',
            'type' => 'str',
            'value' => '__Secure-',
        ),
         */
    ),
);
