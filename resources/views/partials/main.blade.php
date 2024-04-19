@section('content')
<main class="main-content border-radius-lg ">
    <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">

                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">index</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">index</h6>

            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    <div class="input-group input-group-outline">
                        <label class="form-label">Type here...</label>
                        <input type="text" class="form-control">
                    </div>

                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
                    </li>
                    <li class="mt-2">
                        <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>

                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="{{ asset('img/team-2.jpg') }}" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="{{ asset('img/small-logos/logo-spotify.svg') }}" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a href="/logout" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>

                            <span class="d-sm-inline d-none">Logout</span>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar -->





    <div class="container-fluid py-4">
        <h6>If you are not redirected automatically, follow <a href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard ">this link</a>.</h6>
        <div class="row">
            <div class="col-lg-7 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <h2 class="font-weight-bolder mb-0">General Statistics</h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5 col-sm-5">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">weekend</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Bookings</p>
                                    <h4 class="mb-0">281</h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
                            </div>
                        </div>

                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">leaderboard</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                                    <h4 class="mb-0">2,300</h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 col-sm-5 mt-sm-0 mt-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">store</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize ">Revenue</p>
                                    <h4 class="mb-0 ">34k</h4>
                                </div>
                            </div>

                            <hr class="horizontal my-0 dark">
                            <div class="card-footer p-3">
                                <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
                            </div>
                        </div>

                        <div class="card ">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person_add</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize ">Followers</p>
                                    <h4 class="mb-0 ">+91</h4>
                                </div>
                            </div>

                            <hr class="horizontal my-0 dark">
                            <div class="card-footer p-3">
                                <p class="mb-0 ">Just updated</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-10">
                        <div class="card mb-4 ">
                            <div class="d-flex">
                                <div class="icon icon-shape icon-lg bg-gradient-success shadow text-center border-radius-xl mt-n3 ms-4">
                                    <i class="material-icons opacity-10" aria-hidden="true">language</i>
                                </div>
                                <h6 class="mt-3 mb-2 ms-3 ">Sales by Country</h6>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="table-responsive">
                                            <table class="table align-items-center ">
                                                <tbody>
                                                    <tr>
                                                        <td class="w-30">
                                                            <div class="d-flex px-2 py-1 align-items-center">
                                                                <div>
                                                                    <img src="{{ asset('img/icons/flags/US.png') }}" alt="Country flag">
                                                                </div>
                                                                <div class="ms-4">
                                                                    <p class="text-xs font-weight-bold mb-0 ">Country:</p>
                                                                    <h6 class="text-sm font-weight-normal mb-0 ">United States</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-center">
                                                                <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                                                                <h6 class="text-sm font-weight-normal mb-0 ">2500</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-center">
                                                                <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                                                                <h6 class="text-sm font-weight-normal mb-0 ">$230,900</h6>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-sm">
                                                            <div class="col text-center">
                                                                <p class="text-xs font-weight-bold mb-0 ">Bounce:</p>
                                                                <h6 class="text-sm font-weight-normal mb-0 ">29.9%</h6>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="w-30">
                                                            <div class="d-flex px-2 py-1 align-items-center">
                                                                <div>
                                                                    <img src="{{ asset('img/icons/flags/DE.png') }}" alt="Country flag">
                                                                </div>
                                                                <div class="ms-4">
                                                                    <p class="text-xs font-weight-bold mb-0 ">Country:</p>
                                                                    <h6 class="text-sm font-weight-normal mb-0 ">Germany</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-center">
                                                                <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                                                                <h6 class="text-sm font-weight-normal mb-0 ">3.900</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-center">
                                                                <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                                                                <h6 class="text-sm font-weight-normal mb-0 ">$440,000</h6>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-sm">
                                                            <div class="col text-center">
                                                                <p class="text-xs font-weight-bold mb-0 ">Bounce:</p>
                                                                <h6 class="text-sm font-weight-normal mb-0 ">40.22%</h6>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="w-30">
                                                            <div class="d-flex px-2 py-1 align-items-center">
                                                                <div>
                                                                    <img src="{{ asset('img/icons/flags/GB.png') }}" alt="Country flag">
                                                                </div>
                                                                <div class="ms-4">
                                                                    <p class="text-xs font-weight-bold mb-0 ">Country:</p>
                                                                    <h6 class="text-sm font-weight-normal mb-0 ">Great Britain</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-center">
                                                                <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                                                                <h6 class="text-sm font-weight-normal mb-0 ">1.400</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-center">
                                                                <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                                                                <h6 class="text-sm font-weight-normal mb-0 ">$190,700</h6>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-sm">
                                                            <div class="col text-center">
                                                                <p class="text-xs font-weight-bold mb-0 ">Bounce:</p>
                                                                <h6 class="text-sm font-weight-normal mb-0 ">23.44%</h6>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="w-30">
                                                            <div class="d-flex px-2 py-1 align-items-center">
                                                                <div>
                                                                    <img src="{{ asset('img/icons/flags/BR.png') }}" alt="Country flag">
                                                                </div>
                                                                <div class="ms-4">
                                                                    <p class="text-xs font-weight-bold mb-0 ">Country:</p>
                                                                    <h6 class="text-sm font-weight-normal mb-0 ">Brasil</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-center">
                                                                <p class="text-xs font-weight-bold mb-0 ">Sales:</p>
                                                                <h6 class="text-sm font-weight-normal mb-0 ">562</h6>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-center">
                                                                <p class="text-xs font-weight-bold mb-0 ">Value:</p>
                                                                <h6 class="text-sm font-weight-normal mb-0 ">$143,960</h6>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-sm">
                                                            <div class="col text-center">
                                                                <p class="text-xs font-weight-bold mb-0 ">Bounce:</p>
                                                                <h6 class="text-sm font-weight-normal mb-0 ">32.14%</h6>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-5">
                                        <div id="map" class="mt-0 mt-lg-n4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-5 mb-lg-0 mb-4">
                <div class="card z-index-2 mt-4">
                    <div class="card-body mt-n5 px-3">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 mb-3">
                            <div class="chart">
                                <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                            </div>
                        </div>
                        <h6 class="ms-2 mt-4 mb-0"> Active Users </h6>
                        <p class="text-sm ms-2"> (<span class="font-weight-bolder">+11%</span>) than last week </p>
                        <div class="container border-radius-lg">
                            <div class="row">
                                <div class="col-3 py-3 ps-0">
                                    <div class="d-flex mb-2">
                                        <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="material-icons opacity-10">groups</i>
                                        </div>
                                        <p class="text-xs my-auto font-weight-bold">Users</p>
                                    </div>
                                    <h4 class="font-weight-bolder">42K</h4>
                                    <div class="progress w-75">
                                        <div class="progress-bar bg-dark w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3 py-3 ps-0">
                                    <div class="d-flex mb-2">
                                        <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="material-icons opacity-10">ads_click</i>
                                        </div>
                                        <p class="text-xs mt-1 mb-0 font-weight-bold">Clicks</p>
                                    </div>
                                    <h4 class="font-weight-bolder">1.7m</h4>
                                    <div class="progress w-75">
                                        <div class="progress-bar bg-dark w-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3 py-3 ps-0">
                                    <div class="d-flex mb-2">
                                        <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="material-icons opacity-10">receipt</i>
                                        </div>
                                        <p class="text-xs mt-1 mb-0 font-weight-bold">Sales</p>
                                    </div>
                                    <h4 class="font-weight-bolder">399$</h4>
                                    <div class="progress w-75">
                                        <div class="progress-bar bg-dark w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3 py-3 ps-0">
                                    <div class="d-flex mb-2">
                                        <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="material-icons opacity-10">category</i>
                                        </div>
                                        <p class="text-xs mt-1 mb-0 font-weight-bold">Items</p>
                                    </div>
                                    <h4 class="font-weight-bolder">74</h4>
                                    <div class="progress w-75">
                                        <div class="progress-bar bg-dark w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-7">
                <div class="card z-index-2">
                    <div class="card-header pb-0">
                        <h6>Sales overview</h6>
                        <p class="text-sm">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold">4% more</span> in 2021
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div id="globe" class="position-absolute end-0 top-10 mt-sm-3 mt-7 me-lg-7">
                    <canvas width="700" height="600" class="w-lg-100 h-lg-100 w-75 h-75 me-lg-0 me-n10 mt-lg-5"></canvas>
                </div>
            </div>
        </div>


        <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About
                                    Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    </div>


</main>
@endsection