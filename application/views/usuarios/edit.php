<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section class="content">
    <div class="container-fluid">
        <div class="body">
            <ol class="breadcrumb breadcrumb-bg-pink">
                <li><a href="<?php echo site_url('usuarios') ?>"><i class="material-icons">home</i> Usuários</a></li>
                <li class="active"><i class="material-icons">library_books</i> Editar Usuário</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xs-12col-sm-12 col-md-12 col-lg-12">
                <p><?php erros_validacao();
                         get_msg('msgerro');
                ?></p>
            </div>
        </div>

        <!-- Formulário de novo regutro -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="body">
                        <form id="form_add" name="form_add" method="post">
                            <input type="hidden" value="<?php echo $user->id?>" name="id_usuario"></input>
                            <?php if($this->session->user_id==1):?><!-- Somente o usuário admin pode realizar a edição do grupo-->
                            <label for="grupo">Grupo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="grupo">
                                        <?php
                                            echo '<option value="1" '.($group== 1 ? 'selected=""':'').'>Administrador</option>';
                                            echo '<option value="1" '.($group== 2 ? 'selected=""':'').'>Membro</option>';                                     
                                        ?> 
                                            </select>
                                </div>
                               
                            </div>
                             <?php endif;?>
                            <label for="username">Nome</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="username" name ="username" class="form-control" value="<?php echo set_value('username', $user->username)?>" placeholder="Digite o nome">
                                </div>
                            </div>
                            <label for="email">Email</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="email" id="email" name="email" class="form-control" value="<?php echo set_value('email',$user->email)?>" placeholder="Digite o emmail">
                                </div>
                            </div>
                            <label for="password">Senha</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Digite a Senha">
                                </div>
                            </div>
                            <label for="password2">Confirmação de senha</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirme a Senha">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SALVAR</button>
                        </form>
                    </div>



                </div>
            </div>
        </div>
        <!-- Formulário de novo regutro -->
    </div>
</section>