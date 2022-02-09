<?= $this->layout('_layout'); ?>
<?php $this->start('js_asset') ?>
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="<?= base_url() ?>/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="<?= base_url() ?>/assets/js/custom/apps/user-management/users/list/table.js"></script>
<script src="<?= base_url() ?>/assets/js/custom/apps/user-management/users/list/add.js"></script>

<script>
    function loadiTemdAta() {
        var value = $("#search_item").val();
        if (value.length >= 3) {
            $.ajax({
                type: "POST",
                url: "<?= $r->route('admin.item.data') ?>",
                data: {
                    TemplateID: value
                },
                dataType: "json",
                beforeSend: function() {
                    $("#area_item_info").hide();
                    $("#msgItemData").empty();
                },
                success: function(su) {
                    if (!su.message) {
                        $("#ImageItem").attr("src", su.imagesrc);
                        $("#TemplateIDShow").html(su.TemplateID);
                        $("#TemplateID").attr("value", su.TemplateID);
                        $("#NameItem").html(su.Name);
                        $("#area_item_info").show();
                        return;
                    }
                    $("#msgItemData").html(su.message);
                    return;
                }
            });
        }
    }

    $(function() {
        $("form").submit(function(e) {
            e.preventDefault();

            var form = $(this);
            var action = form.attr("action");
            var data = form.serialize();

            $.ajax({
                url: action,
                data: data,
                type: "post",
                dataType: "json",
                beforeSend: function(load) {},
                error: function(load) {
                    Swal.fire({
                        text: 'Ocorreu um erro ao processar a resposta',
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, confirmar!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
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
                            $("#area_item_info").attr("style","display:none!important;");
                            $("#senditem")[0].reset()
                            $("#userSelect").val('').trigger('change')
                            $("#TemplateID").val('').trigger('change')
                            
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
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, confirmar!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    }).then((function(t) {

                    }))
                }

            });
        });
    });
</script>
<?php $this->stop() ?>
<!--begin::Toolbar-->
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Title-->
            <h1 class="d-flex text-white fw-bolder my-1 fs-3">Users List</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">
                    <a href="/metronic8/demo2/../demo2/index.html" class="text-white text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">Apps</li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">User Management</li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">Users</li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">Users List</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-3 py-md-1">
            <!--begin::Wrapper-->
            <div class="me-4">
                <!--begin::Menu-->
                <a href="#" class="btn btn-custom btn-active-white btn-flex btn-color-white btn-active-color-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Filter
                </a>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6131557c2c60d">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Menu separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Menu separator-->
                    <!--begin::Form-->
                    <div class="px-7 py-5">
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Status:</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6131557c2c60d" data-allow-clear="true">
                                    <option></option>
                                    <option value="1">Approved</option>
                                    <option value="2">Pending</option>
                                    <option value="2">In Process</option>
                                    <option value="2">Rejected</option>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Member Type:</label>
                            <!--end::Label-->
                            <!--begin::Options-->
                            <div class="d-flex">
                                <!--begin::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                    <span class="form-check-label">Author</span>
                                </label>
                                <!--end::Options-->
                                <!--begin::Options-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                    <span class="form-check-label">Customer</span>
                                </label>
                                <!--end::Options-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Notifications:</label>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                <label class="form-check-label">Enabled</label>
                            </div>
                            <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Form-->
                </div>
                <!--end::Menu 1-->
                <!--end::Menu-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Button-->
            <a href="#" class="btn btn-bg-white btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Calendar-->
                <form action="<?= $r->route('admin.item.send.byuser') ?>" id="senditem" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-6">
                                <input type="hidden" id="TemplateID" name="TemplateID" value="">
                                <!--begin::Block-->
                                <label for="" class="required form-label">Id ou Nome do item:</label>
                                <input type="text" class="form-control form-control-solid" id="search_item" onkeyup="loadiTemdAta()" placeholder="ID ou Nome do item" />
                                <div class="form-text text-danger" id="msgItemData"></div>
                                <!--end::Block-->
                            </div>
                            <div class="d-flex align-items-center mb-6" id="area_item_info">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="javascript:;">
                                        <div class="symbol-label">
                                            <img id="ImageItem" src="" alt="" class="w-100">
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::User details-->
                                <div class="d-flex flex-column">
                                    <a href="javascript:;" class="text-gray-800 text-hover-primary mb-1" id="NameItem"></a>
                                    <span id="TemplateIDShow"></span>
                                </div>
                                <!--begin::User details-->
                            </div>
                            <div class="mb-10">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="" class="required form-label">Level</label>
                                        <input type="number" class="form-control form-control-solid" name="StrengthenLevel" placeholder="Título da menssagem" value="0" />
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="" class="required form-label">Quantidade</label>
                                        <input type="number" class="form-control form-control-solid" name="Count" placeholder="Título da menssagem" value="1" />
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="" class="required form-label">Validade (0 perma)</label>
                                        <input type="number" class="form-control form-control-solid" name="ValidDate" placeholder="Título da menssagem" value="0" />
                                    </div>

                                </div>
                            </div>
                            <div class="mb-10">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="" class="required form-label">Ataque</label>
                                        <input type="number" class="form-control form-control-solid" name="AttackCompose" value="0" />
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="" class="required form-label">Defesa</label>
                                        <input type="number" class="form-control form-control-solid" name="DefendCompose" value="0" />
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="" class="required form-label">Agilidade</label>
                                        <input type="number" class="form-control form-control-solid" name="AgilityCompose" value="0" />
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="" class="required form-label">Sorte</label>
                                        <input type="number" class="form-control form-control-solid" name="LuckCompose" value="0" />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="mb-10">
                                <label for="" class="form-label">Selecione o usuario</label>
                                <select class="form-select form-control-solid" data-control="select2" id="userSelect" name="UserID" data-placeholder="Defina o usuario">
                                    <option></option>
                                    <?php
                                    foreach ($users_list as $item) {
                                        echo "<option value=\"$item->UserID\">$item->UserID - $item->NickName</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Título</label>
                                <input type="text" class="form-control form-control-solid" name="Title" placeholder="Título da menssagem" value="Administração" />
                            </div>
                            <!--begin::solid autosize textarea-->
                            <div class="mb-10">
                                <label for="" class="form-label">Menssagem</label>
                                <textarea class="form-control form-control form-control-solid" name="Content" data-kt-autosize="true">Email enviado pela administração do sistema.</textarea>
                            </div>
                            <!--end::solid autosize textarea-->
                            <div class="form-check form-switch form-check-custom form-check-solid me-10 mb-10">
                                <input class="form-check-input h-20px w-30px" type="checkbox" value="true" name="IsBinds" id="IsBinds" checked />
                                <label class="form-check-label" for="flexSwitch20x30">
                                    IsBind
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width:100%;">Enviar item</button>
                        </div>
                    </div>
                </form>
                <!--end::Calendar-->
            </div>
            <!--end::Card body-->
        </div>
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->