<!DOCTYPE html>
<html lang="en">

@include('Back.inc.head')


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('Back.inc.sidebar')



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('Back.inc.navbar')


                @yield('content')


            </div>
            <!-- End of Main Content -->

            @include('Back.inc.footer')


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('Back.inc.logout')



    @include('Back.inc.scripts')
</body>

</html>
