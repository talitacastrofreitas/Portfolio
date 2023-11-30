<?php
include './includes/header.php';
?>

<!-- <section class="vh-100">
	<div class="container-fluid">
		<div class="row">


			<div class="col-sm-7 px-0 d-none d-sm-block">
				<img src="./img/login.png" alt="Login image" class="w-100 vh-100 img-fluid" style="object-fit: cover; object-position: left;">
			</div>


			<div class="col-sm-5">
				<div class=" px-5 ms-xl-4 d-flex justify-content-center align-items-center">
					<img src="./img/logo.svg" alt="logo" class="mb-0 img-fluid">
				</div>

				<div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-2 pt-5 pt-xl-0 mt-xl-n5">

					<form style="width: 23rem;">

						<p class="fw-normal mb-3 pb-3 text-white text-center">Informe seus dados para acesso ao sistema</p>

						<div class="form-floating mb-3">
							<input type="email" id="email" class="form-control" />
							<label class="form-label" for="email">E-mail</label>
						</div>

						<div class="form-floating mb-3">
							<input type="password" id="senha" class="form-control form-control-lg" />
							<label class="form-label" for="senha">Senha</label>
						</div>

						<div class="container d-flex justify-content-end">
							<p class="small mb-4 pb-lg-2 ml-auto"><a class="text-white esqueci-senha" href="#!">Esqueci minha senha</a></p>
						</div>

						<div class="">
							<button class="btn btn-log btn-lg btn-block w-100 mb-3" type="button">LOGIN</button>
						</div>

						<div class="divider d-flex align-items-center my-4">
							<p class="text-center mx-2 mb-0 text-white">Não tem uma conta? <a href="#!" class="link text-white">Cadastre-se</a></p>

						</div>

						<div class="text-center text-white mt-4">
							<?php
							include './includes/footer_login.php'
							?>
						</div>
					</form>

				</div>

			</div>
		</div>
	</div>
</section> -->

<section class="vh-100">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-7 px-0 d-none d-sm-block">
                    <img src="./img/login.png" alt="Imagem de Login" class="w-100 vh-100 img-fluid"
                        style="object-fit: cover; object-position: left;">
                </div>

                <div class="col-sm-5 d-flex align-items-center justify-content-center">
                    <div class=" text-center px-5 ms-xl-4">

                        <img src="./img/logo.svg" alt="logo" class="mb-0 img-fluid">

                        <div class="d-flex flex-column align-items-center h-custom-2 mt-2 pt-5 pt-xl-0 mt-xl-n5">

                            <form style="width: 23rem;">

                                <p class="fw-normal mb-3 pb-3 text-white text-center">Informe seus dados para acesso ao
                                    sistema</p>

                                <div class="form-floating mb-3">
                                    <input type="email" id="email" class="form-control" />
                                    <label class="form-label" for="email">E-mail</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" id="senha" class="form-control form-control-lg" />
                                    <label class="form-label" for="senha">Senha</label>
                                </div>

                                <div class="container d-flex justify-content-end">
                                    <p class="small mb-4 pb-lg-2 ml-auto"><a class="text-white esqueci-senha"
                                            href="esqueci_senha">Esqueci minha senha</a></p>
                                </div>

                                <div class="">
                                    <a href="./index.php" class="btn btn-log btn-lg btn-block w-100 mb-3" type="button">ENTRAR</a>
                                </div>

                                <div class="divider d-flex align-items-center my-4">
                                    <p class="text-center mx-2 mb-0 text-white">Não tem uma conta? <a href="./cadastro_user.php"
                                            class="link text-white">Cadastre-se</a></p>
                                </div>

                            </form>

                            <div class="text-center text-white mt-4">
                                <?php include './includes/footer_login.php'; ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
