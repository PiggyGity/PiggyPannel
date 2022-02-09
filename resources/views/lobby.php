<?= $this->layout('_layout'); ?>

<?php $this->start('js_asset') ?>
<script src="<?= base_url() ?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="<?= base_url() ?>/assets/js/custom/widgets.js"></script>
<script src="<?= base_url() ?>/assets/js/custom/apps/chat/chat.js"></script>
<script src="<?= base_url() ?>/assets/js/custom/modals/create-app.js"></script>
<script src="<?= base_url() ?>/assets/js/custom/modals/upgrade-plan.js"></script>
<script src="<?= base_url() ?>/assets/js/custom/intro.js"></script>
<script>
    var element = document.getElementById('player_chart');

    var height = parseInt(KTUtil.css(element, 'height'));
    var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
    var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
    var baseColor = KTUtil.getCssVariableValue('--bs-primary');
    var secondaryColor = KTUtil.getCssVariableValue('--bs-gray-300');

    var options = {
        series: [{
            name: 'Novo jogador',
            data: <?= $js_count ?>
        }],
        chart: {
            fontFamily: 'inherit',
            type: 'bar',
            height: height,
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: ['30%'],
                endingShape: 'rounded'
            },
        },
        legend: {
            show: false
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: <?= $js_months ?>,
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false
            },
            labels: {
                style: {
                    colors: labelColor,
                    fontSize: '12px'
                }
            }
        },
        yaxis: {
            labels: {
                style: {
                    colors: labelColor,
                    fontSize: '12px'
                }
            }
        },
        fill: {
            opacity: 1
        },
        states: {
            normal: {
                filter: {
                    type: 'none',
                    value: 0
                }
            },
            hover: {
                filter: {
                    type: 'none',
                    value: 0
                }
            },
            active: {
                allowMultipleDataPointsSelection: false,
                filter: {
                    type: 'none',
                    value: 0
                }
            }
        },
        tooltip: {
            style: {
                fontSize: '12px'
            },
            y: {
                formatter: function(val) {
                    return val
                }
            }
        },
        colors: [baseColor, secondaryColor],
        grid: {
            borderColor: borderColor,
            strokeDashArray: 4,
            yaxis: {
                lines: {
                    show: true
                }
            }
        }
    };

    var chart = new ApexCharts(element, options);
    chart.render();

    $("#display_head").click(function() {
        img_a = "<?= loadImageItem($uequip->hair, true) ?>";
        img_b = "<?= str_replace('a/show.png', 'b/show.png', loadImageItem($uequip->hair, true)) ?>";

        if ($(this).prop("checked") == true) {
            console.log("chapéu marcado.");
            $("#display_hair_image").css("background-image", "url(" + img_a + ")");
            $("#display_head_image").css("visibility", "visible");
        } else if ($(this).prop("checked") == false) {
            console.log("chapéu desmarcado.");
            $("#display_hair_image").css("background-image", "url(" + img_b + ")");
            $("#display_head_image").css("visibility", "hidden");
        }
    });

    $("#display_hair").click(function() {
        if ($(this).prop("checked") == true) {
            $("#display_hair_image").css("visibility", "visible");
            console.log("cabelo marcado.");
        } else if ($(this).prop("checked") == false) {
            $("#display_hair_image").css("visibility", "hidden");
            console.log("cabelo desmarcado.");
        }
    });

    $("#display_glass").click(function() {
        if ($(this).prop("checked") == true) {
            $("#display_glass_image").css("visibility", "visible");
            console.log("oculos marcado.");
        } else if ($(this).prop("checked") == false) {
            $("#display_glass_image").css("visibility", "hidden");
            console.log("oculos desmarcado.");
        }
    });

    $("#display_gun").click(function() {
        if ($(this).prop("checked") == true) {
            $("#display_gun_image").css("visibility", "visible");
            console.log("arma marcado.");
        } else if ($(this).prop("checked") == false) {
            $("#display_gun_image").css("visibility", "hidden");
            console.log("arma desmarcado.");
        }
    });

    $("#display_face").click(function() {
        if ($(this).prop("checked") == true) {
            $("#display_face_image").css("visibility", "visible");
            console.log("face marcado.");
        } else if ($(this).prop("checked") == false) {
            $("#display_face_image").css("visibility", "hidden");
            console.log("face desmarcado.");
        }
    });

    $("#display_eff").click(function() {
        if ($(this).prop("checked") == true) {
            $("#display_eff_image").css("visibility", "visible");
            console.log("adorno marcado.");
        } else if ($(this).prop("checked") == false) {
            $("#display_eff_image").css("visibility", "hidden");
            console.log("adorno desmarcado.");
        }
    });
