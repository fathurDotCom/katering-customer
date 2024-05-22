@extends('layouts.auth')

@section('title', 'register')
@section('content')

<div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
    
    <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
        
        <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">
            
            <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" action="{{ route('register') }}" method="POST">
                @csrf
                
                <div class="text-center mb-11">
                    
                    <h1 class="text-gray-900 fw-bolder mb-3">Sign Up</h1>
                    
                    
                    <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                    
                </div>
                
                
                {{-- <div class="row g-3 mb-9">
                    
                    <div class="col-md-6">
                        
                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                        <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Sign in with Google</a>
                        
                    </div>
                    
                    
                    <div class="col-md-6">
                        
                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                        <img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-15px me-3" />
                        <img alt="Logo" src="assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
                        
                    </div>
                    
                </div> --}}
                
                
                {{-- <div class="separator separator-content my-14">
                    <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                </div> --}}
                
                
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Firstname" name="firstname" autocomplete="firstname" class="form-control bg-transparent @error('firstname') is-invalid @enderror" value="{{ old('firstname') }}" required />
                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Lastname" name="lastname" autocomplete="lastname" class="form-control bg-transparent @error('lastname') is-invalid @enderror" value="{{ old('lastname') }}" required />
                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="fv-row mb-8">
                    <input type="email" placeholder="Email" name="email" autocomplete="email" class="form-control bg-transparent @error('email') is-invalid @enderror" value="{{ old('email') }}" required />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="fv-row mb-8" data-kt-password-meter="true">
                    
                    <div class="mb-1">
                        
                        <div class="position-relative mb-3">
                            <input class="form-control bg-transparent @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" autocomplete="new-password" required />
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                <i class="ki-duotone ki-eye-slash fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                                <i class="ki-duotone ki-eye fs-2 d-none">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </div>
                        
                        
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    
                    <div class="text-muted">Use 8 or more characters with a mix of uppercase letter, lowercase letter, number & symbol.</div>
                    
                </div>
                
                
                <div class="fv-row mb-8">
                    
                    <input placeholder="Repeat Password" name="password_confirmation" type="password" required autocomplete="new-password" class="form-control bg-transparent" />
                    
                </div>
                
                
                <div class="fv-row mb-8">
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="toc" value="1" required />
                        <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the 
                        <a href="#" class="ms-1 link-primary">Terms</a></span>
                    </label>
                </div>
                
                
                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                        
                        <span class="indicator-label">Sign up</span>
                        
                        
                        <span class="indicator-progress">Please wait... 
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        
                    </button>
                </div>
                
                
                <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account? 
                <a href="{{ route('login') }}" class="link-primary fw-semibold">Sign in</a></div>
                
            </form>
            
        </div>
        
        
        <div class="w-lg-500px d-flex flex-stack">
            
            <div class="me-10">
                
                <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                    <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="assets/media/flags/united-states.svg" alt="" />
                    <span data-kt-element="current-lang-name" class="me-1">English</span>
                    <i class="ki-duotone ki-down fs-5 text-muted rotate-180 m-0"></i>
                </button>
                
                
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
                    
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                            </span>
                            <span data-kt-element="lang-name">English</span>
                        </a>
                    </div>
                    
                    
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
                            </span>
                            <span data-kt-element="lang-name">Spanish</span>
                        </a>
                    </div>
                    
                    
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
                            </span>
                            <span data-kt-element="lang-name">German</span>
                        </a>
                    </div>
                    
                    
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
                            </span>
                            <span data-kt-element="lang-name">Japanese</span>
                        </a>
                    </div>
                    
                    
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/france.svg" alt="" />
                            </span>
                            <span data-kt-element="lang-name">French</span>
                        </a>
                    </div>
                    
                </div>
                
            </div>
            
            
            <div class="d-flex fw-semibold text-primary fs-base gap-5">
                <a href="pages/team.html" target="_blank">Terms</a>
                <a href="pages/pricing/column.html" target="_blank">Plans</a>
                <a href="pages/contact.html" target="_blank">Contact Us</a>
            </div>
            
        </div>
        
    </div>
    
</div>
@endsection
