<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    {{-- style.blade.php --}}
    @include('components.style')
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header [navbar]-->
        {{-- navbar.blade.php --}}
        @include('components.navbar')

        <!--begin::Sidebar-->
        {{-- sidebar.blade.php --}}
        @include('components.sidebar')

        <!--begin::App Main-->
        @yield('content')

        @include('components.footer')
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->


    {{-- script.blade.php --}}
    @include('components.script')

</body><!--end::Body-->

</html>
