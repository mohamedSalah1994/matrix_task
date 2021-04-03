<!DOCTYPE html>
<html class="no-js" lang="en">

@include('company-layouts.head')

<body>
    <div class="page-wrapper sidebar-open ">
      @include('company-layouts.main-sidebar')
        <!-- / Sidebar -->
        <main class="main-content">
            <div class="sidebar-backdrop"></div>
            <div class="page-container">
                <!-- Header Nav -->
               @include('company-layouts.main-header')


                <!-- Main Page Content -->
                <div class="page-content">

   @yield('content')




                </div><!-- / .page-content -->
                <!-- Main Page Content -->


         @include('company-layouts.footer')

</body>

</html>
