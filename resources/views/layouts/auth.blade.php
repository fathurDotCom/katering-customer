<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }} - @yield('title')</title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />


    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>

<body id="kt_body" class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center">

    <div class="d-flex flex-column flex-root">

        <style>
            body {
                background-image: url('/assets/media/auth/bg10.jpeg');
            }
            [data-bs-theme="dark"] body {
                background-image: url('/assets/media/auth/bg10-dark.jpeg');
            }
        </style>

        <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            <div class="d-flex flex-lg-row-fluid">

                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">

                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="/assets/media/auth/logo_light.png" alt="" />
                    <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="/assets/media/auth/logo_dark.png" alt="" />

                    <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>

                    <div class="text-gray-600 fs-base text-center fw-semibold">In this kind of post, 
                    <a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a person they’ve interviewed 
                    <br />and provides some background information about 
                    <a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their 
                    <br />work following this is a transcript of the interview.</div>

                </div>

            </div>

            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">

                @yield('content')

            </div>

        </div>

    </div>

    <script>var hostUrl = "/assets/";</script>

    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/js/scripts.bundle.js"></script>

    <script src="/assets/js/custom/authentication/sign-in/general.js"></script>

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
            } if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>

</body>
</html>
