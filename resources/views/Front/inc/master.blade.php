<!DOCTYPE html>
<html lang="en">

@include('Front.inc.head')

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    @include('Front.inc.fnav')


    @include('Front.inc.snav')


    <!-- page-header -->
    <header class="page-header"></header>
    <!-- end of page header -->

    <div class="container">
        @yield('content')
    </div>
 

    @include('Front.inc.footer')


    @include('Front.inc.scripts')


</body>

</html>
