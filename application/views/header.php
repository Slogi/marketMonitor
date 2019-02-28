<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <script src="<?= asset_url().'assets/jquery/jquery-3.3.1.min.js';?>"></script>
    <script src="<?= asset_url().'assets/bootstrap/js/bootstrap.min.js';?>"></script>
    <link href="<?= asset_url().'assets/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
    <link href="<?= asset_url().'assets/css/headerfooter.css';?>" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="#">Market Monitor</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item search-bar">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </li>
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-2">
                        <li class="px-3 py-2">
                            <form class="form" role="form">
                                <div class="form-group">
                                    <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block bg-info">Login</button>
                                </div>
                                <div class="form-group text-center">
                                    <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Forgot password</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Reset your password..</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>




