<?= $this->layout('_layout'); ?>
<!--begin::Toolbar-->
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container d-flex flex-stack flex-wrap">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Title-->
            <h1 class="d-flex text-white fw-bolder my-1 fs-3">Recarga</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">
                    <a href="/metronic8/demo2/../demo2/index.html" class="text-white text-hover-primary">S1</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">Recarga</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-3 py-md-1">
            <div class="me-4">
                <a href="<?= base_url('jogar') ?>" class="btn btn-custom btn-active-white btn-flex btn-color-primary btn-active-color-primary fw-bolder" style="background-color:#fff!important;">Entrar no jogo</a>
            </div>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Pricing card-->
        <div class="card" id="kt_pricing">
            <!--begin::Card body-->
            <div class="card-body p-lg-17">
                <!--begin::Plans-->
                <div class="d-flex flex-column">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="fs-2hx fw-bolder mb-5">Recarga</h1>
                        <div class="text-gray-400 fw-bold fs-5">Os cupons são enviados diretamente a sua conta no jogo, <br />em até 5 minutos após efetuar o pagamento.
                            <a href="#" class="link-primary fw-bolder">Precisa de ajuda ?</a>
                        </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Nav group-->
                    <div class="nav-group nav-group-outline mx-auto mb-15" data-kt-buttons="true">
                        <a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active">S1 - <?= $_ENV['ProjectName'] ?></a>
                        <!-- <a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3">S2 - Em breve</a>-->
                    </div>
                    <!--end::Nav group-->
                    <!--begin::Row-->
                    <div class="row g-10">

                        <?php if ($products) : foreach ($products as $item) : ?>
                                <!--begin::Col-->
                                <div class="col-xl-4">
                                    <div class="d-flex h-100 align-items-center">
                                        <!--begin::Option-->
                                        <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                            <!--begin::Heading-->
                                            <div class="mb-7 text-center">
                                                <!--begin::Title-->
                                                <h1 class="text-dark mb-5 fw-boldest"><?= $item->ammount ?> Cupons.</h1>
                                                <!--end::Title-->
                                                <!--begin::Price-->
                                                <div class="text-center">
                                                    <span class="mb-2 text-primary">R$</span>
                                                    <span class="fs-3x fw-bolder text-primary"><?= number_format($item->value, 2) ?></span>
                                                    <span class="fs-7 fw-bold opacity-50">/
                                                        <span data-kt-element="period">Qntd. 1</span></span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Heading-->
                                            
                                            <!--begin::Select-->
                                            <a href="<?= base_url("fatura/$item->id") ?>" class="btn btn-sm btn-primary" style="width:100%;">Comprar</a>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Option-->
                                    </div>
                                </div>
                                <!--end::Col-->
                        <?php endforeach;
                        endif; ?>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Plans-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Pricing card-->
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->