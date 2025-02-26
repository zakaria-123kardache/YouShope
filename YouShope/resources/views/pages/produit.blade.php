<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>youshope</title>
    <link rel="stylesheet" href="../../css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

</head>
<style>
    @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);

    /* Bootstrap Icons */
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");


    .product-card {
        transition: all 0.3s ease;
        overflow: hidden;
        cursor: pointer;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .product-image {
        transition: all 0.5s ease;
    }

    .product-card:hover .product-image {
        transform: scale(1.05);
    }

    .badge {
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .price {
        font-size: 1.5rem;
        font-weight: 600;
        color: #6366f1;
    }

    .btn-custom {
        background: linear-gradient(45deg, #6366f1, #8b5cf6);
        border: none;
        transition: all 0.3s ease;
    }

    .btn-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(99, 102, 241, 0.4);
    }



    .suggestion-tag {
        background: rgba(240, 240, 240, 0.9);
        padding: 10px 20px;
        border-radius: 25px;
        font-size: 14px;
        color: #555;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 1px solid #ddd;
    }

    .suggestion-tag:hover {
        background: #764ba2;
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 600px) {
        .suggestion-tag {
            font-size: 13px;
            padding: 8px 15px;
        }
    }
</style>

<body>
    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <!-- Vertical Navbar -->
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg"
            id="navbarVertical">
            <div class="container-fluid">
                <!-- Toggler -->
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                    <h3 class="text-success"><img src="./img/youdemy-logo.png" width="40"><span
                            class="text-info">you</span>shope</h3>
                </a>
                <!-- User menu (mobile) -->

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-warning" aria-current="page" href="/dashbordadmin">
                                <i class="bi bi-house"></i> Dashboard
                            </a>
                        </li>
      
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/produit">
                                <i class="bi bi-file-text"></i> produit
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="navbar-divider my-5 opacity-20">

                    <!-- Push content down -->
                    <div class="mt-auto"></div>
                    <!-- User (md) -->

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person-square"></i> Account
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"
                                onclick="return confirm('Are you sure you want to logout?')">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <!-- Header -->
            <header class="bg-surface-primary border-bottom pt-6">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <!-- Title -->
                                <h1 class="h2 mb-0 ls-tight">
                                    <img src="" width="40" /> Welcome Admin
                                </h1>
                            </div>
                            <!-- Actions -->
                            <div class="col-sm-6 col-12 text-sm-end">
                                <div class="mx-n1">


                                    <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1"
                                        data-bs-toggle="modal" data-bs-target="#creatModal">
                                        <span class="pe-2">
                                            <i class="bi bi-plus"></i>
                                        </span>
                                        <span>Create</span>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <!-- Nav -->
                        <ul class="nav nav-tabs mt-4 overflow-x border-0">

                        </ul>
                    </div>
                </div>
            </header>



            <!-- Main -->

            <section class="py-6 bg-surface-secondary">
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="card shadow border-0 mb-7">
                        <div class="card-header">
                            <h5 class="mb-0">Applications</h5>
                        </div>
                        <div class="row justify-content-start">


                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

 
</body>

</html>
