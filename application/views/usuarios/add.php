<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="content">
    <div class="container-fluid">
        <div class="body">
            <ol class="breadcrumb breadcrumb-bg-pink">
                <li><a href="<?php echo base_url(); ?>"><i class="material-icons">home</i> Principal</a></li>
                <li class="active"><i class="material-icons">library_books</i> Novo Usuário</li>
            </ol>
        </div>
    </div>

    <!-- Formulário de novo regutro -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">

                <div class="body">
                    <form id="form_add" name="form_add">
                        <label for="username">Nome</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="username" name ="username" class="form-control" placeholder="Digite o nome">
                            </div>
                        </div>
                        <label for="email">Email</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Digite o emmail">
                            </div>
                        </div>
                        <label for="password">Senha</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="password" name="password" class="form-control" placeholder="Digite a Senha">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
                    </form>
                </div>



            </div>
        </div>
    </div>
    <!-- Formulário de novo regutro -->
</section>