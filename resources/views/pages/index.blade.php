@extends('company-layouts.master')



@section('title')
    Home
@endsection

@section('content')
    <div class="page-content">

        <header>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-0" style="margin-left: 20px;">Welcome to Traivis</h1>

                </div>
            </div>
        </header>

        <div class="page-content">
            <div class="row mt-n24">



                <div class="col-6 col-sm-4 col-lg-3 col-md-3 mt-24">
                    <div class="widget widget-sm h-full">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                        <h4><span class="counter">9</span></h4>
                        <h6>Users</h6>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-3 col-md-3 mt-24">
                    <div class="widget widget-sm h-full">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <h4><span class="counter">8</span></h4>
                        <h6>External Courses</h6>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-3 col-md-3 mt-24">
                    <div class="widget widget-sm h-full">
                        <i class="fa fa-certificate" aria-hidden="true"></i>
                        <h4><span class="counter">7</span></h4>
                        <h6>Internal Courses</h6>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-3 col-md-3 mt-24">
                    <div class="widget widget-sm h-full">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        <h4><span class="counter">1</span></h4>
                        <h6>Purchased Courses</h6>
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-md-12">

                    <!-- Notifications -->
                    <div class="panel panel-light">
                        <div class="panel-header">
                            <h1 class="panel-title">Notifications</h1>

                        </div>
                        <div class="panel-body p-0">

                            <ul class="list-group list-group-notifications">


                                <li class="list-group-item">
                                    <div class="item-icon bg-primary-light">
                                        <i class="far fa-heart"></i>
                                    </div>
                                    <div class="item-info">
                                        <a
                                            href="https://traivis.com/dashboard/notification/view?type=accepted_request_by_individual">
                                            ammmar accepted Your Request </a>
                                        <p class="item-description">
                                            2021 Mar 08
                                        </p>
                                    </div>
                                    <div class="timestamp">08:43</div>
                                </li>

                            </ul>

                        </div>
                    </div><!-- / Notifications -->

                </div>

            </div>


        </div>






    </div>
@endsection
