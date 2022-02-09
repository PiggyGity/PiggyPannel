<?= $this->layout('_layout'); ?>
<?php
//$invoice_data->init_point
//dd($invoice_data);
?>
<!--begin::Toolbar-->
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container d-flex flex-stack flex-wrap">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Title-->
            <h1 class="d-flex text-white fw-bolder my-1 fs-3">Fatura #<?= $invoice_data->id ?></h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">
                    <a href="javascript:;" class="text-white text-hover-primary">S1</a>
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
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">Faturas</li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">fatura#<?= $invoice_data->id ?></li>
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
                <a href="<?= $mp_data->init_point ?>" class="btn btn-custom btn-active-white btn-flex btn-color-white btn-active-color-primary fw-bolder">
                    <!--end::Svg Icon-->Pagar fatura
                </a>
                <!--end::Menu-->
            </div>
            <!--end::Wrapper-->
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
        <!--begin::Invoice 2 main-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-20">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-xl-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                        <!--begin::Invoice 2 content-->
                        <div class="mt-n1">
                            <!--begin::Top-->
                            <div class="d-flex flex-stack pb-10">
                                <!--begin::Logo-->
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="180" height="26" viewBox="0 0 755 102">
                                        <g fill="none" fill-rule="evenodd">
                                            <g>
                                                <g fill-rule="nonzero">
                                                    <path fill="#283277" d="M141.29 50.02c0-25.19-31.42-45.72-70.17-45.72S.95 24.83.95 50.02c0 .65-.01 2.45-.01 2.68 0 26.72 27.46 48.36 70.17 48.36 42.97 0 70.18-21.64 70.18-48.36v-2.68z"></path>
                                                    <path fill="#00B1EA" d="M138.6 49.99c0 23.75-30.21 43-67.47 43s-67.47-19.25-67.47-43 30.21-43 67.47-43 67.47 19.26 67.47 43z"></path>
                                                    <g>
                                                        <path fill="#FFF" d="M3.45 64.65c3.25 6.96 6.5 10.27 6.5 10.27 1.43-2.76 1.54-4.23 3.1-4.8 2.27-.83 3.13.35 10.58 1.34 11.8 1.57 16.93 2.03 37.46.2 14.88-1.32 4.9-17.27 1.49-25.81-3.4-8.54-6.96-16.12-8.98-20.46-2.01-4.33-4.49-8.63-7.89-12.28-3.4-3.66-9.29-9.54-10.99-10.93-1.7-1.39-4.64.93-5.73 1.86-1.09.93-7.6 3.86-5.49 6.73 0 0 1.01 1.74 1.86 2.34.85.6-4.8-1.72-4.8 1.61s5.18 2.79 6.65 3.4c1.47.61 2.94.62 4.57 1.47 1.63.85 4.3 1.93 6.4 1.86 2.11-.08 2.88-1.16 3.97 1.63 1.08 2.79 3.79 9.13 3.33 15.55-.46 6.42.1 15.09 1.34 18.26 0 0-24.84-11.68-45.11-7.73-.01 0-.77 10.11 1.74 15.49z" transform="translate(1)"></path>
                                                        <path fill="#283277" d="M10.26 77.01l-1.19-1.22c-.14-.14-3.44-3.55-6.74-10.62C-.29 59.56.44 49.49.47 49.06l.07-.94.93-.18c16.99-3.31 36.73 3.96 43.49 6.79-.84-4.34-1.08-11.2-.72-16.18.41-5.73-1.82-11.38-3.01-14.42l-.23-.59c-.37-.95-.59-1.11-.6-1.11-.08-.01-.42.05-.68.1-.4.07-.89.16-1.49.18-2.78.11-6.08-1.5-7.02-2-.79-.41-1.55-.59-2.36-.79-.68-.16-1.38-.33-2.11-.64-.23-.1-.89-.18-1.46-.25-2.08-.26-5.95-.76-5.95-4.29 0-1.24.55-1.95 1.02-2.33.64-.52 1.44-.71 2.24-.75-.05-.08-.09-.15-.12-.2-.53-.75-.72-1.61-.55-2.47.45-2.28 3.33-4.04 5.24-5.2.42-.26.9-.55 1.05-.67C32.08-.2 34.33.27 35.52 1.24c1.77 1.44 7.76 7.45 11.11 11.05 3.07 3.3 5.65 7.3 8.11 12.61l.37.79c2.03 4.36 5.42 11.65 8.63 19.73.5 1.25 1.15 2.69 1.84 4.21 2.89 6.36 6.5 14.28 3.63 19.2-1.38 2.36-4.07 3.74-8 4.09-20.63 1.83-25.81 1.38-37.73-.21-3.19-.43-5.17-.88-6.62-1.21-1.94-.45-2.44-.54-3.37-.2-.56.2-.76.57-1.41 2.04-.26.59-.58 1.32-1.02 2.16l-.8 1.51zM4.57 64.13c1.94 4.16 3.89 6.98 5.09 8.53.05-.11.09-.22.14-.32.68-1.56 1.22-2.79 2.83-3.37 1.66-.61 2.76-.35 4.77.11 1.4.32 3.31.76 6.39 1.17 11.72 1.56 16.81 2.01 37.18.2 3.13-.28 5.12-1.22 6.08-2.87 2.23-3.82-1.08-11.09-3.74-16.93-.7-1.55-1.37-3.01-1.89-4.32-3.19-8.01-6.56-15.26-8.58-19.6l-.37-.8c-2.35-5.06-4.79-8.86-7.68-11.96-3.53-3.79-9.32-9.55-10.86-10.82-.61-.5-2.28.24-4.14 1.84-.29.25-.74.53-1.36.91-1.25.77-3.86 2.36-4.1 3.57-.03.15-.03.32.16.58l.07.11c.35.61 1.07 1.65 1.5 1.95.68.48.7 1.15.51 1.59-.41.96-1.4.76-1.93.66-1.5-.3-2.42-.31-2.75-.05-.07.06-.11.2-.11.42 0 1.04.89 1.47 3.79 1.84.84.11 1.56.2 2.11.43.54.23 1.12.37 1.73.51.88.21 1.87.45 2.93 1 1.66.87 4.06 1.78 5.78 1.72.42-.02.79-.08 1.14-.14 1.55-.28 2.92-.28 4.02 2.56l.23.58c1.18 2.99 3.63 9.22 3.18 15.51-.46 6.4.14 14.85 1.26 17.72l1.13 2.89-2.8-1.32c-.24-.11-23.94-11.1-43.4-7.81-.11 2.57-.22 9.82 1.69 13.91z" transform="translate(1)"></path>
                                                        <path fill="#283277" d="M22.99 14.11s2.15.09 4.07 1.02c1.2.58 1.77 1.21 2.92.73.17-.07.34-.13.52-.19 2.68-.97 2.68-.97 4.57 1.14 1.54 1.71 2.77 2.08 3.96 1.42-1.52-1.49-3.19-2.94-4.64-4.6-1.79-2.05-1.72-2.54-.27-4.66-.07-.11-.14-.21-.21-.32-.49.38-1 .75-1.48 1.14-.32.26-.61.56-.91.85-.34-.4-.79-.74-.98-1.2-.22-.52-.2-1.14-.6-1.74-.09.96-.18 1.92-.28 2.97-.4.05-.87.1-1.58.18l1.38.58c-.05.3-.1.63-.16 1 1.61-1.08 2.57-1.7 3.19 1.01-1.2.36-2.13.54-3.35.82-.85.19-3.36-2.42-3.98-3.02" transform="translate(1)"></path>
                                                    </g>
                                                    <g>
                                                        <path fill="#FFF" d="M67.7 64.65c-3.25 6.96-6.5 10.27-6.5 10.27-1.43-2.76-1.54-4.23-3.1-4.8-2.27-.83-3.13.35-10.58 1.34-11.8 1.57-16.93 2.03-37.46.2-14.88-1.32-4.9-17.27-1.49-25.81 3.4-8.54 6.96-16.12 8.98-20.46 2.01-4.33 4.49-8.63 7.89-12.28 3.4-3.66 9.29-9.54 10.99-10.93 1.7-1.39 4.64.93 5.73 1.86 1.09.93 7.6 3.86 5.49 6.73 0 0-1.01 1.74-1.86 2.34-.85.6 4.8-1.72 4.8 1.61s-5.18 2.79-6.65 3.4c-1.47.61-2.94.62-4.57 1.47-1.62.85-4.3 1.93-6.4 1.86-2.11-.08-2.88-1.16-3.97 1.63-1.09 2.79-3.79 9.13-3.33 15.55.46 6.42-.1 15.09-1.34 18.26 0 0 26.41-11.91 46.68-7.97.01 0-.8 10.35-3.31 15.73z" transform="translate(69)"></path>
                                                        <path fill="#283277" d="M60.89 77.01l-.79-1.51c-.43-.84-.76-1.57-1.02-2.16-.65-1.48-.85-1.84-1.41-2.04-.94-.34-1.43-.25-3.37.2-1.44.33-3.42.78-6.62 1.21-11.92 1.59-17.1 2.04-37.73.21-3.93-.35-6.62-1.73-8-4.09-2.87-4.92.73-12.84 3.63-19.2.69-1.52 1.34-2.96 1.84-4.21 3.22-8.07 6.61-15.37 8.64-19.73l.37-.79c2.46-5.3 5.04-9.31 8.11-12.61 3.35-3.6 9.34-9.6 11.11-11.05 1.2-.98 3.44-1.44 7.31 1.88.14.12.62.42 1.05.67 1.91 1.17 4.79 2.93 5.24 5.2.17.86-.02 1.71-.55 2.47-.03.05-.07.12-.12.2.8.03 1.61.23 2.24.75.46.38 1.02 1.09 1.02 2.33 0 3.54-3.87 4.03-5.95 4.29-.58.07-1.23.16-1.46.25-.73.31-1.43.48-2.11.64-.81.19-1.57.38-2.36.79-.94.5-4.24 2.1-7.02 2-.59-.02-1.09-.11-1.49-.18-.25-.05-.6-.11-.7-.09.01 0-.21.16-.58 1.1l-.23.59c-1.2 3.04-3.43 8.7-3.01 14.42.36 5.01.12 11.89-.73 16.23 2.72-1.09 7.58-2.91 13.57-4.54 15.33-4.17 25.6-3.67 31.51-2.52l1.08.21-.09 1.1c-.03.43-.86 10.64-3.43 16.15-3.3 7.07-6.6 10.47-6.74 10.62l-1.21 1.21zm-4.27-8.4c.61 0 1.21.1 1.9.36 1.6.59 2.14 1.82 2.83 3.37.05.1.09.21.14.32 1.2-1.54 3.15-4.37 5.09-8.53 1.92-4.11 2.82-11.41 3.1-14.19-19.5-3.2-44.58 7.96-44.84 8.08l-2.76 1.24 1.1-2.82c1.12-2.87 1.72-11.32 1.26-17.72-.45-6.29 2-12.52 3.18-15.51l.23-.58c1.1-2.83 2.47-2.83 4.02-2.56.35.06.72.13 1.14.14 1.72.06 4.12-.85 5.78-1.72 1.06-.55 2.05-.79 2.93-1 .61-.15 1.18-.28 1.73-.51.55-.23 1.27-.32 2.11-.43 2.9-.37 3.79-.8 3.79-1.84 0-.22-.04-.36-.11-.42-.33-.27-1.25-.25-2.75.05-.53.11-1.52.3-1.93-.66-.19-.44-.17-1.11.51-1.59.43-.3 1.15-1.34 1.5-1.95l.07-.11c.19-.26.19-.44.16-.58-.24-1.21-2.85-2.81-4.1-3.57-.62-.38-1.07-.65-1.36-.91-1.86-1.6-3.53-2.34-4.14-1.84-1.55 1.26-7.33 7.02-10.86 10.81-2.89 3.1-5.33 6.9-7.68 11.96l-.37.79c-2.02 4.34-5.39 11.59-8.58 19.6-.52 1.31-1.19 2.77-1.89 4.32-2.66 5.84-5.97 13.12-3.74 16.93.96 1.65 2.95 2.59 6.08 2.87 20.37 1.81 25.46 1.36 37.18-.2 3.08-.41 4.99-.85 6.39-1.17 1.18-.23 2.05-.43 2.89-.43z" transform="translate(69)"></path>
                                                        <path fill="#283277" d="M48.15 14.11s-2.15.09-4.07 1.02c-1.2.58-1.77 1.21-2.92.73-.17-.07-.34-.13-.52-.19-2.68-.97-2.68-.97-4.57 1.14-1.54 1.71-2.77 2.08-3.96 1.42 1.52-1.49 3.19-2.94 4.64-4.6 1.79-2.05 1.72-2.54.27-4.66.07-.11.14-.21.21-.32.49.38 1 .75 1.48 1.14.32.26.61.56.91.85.34-.4.79-.74.98-1.2.22-.52.2-1.14.6-1.74.09.96.18 1.92.28 2.97.4.05.87.1 1.58.18l-1.38.58c.05.3.1.63.16 1-1.61-1.08-2.57-1.7-3.19 1.01 1.2.36 2.13.54 3.35.82.85.19 3.36-2.42 3.98-3.02" transform="translate(69)"></path>
                                                    </g>
                                                    <path fill="#283277" d="M129.35 28.25c5.88 6.38 9.25 13.81 9.25 21.74 0 23.75-30.21 43-67.47 43s-67.47-19.25-67.47-43c0-5.02 1.35-9.84 3.83-14.32l-3.12.22C2.15 40.34.94 45.09.94 50.02c0 .65-.01 2.45-.01 2.68 0 26.72 27.46 48.36 70.17 48.36 42.97 0 70.18-21.64 70.18-48.36v-2.68c0-7.87-3.07-15.29-8.47-21.76l-3.46-.01z"></path>
                                                </g>
                                                <g fill-rule="nonzero">
                                                    <g fill="#283277">
                                                        <path d="M218.39 14.32c-2.54-3.18-6.39-4.77-11.56-4.77-5.16 0-9.02 1.59-11.56 4.77-2.54 3.17-3.81 6.93-3.81 11.27 0 4.41 1.27 8.18 3.81 11.32 2.54 3.13 6.39 4.7 11.56 4.7 5.17 0 9.02-1.57 11.56-4.7 2.54-3.14 3.81-6.91 3.81-11.32 0-4.34-1.27-8.09-3.81-11.27m-6.29 18.24c-1.23 1.63-2.99 2.45-5.3 2.45-2.3 0-4.07-.82-5.31-2.45-1.24-1.63-1.86-3.96-1.86-6.97s.62-5.33 1.86-6.95c1.24-1.63 3.01-2.44 5.31-2.44s4.07.81 5.3 2.44c1.23 1.62 1.85 3.95 1.85 6.95 0 3.01-.62 5.34-1.85 6.97M153.53 11.66c-2.57-1.3-5.52-1.96-8.83-1.96-5.1 0-8.69 1.33-10.79 3.98-1.32 1.7-2.06 3.87-2.23 6.51h7.62c.19-1.16.56-2.09 1.12-2.77.78-.92 2.12-1.38 4.01-1.38 1.69 0 2.96.23 3.83.71.87.47 1.3 1.32 1.3 2.56 0 1.02-.56 1.76-1.7 2.25-.63.28-1.68.51-3.15.69l-2.7.33c-3.06.39-5.39 1.04-6.97 1.94-2.88 1.66-4.32 4.34-4.32 8.05 0 2.86.89 5.07 2.69 6.62 1.78 1.56 4.06 2.22 6.81 2.34 17.22.77 17.02-9.07 17.18-11.12V19.08c-.01-3.63-1.3-6.11-3.87-7.42m-4 17.19c-.05 2.64-.81 4.45-2.26 5.45-1.45 1-3.04 1.5-4.76 1.5-1.09 0-2.01-.3-2.77-.9-.76-.6-1.14-1.57-1.14-2.92 0-1.51.62-2.63 1.86-3.35.74-.42 1.94-.79 3.63-1.07l1.8-.33c.9-.17 1.6-.35 2.11-.54.52-.19 1.02-.44 1.53-.76v2.92zM114.27 16.45c1.97 0 3.41.61 4.35 1.82.64.9 1.04 1.91 1.19 3.04h8.49c-.47-4.28-1.97-7.27-4.5-8.97-2.54-1.69-5.79-2.54-9.77-2.54-4.68 0-8.35 1.44-11 4.3-2.66 2.87-3.99 6.89-3.99 12.04 0 4.57 1.2 8.29 3.61 11.16 2.41 2.87 6.16 4.3 11.26 4.3 5.11 0 8.96-1.72 11.56-5.16 1.63-2.13 2.54-4.39 2.73-6.79h-8.46c-.17 1.58-.67 2.87-1.49 3.86-.82.99-2.19 1.49-4.14 1.49-2.74 0-4.61-1.25-5.6-3.75-.54-1.34-.82-3.11-.82-5.31 0-2.31.28-4.16.82-5.56 1.05-2.62 2.96-3.93 5.76-3.93M96.77 9.8c-17.44 0-16.41 15.45-16.41 15.45v15.69h7.92V26.23c0-2.41.31-4.2.91-5.36 1.09-2.06 3.21-3.09 6.37-3.09.24 0 .55.01.94.03.39.02.82.05 1.33.11V9.86c-.35-.02-.58-.03-.68-.04-.11-.02-.23-.02-.38-.02M67.69 32.73c-.33.48-.69.88-1.08 1.2-1.12.92-2.64 1.2-4.43 1.2-1.69 0-3.01-.26-4.21-1.01-1.97-1.21-3.09-3.27-3.2-6.28h21.9c.03-2.6-.05-4.58-.26-5.97-.37-2.35-1.17-4.43-2.39-6.22-1.37-2.03-3.11-3.51-5.2-4.45-2.1-.93-4.45-1.41-7.07-1.41-4.41 0-7.99 1.39-10.75 4.17-2.76 2.78-4.15 6.77-4.15 11.98 0 5.56 1.53 9.57 4.59 12.04 3.06 2.47 6.59 3.7 10.59 3.7 4.85 0 8.62-1.46 11.31-4.39 1.45-1.54 2.36-3.06 2.74-4.56h-8.39zM57.05 17.99c1.11-1.14 2.68-1.72 4.69-1.72 1.86 0 3.41.54 4.67 1.62 1.25 1.08 1.95 2.66 2.09 4.75H54.95c.29-1.95.99-3.5 2.1-4.65M43.66 40.93h-7.23V22.72c0-1.66-.55-5.62-5.32-5.62-3.18 0-5.48 2.3-5.48 5.62v18.21h-7.24V22.72c0-1.66-.49-5.62-5.26-5.62-3.24 0-5.48 2.3-5.48 5.62v18.21H.41V22.9c0-7.52 4.99-13.2 12.72-13.2 3.84 0 6.96 1.61 8.99 4.2 2.13-2.58 5.31-4.2 8.99-4.2 7.89 0 12.55 5.45 12.55 13.2v18.03zM189.11.29s-7.98-.85-7.98 5.55l-.01 8.48c-.88-1.42-2.03-2.53-3.45-3.32-1.41-.8-3.03-1.2-4.86-1.2-3.96 0-7.11 1.47-9.48 4.41-2.37 2.94-3.54 7.19-3.54 12.32 0 4.45 1.2 8.1 3.6 10.94 2.4 2.84 7.11 4.08 11.29 4.08 14.58 0 14.41-12.5 14.41-12.5l.02-28.76zm-9.49 32.34c-1.16 1.66-2.85 2.48-5.07 2.48-2.23 0-3.89-.83-4.98-2.5-1.09-1.67-1.64-4.09-1.64-6.87 0-2.58.54-4.73 1.61-6.47 1.07-1.74 2.76-2.61 5.06-2.61 1.51 0 2.83.48 3.98 1.43 1.86 1.58 2.78 4.42 2.78 8.1-.01 2.64-.59 4.78-1.74 6.44" transform="translate(163 6)"></path>
                                                    </g>
                                                    <g fill="#00B1EA">
                                                        <path d="M8.34 37.79c0 1.07-.39 1.99-1.17 2.76-.77.77-1.71 1.15-2.8 1.15H.41V14.15c0-5.36 1.81-8.71 4.78-10.98C7.16 1.67 10.08.24 15.57.24c3.7 0 8.04 1.44 10.38 4.29 2.63 3.21 3.72 6.79 3.72 11.46 0 4.83-1.16 8.73-3.49 11.73-2.33 2.92-5.33 4.37-8.98 4.37-1.94 0-3.65-.35-5.12-1.03-1.56-.77-2.8-1.96-3.73-3.57v10.3h-.01zm13.29-21.46c0-2.99-.58-5.29-1.75-6.9-1.17-1.61-2.83-2.42-5.01-2.42-2.1 0-3.73.81-4.9 2.42-1.09 1.46-1.63 3.76-1.63 6.9 0 2.92.58 5.1 1.75 6.56 1.16 1.61 2.84 2.42 5.01 2.42 2.02 0 3.61-.81 4.78-2.42 1.17-1.61 1.75-3.79 1.75-6.56M82.21 29.55V27.6c-1.37 2.15-3.22 3.48-5.55 4.02-2.33.53-4.64.34-6.92-.58-2.3-.91-4.26-2.62-5.9-5.11-1.64-2.5-2.46-5.77-2.46-9.83 0-4.74 1.09-8.6 3.26-11.54C66.82 1.61 70.31.26 75.12.13c4.74-.13 7.49.95 10.19 2.99C88.26 5.36 90 8.79 90 14.15v16.21c.01 5.16-3.58 14.72-14.88 13.9-7-.51-10.88-3.38-13.05-9.88h8.36c.61 1.07 1.54 1.9 2.81 2.47 1.25.58 2.52.73 3.77.46 1.26-.27 2.41-1.02 3.44-2.24 1.01-1.23 1.6-3.07 1.76-5.52M69.16 16.34c0 5.28 1.53 8.21 4.58 8.79 3.05.57 5.3-.14 6.75-2.13.69-.84 1.18-2.16 1.49-3.96.3-1.8.33-3.58.06-5.34-.26-1.77-.9-3.34-1.89-4.72-.99-1.38-2.44-2.07-4.35-2.07-2.59 0-4.35.96-5.26 2.87-.93 1.92-1.38 4.1-1.38 6.56M54.59 2.31C52.01 1.01 49.06.34 45.74.34c-5.11 0-8.71 1.34-10.81 3.99-1.32 1.7-2.06 3.87-2.23 6.52h7.63c.19-1.17.56-2.09 1.12-2.77.79-.92 2.12-1.39 4.01-1.39 1.69 0 2.97.23 3.84.71.87.47 1.31 1.32 1.31 2.56 0 1.02-.57 1.76-1.7 2.24-.63.28-1.68.51-3.16.69l-2.7.33c-3.07.39-5.4 1.04-6.98 1.94-2.89 1.66-4.33 4.35-4.33 8.07 0 2.86.89 5.07 2.69 6.64 1.79 1.56 4.07 2.22 6.82 2.35 17.24.77 17.05-9.09 17.21-11.14V9.73c-.01-3.62-1.29-6.1-3.87-7.42m-4.01 17.22c-.05 2.64-.81 4.46-2.26 5.46-1.45 1-3.04 1.5-4.77 1.5-1.09 0-2.02-.31-2.78-.9-.76-.6-1.14-1.58-1.14-2.93 0-1.51.62-2.63 1.87-3.35.74-.42 1.95-.79 3.63-1.08l1.8-.33c.9-.17 1.61-.35 2.12-.55.52-.19 1.03-.44 1.53-.76v2.94zM119.99 4.81c-2.54-3.19-6.4-4.78-11.58-4.78-5.17 0-9.03 1.59-11.58 4.78-2.54 3.18-3.82 6.95-3.82 11.29 0 4.42 1.27 8.19 3.82 11.34 2.54 3.13 6.41 4.71 11.58 4.71 5.18 0 9.04-1.57 11.58-4.71 2.54-3.14 3.81-6.92 3.81-11.34-.01-4.34-1.27-8.1-3.81-11.29m-6.31 18.27c-1.23 1.64-3 2.46-5.3 2.46s-4.08-.82-5.32-2.46c-1.25-1.63-1.87-3.96-1.87-6.98 0-3.01.62-5.34 1.87-6.97 1.24-1.63 3.02-2.44 5.32-2.44 2.31 0 4.07.81 5.3 2.44 1.23 1.63 1.85 3.95 1.85 6.97 0 3.02-.61 5.35-1.85 6.98" transform="translate(163 6) translate(0 51)"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <!--end::Logo-->
                                <!--begin::Action-->
                                <a href="<?= $mp_data->init_point ?>" class="btn btn-sm btn-primary">Pagar agora</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Top-->
                            <!--begin::Wrapper-->
                            <div class="m-0">
                                <!--begin::Label-->
                                <div class="fw-bolder fs-3 text-gray-800 mb-8">Fatura #<?= $invoice_data->id ?></div>
                                <!--end::Label-->
                                <!--begin::Row-->
                                <div class="row g-5 mb-11">
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">Geração da fatura:</div>
                                        <!--end::Label-->
                                        <!--end::Col-->
                                        <div class="fw-bolder fs-6 text-gray-800"><?= date("j M Y", strtotime($invoice_data->created_at)) ?></div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Col-->
                                    <?php if ($invoice_data->created_at != $invoice_data->updated_at) : ?>
                                        <!--end::Col-->
                                        <div class="col-sm-6">
                                            <!--end::Label-->
                                            <div class="fw-bold fs-7 text-gray-600 mb-1">Ultima atualização:</div>
                                            <!--end::Label-->
                                            <!--end::Info-->
                                            <div class="fw-bolder fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                                <span class="pe-2"><?= date("j M Y", strtotime($invoice_data->updated_at)) ?></span>
                                                <span class="fs-7 text-danger d-flex align-items-center">
                                                    <span class="bullet bullet-dot bg-danger me-2"></span><?= timeAgo($invoice_data->updated_at) ?></span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Col-->
                                    <?php endif; ?>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-5 mb-12">
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">Gerado por:</div>
                                        <!--end::Label-->
                                        <!--end::Text-->
                                        <div class="fw-bolder fs-6 text-gray-800">ddtankAlpha.</div>
                                        <!--end::Text-->
                                        <!--end::Description-->
                                        <div class="fw-bold fs-7 text-gray-600">via <span class="text-gray-800">MercadoPago</span></div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Col-->
                                    <?php if ($invoice_data->created_at != $invoice_data->updated_at) : ?>
                                        <!--end::Col-->
                                        <div class="col-sm-6">
                                            <!--end::Label-->
                                            <div class="fw-bold fs-7 text-gray-600 mb-1">Atualizado por:</div>
                                            <!--end::Label-->
                                            <!--end::Text-->
                                            <div class="fw-bolder fs-6 text-gray-800">Mercado pago.</div>
                                            <!--end::Text-->
                                            <!--end::Description-->
                                            <div class="fw-bold fs-7 text-gray-600"><?= $invoice_data->updated_at ?></div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Col-->
                                    <?php endif; ?>
                                </div>
                                <!--end::Row-->
                                <!--begin::Content-->
                                <div class="flex-grow-1">
                                    <!--begin::Table-->
                                    <div class="table-responsive border-bottom mb-9">
                                        <table class="table mb-3">
                                            <thead>
                                                <tr class="border-bottom fs-6 fw-bolder text-muted">
                                                    <th class="min-w-175px pb-2">nome</th>
                                                    <th class="min-w-70px text-end pb-2">Tipo</th>
                                                    <th class="min-w-80px text-end pb-2">Quantidade</th>
                                                    <th class="min-w-100px text-end pb-2">Valor</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                    <td class="d-flex align-items-center">
                                                        <i class="fa fa-genderless text-primary fs-2 me-2"></i> <?= $product_data->name ?>
                                                    </td>
                                                    <td>Cupons</td>
                                                    <td><?= $product_data->ammount ?></td>
                                                    <td class="fs-5 text-dark fw-boldest"><?= number_format($product_data->value, 2) ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                    <!--begin::Container-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Section-->
                                        <div class="mw-300px">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Accountname-->
                                                <div class="fw-bold pe-10 text-gray-600 fs-7">Subtotal:</div>
                                                <!--end::Accountname-->
                                                <!--begin::Label-->
                                                <div class="text-end fw-bolder fs-6 text-gray-800">R$ <?= number_format($product_data->value, 2) ?></div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Code-->
                                                <div class="fw-bold pe-10 text-gray-600 fs-7">Total</div>
                                                <!--end::Code-->
                                                <!--begin::Label-->
                                                <div class="text-end fw-bolder fs-6 text-gray-800">R$ <?= number_format($product_data->value, 2) ?></div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Container-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Invoice 2 content-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="m-0">
                        <!--begin::Invoice 2 sidebar-->
                        <div class="d-print-none border border-dashed border-gray-300 card-rounded h-lg-100 min-w-md-350px p-9 bg-lighten">
                            <!--begin::Labels-->
                            <div class="mb-8">
                                <?php
                                /*
                                echo match ($invoice_data->state) {
                                    "approved" => '<span class="badge badge-light-success me-2">Aprovado</span>',
                                    "created" => '<span class="badge badge-light-warning">Aguardando pagamento</span>',
                                    default => '<span class="badge badge-light-warning">Aguardando pagamento</span>',
                                };*/
                                ?>


                            </div>
                            <!--end::Labels-->
                            <!--begin::Title-->
                            <h6 class="mb-8 fw-boldest text-gray-600 text-hover-primary">Detalhes de pagamento</h6>
                            <!--end::Title-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <div class="fw-bold text-gray-600 fs-7">Conta:</div>
                                <div class="fw-bolder text-gray-800 fs-6"><?= $udata->email ?></div>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <div class="fw-bold text-gray-600 fs-7">Personagem:</div>
                                <div class="fw-bolder text-gray-800 fs-6"><?= $udetail->NickName ?></div>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <div class="fw-bold text-gray-600 fs-7">Servidor:</div>
                                <div class="fw-bolder text-gray-800 fs-6">S1 - ddtankAlpha</div>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item
                            <div class="mb-15">
                                <div class="fw-bold text-gray-600 fs-7">Payment Term:</div>
                                <div class="fw-bolder fs-6 text-gray-800 d-flex align-items-center">14 days
                                    <span class="fs-7 text-danger d-flex align-items-center">
                                        <span class="bullet bullet-dot bg-danger mx-2"></span>Due in 7 days</span>
                                </div>
                            </div>
                            end::Item-->
                            <!--begin::Title-->
                            <h6 class="mb-8 fw-boldest text-gray-600 text-hover-primary">Detalhes da fatura</h6>
                            <!--end::Title-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <div class="fw-bold text-gray-600 fs-7">Codigo de referencia</div>
                                <div class="fw-bolder fs-6 text-gray-800"><?= $invoice_data->reference ?></div>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item
                            <div class="mb-6">
                                <div class="fw-bold text-gray-600 fs-7">Status de envio</div>
                                <div class="fw-bolder text-gray-800 fs-6"><?= ($invoice_data->is_send == 1) ? '<span class="fs-7 text-success d-flex align-items-center">Cupons enviados</span>' : '<span class="fs-7 text-danger d-flex align-items-center">Cupons não enviados</span>'; ?></div>
                            </div>
                            end::Item-->
                        </div>
                        <!--end::Invoice 2 sidebar-->
                    </div>
                    <!--end::Sidebar-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Invoice 2 main-->
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->