<?php
include './includes/preloader.php';
include './includes/header_login.php';
?>
<section class="">
  
    <div class="px-4 py-4 px-md-5 text-center text-lg-start">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class=" mx-auto col-lg-10 mb-0 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5 px-md-5">

                            <!-- Pills-BTN navs -->
                            <ul class="nav nav-pills nav-justified col-md-6 mx-auto" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active  me-3" id="tab-login" data-bs-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">LOGIN</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link  me-3" id="tab-register" data-bs-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">CADASTRAR</a>
                                </li>
                            </ul>

                            <div class="tab-content ">
                                <!-- FORMULARIO DE LOGIN -->
                                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                                    <form>
                                        <div class="col-sm-8 mx-auto">
                                            <div class="text-login mb-5 mt-5">
                                                <p class="text-muted text-center">Informe seus dados para acesso ao sistema</p>
                                            </div>

                                            <!-- Email input -->
                                            <div class="form-floating mb-4">
                                                <input type="email" id="login-email" class="form-control w-100" />
                                                <label class="form-label" for="login-email">E-mail</label>
                                            </div>

                                            <!-- Password input -->
                                            <div class="form-floating mb-4">
                                                <input type="password" id="login-senha" class="form-control w-100" />
                                                <label class="form-label" for="login-senha">Senha</label>
                                            </div>

                                            <!-- 2 column grid layout -->
                                            <div class="row mb-3">

                                                <div class="container d-flex justify-content-end">
                                                    <p class=" mb-3 pb-lg-2 ml-auto"><a class="" href="esqueci_senha">Esqueci minha senha</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit button -->
                                        <div class="col-sm-8 mx-auto">

                                            <a href="./main_user.php" class="btn btn-log btn-lg btn-block w-100 mb-3" type="button">ENTRAR</a>
                                        </div>

                                    </form>
                                </div>

                                <!-- FORMULARIO DE CADASTRO -->

                                <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                                    <form>
                                        <div class="  mx-auto">
                                            <div class="text-cadastre text-center mb-5 mt-5">
                                                <p>Inscreva-se agora</p>
                                            </div>

                                            <!-- Name input -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" id="nome" class="form-control" />
                                                        <label class="form-label" for="nome">Nome</label>
                                                    </div>
                                                </div>

                                                <!-- Username input -->
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" id="register-email" class="form-control" />
                                                        <label class="form-label" for="register-email">E-mail</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- data de nascimento -->
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-floating mb-3">
                                                        <input type="date" id="dataNasc" class="form-control" />
                                                        <label class="form-label" for="dataNasc">Data de nascimento</label>
                                                    </div>
                                                </div>

                                                <!-- telefone -->
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" id="telefone" class="form-control" />
                                                        <label class="form-label" for="telefone">Telefone</label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-floating mb-3">
                                                <input type="text" id="linkedin" class="form-control" />
                                                <label class="form-label" for="linkedin">LinkedIn</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" id="github" class="form-control" />
                                                <label class="form-label" for="github">Github</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" id="link-curriculo" class="form-control" />
                                                <label class="form-label" for="link-curriculo">Curriculo Lattes <span>(opcional)</span></label>
                                            </div>

                                            <div class="row">
                                                <!-- Password input -->
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" id="register-senha" class="form-control" />
                                                        <label class="form-label" for="register-senha">Senha</label>
                                                    </div>
                                                </div>

                                                <!-- Repeat Password input -->
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" id="repeteSenha" class="form-control" />
                                                        <label class="form-label" for="repeteSenha">Confirmar senha</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Submit button -->
                                            <div class="col-md-5 ms-auto">
                                                <div class="row ">
                                                    <div class="col-md-6">
                                                        <a href="./index.php" class="btn btn-cancelar btn-lg btn-block w-100 mb-5 mt-4" type="button">CANCELAR</a>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <button class="btn btn-log btn-lg btn-block w-100 mb-5 mt-4" type="button" data-bs-toggle="modal" data-bs-target="#cadBackdrop">CADASTRAR</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                        <div class="text-center mb-4 text-muted">
                            <?php
                            include './includes/footer_login.php';
                            include './includes/modal/msg_cad_sucess.php'
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</section>