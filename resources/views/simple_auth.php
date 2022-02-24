<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
	<title><?= $_ENV['ProjectName'] ?> - versão 4.1</title>
	<meta name="description" content="O DDTank está de volta em sua versão antiga, fortaleça sua arma, relaxe no Spa, seja mestre no laboratório. Jogue grátis agora mesmo o melhor <b>DDTank</b> antigo!" />
	<meta name="keywords" content="ddtank, ddtank 337, ddtank nova era, ddtank portugues, ddtank orange, ddtank antigo, ddtank337, 337 ddtank, 337ddtank" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/1391875988364091400/kQCNQnOV.jpg" />
	<link rel="shortcut icon" href="<?= base_url(); ?>/assets/media/logos/favicon.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<!--Begin::Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&amp;l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
	</script>
	<!--End::Google Tag Manager -->
</head>
<!--end::Head-->
<!--begin::Body-->
<?php if (isset($_SESSION['flash'])) {
	echo "<script>alert('{$_SESSION['flash']}');</script>";
	unset($_SESSION['flash']);
} ?>

<body id="kt_body" class="bg-body">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<!--begin::Aside-->
			<div class="d-flex flex-column flex-lg-row-fluid py-10">
				<!--begin::Wrapper-->
				<div class="d-flex flex-center flex-column flex-column-fluid">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form class="form" novalidate="novalidate" id="signinAccount" method="POST" action="<?= base_url("/api/account/simple/signin") ?>">
								<div class="text-center mb-10">
									<h1 class="text-dark mb-3">Fazer login</h1>
								</div>
								<div class="fv-row mb-10">
									<label class="form-label fs-6 fw-bolder text-dark">Email</label>
									<input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
								</div>
								
								<div class="fv-row mb-10">
									<div class="d-flex flex-stack mb-2">
										<label class="form-label fw-bolder text-dark fs-6 mb-0">Senha</label>
										<a href="/metronic8/demo1/../demo1/authentication/flows/basic/password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
									</div>
									<input class="form-control form-control-lg form-control-solid" type="password" name="passwd" autocomplete="off" />
								</div>
								<div class="g-recaptcha" data-sitekey="<?= $_ENV['CAPTCHA_KEY'] ?>"></div>
								<div class="text-center">
									<button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
										<span class="indicator-label">Fazer login</span>
									</button>
								</div>
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Aside-->
			<!--begin::Body-->
			<div class="d-flex flex-column flex-lg-row-fluid py-10">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid">
					<!--begin::Wrapper-->
					<div class="w-lg-500px p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" id="createAccount" action="<?= base_url("api/account/simple/signup") ?>" method="POST">
							<div class="text-center mb-10">
								<h1 class="text-dark mb-3">Criar conta</h1>
							</div>
							<div class="row">
								<div class="fv-row mb-10 col-lg-6">
									<label class="form-label fs-6 fw-bolder text-dark">Nome</label>
									<input class="form-control form-control-lg form-control-solid" type="text" name="first_name" autocomplete="off" />
								</div>
								<div class="fv-row mb-10 col-lg-6">
									<label class="form-label fs-6 fw-bolder text-dark">Sobrenome</label>
									<input class="form-control form-control-lg form-control-solid" type="text" name="last_name" autocomplete="off" />
								</div>
							</div>
							<div class="fv-row mb-10">
								<label class="form-label fs-6 fw-bolder text-dark">Email</label>
								<input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
							</div>
							<div class="row">
								<div class="fv-row mb-10 col-lg-6">
									<label class="form-label fs-6 fw-bolder text-dark">Sexo</label>
									<select class="form-select form-select-solid form-select-lg" name="needsex" data-control="select2" data-hide-search="true">
										<option value="1" selected="selected">Homem</option>
										<option value="0">Mulher</option>
									</select>
								</div>
								<div class="fv-row mb-10 col-lg-6">
									<label class="form-label fs-6 fw-bolder text-dark">Nick</label>
									<input class="form-control form-control-lg form-control-solid" type="text" name="nickname" autocomplete="off" />
								</div>
							</div>
							<div class="row">
								<div class="fv-row mb-10 col-lg-6" data-kt-password-meter="true">
									<div class="mb-1">
										<label class="form-label fw-bold fs-6 mb-2">
											Senha
										</label>
										<div class="position-relative mb-3">
											<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="passwd" autocomplete="off" />
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
										</div>
										<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
									</div>
								</div>
								<div class="fv-row mb-10 col-lg-6" data-kt-password-meter="true">
									<div class="d-flex flex-stack mb-2">
										<label class="form-label fw-bolder text-dark fs-6 mb-0">Rep. Senha</label>
									</div>
									<div class="position-relative mb-3">
										<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="repasswd" autocomplete="off" />
										<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
											<i class="bi bi-eye-slash fs-2"></i>
											<i class="bi bi-eye fs-2 d-none"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="g-recaptcha" data-sitekey="<?= $_ENV['CAPTCHA_KEY'] ?>"></div>
							<div class="text-center">
								<button type="submit" id="form_create_account" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Finalizar registro</span>
									<span class="indicator-progress">Aguarde...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->

			</div>
			<!--end::Body-->

		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Main-->
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?= base_url(); ?>/assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="<?= base_url(); ?>/assets/js/custom/authentication/sign-in/general.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
	<!--Begin::Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!--End::Google Tag Manager (noscript) -->
</body>
<!--end::Body-->

</html>