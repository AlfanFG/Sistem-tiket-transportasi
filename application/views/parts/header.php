<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

    <title>Neon | Green Skin</title>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/neon-core.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/neon-theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/neon-forms.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/skins/cafe.css">
    <link href="<?php echo base_url() ?>assets/bootstrap-sweetalert-master/assets/docs.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap-sweetalert-master/dist/sweetalert.css">
    

    <script src="<?php echo base_url() ?>assets/js/jquery-1.11.3.min.js"></script>

    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
@media print{@page {size: landscape}}
  .modal.modal-wide .modal-dialog {
  width: 90%;
}
.modal-wide .modal-body {
  overflow-y: auto;
}

#myModal1 .modal-body p { margin-bottom: 900px }
h4.modal-title {
    text-align: center;
}

</style>
</head>

<body class="page-body skin-green" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
    
    <div class="sidebar-menu">

        <div class="sidebar-menu-inner">
            
            <header class="logo-env">

                <!-- logo -->
                <div class="logo">
                    <a href="index.html">
                        <img src="<?php echo base_url() ?>assets/images/logo@2x.png" width="120" alt="" />
                    </a>
                </div>

                <!-- logo collapse icon -->
                <div class="sidebar-collapse">
                    <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>

                                
                <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                <div class="sidebar-mobile-menu visible-xs">
                    <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>

            </header>
 