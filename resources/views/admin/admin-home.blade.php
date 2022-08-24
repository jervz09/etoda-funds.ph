<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/1639ddc3d2.js" crossorigin="anonymous"></script>
</head>
<body class="sidebar-mini layout-fixed" >
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">{{config('app.name')}}</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Toda Members</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Savings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Loans</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Reports</span>
                            </a>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="row navbar navbar-expand-lg navbar-primary bg-dark">
                    <div class="container-fluid text-light">
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="#">Home</a>
                          </li>
                        </ul>
                        <ul class="navbar-nav d-flex mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-light" aria-current="page" href="#">{{auth()->user()->name}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" aria-current="page" href="#">Settings</a>
                            </li>
                        </ul>
                      </div>
                    </div>
                </div>
                <div class="p-3">
                    <div class="row">
                        <div class="card">
                            <div class="card-header text-center">
                                <h6 class="card-title text-gray">
                                    This page was last updated on 3/24/2022 2:50 PM
                                    <span class="text-primary">Refresh</span>
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card card-secondary p-4">
                                            <div class="row">
                                                <div class="col-3">
                                                    <i class="fas fa-users w-full h-auto"></i>
                                                </div>
                                                <div class="col-auto">
                                                    Registered Users
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card card-secondary p-4">
                                            <div class="row">
                                                <div class="col-3">
                                                    <i class="fas fa-money-bill"></i>
                                                </div>
                                                <div class="col-auto">
                                                    Total Savings
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <div class="card card-secondary p-4">
                                            <div class="row">
                                                <div class="col-3">
                                                    <i class="fas fa-hand-holding-usd"></i>
                                                </div>
                                                <div class="col-auto">
                                                    Loans Released
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card card-secondary p-4">
                                            <div class="row">
                                                <div class="col-3">
                                                    <i class="fas fa-hand-holding-usd"></i>
                                                </div>
                                                <div class="col-auto">
                                                    Paid Loans
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Announcements</h3>
                            </div>
                            <div class="card-body text-center">
                                Attention! The renewal of franchise is on December 2022. Have a good day!
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
