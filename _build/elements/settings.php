<?php

return [
    'frontend_css' => [
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'swal2_frontend',
    ],
    'frontend_js' => [
        'xtype' => 'textfield',
        'value' => '[[+jsUrl]]sweetalert2.all.min.js,[[+jsUrl]]default.min.js',
        'area' => 'swal2_frontend',
    ],
    'position' => [
        'xtype' => 'textfield',
        'value' => 'top-end',
        'area' => 'swal2_main',
    ],
    'timer' => [
        'xtype' => 'numberfield',
        'value' => 3000,
        'area' => 'swal2_main',
    ],
    'showconfirmbutton' => [
        'xtype' => 'combo-boolean',
        'value' => false,
        'area' => 'swal2_main',
    ],
    'toast' => [
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'swal2_main',
    ],
    'width' => [
        'xtype' => 'textfield',
        'value' => '19rem',
        'area' => 'swal2_main',
    ],
    'ajaxform' => [
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'swal2_packages',
    ],
    'minishop2' => [
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'swal2_packages',
    ],
    'office' => [
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'swal2_packages',
    ],
    'msoneclick' => [
        'xtype' => 'combo-boolean',
        'value' => true,
        'area' => 'swal2_packages',
    ],
];