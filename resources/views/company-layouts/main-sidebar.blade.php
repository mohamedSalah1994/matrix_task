<nav id="sidebar" class="sidebar ps">
    <div class="sidebar-user">

        <img src="https://traivis.com/users/assets/avatars/1.jpg" class="avatar rounded-circle" alt="Avatar image">



        <div>
            <span class="user-name"> {{ Auth::user()->name }} </span>
            <a href="https://traivis.com/company/profile" target="_blank"><span class="badge badge-dark">
                    Company Profile
                </span></a>
        </div>
    </div>

    <ul class="sidebar-menu">

        <li class="active current">
            <a href="{{ route('index') }}">
                <i class="fa fa-server" aria-hidden="true"></i>
                <span>Dashboard</span>

            </a>
        </li>
        <li class="">
            <a href="#!">
                <i class="fa fa-user" aria-hidden="true"></i>
                <!--  Uncomment this when working -->
                <!-- <span>User Management</span> -->
                <!--  Uncomment this when working -->
                <!--  Remove this after development -->
                <span data-toggle="tooltip" data-placement="right" title="" data-original-title="">Organization
                    Structure</span>
                <!--  Remove this after development -->
                <i class="chevron">
                    <svg fill="#ffffff" viewBox="0 0 1024 1024">
                        <path class="path1"
                            d="M256 1024c-6.552 0-13.102-2.499-18.101-7.499-9.998-9.997-9.998-26.206 0-36.203l442.698-442.698-442.698-442.699c-9.998-9.997-9.998-26.206 0-36.203s26.206-9.998 36.203 0l460.8 460.8c9.998 9.997 9.998 26.206 0 36.203l-460.8 460.8c-5 5-11.55 7.499-18.102 7.499z">
                        </path>
                    </svg>
                </i>
            </a>
            <ul class="sidebar-submenu" style="display: none;">
                <li class="">
                    <a href="{{ route('positions.index') }}">
                        Positions
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('departments.index') }}">
                        Departments
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('projects.index') }}">
                        Projects
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('workforces.index') }}">
                        Workforce
                    </a>
                </li>
                <li>
                    <a href="https://traivis.com/company/sub-contractor">
                        <i aria-hidden="true"></i>

                        <span data-toggle="tooltip" data-placement="right" title=""
                            data-original-title="">Contractor</span>
                    </a>
                </li>
                <li>
                    <a href="https://traivis.com/company/project-manager">
                        <i aria-hidden="true"></i>

                        <span data-toggle="tooltip" data-placement="right" title="" data-original-title="">Project
                            Manager</span>
                    </a>
                </li>

            </ul>
        </li>




        <li class="">
            <a href="#!">
                <i class="fa fa-book" aria-hidden="true"></i>
                <!--  Uncomment this when working -->
                <!--   <span>Course Management</span> -->
                <!--  Uncomment this when working -->
                <!--  Remove this after development -->
                <span data-toggle="tooltip" data-placement="right" title="" data-original-title="">Course
                    Management</span>
                <!--  Remove this after development -->
                <i class="chevron">
                    <svg fill="#ffffff" viewBox="0 0 1024 1024">
                        <path class="path1"
                            d="M256 1024c-6.552 0-13.102-2.499-18.101-7.499-9.998-9.997-9.998-26.206 0-36.203l442.698-442.698-442.698-442.699c-9.998-9.997-9.998-26.206 0-36.203s26.206-9.998 36.203 0l460.8 460.8c9.998 9.997 9.998 26.206 0 36.203l-460.8 460.8c-5 5-11.55 7.499-18.102 7.499z">
                        </path>
                    </svg>
                </i>
            </a>
            <ul class="sidebar-submenu" style="display: none;">

                <li class="">
                    <a href="https://traivis.com/company/search-courses">
                        <span data-toggle="tooltip" data-placement="right" title="" data-original-title="">Search
                            Courses</span>

                    </a>
                </li>

                <li class="">
                    <a href="https://traivis.com/company/purchased-courses">
                        <span data-toggle="tooltip" data-placement="right" title="" data-original-title="">Purchased
                            Courses</span>

                    </a>
                </li>
                <li class="">
                    <a href="https://traivis.com/company/enrolled-courses">
                        <span data-toggle="tooltip" data-placement="right" title="" data-original-title="">Enrolled
                            Courses</span>

                    </a>
                </li>
                <li>
                    <a href="https://traivis.com/company/certificate">
                        <span data-toggle="tooltip" data-placement="right" title=""
                            data-original-title="">Certificates</span>

                    </a>
                </li>
                <li>
                    <a href="https://traivis.com/company/exam-result">
                        <span data-toggle="tooltip" data-placement="right" title="" data-original-title="">Exam
                            Results</span>

                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#!">
                <i class="fa fa-cube" aria-hidden="true"></i>
                <!--  Uncomment this when working -->
                <!--  <span>Notifications</span> -->
                <!--  Uncomment this when working -->
                <!--  Remove this after development -->
                <span data-toggle="tooltip" data-placement="right" title="" data-original-title="">Training
                    Matrix</span>
                <!--  Remove this after development -->
                <i class="chevron">
                    <svg fill="#ffffff" viewBox="0 0 1024 1024">
                        <path class="path1"
                            d="M256 1024c-6.552 0-13.102-2.499-18.101-7.499-9.998-9.997-9.998-26.206 0-36.203l442.698-442.698-442.698-442.699c-9.998-9.997-9.998-26.206 0-36.203s26.206-9.998 36.203 0l460.8 460.8c9.998 9.997 9.998 26.206 0 36.203l-460.8 460.8c-5 5-11.55 7.499-18.102 7.499z">
                        </path>
                    </svg>
                </i>
            </a>
            <ul class="sidebar-submenu" style="display: none;">
                <li class="">
                    <a href="https://traivis.com/company/training-matrix-structure">
                        Training Matrix Structure
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('training-matrix.index') }}">
                        Training Matrix
                    </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="#!">
                <i class="fa fa-cube" aria-hidden="true"></i>
                <span data-toggle="tooltip" data-placement="right" title="" data-original-title="">Bidding
                    Management</span>
                <!--  Remove this after development -->
                <i class="chevron">
                    <svg fill="#ffffff" viewBox="0 0 1024 1024">
                        <path class="path1"
                            d="M256 1024c-6.552 0-13.102-2.499-18.101-7.499-9.998-9.997-9.998-26.206 0-36.203l442.698-442.698-442.698-442.699c-9.998-9.997-9.998-26.206 0-36.203s26.206-9.998 36.203 0l460.8 460.8c9.998 9.997 9.998 26.206 0 36.203l-460.8 460.8c-5 5-11.55 7.499-18.102 7.499z">
                        </path>
                    </svg>
                </i>
            </a>
            <ul class="sidebar-submenu" style="display: none;">
                <li class="">
                    <a href="https://traivis.com/company/bidding-list">
                        <i aria-hidden="true"></i>
                        <span data-toggle="tooltip" data-placement="right" title="" data-original-title="">Bidding
                            Result</span>
                    </a>
                </li>
                <li class="">
                    <a href="https://traivis.com/company/bidding-request-list">
                        <i aria-hidden="true"></i>
                        <span data-toggle="tooltip" data-placement="right" title="" data-original-title=""> Bidding
                            Request from Project Manager</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="https://traivis.com/messages">
                <i class="fa fa-cubes" aria-hidden="true"></i>
                <!--  Uncomment this when working -->
                <!--  <span>Bidding</span> -->
                <!--  Uncomment this when working -->
                <!--  Remove this after development -->
                <span data-toggle="tooltip" data-placement="right" title="" data-original-title="">Message</span>
                <!--  Remove this after development -->
            </a>
        </li>


        <li>
            <a>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <!--  Remove this after development -->
                <span data-toggle="tooltip" data-placement="right" title="" data-original-title="">Contact : 897898798
                </span>
                <!--  Remove this after development -->
                <!--  <span>Projects</span>  -->
            </a>
        </li>
        <li>
            <a href="mailto:897898798?Subject=neew%20support" class="btn btn-primary" style="font-size:smaller;"
                target="_blank"> Support </a>
        </li>


    </ul>
    <hr>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
    </div>
</nav>
