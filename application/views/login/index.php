<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);">Fenix<b>ERP</b></a>
        <small>Sistema de Gestão</small>
    </div>
    <?php get_msg('msgerro');?>
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST">
                <div class="msg">Preencha seus dados para acessar</div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="Usuário" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Senha" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">ACESSAR</button>
                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-6">
                        <a href="sign-up.html">Registrar Agora!</a>
                    </div>
                    <div class="col-xs-6 align-right">
                        <a href="forgot-password.html">Recuperar Senha?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