</script>
<?php $this->stop() ?>

<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container d-flex flex-stack flex-wrap">
        <div class="page-title d-flex flex-column me-3">
            <h1 class="d-flex text-white fw-bolder my-1 fs-3">Lobby</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <li class="breadcrumb-item text-white opacity-75">
                    <a href="index.html" class="text-white text-hover-primary">S1</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-white opacity-75">Lobby</li>
            </ul>
        </div>
        <div class="d-flex align-items-center py-3 py-md-1">

            <div class="me-4">
                <a href="<?= base_url('jogar') ?>" class="btn btn-custom btn-active-white btn-flex btn-color-primary btn-active-color-primary fw-bolder" style="background-color:#fff!important;">Entrar no jogo</a>
            </div>
        </div>
    </div>
</div>
<!--end::Alert-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container">
    <div class="content flex-row-fluid" id="kt_content">
        <div class="row gy-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xxl-4">
                <!--begin::Mixed Widget 1-->
                <div class="card card-xxl-stretch">
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <!--begin::Header-->
                        <div class="px-9 pt-7 card-rounded h-275px w-100 bg-primary" style="background-image: url(<?= base_url() ?>/assets/media/backgrounds/zGiwSBz.jpg); background-size: cover;">
                            <!--begin::Heading-->
                            <div class="d-flex flex-stack">
                                <h3 class="m-0 text-white fw-bolder fs-3">Meu personagem</h3>
                                <div class="ms-1">
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color-primary border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="right-start" data-kt-menu-flip="top-end">
                                        <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Exibir</div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-30px" type="checkbox" value="" checked="checked" id="display_head" />
                                                    <label class="form-check-label" for="display_head">
                                                        Chapéu
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-30px" type="checkbox" value="" checked="checked" id="display_hair" />
                                                    <label class="form-check-label" for="display_hair">
                                                        Cabelo
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-30px" type="checkbox" value="" checked="checked" id="display_gun" />
                                                    <label class="form-check-label" for="display_gun">
                                                        Arma
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-30px" type="checkbox" value="" checked="checked" id="display_glass" />
                                                    <label class="form-check-label" for="display_glass">
                                                        Óculos
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-30px" type="checkbox" value="" checked="checked" id="display_face" />
                                                    <label class="form-check-label" for="display_face">
                                                        Face
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-30px" type="checkbox" value="" checked="checked" id="display_eff" />
                                                    <label class="form-check-label" for="display_eff">
                                                        Adornos
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Menu 3-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Balance-->
                            <div class="d-flex text-center flex-column text-white pt-8" style="height: 86%;">
                                <div style="width: 100%; height: 100%; text-align: -webkit-center;zoom: 124%; margin-top: -24px;">
                                    <div style=" background-image: url(<?= base_url() ?>/assets/media/backgrounds/roRI85X.gif); background-size: cover; width: 200px; height: 200px; margin-top: -10px; margin-bottom: -191px; margin-left: -5px; "></div>
                                    <div id="display_eff_image" style=" background-image: url(<?= loadImageItem($uequip->eff, true) ?>); background-size: cover; width: 130px; height: 162px; margin-left: 20px; margin-top: -3px; margin-bottom: -168px; position: relative; z-index: 8; "></div>
                                    <div id="display_head_image" style=" background-image: url(<?= loadImageItem($uequip->head, true) ?>); width: 126px; height: 141px; background-size: cover; margin-left: 15px; margin-top: 8px; position: relative; margin-bottom: -148px; z-index: 7;"></div>
                                    <div id="display_hair_image" style=" background-image: url(<?= loadImageItem($uequip->hair, true) ?>); background-size: cover; width: 134px; height: 130px; z-index: 5; margin-left: 20px; margin-top: -18px; margin-bottom: -130px; position: relative;"></div>
                                    <div id="display_glass_image" style=" height: 117px; width: 128px; margin-left: 22px; background-image: url(<? config('app.resource') ?>/image/equip/m/glass/glass19/1/show.png); background-size: cover; position: relative; z-index: 5; margin-top: 8px; margin-bottom: -125px;"></div>
                                    <div id="display_face_image" style="background-image: url(<?= loadImageItem($uequip->face, true) ?>); background-size: cover; width: 117px; height: 174px; margin-top: -128px;position: relative; z-index: 4;"></div>
                                    <div id="display_gun_image" style=" background-image: url(<?= loadImageItem($uequip->gun, true) ?>); width: 60px; height: 97px; position: relative; margin-top: -101px; margin-bottom: -128px; background-size: 224%; background-position-x: 61px; background-position-y: 100px; margin-left: 134px;"></div>
                                    <div hidden style=" background-image: url(<?= base_url() ?>/assets/media/backgrounds//GkjETgG.gif); opacity: 0.9; width: 93px; height: 70px; position: relative; margin-top: 72px; margin-bottom: -142px; margin-left: -6px; "></div>
                                    <div style=" background-image: url(<?= loadImageItem($uequip->cloth, true) ?>); width: 144px; height: 173px; background-size: cover; background-position-y: -70px; background-position-x: 19px; margin-top: 24.5px; margin-left: -12px; z-index: 6; position: sticky;"></div>
                                </div>
                            </div>
                            <!--end::Balance-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Items-->
                        <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -18px">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45px w-40px me-5">
                                    <span class="symbol-label bg-lighten">
                                        <!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center flex-wrap w-100">
                                    <!--begin::Title-->
                                    <div class="mb-1 pe-3 flex-grow-1">
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Vitórias</a>
                                        <div class="text-gray-400 fw-bold fs-7">batalha</div>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Label-->
                                    <div class="d-flex align-items-center">
                                        <div class="fw-bolder fs-5 text-gray-800 pe-1"><?= $udetail->Win ?></div>
                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-up.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                    <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45px w-40px me-5">
                                    <span class="symbol-label bg-lighten">
                                        <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center flex-wrap w-100">
                                    <!--begin::Title-->
                                    <div class="mb-1 pe-3 flex-grow-1">
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Derrotas</a>
                                        <div class="text-gray-400 fw-bold fs-7">batalha</div>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Label-->
                                    <div class="d-flex align-items-center">
                                        <div class="fw-bolder fs-5 text-gray-800 pe-1"><?= $udetail->Total - $udetail->Win ?></div>
                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-down.svg-->
                                        <span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.5" x="11" y="5" width="2" height="14" rx="1" />
                                                    <path d="M6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 C4.90236893,18.3165825 4.90236893,17.6834175 5.29289322,17.2928932 L11.2928932,11.2928932 C11.6714722,10.9143143 12.2810586,10.9010687 12.6757246,11.2628459 L18.6757246,16.7628459 C19.0828436,17.1360383 19.1103465,17.7686056 18.7371541,18.1757246 C18.3639617,18.5828436 17.7313944,18.6103465 17.3242754,18.2371541 L12.0300757,13.3841378 L6.70710678,18.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 14.999999) scale(1, -1) translate(-12.000003, -14.999999)" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45px w-40px me-5">
                                    <span class="symbol-label bg-lighten">
                                        <!--begin::Svg Icon | path: icons/duotone/Devices/Watch2.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <path d="M9,17 L15,17 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,17 Z" fill="#000000" opacity="0.3" />
                                                <path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z" fill="#000000" opacity="0.3" />
                                                <path d="M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,7 L9,7 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z" fill="#000000" opacity="0.3" />
                                                <path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675 8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z" fill="#000000" fill-rule="nonzero" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Description-->
                                <div class="d-flex align-items-center flex-wrap w-100">
                                    <!--begin::Title-->
                                    <div class="mb-1 pe-3 flex-grow-1">
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bolder">Cupons</a>
                                        <div class="text-gray-400 fw-bold fs-7">Dinhero em jogo</div>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Label-->
                                    <div class="d-flex align-items-center">
                                        <div class="fw-bolder fs-5 text-gray-800 pe-1"><?= $udetail->Money ?></div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 1-->
            </div>
            <!--end::Col-->
            <div class="col-xxl-4">
                <div class="card card-xxl-stretch">
                    <div class="card-header align-items-center border-0 mt-4">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fw-bolder mb-2 text-dark">Atividades do servidor</span>
                            <span class="text-muted fw-bold fs-7">Em breve</span>
                        </h3>
                    </div>
                    <div class="card-body pt-5">
                        <div class="timeline-label">
                            <div class="timeline-item">
                                <div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-warning fs-1"></i>
                                </div>
                                <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep
                                    you honest. And keep structure
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
                    <div class="card-body d-flex flex-column p-0">
                        <div class="flex-grow-1 card-p pb-0">
                            <div class="d-flex flex-stack flex-wrap">
                                <div class="me-2">
                                    <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Visitas</a>
                                    <div class="text-muted fs-7 fw-bold">Acessos de jogadores
                                    </div>
                                </div>
                                <div class="fw-bolder fs-3 text-primary"><?= $visit_count ?></div>
                            </div>
                        </div>
                        <div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
                    </div>
                </div>
                <div class="card card-xxl-stretch-50 mb-5 mb-xl-8">
                    <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
                        <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
                            <div class="me-2">
                                <span class="fw-bolder text-gray-800 d-block fs-3">Jogadores</span>
                                <span class="text-gray-400 fw-bold">Novos jogadores</span>
                            </div>
                            <div class="fw-bolder fs-3 text-primary"><?= $users_count ?></div>
                        </div>
                        <div id="player_chart" data-kt-color="primary" style="height: 175px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-5 gx-xl-8">
            <div class="col-xl-12">
                <div class="card card-xxl-stretch mb-5 mb-xl-8">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Jogadores mais fortes</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Os mais fortes de ddtankAlpha</span>
                        </h3>
                    </div>
                    <div class="card-body py-3">
                        <div class="table-responsive">
                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="w-25px text-center"></th>
                                        <th class="min-w-150px">Jogador</th>
                                        <th class="min-w-140px">Level</th>
                                        <th class="min-w-120px">Win rate</th>
                                        <th class="min-w-100px text-center">Força</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0;
                                    foreach ($ranking as $player) : ++$i; ?>
                                        <?php
                                        $_user = udata_by_username_in_game($player->UserName);
                                        ?>
                                        <tr>
                                            <td style="text-align: center;">
                                                <?php switch ($i) {
                                                    case '1':
                                                        echo "<div style=\"width: 40px; height: 33px; background-size: cover!important;background: url(data:image/png;base64,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);\"></div>";
                                                        break;
                                                    case '2':
                                                        echo "<div style=\"width: 40px; height: 33px; background-size: cover!important;background: url(data:image/png;base64,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);\"></div>";
                                                        break;
                                                    case '3':
                                                        echo "<div style=\"width: 40px; height: 33px; background-size: cover!important;background: url(data:image/png;base64,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);\"></div>";
                                                        break;
                                                    default:
                                                        echo "<span class=\"text-center\">$i</span>";
                                                        break;
                                                } ?>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-45px me-5">
                                                        <img src="<?= getImage('profile', $_user->photo ?? "default.jpg") ?>" alt="" />
                                                    </div>
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <?php if ($_user == null) : ?>
                                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Desconhecido</a>
                                                        <?php else : ?>
                                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-6"><?= $_user->first_name ?? "Desconhecido" . " " . $_user->last_name ?? "Empty" ?></a>
                                                        <?php endif; ?>
                                                        <span class="text-muted fw-bold text-muted d-block fs-7"><?= $player->NickName ?></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Level <?= $player->Grade ?></a>
                                                <span class="text-muted fw-bold text-muted d-block fs-7">Exp: <?= $player->GP ?></span>
                                            </td>
                                            <td class="text-end">
                                                <div class="d-flex flex-column w-100 me-2">
                                                    <div class="d-flex flex-stack mb-2">
                                                        <span class="text-muted me-2 fs-7 fw-bold"><?= get_percentage($player->Total, $player->Win) ?>%</span>
                                                    </div>
                                                    <div class="progress h-6px w-100">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?= get_percentage($player->Total, $player->Win) ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="text-align: center;">
                                                <div style="display:flex;    place-content: center;">
                                                    <div style="margin-right: 6%;width: 13px; height: 17px;background-size:cover!important;background: url(data:image/png;base64,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);"></div>
                                                    <?= $player->FightPower ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>