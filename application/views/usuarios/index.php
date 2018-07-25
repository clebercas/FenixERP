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

            
                        <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body table-responsive">
                            <table class="table table-hover table-bordered">
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
                                    
                                    foreach ($users as $user){
                                        
                                        echo '<tr>
                                                    <td>'.$user->id.'</td>
                                                    <td>'.$user->username.'</td>
                                                    <td>'.$user->email.'</td>
                                                    <td><a href="" title="">Editar</a> <a href="" title="">Apagar</a></td>
                                              </tr>';
                                    }
                                    
                                    ?>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->
        </div>
    </section>

