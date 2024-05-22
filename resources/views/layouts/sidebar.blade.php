<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">

    <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">

        <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">

            <div class="symbol symbol-50px">
                <img src="/assets/media/avatars/300-1.jpg" alt="" />
            </div>

            <div class="aside-user-info flex-row-fluid flex-wrap ms-5">

                <div class="d-flex">

                    <div class="flex-grow-1 me-2">

                        <a href="#" class="text-white text-hover-primary fs-6 fw-bold">{{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}</a>

                        <span class="text-gray-600 fw-semibold d-block fs-8 mb-1">{{ auth()->user()->roles->first()->name }}</span>

                        <div class="d-flex align-items-center text-success fs-9">
                        <span class="bullet bullet-dot bg-success me-1"></span>online</div>

                    </div>

                    <div class="me-n2">

                        <a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-setting-2 text-muted fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>

                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">

                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">

                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="/assets/media/avatars/300-1.jpg" />
                                    </div>

                                    <div class="d-flex flex-column">
                                        <div class="fw-bold d-flex align-items-center fs-7">{{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}
                                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">{{ auth()->user()->roles->first()->name }}</span></div>
                                        <a href="#" class="fw-semibold text-muted text-hover-primary fs-8">{{ auth()->user()->company?->name}}</a>
                                    </div>

                                </div>
                            </div>

                            <div class="separator my-2"></div>

                            <div class="menu-item px-5">
                                <form action="{{ route('logout') }}" method="POST" class="form-logout">
                                    @csrf
                                </form>
                                
                                <a href="#" class="menu-link px-5 btn-logout">Sign Out</a>                                
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="aside-menu flex-column-fluid">

        <div class="hover-scroll-overlay-y mx-3 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">

            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">

                <div class="menu-item">

                    <a class="menu-link {{ request()->is('/') ? 'active' : null }}" href="{{ route('index') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-home fs-2"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>

                </div>

                <div class="menu-item">

                    <a class="menu-link {{ request()->is('order*') ? 'active' : null }}" href="{{ route('order.index') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-purchase fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Order</span>
                    </a>

                </div>

                <div class="menu-item">

                    <a class="menu-link {{ request()->is('profile*') ? 'active' : null }}" href="{{ route('profile.index') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-user fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">My Profile</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>