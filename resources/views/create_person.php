<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>ddtankAlpha - versão 10.9</title>
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/1391875988364091400/kQCNQnOV.jpg" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?= base_url() ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Signup Free Trial-->
        <div class="d-flex flex-column flex-xl-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-fluid">
                <!--begin::Wrapper-->
                <div class="d-flex flex-row-fluid flex-center p-10">
                    <!--begin::Content-->
                    <div class="d-flex flex-column">
                        <!--begin::Title-->
                        <h1 class="text-dark fs-2x mb-3" style="display: flex; line-height: 40px;">
                            <div style="background-image:url(<?= $udiscdata->avatar ?>);width: 40px; height: 40px; border-radius: 4px; background-size: cover; margin-right: 2%;"></div> Olá, <?= $udiscdata->first_name ?>!
                        </h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="fw-bold fs-4 text-gray-400 mb-10">Essa é a primeira vez que faz login ultilizando o discord
                            <br />para finalizar você precisa criar um personagem.
                        </div>
                        <!--begin::Description-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Illustration-->
                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-200px min-h-xl-300px mb-xl-10" style="background-image: url(/metronic8/demo2/assets/media/illustrations/networks.png)"></div>
                <!--end::Illustration-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="flex-row-fluid d-flex flex-center justfiy-content-xl-first p-10">
                <!--begin::Wrapper-->
                <div class="d-flex flex-center p-15 shadow rounded w-100 w-md-550px mx-auto ms-xl-20">
                    <!--begin::Form-->
                    <form class="form" novalidate="novalidate" method="post" action="<?= $r->route('api.account.signup') ?>" id="kt_free_trial_form">
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Finalizar registro</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Finalize seu registro criando seu personagem.</div>
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <label class="form-label fw-bolder text-dark fs-6">NickName</label>
                            <input class="form-control form-control-solid" type="text" placeholder="" name="nickname" autocomplete="off" />
                        </div>
                        <!--end::Input group-->
                        <input hidden type="text" name="did" value="<?= $udiscdata->did ?>" autocomplete="off" />
                        <input hidden type="text" name="first_name" value="<?= $udiscdata->first_name ?>" autocomplete="off" />
                        <input hidden type="text" name="last_name" value="<?= $udiscdata->last_name ?>" autocomplete="off" />
                        <input hidden type="text" name="email" value="<?= $udiscdata->email ?>" autocomplete="off" />
                        <input hidden type="password"name="passwd" value="<?= $udiscdata->passwd ?>" autocomplete="off" />
                        <input hidden type="password" name="repasswd" value="<?= $udiscdata->repasswd ?>" autocomplete="off" />
                        <!--begin::Row-->
                        <div class="fv-row mb-10">
                            <label class="form-label fw-bolder text-dark fs-6">Selecione o sexo</label>
                            <select class="form-select form-select-solid" name="needsex">
                                <option></option>
                                <option value="0">Mulher</option>
                                <option value="1">Homem</option>
                            </select>
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="fv-row mb-10">
                            <label class="form-check form-check-custom form-check-solid form-check-inline mb-5">
                                <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                <span class="form-check-label fw-bold text-gray-700">Estou de acordo com os
                                    <a href="#" class="link-primary ms-1">Termos &amp; Condições</a>.</span>
                            </label>
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="text-center pb-lg-0 pb-8">
                            <button type="submit" id="kt_free_trial_submit" class="btn btn-lg btn-primary fw-bolder">
                                <span class="indicator-label">Criar personagem</span>
                                <span class="indicator-progress">Aguarde...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Row-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Right Content-->
        </div>
        <!--end::Authentication - Signup Free Trial-->
    </div>
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?= base_url() ?>/assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url() ?>/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--end::Javascript-->
    <script>
        //Login Script
        $("form#kt_free_trial_form").submit(function(e) {
            e.preventDefault();
            let btn = $('#kt_free_trial_submit');
            var form = $(this);
            var action = form.attr("action");
            var data = form.serialize();

            $.ajax({
                url: action,
                data: data,
                type: "post",
                dataType: "json",
                beforeSend: function(load) {
                    btn.attr("data-kt-indicator", "on").attr("disabled", "disabled")
                },
                error: function(load) {
                    Swal.fire({
                        text: 'Ocorreu um erro ao processar a requisição',
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, confirmar!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then((function(t) {
                        btn.removeAttr("data-kt-indicator").removeAttr("disabled")
                    }))
                },
                success: function(su) {

                    if (su.response.state) {
                        Swal.fire({
                            text: su.response.msg,
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, confirmar!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        }).then((function(t) {
                            btn.removeAttr("data-kt-indicator").removeAttr("disabled")
                        }))
                        if (su.response.url) {
                            window.setTimeout(function() {
                                window.location = su.response.url;
                            }, 3000);
                        }
                        return;
                    }

                    Swal.fire({
                        text: su.response.msg,
                        icon: "warning",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, confirmar!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then((function(t) {
                        btn.removeAttr("data-kt-indicator").removeAttr("disabled")
                    }))

                }

            });
        });
    </script>
</body>
<!--end::Body-->

</html>