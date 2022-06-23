<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => 'Tripleibusiness',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => '<b>Tripleibusiness</b>',
    'logo_img' => 'vendor/adminlte/dist/img/iiilogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#661-authentication-views-classes
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#662-admin-panel-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#67-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#68-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#69-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => false,

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#610-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#611-menu
    |
    */

    'menu' => [
        [
            'text' => 'search',
            'search' => true,
            'topnav' => true,
        ],
        
        
        [
           'text' => 'New Contact',
            'url'  => '/newcontacts',
            'icon' => 'fas fa-fw fa-edit',
        ],
        [
           'text' => 'slider',
            'url'  => '/slider',
            'icon' => 'fas fa-fw fa-edit',
        ],
        [
           'text' => 'Our Services',
            'url'  => '/services',
            'icon' => 'fas fa-fw fa-edit',
            // 'submenu' => [

            //     [
            //         'text'    => 'PR Visa',
            //         'icon'    => 'fas fa-share',
            //         'url'     => '#',
            //     ],
            //     [
            //         'text'    => 'Study Visa',
            //         'icon'    => 'fas fa-share',
            //         'url'     => '#',
            //     ],
            //     [
            //         'text'    => 'Work Visa',
            //         'icon'    => 'fas fa-share',
            //         'url'     => '#',
            //     ],
            //     [
            //         'text'    => 'Investor Visa',
            //         'icon'    => 'fas fa-share',
            //         'url'     => '#',
            //     ],
            //     [
            //         'text'    => 'Self Employment / Entrepreneur VIsa',
            //         'icon'    => 'fas fa-share',
            //         'url'     => '#',
            //     ],
            //     [
            //         'text'    => 'Travel Visa',
            //         'icon'    => 'fas fa-share',
            //         'url'     => '#',
            //     ],
            //     [
            //         'text'    => 'Visitor Visa',
            //         'icon'    => 'fas fa-share',
            //         'url'     => '#',
            //     ],


            // ]
        ],
        //canada start
        [
            'text'    => 'Canada',
            'icon'    => 'fas fa-fw fa-edit',
            'url'     => 'canada'
            // 'submenu' => [
                
            //     [
            //         'text'    => 'Parament Residence',
            //         'icon'    => 'fas fa-share',
            //         'url'     => 'canada',
            //         'submenu' => [
            //             [
            //                 'text' => 'Federal Skilled Worker Program',
            //                 'url'  => '#',
            //             ],
            //             [
            //                 'text' => 'Federal Skilled Trades',
            //                 'url'  => '#',
            //             ],
            //             [
            //                 'text' => 'Canadian Experience Class',
            //                 'url'  => '#',
            //             ],
            //             [
            //                 'text' => 'Provincial Nomination Program',
            //                 'url'  => '#',
            //             ],
            //         ],
            //     ],
            //     [
            //         'text'    => 'Family Class Sponsorship Program',
            //         'icon'    => 'fas fa-share',
            //         'url'     => '#',
            //     ],
            //     [
            //         'text'    => 'Quebec Immigration',
            //         'icon'    => 'fas fa-share',
            //         'url'     => '#',
            //         'submenu' => [
            //             [
            //                 'text' => 'Quebec Experience Class',
            //                 'url'  => '#',
            //             ],
            //             [
            //                 'text' => 'Quebec Skilled Worker',
            //                 'url'  => '#',
            //             ],
            //             [
            //                 'text' => 'Quebec Investor Program',
            //                 'url'  => '#',
            //             ],
            //             [
            //                 'text' => 'Quebec Family Sponsorship',
            //                 'url'  => '#',
            //             ],
            //         ],
            //     ],
            //     [
            //         'text'    => 'Work permit',
            //         'icon'    => 'fas fa-share',
            //         'url'     => '#',
            //         'submenu' => [
            //             [
            //                 'text' => 'Labour Market Impact Assessment',
            //                 'url'  => '#',
            //             ],
            //             [
            //                 'text' => 'NAFTA Work Permit',
            //                 'url'  => '#',
            //             ],
            //             [
            //                 'text' => 'Work Permit Canada',
            //                 'url'  => '#',
            //             ],
            //             [
            //                 'text' => 'Work Permit to Permanent Residency',
            //                 'url'  => '#',
            //             ],
            //             [
            //                 'text' => 'Global Talent Stream',
            //                 'url'  => '#',
            //             ],
            //         ],
            //     ],
            //     [
            //         'text'    => 'Business/Investor',
            //         'icon'    => 'fas fa-share',
            //         'url'     => '#',
            //         'submenu' => [
            //             [
            //                 'text' => 'Federal Program',
            //                 'url'  => '#',
            //             ],
            //             [
            //                 'text' => 'Provincial Nominee Program',
            //                 'url'  => '#',
            //             ],
            //             [
            //                 'text' => 'Quebec Program',
            //                 'url'  => '#',
            //             ],
            //         ],
            //     ],
            //     [
            //         'text'    => 'Study Visa',
            //         'icon'    => 'fas fa-share',
            //         'url'     => '#',
            //     ],
            //     [
            //         'text'    => 'Open Work Permit',
            //         'icon'    => 'fas fa-share',
            //         'url'     => '#',
            //     ],
                

            // ],
        ],
        //Australia start
                [
                    'text'    => 'Australia',
                    'url'     => 'australia/',
                    'icon'    => 'fas fa-fw fa-edit',
                    // 'submenu' => [
                    //     [
                    //         'text' => 'Skilled Visa',
                    //         'icon'    => 'fas fa-share',
                    //         'url'  => '#',
                    //         'submenu' => [
                    //             [
                    //                 'text' => '482 Visa',
                    //                 'url' => '#'

                    //             ],
                    //             [
                    //                 'text' => '400 Visa',
                    //                 'url' => '#'

                    //             ],

                    //         ]
                    //     ],
                    //     [
                    //         'text' => 'Visitor Visa',
                    //         'icon'    => 'fas fa-share',
                    //         'url'  => '#',
                    //         'submenu' => [
                    //             [
                    //                 'text' => '600 Visa',
                    //                 'url' => '#'

                    //             ],

                    //         ]
                    //     ],
                    //     [
                    //         'text' => 'Work Visa',
                    //         'icon'    => 'fas fa-share',
                    //         'url'  => '#',
                    //         'submenu' => [
                    //             [
                    //                 'text' => '186 Nomination',
                    //                 'url' => '#'

                    //             ],

                    //         ]
                    //     ],
                    //     [
                    //         'text' => ' Student Visa',
                    //         'icon'    => 'fas fa-share',
                    //         'url'  => '#',
                    //         'submenu' => [
                    //             [
                    //                 'text' => 'Subclass 485 Visa',
                    //                 'url' => '#'

                    //             ],

                    //         ]
                    //     ],
                    //     [
                    //         'text' => 'Permanent Residency',
                    //         'icon'    => 'fas fa-share',
                    //         'url'  => '#',
                    //         'submenu' => [
                    //             [
                    //                 'text' => 'Subclass 189 Visa',
                    //                 'url' => '#'

                    //             ],
                    //             [
                    //                 'text' => 'Subclass 190 Visa',
                    //                 'url' => '#'

                    //             ],
                    //             [
                    //                 'text' => 'Subclass 489 Visa',
                    //                 'url' => '#'

                    //             ],

                    //         ]
                    //     ],
                    // ],
                ],
                [
                   'text' => 'New Zealand',
                    'url'  => 'newzealand/',
                    'icon' => 'fas fa-fw fa-edit',
                ],
                [
                   'text' => 'Germany',
                    'url'  => 'germany/',
                    'icon' => 'fas fa-fw fa-edit',
                    // 'submenu' => [
                    //     [
                    //         'text' => 'Job Seeker Visa',
                    //         'icon' => 'fas fa-fw fa-share',
                    //         'url' => '#',
                    //     ],
                    //     [
                    //         'text' => 'Blue Card',
                    //         'icon' => 'fas fa-fw fa-share',
                    //         'url' => '#',
                    //     ],
                    //     [
                    //         'text' => 'Schengen Visa ',
                    //         'icon' => 'fas fa-fw fa-share',
                    //         'url' => '#',
                    //     ],
                    // ],
                ],
                [
                   'text' => 'UK',
                    'url'  => 'uk/',
                    'icon' => 'fas fa-fw fa-edit',
                    // 'submenu' => [
                    //     [
                    //         'text' => 'Business Visa ',
                    //         'icon' => 'fas fa-fw fa-share',
                    //         'url' => '#',
                    //     ],
                    //     [
                    //         'text' => 'Innovator Visa',
                    //         'icon' => 'fas fa-fw fa-share',
                    //         'url' => '#',
                    //     ],
                    // ],
                ],
                [
                   'text' => 'Latest Update ',
                    'url'  => 'latest_update/',
                    'icon' => 'fas fa-fw fa-edit',
                ],
                [
                   'text' => 'CSR Point ',
                    'url'  => 'crs_point/',
                    'icon' => 'fas fa-fw fa-edit',
                ],
                
                [
                   'text' => 'Country flags',
                    'url'  => 'admin_flag/',
                    'icon' => 'fas fa-fw fa-edit',
                ],
                [
                   'text' => 'Eligibility Check',
                    'url'  => 'showcheck/',
                    'icon' => 'fas fa-fw fa-edit',
                ],
                [
                   'text' => 'Newsletter',
                    'url'  => 'get_newletter/',
                    'icon' => 'fas fa-fw fa-edit',
                ],
                [
                   'text' => 'Assessment',
                    'url'  => 'showassisst/',
                    'icon' => 'fas fa-fw fa-edit',
                ],
                [
                   'text' => 'Testimonial',
                    'url'  => 'testimonial/',
                    'icon' => 'fas fa-fw fa-edit',
                ],
                [
                   'text' => 'Contact',
                    'url'  => 'get_contact/',
                    'icon' => 'fas fa-fw fa-edit',
                ],
                [
                   'text' => 'About Us',
                    'url'  => 'about/',
                    'icon' => 'fas fa-fw fa-edit',
                ],
                [
                   'text' => 'Policies',
                    'url'  => 'policies/',
                    'icon' => 'fas fa-fw fa-edit',
                ],
                [
                   'text' => 'Study Visa Top',
                    'url'  => 'topstudyvisa/',
                    'icon' => 'fas fa-fw fa-edit',
                ],
                [
                   'text' => 'Study Visa Main',
                    'url'  => 'mainstudyvisa/',
                    'icon' => 'fas fa-fw fa-edit',
                ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#612-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#613-plugins
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
];
