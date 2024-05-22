<!DOCTYPE html>
<html lang="en">

	<head>
		<title>{{ env('APP_NAME') }} - @yield('title')</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

		<link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		@stack('css')
	</head>

	<body id="kt_body" class="aside-enabled">

		<div class="d-flex flex-column flex-root">

            <div class="page d-flex flex-row flex-column-fluid">

				@include('layouts.sidebar')

				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

					<div id="kt_header" class="header align-items-stretch">

						<div class="header-brand">

							<a href="index.html">
								<h1 class="text-white">{{ env('APP_NAME') }}</h1>
							</a>

							<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
								<i class="ki-duotone ki-entrance-right fs-1 me-n1 minimize-default">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								<i class="ki-duotone ki-entrance-left fs-1 minimize-active">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>

							<div class="d-flex align-items-center d-lg-none me-n2" title="Show aside menu">
								<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
									<i class="ki-duotone ki-abstract-14 fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
							</div>

						</div>

						<div class="toolbar d-flex align-items-stretch">

							<div class="container-xxl py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">

								<div class="page-title d-flex justify-content-center flex-column me-5">

									<h1 class="d-flex flex-column text-gray-900 fw-bold fs-3 mb-0">@yield('title')</h1>

									<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">

										<li class="breadcrumb-item text-muted">@yield('title')</li>

										{{-- <li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li> --}}

									</ul>

								</div>

								<div class="d-flex">
									<div class="d-flex align-items-center overflow-auto pt-3 pt-lg-0 px-5">
	
										<div class="d-flex align-items-center">
	
											<a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
												<i class="ki-duotone ki-night-day theme-light-show fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
													<span class="path6"></span>
													<span class="path7"></span>
													<span class="path8"></span>
													<span class="path9"></span>
													<span class="path10"></span>
												</i>
												<i class="ki-duotone ki-moon theme-dark-show fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</a>
	
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
	
												<div class="menu-item px-3 my-0">
													<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-night-day fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
																<span class="path6"></span>
																<span class="path7"></span>
																<span class="path8"></span>
																<span class="path9"></span>
																<span class="path10"></span>
															</i>
														</span>
														<span class="menu-title">Light</span>
													</a>
												</div>
	
												<div class="menu-item px-3 my-0">
													<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-moon fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
														<span class="menu-title">Dark</span>
													</a>
												</div>
	
												<div class="menu-item px-3 my-0">
													<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-screen fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
														<span class="menu-title">System</span>
													</a>
												</div>
	
											</div>
	
										</div>
	
									</div>
	
									<div class="d-flex align-items-center pt-3 pt-lg-0">
										<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
		
											<div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
									
												<div class="symbol symbol-35px">
													<img src="/assets/media/avatars/300-1.jpg" height="50px" alt="" />
												</div>
									
												<div class="aside-user-info flex-row-fluid flex-wrap ms-5">
									
													<div class="d-flex">
									
														<div class="flex-grow-1 me-2">
									
															<span class="text-gray-900 text-hover-primary fs-6 fw-bold">{{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}</span>
									
															<span class="text-gray-600 fw-semibold d-block fs-8 mb-1">{{ auth()->user()->roles->first()->name }}</span>
									
														</div>
									
													</div>
									
												</div>
									
											</div>
									
										</div>
									</div>
								</div>
								
								
							</div>

						</div>

					</div>

                    @yield('content')

					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">

						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">

							<div class="text-gray-900 order-2 order-md-1">
								<span class="text-muted fw-semibold me-1">2024&copy;</span>
								<a href="#" target="_blank" class="text-gray-800 text-hover-primary">LandInsight</a>
							</div>

							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
								<li class="menu-item">
									<a href="#" target="_blank" class="menu-link px-2">About</a>
								</li>
							</ul>

						</div>

					</div>

				</div>

			</div>

		</div>

		<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">

			<div class="modal-dialog modal-dialog-centered mw-650px">

				<div class="modal-content">

					<div class="modal-header pb-0 border-0 justify-content-end">

						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<i class="ki-duotone ki-cross fs-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>

					</div>

					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">

						<div class="text-center mb-13">
							<h1 class="mb-3">Search Users</h1>
							<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
						</div>

						<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">

							<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">

								<input type="hidden" />

								<i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>

								<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />

								<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>

								<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>

							</form>

							<div class="py-5">

								<div data-kt-search-element="suggestions">

									<h3 class="fw-semibold mb-5">Recently searched:</h3>

									<div class="mh-375px scroll-y me-n7 pe-7">

										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">

											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="/assets/media/avatars/300-6.jpg" />
											</div>

											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
												<span class="badge badge-light">Art Director</span>
											</div>

										</a>

										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">

											<div class="symbol symbol-35px symbol-circle me-5">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>

											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
												<span class="badge badge-light">Marketing Analytic</span>
											</div>

										</a>

										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">

											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
											</div>

											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Max Smith</span>
												<span class="badge badge-light">Software Enginer</span>
											</div>

										</a>

										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">

											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="/assets/media/avatars/300-5.jpg" />
											</div>

											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
												<span class="badge badge-light">Web Developer</span>
											</div>

										</a>

										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">

											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
											</div>

											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
												<span class="badge badge-light">UI/UX Designer</span>
											</div>

										</a>

									</div>

								</div>

								<div data-kt-search-element="results" class="d-none">

									<div class="mh-375px scroll-y me-n7 pe-7">

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-6.jpg" />
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
													<div class="fw-semibold text-muted">smith@kpmg.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
													<div class="fw-semibold text-muted">melody@altbox.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-1.jpg" />
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
													<div class="fw-semibold text-muted">max@kt.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-5.jpg" />
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
													<div class="fw-semibold text-muted">sean@dellito.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-25.jpg" />
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
													<div class="fw-semibold text-muted">brian@exchange.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
													<div class="fw-semibold text-muted">mik@pex.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-9.jpg" />
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
													<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
													<div class="fw-semibold text-muted">olivia@corpmail.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
													<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-23.jpg" />
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
													<div class="fw-semibold text-muted">dam@consilting.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
													<div class="fw-semibold text-muted">emma@intenso.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-12.jpg" />
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
													<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
													<div class="fw-semibold text-muted">robert@benko.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-13.jpg" />
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
													<div class="fw-semibold text-muted">miller@mapple.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
													<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-21.jpg" />
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
													<div class="fw-semibold text-muted">ethan@loop.com.au</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>

										</div>

										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">

											<div class="d-flex align-items-center">

												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
												</label>

												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="/assets/media/avatars/300-23.jpg" />
												</div>

												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
													<div class="fw-semibold text-muted">dam@consilting.com</div>
												</div>

											</div>

											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>

										</div>

									</div>

									<div class="d-flex flex-center mt-15">
										<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
										<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
									</div>

								</div>

								<div data-kt-search-element="empty" class="text-center d-none">

									<div class="fw-semibold py-10">
										<div class="text-gray-600 fs-3 mb-2">No users found</div>
										<div class="text-muted fs-6">Try to search by username, full name or email...</div>
									</div>

									<div class="text-center px-5">
										<img src="/assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<script>var hostUrl = "/assets/";</script>

		<script src="/assets/plugins/global/plugins.bundle.js"></script>
		<script src="/assets/js/scripts.bundle.js"></script>

		<script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>

		<script src="/assets/js/custom/utilities/modals/users-search.js"></script>

		<script src="/assets/js/app.js"></script>

		

		<script>
		var defaultThemeMode = "light";
		var themeMode;
		if ( document.documentElement ) {
			if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
	 		} else {
				if ( localStorage.getItem("data-bs-theme") !== null ) {
					themeMode = localStorage.getItem("data-bs-theme");
	 			} else {
					themeMode = defaultThemeMode;
				}
			}
		
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-bs-theme", themeMode);
	 	}
		</script>

		<script>
			$(document).on('click', '.btn-logout', () => {
				$('.form-logout').submit()
			})
		</script>
		
		@stack('script')

	</body>

</html>