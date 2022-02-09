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
                        <a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active">S1 - ddtankAlpha</a>
                        <!-- <a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3">S2 - Em breve</a>-->
                    </div>
                    <!--end::Nav group-->
                    <!--begin::Row-->
                    <div class="row g-10">

                        <?php if($products): foreach ($products as $item) : ?>
                            <!--begin::Col-->
                            <div class="col-xl-4">
                                <div class="d-flex h-100 align-items-center">
                                    <!--begin::Option-->
                                    <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                        <!--begin::Heading-->
                                        <div class="mb-7 text-center">
                                            <!--begin::Title-->
                                            <h1 class="text-dark mb-5 fw-boldest"><?= $item->name ?></h1>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="text-gray-400 fw-bold mb-5"><?= $item->description ?></div>
                                            <!--end::Description-->
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
                                        <!--begin::Features-->
                                        <div class="w-100 mb-10">
                                            <div class="d-flex align-items-center mb-5">
                                                <span class="fw-bold fs-6 text-gray-800 flex-grow-1 pe-3"><?= $item->ammount ?> Cupons.</span>
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                        <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <!--end::Features-->
                                        <!--begin::Select-->
                                        <a href="<?= base_url("fatura/$item->id") ?>" class="btn btn-sm btn-primary" style="width:100%;">Comprar</a>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Option-->
                                </div>
                            </div>
                            <!--end::Col-->
                        <?php endforeach; endif; ?>
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