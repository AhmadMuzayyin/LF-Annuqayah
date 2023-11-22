<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    @include('layouts.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('layouts.navbar')

            @yield('content')

        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

@include('layouts.footer')
@include('layouts.footerScript')

@stack('script')
</body>

</html>
