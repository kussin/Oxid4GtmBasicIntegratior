<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'wmdk/tracking',
    'title'        => 'KUSSIN | GTM Basic Integrator for OXID eShop 4.10.x',
    'description'  => array(
        'de' => 'Fügt den GTM Code inkl. Data Layer zu OXID hinzu.',
        'en' => 'Adds gtm code incl. data layer to OXID.',
    ),
    'thumbnail'    => 'thumbnail.jpg',
    'version'      => '0.0.1',
    'author'       => 'Daniel Kussin',
    'url'          => 'https://www.kussin.de',
    'email'        => 'daniel.kussin@kussin.de',

    'templates' => array(
        'wmdk_default.tpl' => 'wmdk/tracking/views/blocks/default.tpl',

        'wmdk_default_head.tpl' => 'wmdk/tracking/views/blocks/head.tpl',
        'wmdk_default_body.tpl' => 'wmdk/tracking/views/blocks/body.tpl',

        'wmdk_class_start.tpl' => 'wmdk/tracking/views/blocks/classes/start.tpl',
        'wmdk_class_search.tpl' => 'wmdk/tracking/views/blocks/classes/search.tpl',
        'wmdk_class_alist.tpl' => 'wmdk/tracking/views/blocks/classes/alist.tpl',
        'wmdk_class_manufacturerlist.tpl' => 'wmdk/tracking/views/blocks/classes/manufacturerlist.tpl',
        'wmdk_class_details.tpl' => 'wmdk/tracking/views/blocks/classes/details.tpl',
        'wmdk_class_basket.tpl' => 'wmdk/tracking/views/blocks/classes/basket.tpl',
        'wmdk_class_user.tpl' => 'wmdk/tracking/views/blocks/classes/user.tpl',
        'wmdk_class_payment.tpl' => 'wmdk/tracking/views/blocks/classes/payment.tpl',
        'wmdk_class_order.tpl' => 'wmdk/tracking/views/blocks/classes/order.tpl',
        'wmdk_class_thankyou.tpl' => 'wmdk/tracking/views/blocks/classes/thankyou.tpl',
        'wmdk_class_register.tpl' => 'wmdk/tracking/views/blocks/classes/register.tpl',
        'wmdk_class_account.tpl' => 'wmdk/tracking/views/blocks/classes/account.tpl',
        'wmdk_class_account_menu.tpl' => 'wmdk/tracking/views/blocks/classes/account-menu.tpl',
        'wmdk_class_content.tpl' => 'wmdk/tracking/views/blocks/classes/content.tpl',
        'wmdk_class_error404.tpl' => 'wmdk/tracking/views/blocks/classes/error-404.tpl',

        // Google Tag Manager
        'wmdk_google_tag_manager_default.tpl' => 'wmdk/tracking/google-tag-manager/default.tpl',
        'wmdk_google_tag_manager_noscript.tpl' => 'wmdk/tracking/google-tag-manager/no-script.tpl',
    ),
    
    'blocks' => array(
        array(
            'template'	=> 'layout/base.tpl',
            'block'		=> 'head_meta_robots',
            'file' 		=> '/views/blocks/head_meta_robots.tpl'
        ),
        array(
            'template'	=> 'layout/base.tpl',
            'block'		=> 'theme_svg_icons',
            'file' 		=> '/views/blocks/theme_svg_icons.tpl'
        ),
        array(
            'template'	=> 'layout/base.tpl',
            'block'		=> 'base_js',
            'file' 		=> '/views/blocks/base_js.tpl'
        ),

        'settings' => array(
            // Consent Manager
            array('group' => 'sWmdkTrackingCmpSettings', 'name' => 'bWmdkTrackingCmpManualBlocking', 'type' => 'bool', 'value' => 1),
            array('group' => 'sWmdkTrackingCmpSettings', 'name' => 'aaWmdkTrackingCmpVendorIds', 'type' => 'aarr', 'value' => [
                'CMP_VENDER_AMAZON' => 's40',
                'CMP_VENDER_AMAZONCLOUDFRONT' => 's1052',
                'CMP_VENDER_AWIN' => 's335',
                'CMP_VENDER_BINGADS' => 's11',
                'CMP_VENDER_CLOUDFLARE' => 's65',
                'CMP_VENDER_CMP' => 's24',
                'CMP_VENDER_CONSENTMANAGER' => 's23',
                'CMP_VENDER_CRITEO' => '91',
                'CMP_VENDER_DIANOMI' => '885',
                'CMP_VENDER_FACEBOOK' => 's7',
                'CMP_VENDER_GOOGLE' => 's135',
                'CMP_VENDER_GOOGLEADS' => 's1',
                'CMP_VENDER_GOOGLEANALYTICS' => 's26',
                'CMP_VENDER_GOOGLEFONTS' => 's2612',
                'CMP_VENDER_GTM' => 's905',
                'CMP_VENDER_INSTAGRAM' => 's14',
                'CMP_VENDER_KUPONA' => '424',
                'CMP_VENDER_OMIKRON' => 'c11580',
                'CMP_VENDER_TECNICA' => 'c29261',
                'CMP_VENDER_THEREACHGROUP' => '382',
                'CMP_VENDER_TRUSTEDSHOPS' => 's1432',
                'CMP_VENDER_VIMEO' => 's77',
                'CMP_VENDER_WP' => 's2434',
                'CMP_VENDER_XANDR' => '32',
                'CMP_VENDER_YOUTUBE' => 's30',
            ]),

            // Google Tag Manager
            array('group' => 'sWmdkTrackingGoogleTagManagerSettings', 'name' => 'sWmdkTrackingGoogleTagManagerId', 'type' => 'str', 'value' => 'GTM-KLDD9DE'),
        )
    ),
);