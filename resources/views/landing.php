<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <title><?= $_ENV['ProjectName'] ?> - versão 4.1</title>
   <meta name="description" content="O melhor servidor versão 4.1" />
   <meta name="keywords" content="DDTank, <?= $_ENV['ProjectName'] ?>, DDTank pirata, DDtank versão 6, ddtank pirata v6.7" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta charset="utf-8" />
   <meta property="og:locale" content="pt_BR" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="<?= $_ENV['ProjectName'] ?> - versão 4.1" />
   <meta property="og:url" content="<?= base_url() ?>" />
   <meta property="og:site_name" content="<?= $_ENV['ProjectName'] ?> - versão 4.1" />
   <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
   <link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/1391875988364091400/kQCNQnOV.jpg" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
   <link href="<?= base_url() ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
   <link href="<?= base_url() ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
   <div class="d-flex flex-column flex-root">
      <div class="mb-0" id="home">
         <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-light-bg" style="background-image: url(assets/media/backgrounds/landing.jpg); background-size:cover;">
            <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
               <div class="container">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="d-flex align-items-center flex-equal">
                        <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                           <span class="svg-icon svg-icon-2hx">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
                                 </g>
                              </svg>
                           </span>
                        </button>
                        <a href="<?= base_url() ?>">
                           <img alt="Logo" src="<?= base_url() ?>/assets/media/logos/logo.png" style="width: 160px; height: 50px!important;" class="logo-default h-25px h-lg-30px" />
                           <img alt="Logo" src="<?= base_url() ?>/assets/media/logos/logo.png" class="logo-sticky h-20px h-lg-25px" />
                        </a>
                     </div>
                     <div class="d-lg-block" id="kt_header_nav_wrapper">
                        <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                           <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
                              <div class="menu-item">
                                 <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Início</a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Equipe</a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="<?= $r->route('web.simple_auth'); ?>">Lobby</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php if (isset($_SESSION['uid'])) : ?>
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" style="width:0;">
                           <div class="d-flex align-items-stretch" id="kt_header_nav">
                              <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                 <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                                    <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                       <span class="menu-link py-3">
                                          <span class="menu-title">Resources</span>
                                          <span class="menu-arrow d-lg-none"></span>
                                       </span>
                                       <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                          <div class="menu-item">
                                             <a class="menu-link py-3" href="#" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                                <span class="menu-icon">
                                                   <span class="svg-icon svg-icon-2">
                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                         <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z" fill="#000000" />
                                                            <path d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z" fill="#000000" opacity="0.3" />
                                                         </g>
                                                      </svg>
                                                   </span>
                                                </span>
                                                <span class="menu-title">Components</span>
                                             </a>
                                          </div>
                                          <div class="menu-item">
                                             <a class="menu-link py-3" href="/metronic8/demo2/../demo2/documentation/getting-started.html" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                                <span class="menu-icon">
                                                   <span class="svg-icon svg-icon-2">
                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                         <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                            <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                         </g>
                                                      </svg>
                                                   </span>
                                                </span>
                                                <span class="menu-title">Documentation</span>
                                             </a>
                                          </div>
                                          <div class="menu-item">
                                             <a class="menu-link py-3" href="/metronic8/demo2/../demo2/layout-builder.html" title="Build your layout, preview and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                                <span class="menu-icon">
                                                   <span class="svg-icon svg-icon-2">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                         <path opacity="0.25" d="M2 6.5C2 4.01472 4.01472 2 6.5 2H17.5C19.9853 2 22 4.01472 22 6.5V6.5C22 8.98528 19.9853 11 17.5 11H6.5C4.01472 11 2 8.98528 2 6.5V6.5Z" fill="#12131A" />
                                                         <path d="M20 6.5C20 7.88071 18.8807 9 17.5 9C16.1193 9 15 7.88071 15 6.5C15 5.11929 16.1193 4 17.5 4C18.8807 4 20 5.11929 20 6.5Z" fill="#12131A" />
                                                         <path opacity="0.25" d="M2 17.5C2 15.0147 4.01472 13 6.5 13H17.5C19.9853 13 22 15.0147 22 17.5V17.5C22 19.9853 19.9853 22 17.5 22H6.5C4.01472 22 2 19.9853 2 17.5V17.5Z" fill="#12131A" />
                                                         <path d="M9 17.5C9 18.8807 7.88071 20 6.5 20C5.11929 20 4 18.8807 4 17.5C4 16.1193 5.11929 15 6.5 15C7.88071 15 9 16.1193 9 17.5Z" fill="#12131A" />
                                                      </svg>
                                                   </span>
                                                </span>
                                                <span class="menu-title">Layout Builder</span>
                                             </a>
                                          </div>
                                          <div class="menu-item">
                                             <a class="menu-link py-3" href="/metronic8/demo2/../demo2/documentation/getting-started/changelog.html">
                                                <span class="menu-icon">
                                                   <span class="svg-icon svg-icon-2">
                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                         <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1" />
                                                            <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1" />
                                                         </g>
                                                      </svg>
                                                   </span>
                                                </span>
                                                <span class="menu-title">Changelog v8.0.21</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                       <span class="menu-link py-3">
                                          <span class="menu-title">Mega Menu</span>
                                          <span class="menu-arrow d-lg-none"></span>
                                       </span>
                                       <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-600px p-5 p-lg-5">
                                          <div class="row" data-kt-menu-dismiss="true">
                                             <div class="col-lg-4 border-left-lg-1">
                                                <div class="menu-inline menu-column menu-active-bg">
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-4 border-left-lg-1">
                                                <div class="menu-inline menu-column menu-active-bg">
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-4 border-left-lg-1">
                                                <div class="menu-inline menu-column menu-active-bg">
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                   <div class="menu-item">
                                                      <a href="#" class="menu-link">
                                                         <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                         </span>
                                                         <span class="menu-title">Example link</span>
                                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="d-flex align-items-stretch flex-shrink-0">
                              <div class="topbar d-flex align-items-stretch flex-shrink-0">
                                 <div class="d-flex align-items-center me-n3 ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                    <span class="py-3 px-4 px-xxl-6" style="font-size:1.2rem; color:#fff;"><?= "Olá, {$udata->first_name}" ?></span>
                                    <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                       <img class="h-40px w-40px rounded" src="<?= getImage('profile', $udata->photo) ?>" alt="" />
                                    </div>


                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                       <div class="menu-item px-3">
                                          <div class="menu-content d-flex align-items-center px-3">
                                             <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="<?= getImage('profile', $udata->photo) ?>" />
                                             </div>
                                             <div class="d-flex flex-column">
                                                <div class="fw-bolder d-flex align-items-center fs-5"><?= $udata->first_name ?>
                                                   <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Online</span>
                                                </div>
                                                <a href="#" class="fw-bold text-muted text-hover-primary fs-7"><?= $udata->email ?></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="separator my-2"></div>
                                       <div class="menu-item px-5">
                                          <a href="<?= $r->route('web.account.settings') ?>" class="menu-link px-5">Meu perfil</a>
                                       </div>
                                       <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start" data-kt-menu-flip="bottom">
                                          <a href="javascript:;" class="menu-link px-5">
                                             <span class="menu-title">Recarga</span>
                                             <span class="menu-arrow"></span>
                                          </a>
                                          <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                             <div class="menu-item px-3">
                                                <a href="<?= $r->route('web.account.purchases.history') ?>" class="menu-link px-5">Minhas compras</a>
                                             </div>
                                             <div class="menu-item px-3">
                                                <a href="javascrips:;" class="menu-link px-5">Ajuda</a>
                                             </div>
                                             <div class="menu-item px-3">
                                                <a href="<?= $r->route('web.recharge') ?>" class="menu-link px-5">Comprar</a>
                                             </div>
                                             <div class="separator my-2"></div>
                                             <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                   <label class="form-check form-switch form-check-custom form-check-solid">
                                                      <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                      <span class="form-check-label text-muted fs-7">Ser notificado</span>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- <div class="menu-item px-5">
                                          <a href="javascript:;" class="menu-link px-5">WebShop</a>
                                       </div> -->
                                       <div class="separator my-2"></div>
                                       <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start" data-kt-menu-flip="bottom">
                                          <a href="#" class="menu-link px-5">
                                             <span class="menu-title position-relative">Idioma
                                                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                                   <img class="w-30px h-20px rounded-1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/2560px-Flag_of_Brazil.svg.png" alt="metronic" /></span></span>
                                          </a>
                                          <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                             <div class="menu-item px-3">
                                                <a href="javascript:;" class="menu-link d-flex px-5">
                                                   <span class="symbol symbol-20px me-4">
                                                      <img class="rounded-1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/2560px-Flag_of_Brazil.svg.png" alt="metronic" />
                                                   </span>Português</a>
                                             </div>
                                             <div class="menu-item px-3">
                                                <a href="javascript:;" class="menu-link d-flex px-5 ">
                                                   <span class="symbol symbol-20px me-4">
                                                      <img class="rounded-1" src="<?= base_url() ?>/assets/media/flags/united-states.svg" alt="metronic" />
                                                   </span>English</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="menu-item px-5 my-1">
                                          <a href="<?= $r->route('web.account.settings') ?>" class="menu-link px-5">Configurações</a>
                                       </div>
                                       <div class="menu-item px-5">
                                          <a href="<?= $r->route('web.logout') ?>" class="menu-link px-5">Sair</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                     <?php else : ?>
                        <div class="flex-equal text-end ms-1">
                           <button type="button" class="btn btn-primary btn-active-light-primary rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-flip="top-start">
                              ENTRAR NO JOGO
                              <span class="svg-icon svg-icon-5 ms-3 me-0">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                       <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
                                    </g>
                                 </svg>
                              </span>
                           </button>
                           <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4" data-kt-menu="true">
                              <div class="menu-item px-3">
                                 <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modal_login_app" class="menu-link px-3">
                                    Entrar
                                 </a>
                              </div>
                              <div class="menu-item px-3">
                                 <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modal_register_app" class="menu-link px-3">
                                    Registro
                                 </a>
                              </div>
                           </div>
                        </div>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
            <style>
               .download-client-btn {
                  background: url('<?= base_url() ?>/assets/media/backgrounds/download.png') no-repeat;
                  background-size: contain;
                  width: 200px;
                  margin-right: 4%;
                  height: 96px;
                  display: flex;
                  justify-content: center;
                  align-items: flex-end;
                  padding-bottom: 35px;
               }

               .download-client-btn:hover {
                  -webkit-filter: brightness(120%);
                  filter: brightness(120%);
               }

               .playgame-btn {
                  background: url('<?= base_url() ?>/assets/media/backgrounds/play.png') no-repeat;
                  background-size: contain;
                  width: 200px;
                  height: 96px;
                  display: flex;
                  justify-content: center;
                  align-items: flex-end;
                  padding-bottom: 35px;
               }

               .playgame-btn:hover {
                  -webkit-filter: brightness(120%);
                  filter: brightness(120%);
               }
            </style>
            <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
               <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                  <h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">Junte-se ao melhor
                     <br />DDtank privado na versão 4.1
                  </h1>
                  <div class="d-flex flex-center">
                     <a href="<?= base_url('laucher.exe') ?>" class="download-client-btn"></a>
                     <a href="<?= isset($_SESSION['uid']) ? base_url('lobby') : 'javascript:;' ?>" <?= isset($_SESSION['uid']) ? "" : 'data-bs-toggle="modal" data-bs-target="#modal_login_app"' ?> class="playgame-btn"></a>
                  </div>
               </div>
            </div>
         </div>
         <div hidden class="landing-curve landing-dark-color mb-10 mb-lg-20">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
            </svg>
         </div>
      </div>
      <div class="py-10 py-lg-20">
         <div class="container">
            <div class="text-center mb-12">
               <h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Nosso time</h3>
               <div class="fs-5 text-muted fw-bold">Trabalhando diariamente para trazer a melhor experiencia para você
                  <br />nos servidores do orangeTank.
               </div>
            </div>
            <div class="tns tns-default">
               <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                  <div class="text-center">
                     <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('https://cdn.discordapp.com/attachments/879520978265329745/892212656004542484/belle.png')"></div>
                     <div class="mb-0">
                        <a href="javascript:;" _blank" class="text-dark fw-bolder text-hover-primary fs-3">Leticia</a>
                        <div class="text-muted fs-6 fw-bold mt-1">Camgirl & Vende packs no onlyfans</div>
                     </div>
                  </div>
                  <div class="text-center">
                     <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('https://cdn.discordapp.com/attachments/942075882233790486/942907485470228510/vantagens-de-ser-motorista-de-aplicativos.png');background-size: cover;"></div>
                     <div class="mb-0">
                        <a href="javascript:;" class="text-dark fw-bolder text-hover-primary fs-3">Jorge</a>
                        <div class="text-muted fs-6 fw-bold mt-1">Motorista uber</div>
                     </div>
                  </div>
                  <div class="text-center">
                     <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('https://www.polemicaparaiba.com.br/wp-content/uploads/2021/02/Pedro-Cardoso-Agostinho-Carrara-1-1.jpg')"></div>
                     <div class="mb-0">
                        <a href="javascript:;" class="text-dark fw-bolder text-hover-primary fs-3">Thulio</a>
                        <div class="text-muted fs-6 fw-bold mt-1">Agiota</div>
                     </div>
                  </div>
               </div>
               <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                  <span class="svg-icon svg-icon-3x">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                           <polygon points="0 0 24 0 24 24 0 24" />
                           <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)" />
                        </g>
                     </svg>
                  </span>
               </button>
               <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                  <span class="svg-icon svg-icon-3x">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                           <polygon points="0 0 24 0 24 24 0 24" />
                           <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
                        </g>
                     </svg>
                  </span>
               </button>
            </div>
         </div>
      </div>
      <div class="mb-0">

         <div class="landing-dark-bg">

            <div class="container">
               <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                  <div class="d-flex align-items-center order-2 order-md-1">
                     <a href="javascript:;">
                        <img alt="Logo" src="<?= base_url() ?>/assets/media/logos/codealpha_animation.gif" class="h-20px" style="width: 50px; height: 50px!important;" />
                     </a>
                     <span class="mx-5 fs-6 fw-bold text-gray-600 pt-1">
                        © crafted with
                        <span class="svg-icon svg-icon-1">
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <polygon points="0 0 24 0 24 24 0 24" />
                                 <path d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z" fill="#000000" fill-rule="nonzero" />
                              </g>
                           </svg>
                        </span>
                        by <a style="color: #fff;" href="https://github.com/amorim778" target="_blank">biel778</a>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
         <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24" />
                  <rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
                  <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
               </g>
            </svg>
         </span>
      </div>
   </div>
   <div class="modal fade" id="modal_login_app" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog mw-450px">
         <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
               <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                  <span class="svg-icon svg-icon-1">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                           <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                           <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                        </g>
                     </svg>
                  </span>
               </div>
            </div>
            <div class="modal-body scroll-y pt-0 pb-15">
               <form class="form" novalidate="novalidate" id="signinAccount" method="POST" action="<?= $r->route('api.account.signin') ?>">
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
                     <button type="submit" id="form_signin_account" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">Fazer login</span>
                        <span class="indicator-progress">Aguarde...
                           <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                     </button>
                     <a href="javascript:;" class="btn btn-lg btn-primary w-100 mb-5" data-bs-toggle="modal" data-bs-target="#modal_register_app">
                        <span class="indicator-label">Criar conta</span>
                     </a>
                     <!-- 
                     <div class="text-center text-muted text-uppercase fw-bolder mb-5">ou</div>
                    
                     <a href="<?= $r->route('auth.social.discord') ?>" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                        <img alt="Logo" src="https://logodownload.org/wp-content/uploads/2017/11/discord-logo-5.png" class="h-20px me-3" />Continue com Discord
                     </a> -->
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   </div>
   <div class="modal fade" id="modal_register_app" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog mw-500px">
         <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
               <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                  <span class="svg-icon svg-icon-1">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                           <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                           <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                        </g>
                     </svg>
                  </span>
               </div>
            </div>
            <div class="modal-body scroll-y pt-0 pb-15">
               <form class="form" novalidate="novalidate" id="createAccount" action="<?= $r->route('api.account.signup') ?>" method="POST">

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
            </div>
         </div>
      </div>
   </div>
   </div>
   <?php if (!isset($_SESSION['uid'])) : ?>
      <div class="modal show" id="newsModal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered mw-900px">
            <div class="modal-content">
               <div class="modal-header">
                  <h2>Navegador Recomendado</h2>
                  <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                     <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                           <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                              <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                              <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
                           </g>
                        </svg>
                     </span>
                  </div>
               </div>
               <div class="modal-body" style="padding:0!important;">
                  <img onclick="window.location.href='https://static.centbrowser.com/win_stable/4.3.9.248/centbrowser_4.3.9.248.exe'" src="https://orangetank.com.br/assets/media/backgrounds/91d78e50-3db2-4d67-9bfe-037c2c0d2571.jpg" style="cursor:pointer;width: 100%;border-bottom-left-radius: 8px;border-bottom-right-radius: 8px;" alt="">
               </div>
            </div>
         </div>
      </div>
   <?php endif; ?>
   <script src="<?= base_url() ?>/assets/plugins/global/plugins.bundle.js"></script>
   <script src="<?= base_url() ?>/assets/js/scripts.bundle.js"></script>
   <script src="<?= base_url() ?>/assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
   <script src="<?= base_url() ?>/assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
   <script src="<?= base_url() ?>/assets/js/custom/landing.js"></script>
   <script>
      <?php
      if (isset($_GET['act']) && $_GET['act'] == 'register') {
         echo "document.querySelector('#register_button_modal').click();";
      }
      ?>
      <?php if (isset($_SESSION['uid'])) : ?>

         function checkState() {
            $.get("<?= $r->route('web.check.state') ?>", function() {});
         }
         setInterval(checkState, 5000)
      <?php endif; ?>

      // Stepper lement
      var element = document.querySelector("#modal_create_person_stepper");

      // Initialize Stepper
      var stepper = new KTStepper(element);

      // Handle next step
      stepper.on("kt.stepper.next", function(stepper) {
         stepper.goNext(); // go next step
      });

      // Handle previous step
      stepper.on("kt.stepper.previous", function(stepper) {
         stepper.goPrevious(); // go previous step
      });
   </script>
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   <script>
      //Login Script
      $("form#signinAccount").submit(function(e) {
         e.preventDefault();
         let btn = $('#form_signin_account');
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

      //Register Script
      $("form#createAccount").submit(function(e) {
         e.preventDefault();
         let btn = $('#form_create_account');
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
                  icon: "error",
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
   <?php if (!isset($_SESSION['uid'])) : ?>
      <script type="text/javascript">
         $(window).on('load', function() {
            $('#newsModal').modal('show');
         });
      </script>
   <?php endif; ?>
   <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
   </noscript>
</body>

</html>