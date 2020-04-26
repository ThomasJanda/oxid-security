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
    ),
    'controllers' => array(

    ),
    'templates'   => array(

    ),
    'settings'    => array(
        array(
            'group' => 'rs-security_main',
            'name'  => 'rs-security_Strict-Transport-Security',
            'type'  => 'str',
            'value' => 'max-age=63072000; includeSubDomains; preload',
        ),
        array(
            'group' => 'rs-security_main',
            'name'  => 'rs-security_Content-Security-Policy',
            'type'  => 'str',
            'value' => "default-src 'self' https: ; object-src 'none'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.googleapis.com  https://fonts.gstatic.com; script-src 'self' 'unsafe-inline' https://www.paypal.com/paymentwall/payment-selection https://www.paypalobjects.com https://www.google-analytics.com; img-src 'self' data: https://www.google-analytics.com www.google-analytics.com https://stats.g.doubleclick.net; connect-src 'self' https://www.google-analytics.com www.google-analytics.com https://stats.g.doubleclick.net; frame-ancestors 'self'; form-action 'self' https://www.paypal.com/paymentwall/payment-selection; base-uri 'self';",
        ),
        array(
            'group' => 'rs-security_main',
            'name'  => 'rs-security_X-Content-Type-Options',
            'type'  => 'str',
            'value' => 'nosniff',
        ),
        array(
            'group' => 'rs-security_main',
            'name'  => 'rs-security_X-Frame-Options',
            'type'  => 'str',
            'value' => 'SAMEORIGIN',
        ),
        array(
            'group' => 'rs-security_main',
            'name'  => 'rs-security_X-XSS-Protection',
            'type'  => 'str',
            'value' => '1; mode=block',
        ),
        array(
            'group' => 'rs-security_main',
            'name'  => 'rs-security_Referrer-Policy',
            'type'  => 'str',
            'value' => 'same-origin',
        ),

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
    ),
);
