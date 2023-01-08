<?php
global $theme;

$breadcrumb = [
    [
        'title' => 'Home',
        'url' => 'index.php?p=home'
    ],
    [
        'title' => $title,
        'url' => 'index.php?p='.filter_input(INPUT_GET, 'p', FILTER_UNSAFE_RAW)
    ]
];

$theme->assign('title', $title);
$theme->assign('breadcrumb', $breadcrumb);
$theme->display('core/title.tpl');
