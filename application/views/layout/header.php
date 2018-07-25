<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>FenixERP</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="<?php echo site_url('plugins/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="<?php echo site_url('plugins/node-waves/waves.css') ?>" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="<?php echo site_url('plugins/animate-css/animate.css')?>" rel="stylesheet" />

        <!-- Morris Chart Css-->
        <link href="<?php echo site_url('plugins/morrisjs/morris.css')?>" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="<?php echo site_url('css/style.css')?>" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="<?php echo site_url('css/themes/all-themes.css')?>" rel="stylesheet" />
        
        <!-- JQuery DataTable Css -->
        <link href="<?php echo site_url('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
        <!--
        <link href="jquery-datatable/css/datatables_bootstrap.css" rel="stylesheet">
        <link href="jquery-datatable/css/datatables.min.css" rel="stylesheet">
          -->
    </head>


        <?php
        if ($this->ion_auth->logged_in()) {//Início do if se está logado
            ?>
    
    <body class="theme-red">
            <!-- Top Bar -->
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                        <a href="javascript:void(0);" class="bars"></a>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>">FenixERP</a>
                    </div>
                </div>
            </nav>
            <!-- #Top Bar -->
            <section>
                <!-- Left Sidebar -->
                <aside id="leftsidebar" class="sidebar">
                    <!-- User Info -->
                    <div class="user-info">
                        <div class="image">
                            <img src="<?php echo site_url('images/user.png')?>" width="48" height="48" alt="User" />
                        </div>
                        <div class="info-container">
                            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                            <div class="email">john.doe@example.com</div>
                            <div class="btn-group user-helper-dropdown">
                                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo site_url('login/logout')?>"><i class="material-icons">input</i>Sair</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- #User Info -->
                    <!-- Menu -->
                    <div class="menu">
                        <ul class="list">
                            <li class="header">MENU DO SISTEMA</li>
                            <li class="active">
                                <a href="<?php echo base_url(); ?>">
                                    <i class="material-icons">home</i>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="<?php echo site_url('usuarios')?>">
                                    <i class="material-icons">person</i>
                                    <span>Usuários</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">assignment</i>
                                    <span>Forms</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
                                    </li>
                                    <li>
                                        <a href="pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                                    </li>
                                    <li>
                                        <a href="pages/forms/form-examples.html">Form Examples</a>
                                    </li>
                                    <li>
                                        <a href="pages/forms/form-validation.html">Form Validation</a>
                                    </li>
                                    <li>
                                        <a href="pages/forms/form-wizard.html">Form Wizard</a>
                                    </li>
                                    <li>
                                        <a href="pages/forms/editors.html">Editors</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                    <!-- #Menu -->
                    <!-- Footer -->
                    <div class="legal">
                        <div class="copyright">
                            &copy; <?php echo date('Y'); ?> <a href="javascript:void(0);">FenixERP</a>.
                        </div>
                        <div class="version">
                            <b>Version: </b> 1.0
                        </div>
                    </div>
                    <!-- #Footer -->
            </section>
        <?php } ?>
        <?php
        if (!$this->ion_auth->logged_in()) {//Início do if se está logado
            ?>
        <body class="login-page">
        <?php } ?>
