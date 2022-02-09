<!DOCTYPE html>

<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<title>ddtankAlpha - versão 10.9</title>
	<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8" />
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="ddtankAlpha | Lobby" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/1391875988364091400/kQCNQnOV.jpg" />

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

	<link href="<?= base_url() ?>/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

	<link href="<?= base_url() ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />


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
			j.src = '../../gtm5445.html?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
	</script>

</head>


<body id="kt_body" style="background-image: url(<?= base_url() ?>/assets/media/patterns/header-bg.jpg)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">


	<div class="d-flex flex-column flex-root">

		<div class="page d-flex flex-row flex-column-fluid">

			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

				<?php include 'default/header.php'; ?>

				<?= $this->section("content"); ?>
 
				<?php include 'default/footer.php'; ?>

			</div>

		</div>

	</div>



	<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
		<div class="card shadow-none rounded-0">

			<div class="card-header" id="kt_activities_header">
				<h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">

						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
									<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
									<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
								</g>
							</svg>
						</span>

					</button>
				</div>
			</div>


			<div class="card-body position-relative" id="kt_activities_body">

				<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">

					<div class="timeline">

						<div class="timeline-item">

							<div class="timeline-line w-40px"></div>


							<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
								<div class="symbol-label bg-light">

									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5" />
											<path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M9,8 C8.44771525,8 8,8.44771525 8,9 C8,9.55228475 8.44771525,10 9,10 L18,10 C18.5522847,10 19,9.55228475 19,9 C19,8.44771525 18.5522847,8 18,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 C8,13.5522847 8.44771525,14 9,14 L14,14 C14.5522847,14 15,13.5522847 15,13 C15,12.4477153 14.5522847,12 14,12 L9,12 Z" fill="#000000" />
										</svg>
									</span>

								</div>
							</div>


							<div class="timeline-content mb-10 mt-n1">

								<div class="pe-3 mb-5">

									<div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus Mobile APp”
										project:</div>


									<div class="d-flex align-items-center mt-1 fs-6">

										<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>


										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="<?= base_url() ?>/assets/media/avatars/150-11.jpg" alt="img" />
										</div>

									</div>

								</div>


								<div class="overflow-auto pb-5">

									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">

										<a href="#" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Meeting
											with customer</a>


										<div class="min-w-175px pe-2">
											<span class="badge badge-light text-muted">Application Design</span>
										</div>


										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">

											<div class="symbol symbol-circle symbol-25px">
												<img src="<?= base_url() ?>/assets/media/avatars/150-3.jpg" alt="img" />
											</div>


											<div class="symbol symbol-circle symbol-25px">
												<img src="<?= base_url() ?>/assets/media/avatars/150-11.jpg" alt="img" />
											</div>


											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">A
												</div>
											</div>

										</div>


										<div class="min-w-125px pe-2">
											<span class="badge badge-light-primary">In Progress</span>
										</div>


										<a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>

									</div>


									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">

										<a href="#" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Project
											Delivery Preparation</a>


										<div class="min-w-175px">
											<span class="badge badge-light text-muted">CRM System Development</span>
										</div>


										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">

											<div class="symbol symbol-circle symbol-25px">
												<img src="<?= base_url() ?>/assets/media/avatars/150-5.jpg" alt="img" />
											</div>


											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">B
												</div>
											</div>

										</div>


										<div class="min-w-125px">
											<span class="badge badge-light-success">Completed</span>
										</div>


										<a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a>

									</div>

								</div>

							</div>

						</div>


						<div class="timeline-item">

							<div class="timeline-line w-40px"></div>


							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">

									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<path d="M11.6734943,8.3307728 L14.9993074,6.09979492 L14.1213255,5.22181303 C13.7308012,4.83128874 13.7308012,4.19812376 14.1213255,3.80759947 L15.535539,2.39338591 C15.9260633,2.00286161 16.5592283,2.00286161 16.9497526,2.39338591 L22.6066068,8.05024016 C22.9971311,8.44076445 22.9971311,9.07392943 22.6066068,9.46445372 L21.1923933,10.8786673 C20.801869,11.2691916 20.168704,11.2691916 19.7781797,10.8786673 L18.9002333,10.0007208 L16.6692373,13.3265608 C16.9264145,14.2523264 16.9984943,15.2320236 16.8664372,16.2092466 L16.4344698,19.4058049 C16.360509,19.9531149 15.8568695,20.3368403 15.3095595,20.2628795 C15.0925691,20.2335564 14.8912006,20.1338238 14.7363706,19.9789938 L5.02099894,10.2636221 C4.63047465,9.87309784 4.63047465,9.23993286 5.02099894,8.84940857 C5.17582897,8.69457854 5.37719743,8.59484594 5.59418783,8.56552292 L8.79074617,8.13355557 C9.76799113,8.00149544 10.7477104,8.0735815 11.6734943,8.3307728 Z" fill="#000000" />
											<polygon fill="#000000" opacity="0.3" transform="translate(7.050253, 17.949747) rotate(-315.000000) translate(-7.050253, -17.949747)" points="5.55025253 13.9497475 5.55025253 19.6640332 7.05025253 21.9497475 8.55025253 19.6640332 8.55025253 13.9497475" />
										</svg>
									</span>

								</div>
							</div>


							<div class="timeline-content mb-10 mt-n2">

								<div class="overflow-auto pe-3">

									<div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that speak
										human workshop</div>


									<div class="d-flex align-items-center mt-1 fs-6">

										<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>


										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
											<img src="<?= base_url() ?>/assets/media/avatars/150-2.jpg" alt="img" />
										</div>

									</div>

								</div>

							</div>

						</div>


						<div class="timeline-item">

							<div class="timeline-line w-40px"></div>


							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">

									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
												<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
												<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
												<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
											</g>
										</svg>
									</span>

								</div>
							</div>


							<div class="timeline-content mb-10 mt-n1">

								<div class="mb-5 pe-3">

									<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New
										Incoming Project Files:</a>


									<div class="d-flex align-items-center mt-1 fs-6">

										<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>


										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
											<img src="<?= base_url() ?>/assets/media/avatars/150-6.jpg" alt="img" />
										</div>

									</div>

								</div>


								<div class="overflow-auto pb-5">
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">

										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">

											<img alt="" class="w-30px me-3" src="<?= base_url() ?>/assets/media/svg/files/pdf.svg" />


											<div class="ms-1 fw-bold">

												<a href="#" class="fs-6 text-hover-primary fw-bolder">Finance KPI App
													Guidelines</a>


												<div class="text-gray-400">1.9mb</div>

											</div>

										</div>


										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">

											<img alt="" class="w-30px me-3" src="<?= base_url() ?>/assets/media/svg/files/doc.svg" />


											<div class="ms-1 fw-bold">

												<a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing
													Results</a>


												<div class="text-gray-400">18kb</div>

											</div>

										</div>


										<div class="d-flex flex-aligns-center">

											<img alt="" class="w-30px me-3" src="<?= base_url() ?>/assets/media/svg/files/css.svg" />


											<div class="ms-1 fw-bold">

												<a href="#" class="fs-6 text-hover-primary fw-bolder">Finance
													Reports</a>


												<div class="text-gray-400">20mb</div>

											</div>

										</div>

									</div>
								</div>

							</div>

						</div>


						<div class="timeline-item">

							<div class="timeline-line w-40px"></div>


							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">

									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
												<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
											</g>
										</svg>
									</span>

								</div>
							</div>


							<div class="timeline-content mb-10 mt-n1">

								<div class="pe-3 mb-5">

									<div class="fs-5 fw-bold mb-2">Task
										<a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin
										Dashboard project:
									</div>


									<div class="d-flex align-items-center mt-1 fs-6">

										<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>


										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="<?= base_url() ?>/assets/media/avatars/150-11.jpg" alt="img" />
										</div>

									</div>

								</div>

							</div>

						</div>


						<div class="timeline-item">

							<div class="timeline-line w-40px"></div>


							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">

									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
											<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										</svg>
									</span>

								</div>
							</div>


							<div class="timeline-content mb-10 mt-n1">

								<div class="pe-3 mb-5">

									<div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>


									<div class="d-flex align-items-center mt-1 fs-6">

										<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>


										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
											<img src="<?= base_url() ?>/assets/media/avatars/150-3.jpg" alt="img" />
										</div>

									</div>

								</div>


								<div class="overflow-auto pb-5">
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">

										<div class="overlay me-10">

											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-200px" src="<?= base_url() ?>/assets/media/demos/demo1.png" />
											</div>


											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>

										</div>


										<div class="overlay me-10">

											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-200px" src="<?= base_url() ?>/assets/media/demos/demo2.png" />
											</div>


											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>

										</div>


										<div class="overlay">

											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-200px" src="<?= base_url() ?>/assets/media/demos/demo3.png" />
											</div>


											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>

										</div>

									</div>
								</div>

							</div>

						</div>


						<div class="timeline-item">

							<div class="timeline-line w-40px"></div>


							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">

									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3" />
											<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000" />
										</svg>
									</span>

								</div>
							</div>


							<div class="timeline-content mb-10 mt-n1">

								<div class="pe-3 mb-5">

									<div class="fs-5 fw-bold mb-2">New case
										<a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in
										Multi-platform Database Design project
									</div>


									<div class="overflow-auto pb-5">

										<div class="d-flex align-items-center mt-1 fs-6">

											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>


											<a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>

										</div>

									</div>

								</div>

							</div>

						</div>


						<div class="timeline-item">

							<div class="timeline-line w-40px"></div>


							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">

									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
											<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										</svg>
									</span>

								</div>
							</div>


							<div class="timeline-content mb-10 mt-n1">

								<div class="pe-3 mb-5">

									<div class="fs-5 fw-bold mb-2">You have received a new order:</div>


									<div class="d-flex align-items-center mt-1 fs-6">

										<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>


										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
											<img src="<?= base_url() ?>/assets/media/avatars/150-14.jpg" alt="img" />
										</div>

									</div>

								</div>


								<div class="overflow-auto pb-5">

									<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">


										<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
												<path d="M7,11.4648712 L7,17 C7,18.1045695 7.8954305,19 9,19 L15,19 L15,21 L9,21 C6.790861,21 5,19.209139 5,17 L5,8 L5,7 L7,7 L7,8 C7,9.1045695 7.8954305,10 9,10 L15,10 L15,12 L9,12 C8.27142571,12 7.58834673,11.8052114 7,11.4648712 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
												<path d="M18,22 C19.1045695,22 20,21.1045695 20,20 C20,18.8954305 19.1045695,18 18,18 C16.8954305,18 16,18.8954305 16,20 C16,21.1045695 16.8954305,22 18,22 Z M18,24 C15.790861,24 14,22.209139 14,20 C14,17.790861 15.790861,16 18,16 C20.209139,16 22,17.790861 22,20 C22,22.209139 20.209139,24 18,24 Z" fill="#000000" fill-rule="nonzero" />
												<path d="M18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 Z M18,15 C15.790861,15 14,13.209139 14,11 C14,8.790861 15.790861,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 Z" fill="#000000" fill-rule="nonzero" />
											</svg>
										</span>



										<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">

											<div class="mb-3 mb-md-0 fw-bold">
												<h4 class="text-gray-900 fw-bolder">Database Backup Process Completed!
												</h4>
												<div class="fs-6 text-gray-700 pe-7">Login into Metronic Admin Dashboard
													to make sure the data integrity is OK</div>
											</div>


											<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>

										</div>

									</div>

								</div>

							</div>

						</div>


						<div class="timeline-item">

							<div class="timeline-line w-40px"></div>


							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">

									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.25" d="M3.19406 11.1644C3.09247 10.5549 3.56251 10 4.18045 10H19.8195C20.4375 10 20.9075 10.5549 20.8059 11.1644L19.4178 19.4932C19.1767 20.9398 17.9251 22 16.4586 22H7.54138C6.07486 22 4.82329 20.9398 4.58219 19.4932L3.19406 11.1644Z" fill="#7E8299" />
											<path d="M2 9.5C2 8.67157 2.67157 8 3.5 8H20.5C21.3284 8 22 8.67157 22 9.5C22 10.3284 21.3284 11 20.5 11H3.5C2.67157 11 2 10.3284 2 9.5Z" fill="#7E8299" />
											<path d="M10 13C9.44772 13 9 13.4477 9 14V18C9 18.5523 9.44772 19 10 19C10.5523 19 11 18.5523 11 18V14C11 13.4477 10.5523 13 10 13Z" fill="#7E8299" />
											<path d="M14 13C13.4477 13 13 13.4477 13 14V18C13 18.5523 13.4477 19 14 19C14.5523 19 15 18.5523 15 18V14C15 13.4477 14.5523 13 14 13Z" fill="#7E8299" />
											<g opacity="0.25">
												<path d="M10.7071 3.70711C11.0976 3.31658 11.0976 2.68342 10.7071 2.29289C10.3166 1.90237 9.68342 1.90237 9.29289 2.29289L4.29289 7.29289C3.90237 7.68342 3.90237 8.31658 4.29289 8.70711C4.68342 9.09763 5.31658 9.09763 5.70711 8.70711L10.7071 3.70711Z" fill="#7E8299" />
												<path d="M13.2929 3.70711C12.9024 3.31658 12.9024 2.68342 13.2929 2.29289C13.6834 1.90237 14.3166 1.90237 14.7071 2.29289L19.7071 7.29289C20.0976 7.68342 20.0976 8.31658 19.7071 8.70711C19.3166 9.09763 18.6834 9.09763 18.2929 8.70711L13.2929 3.70711Z" fill="#7E8299" />
											</g>
										</svg>
									</span>

								</div>
							</div>


							<div class="timeline-content mt-n1">

								<div class="pe-3 mb-5">

									<div class="fs-5 fw-bold mb-2">New order
										<a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed for Workshow
										Planning &amp; Budget Estimation
									</div>


									<div class="d-flex align-items-center mt-1 fs-6">

										<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>


										<a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>


			<div class="card-footer py-5 text-center" id="kt_activities_footer">
				<a href="pages/profile/activity.html" class="btn btn-bg-body text-primary">View All Activities

					<span class="svg-icon svg-icon-3 svg-icon-primary">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
								<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
							</g>
						</svg>
					</span>
				</a>
			</div>

		</div>
	</div>


	<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">

		<div class="card w-100 rounded-0" id="kt_drawer_chat_messenger">

			<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">

				<div class="card-title">

					<div class="d-flex justify-content-center flex-column me-3">
						<a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Suporte</a>

						<div class="mb-0 lh-1">
							<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
							<span class="fs-7 fw-bold text-muted">Online</span>
						</div>

					</div>

				</div>


				<div class="card-toolbar">

					<div class="me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
							<i class="bi bi-three-dots fs-3"></i>
						</button>

						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">

							<div class="menu-item px-3">
								<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
							</div>


							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
							</div>


							<div class="menu-item px-3">
								<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation"></i></a>
							</div>


							<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" data-kt-menu-flip="left, center, top">
								<a href="#" class="menu-link px-3">
									<span class="menu-title">Groups</span>
									<span class="menu-arrow"></span>
								</a>

								<div class="menu-sub menu-sub-dropdown w-175px py-4">

									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
									</div>


									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
									</div>


									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
									</div>

								</div>

							</div>


							<div class="menu-item px-3 my-1">
								<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
							</div>

						</div>

					</div>


					<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">

						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
									<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
									<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
								</g>
							</svg>
						</span>

					</div>

				</div>

			</div>


			<div class="card-body" id="kt_drawer_chat_messenger_body">

				<div class="scroll-y me-n5 pe-5" id="chat_message_area" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px"></div>

			</div>


			<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
				<form action="<?= base_url('api/chat/send') ?>" id="send_chat_msg" method="post">
					<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" name="content" placeholder="Escreva a menssagem"></textarea>


					<div class="d-flex flex-stack">

						<div class="d-flex align-items-center me-2">
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Em breve">
								<i class="bi bi-paperclip fs-3"></i>
							</button>
							<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Em breve">
								<i class="bi bi-upload fs-3"></i>
							</button>
						</div>

						<button type="submit" class="btn btn-primary" button-send-chat="submit">
							<span class="indicator-label">Enviar</span>
							<span class="indicator-progress"><span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
					</div>
				</form>
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


	<script src="<?= base_url() ?>/assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?= base_url() ?>/assets/js/scripts.bundle.js"></script>
	<script>let BASE_HOST = "<?= base_url() ?>";</script>

	<?= $this->section('js_asset'); ?>
 
	<script>
		function loadChatData() {

			let data;

			$.ajax({
				url: `${BASE_HOST}/api/chat/data`,
				data: {
					uid: <?= $_SESSION['uid'] ?>
				},
				method: "post",
				dataType: "json",
				success: (item) => {
					$('#chat_message_area').empty();
					$(item).each((i) => {
						// ${item[i].tmdbid}
						if (item[i].send == 0) {
							data = `
                            <div class="d-flex justify-content-start mb-10">
                                <div class="d-flex flex-column align-items-start">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="${BASE_HOST}/assets/media/avatars/150-15.jpg" />
                                        </div>
                                        <div class="ms-3">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Suporte</a>
                                            <span class="text-muted fs-7 mb-1">${time_ago(new Date(item[i].created_at))}</span>
                                        </div>
                                    </div>
                                    <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">
                                    ${item[i].content}
                                    </div>

                                </div>

                                </div>

                                `;
						}

						if (item[i].send != 0) {
							data = `                       
                                <div class="d-flex justify-content-end mb-10">
                                    <div class="d-flex flex-column align-items-end">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="me-3">
                                                <span class="text-muted fs-7 mb-1">${time_ago(new Date(item[i].created_at))}</span>
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">eu</a>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="https://pbs.twimg.com/profile_images/1391875988364091400/kQCNQnOV.jpg" />
                                            </div>
                                        </div>
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">
                                        ${item[i].content}
                                        </div>

                                    </div>

                                </div>
                            `;
						}
						$('#chat_message_area').append(data);
					});
				},
			});
		}

		setInterval(function() {
			loadChatData();
		}, 8000);
	</script>

	<script>
		$("form#send_chat_msg").submit(function(e) {
			let btn = $('[button-send-chat="submit"]');
			e.preventDefault();

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
						loadChatData();
						form.trigger("reset");
					}
					btn.removeAttr("data-kt-indicator").removeAttr("disabled")
				}

			});
		});
	</script>

	<script>
		function checkState(){
            $.get("<?= $r->route('web.check.state') ?>", function( ) {});
       	}
        setInterval(checkState,5000)
		function time_ago(time) {

			switch (typeof time) {
				case 'number':
					break;
				case 'string':
					time = +new Date(time);
					break;
				case 'object':
					if (time.constructor === Date) time = time.getTime();
					break;
				default:
					time = +new Date();
			}
			var time_formats = [
				[60, 'segundos', 1], // 60
				[120, '1 minuto atrás', '1 minute from now'], // 60*2
				[3600, 'minutos', 60], // 60*60, 60
				[7200, '1 hora atrás', '1 hour from now'], // 60*60*2
				[86400, 'horas', 3600], // 60*60*24, 60*60
				[172800, 'ontem', 'Tomorrow'], // 60*60*24*2
				[604800, 'dias', 86400], // 60*60*24*7, 60*60*24
				[1209600, 'semana passada', 'Next week'], // 60*60*24*7*4*2
				[2419200, 'semanas', 604800], // 60*60*24*7*4, 60*60*24*7
				[4838400, 'mês passado', 'Next month'], // 60*60*24*7*4*2
				[29030400, 'mêses', 2419200], // 60*60*24*7*4*12, 60*60*24*7*4
				[58060800, 'ano passado', 'Next year'], // 60*60*24*7*4*12*2
				[2903040000, 'anos', 29030400], // 60*60*24*7*4*12*100, 60*60*24*7*4*12
				[5806080000, 'século passado', 'Next century'], // 60*60*24*7*4*12*100*2
				[58060800000, 'séculos', 2903040000] // 60*60*24*7*4*12*100*20, 60*60*24*7*4*12*100
			];
			var seconds = (+new Date() - time) / 1000,
				token = 'atrás',
				list_choice = 1;

			if (seconds == 0 || seconds <= 2) {
				return 'agora'
			}
			if (seconds < 0) {
				seconds = Math.abs(seconds);
				token = 'a partir de agora';
				list_choice = 2;
			}
			var i = 0,
				format;
			while (format = time_formats[i++])
				if (seconds < format[0]) {
					if (typeof format[2] == 'string')
						return format[list_choice];
					else
						return Math.floor(seconds / format[2]) + ' ' + format[1] + ' ' + token;
				}
			return time;
		}
	</script>

</body>



</html>