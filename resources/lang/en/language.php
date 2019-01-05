<?php
// resources/lang/en/lang.php

return [
    'all_product'       => 'All products',

    'my_profile'        => 'My profile',
    'notfound'          => 'Not found',
    'empty_product'     => 'No product!',
    'no_data'           => 'No data!',
    'empty_entry'       => 'No entry!',
    'not_found'         => 'Sorry! We can\'t find that page!',

    'cart_title'        => 'Shopping cart',
    'wishlist'          => 'Wishlist',
    'add_to_wishlist'   => 'Add to wishlist',
    'compare'           => 'Compare',
    'add_to_compare'    => 'Add to compare',
    'add_to_cart'       => 'Add to cart',
    'for_got_password'  => 'Forgot password',
    'login'             => 'Login',
    'search'            => 'Search',
    'account'           => 'Account',
    'logout'            => 'Logout',
    'home'              => 'Home',
    'blog'              => 'Blog',
    'contact'           => 'Contact us',
    'about'             => 'About us',
    'shop'              => 'Shop',
    'category'          => 'Category',
    'brands'            => 'Brands',
    'maintenance'       => 'Sorry! We are currently doing site maintenance!',
    'features_items'    => 'Features Items',
    'recommended_items' => 'Recommended items',
    'thank_contact'     => 'Thanks!. We will contact as soon as possible!',
    'date_available'    => 'Date available',
    'default_available' => 'Allows purchase from creation date as default.',
    'vendor'            => 'Vendor',

    'contact_form'      => [
        'title'   => 'Get in touch',
        'info'    => 'Contact infomation',
        'name'    => 'Name',
        'email'   => 'Email',
        'phone'   => 'Phone',
        'subject' => 'Subject',
        'content' => 'Content',
        'message' => 'Your message...',
        'submit'  => 'Submit',
    ],
    'search_form'       => [
        'keyword' => 'Your keyword',
    ],

    'admin'             => [
        'note_test'                    => '<span style="font-size: 30px;
        color: #f3d80e;
        padding-left: 10%;
        z-index:999999;
        font-weight: bold;">This user <span style="color:red">only</span> view</span>',
        'coupon_allow_guest'           => 'Allow to guest use coupon',
        'paypal_client_id'             => 'Client ID',
        'paypal_secret'                => 'Secret',
        'paypal_mode'                  => 'Paypal mode',
        'paypal_log'                   => 'Enable log',
        'paypal_path_log'              => 'Path log (in storage)',
        'paypal_status'                => 'Enable module',
        'paypal_currency'              => 'Currency',
        'paypal_order_status_success'  => 'Order status success',
        'paypal_order_status_faild'    => 'Order status faild',
        'not_empty'                    => 'Data not empty!',
        'search_order'                 => 'Search order id, email, phone or name',
        'only_numeric'                 => 'Please input numeric!',
        'order_year'                   => 'In 12 months',
        'order_month'                  => 'In this month',
        'dashboard'                    => 'Dashboard',
        'total_product'                => 'Product total',
        'total_order'                  => 'Order total',
        'total_customer'               => 'Customer total',
        'new_customer'                 => 'New customer',
        'hot_product'                  => 'Hot product',
        'new_product'                  => 'New product',
        'list_product'                 => 'List product',
        'relation_product'             => 'Releation product',
        'viewed_product'               => 'Viewed product',
        'enable_https'                 => 'Enable https',
        'enable_log_admin'             => 'Enable log admin',
        'enable_watermark'             => 'Use Watermark',
        'use_coupon'                   => 'Use coupon',
        'use_shipping'                 => 'Use shipping',
        'show_date_available'          => 'Show date available',
        'product_buy_out_of_stock'     => 'Allow buy product out of stock',
        'product_display_out_of_stock' => 'Show product out of stock',
        'product_preorder'             => 'Allow pre-order',
        'smtp_mode'                    => 'Use SMTP',
        'smtp_port'                    => 'Port SMTP',
        'smtp_security'                => 'Security SMTP',
        'smtp_password'                => 'Password SMTP',
        'smtp_user'                    => 'Tài khoản SMTP',
        'smtp_host'                    => 'Server SMTP',
        'shop_allow_guest'             => 'Allow for guest order',
        'field_config'                 => 'Fields config',
        'use_mode'                     => 'Use Mode',
        'config_control'               => 'Config control',
        'site_status'                  => 'On/Off website',
        'config_paypal'                => 'Config Paypal',
        'config_email'                 => 'Config Email',
        'config_display'               => 'Config Items/pages display',
        'info_global'                  => 'Info global',
        'cms_news'                     => 'News manager',
        'cms_page'                     => 'Page manager',
        'cms_name'                     => 'Entry name',
        'cms_content'                  => 'Entry',
        'cms_category'                 => 'Cms category',
        'product_manager'              => 'Product manager',
        'order_manager'                => 'Order manager',
        'shop_category'                => 'Shop category',
        'special_price_manager'        => 'Special price manager',
        'special_price'                => 'Special price',
        'date_start'                   => 'Date start',
        'date_end'                     => 'Date end',
        'product'                      => 'Product',
        'parent_category'              => 'Parent category',
        'page_name'                    => 'Page name',
        'title'                        => 'Title',
        'name'                         => 'Name',
        'email'                        => 'Email',
        'phone'                        => 'Phone',
        'address'                      => 'Address',
        'image'                        => 'Image',
        'sub_image'                    => 'Sub image',
        'sort'                         => 'Sort',
        'status'                       => 'Status',
        'content'                      => 'Content',
        'keyword'                      => 'Keyword',
        'description'                  => 'Description',
        'comment'                      => 'Comment',
        'discount_percent'             => 'Discount percent',
        'origin_price'                 => 'Origin price',
        'last_modify'                  => 'Last modify',
        'created_at'                   => 'Created at',
        'language_manager'             => 'Language manager',
        'banner_manager'               => 'Banner manager',
        'shipping_manager'             => 'Shipping manager',
        'promotion_manager'            => 'Promotion manager',
        'analytic'                     => 'Analytic',
        'report'                       => 'Report',
        'detail'                       => 'Detail',
        'access_denied'                => 'Access denied!',
        'access_denied_msg'            => 'Can\'t disable this language. Please change default language before do that.',
    ],
    'order'             => [
        'title'                 => 'Order',
        'customer_name'         => 'Customer name',
        'customer'              => 'Customer',
        'sub_total'             => 'Sub total',
        'shipping_price'        => 'Shipping price',
        'free_shipping'         => 'Free shipping',
        'discount'              => 'Discount',
        'total'                 => 'Total',
        'order_total'           => 'Order Total',
        'received'              => 'Received',
        'balance'               => 'Balance',
        'status'                => 'Status',
        'shipping_address'      => 'Address',
        'shipping_address1'     => 'Shipping address 1',
        'shipping_address2'     => 'Shipping address 2',
        'shipping_name'         => 'Name',
        'shipping_phone'        => 'Phone',
        'note'                  => 'Note',
        'order_detail'          => 'Order detail',
        'order_status'          => 'Order status',
        'order_payment_status'  => 'Payment status',
        'order_shipping_status' => 'Shipping status',
        'order_note'            => 'Order note',
        'order_history'         => 'Order history',
        'history_staff'         => 'Staff',
        'history_content'       => 'Content',
        'history_time'          => 'Time',
        'select_product'        => 'Select product',
        'select_customer'       => 'Select customer',
        'add_more'              => 'Add more',
        'search_keyword'        => 'Search keyword',
        'success'               => 'Order success',
        'currency'              => 'Currency',
        'exchange_rate'         => 'Exchange rate',
        'payment_method'        => 'Payment method',
        'email'                 => [
            'title'     => 'Email',
            'new_title' => 'NEW ORDER',
        ],
    ],

    'product'           => [
        'sku'          => 'SKU',
        'sku_validate' => 'SKU may only contain letters, numbers, and dashes.',
        'name'         => 'Product name',
        'price'        => 'Price',
        'quantity'     => 'Quantity',
        'total_price'  => 'Total',
        'attribute'    => 'Attribute',
        'add_product'  => 'Add product',
        'edit_product' => 'Edit product',
        'category'     => 'Category',
        'product_name' => 'Product name',
        'product_type' => 'Product type',
        'product_info' => 'Product info',
        'price_cost'   => 'Price cost',
        'stock'        => 'Stock',
        'view'         => 'View',
        'sold'         => 'Sold',
        'import_multi' => 'Import multiple',

    ],
    'promotion'         => [
        'code'        => 'Coupon code',
        'value'       => 'Value',
        'type'        => 'Type',
        'description' => 'Description',
        'maximum'     => 'Maximum',
        'used'        => 'Used',
        'expire'      => 'Expire',
        'history'     => 'History',
        'exist'       => 'This code already exist!',
        'validate'    => 'The may only contain letters, numbers, and dashes.',
        'example'     => 'Ex:',
        'number_uses' => 'Number used',
        'customer'    => 'Customer',
        'used_at'     => 'Used at',
        'content'     => 'Content',
        'point'       => 'Points',
        'cash'        => 'Cash',
        '%'           => '%',
        'note'        => 'Cash - discount with cash; Point - give points; % - discount rate',
        'process'     => [
            'invalid'         => 'This code invalid!',
            'over'            => 'This code exceeds the number of times it is used!',
            'used'            => 'You already used this code!',
            'undefined'       => 'Error undefined!',
            'not_allow'       => 'You can not use Point in here!',
            'value'           => 'This coupon have value :value for this order!',
            'expire'          => 'Code expires!',
            'completed'       => 'Use coupon success!',
            'must_login'      => 'You must login to use this coupon!',
            'user_id_invalid' => 'User ID invalid!',
        ],
    ],

    'customer'          => [
        'name'         => 'Name',
        'phone'        => 'Phone',
        'email'        => 'Email',
        'address'      => 'Address',
        'address1'     => 'Address 1',
        'address2'     => 'Address 2',
        'order_total'  => 'Order Total',
        'amount_total' => 'Amount Total',
        'created_at'   => 'Time added',
    ],

    'process'           => [
        'productImport'      => 'Import multiple product',
        'productImport_text' => 'Download file format',
    ],

    'cart'              => [
        'over'           => 'Product :item has exceeded the maximum number of allowed quantity.',
        'exist'          => 'This product exist in :instance',
        'apply'          => 'Apply',
        'coupon'         => 'Coupon',
        'remove_coupon'  => 'Remove coupon',
        'payment_method' => 'Payment method',
        'checkout'       => 'Checkout',
        'coupon_empty'   => 'Coupon empty!',
        'delete'         => 'Delete',
        'remove_all'     => 'Remove all',
        'back'           => 'Back',
        'to_name'        => 'To name',
        'phone'          => 'Phone',
        'email'          => 'Email',
        'address1'       => 'Address 1',
        'address2'       => 'Address 2',
        'note'           => 'Note',
    ],
    'profile'           => [
        'empty_order'  => 'You have no orders!',
        'total'        => 'Total',
        'status'       => 'Status',
        'date_add'     => 'Date add',
        'detail_order' => 'Order detail',
    ],

    'config'            => [
        'logo'        => 'Logo',
        'title'       => 'Title',
        'description' => 'Description',
        'keyword'     => 'Keyword',
        'phone'       => 'Phone',
        'long_phone'  => 'Long phone',
        'time_active' => 'Time active',
        'address'     => 'Address',
        'email'       => 'Email',
        'language'    => 'Language',
        'currency'    => 'Currency',
        'watermark'   => 'Watermark',
        'template'    => 'Template',
    ],

    'currency'          => [
        'manager'      => 'Currency manager',
        'code'         => 'Code',
        'name'         => 'Name',
        'symbol'       => 'Symbol',
        'precision'    => 'Precision',
        'rate'         => 'Exchange rate',
        'thousands'    => 'Thousands separator',
        'status'       => 'Status',
        'sort'         => 'Sort',
        'symbol_first' => 'Symbol first',
    ],
    'email'             => [
        'order' => [
            'title_1'      => 'Hi! Website :website has new order!',
            'order_id'     => 'Order ID',
            'toname'       => 'Customer name',
            'address'      => 'Address',
            'phone'        => 'Phone',
            'note'         => 'Note',
            'order_detail' => 'Order detail',
            'sort'         => 'No.',
            'sku'          => 'SKU',
            'name'         => 'Name',
            'qty'          => 'Qty',
            'total'        => 'Total',
            'sub_total'    => 'Sub total',
            'shipping_fee' => 'Shipping fee',
            'discount'     => 'Discount',
            'order_total'  => 'Order total',
        ],
    ],

    'api'               => [
        'manager'             => 'Api manager',
        'name'                => 'Api name',
        'name_help'           => 'Name of api in route/api.php',
        'hidden_default'      => 'Fields hidden default',
        'hidden_default_help' => 'Hidden fileds if "Type Api" is "public"',
        'type'                => 'Type',
        'type_help'           => 'private: only local, secrect: requirement secret key, public: no screct',
        'status'              => 'Status',
        'secret_key'          => 'Secret key',
        'hidden_fileds'       => 'Fields hidden',
        'hidden_fileds_help'  => 'Hidden fields.',
        'exp'                 => 'Expire',
        'ip_allow'            => 'IPs allow',
        'ip_allow_help'       => 'Allow only IPs. Priority than ip deny list',
        'ip_deny'             => 'IPs deny',
        'created_at'          => 'Created at',
        'updated_at'          => 'Updated at',
        'guide'               => 'Please read document in <a target=_new href="https://s-cart.org/guide.html">HERE</a>',
        'no_hidden'           => 'No hidden',
        'no_secret'           => 'No secret',
    ],
    'attribute'         => [
        'manager'     => 'Attribute manager',
        'group'       => 'Attribute group',
        'group_name'  => 'Group name',
        'status'      => 'Status',
        'sort'        => 'Sort',
        'type'        => 'Type',
        'detail'      => 'Attribute detail',
        'detail_name' => 'Detail name',
        'no_item'     => 'No attribute',
        'add_more'    => 'Add more',
    ],
    'layout'            => [
        'manager'        => 'Layout manager',
        'name'           => 'Layout name',
        'position'       => 'Layout position',
        'page_display'   => 'Page display',
        'status'         => 'Status',
        'sort'           => 'Sort',
        'header'         => 'Header -  In <head></head>',
        'top'            => 'Top - Bellow <body>',
        'footer'         => 'Footer - Above <footer>',
        'bottom'         => 'Bottom - Above </body>',
        'home'           => 'Home page',
        'cms_list'       => 'Blog list',
        'cms_detail'     => 'Blog detail',
        'cms_page'       => 'Page',
        'about'          => 'About page',
        'contact'        => 'Contact page',
        'product_list'   => 'Product list',
        'product_detail' => 'Product detail',
        'shop_cart'      => 'Cart page',
        'shop_account'   => 'Account page: login, register, forgot..',
        'shop_profile'   => 'Profile page',
        'shop_compare'   => 'Compare page',
        'shop_wishlist'  => 'Wishlist page',

    ],

];
