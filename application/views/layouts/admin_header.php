<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url(); ?>assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Universitas Harapan Bangsa - <?= $title ?></title>

    <!-- <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5"> -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fonts/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/libs/typeahead-js/typeahead.css" />

    <!-- Page CSS -->
    <?php
    $uri_segment = $this->uri->segment(1);
    switch ($uri_segment) {
        case 'profile':
            echo "<link rel=\"stylesheet\" href=\"" . base_url() . "assets/vendor/css/pages/page-user-view.css\" />";
            break;
    }
    ?>

    <!-- Helpers -->
    <script src="<?= base_url(); ?>assets/vendor/js/helpers.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url(); ?>assets/js/config.js"></script>

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">