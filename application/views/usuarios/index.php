<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="content">
    <div class="container-fluid">
        <div class="body">
            <ol class="breadcrumb breadcrumb-bg-pink">
                <li><a href="<?php echo base_url(); ?>"><i class="material-icons">home</i> Principal</a></li>
                <li class="active"><i class="material-icons">library_books</i> Usuários Cadastrados</li>
            </ol>
        </div>
            <!-- Botão de adição de novo usuário -->
            <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                <a class="btn btn-primary" title="Novo usuário"><i class="material-icons left">add</i>Adicionar</a>
            </div>
            </div>
            <!-- Botão de adição de novo usuário -->
        <!-- Tabela -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($users as $user) {

                                        echo '<tr>
                                                    <td>' . $user->id . '</td>
                                                    <td>' . $user->username . '</td>
                                                    <td>' . $user->email . '</td>
                                                    <td><a class="btn"><i class="material-icons left">create</i>Editar</a> <a class="btn"><i class="material-icons left">delete</i>Apagar</a></td>
                                              </tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tabela -->
      
    </div>
        
</section>

