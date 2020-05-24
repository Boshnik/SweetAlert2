<?php

return [
    'frontend_css' => [
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'swal2_frontend',
    ],
    'frontend_js' => [
        'xtype' => 'textfield',
        'value' => '//cdn.jsdelivr.net/npm/sweetalert2@9,[[+jsUrl]]default.min.js',
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
];