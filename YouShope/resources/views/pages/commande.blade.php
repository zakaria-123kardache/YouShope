<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youshop</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<style>
    @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);

    /* Bootstrap Icons */
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
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
                            class="text-info">YOU</span>DemY</h3>
                </a>
                <!-- User menu (mobile) -->

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/dashbordadmin">
                                <i class="bi bi-house"></i> Dashboard
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/produit">
                                <i class="bi bi-file-text"></i> produit
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./categorie">
                                <i class="bi bi-bar-chart"></i> Categorie
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-warning" aria-current="page" href="./commande">
                                <i class="bi bi-bar-chart"></i> Commande
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
                                    <img src="" width="40"> Welcome Admin
                                </h1>
                            </div>
                            <!-- Actions -->
                            <div class="col-sm-6 col-12 text-sm-end">
                                <div class="mx-n1">


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
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">status</th>
                                        <th scope="col">date</th>
                                        <th scope="col">prixtotal</th>
                                        <th scope="col">user</th>
                                        <th scope="col">paymenet_id</th>
                                        <th scope="col"></th>
                                        <th scope="col" class="">Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--  -->
                                    <?php foreach ($commande as $commandee): ?>
                                    <tr>
                                        <td>
                                            <a class="text-heading font-semibold" href="#"> <?= $commandee->id ?>  </a>
                                        </td>


                                        <td>
                                            <a class="text-heading font-semibold"><?= $commandee->status ?> </a>
                                        </td>
                                        <td>
                                            <a class="text-heading font-semibold"> <?= $commandee->date ?>  </a>
                                        </td>

                                        <td>
                                            <a class="text-heading font-semibold">
                                              <?= $commandee->prixtotal ?> 
                                            </a>
                                        </td>
                                        <td>
                                            <a class="text-heading font-semibold"> 7 </a>
                                        </td>
                                        <td>
                                            <a class="text-heading font-semibold"> paymenet_id </a>
                                        </td>
                                        <td>
                                            <a class="text-heading font-semibold"> </a>
                                        </td>


                                        <td class="text-start">
                                            <a href="#" class="btn d-inline-flex btn-sm btn-warning mx-1"
                                            data-bs-toggle="modal" data-bs-target="#editStatusModal"
                                            onclick="loadStatusData(this)"
                                            data-id="<?= htmlspecialchars($commandee->id) ?>"
                                            data-name="<?= htmlspecialchars($commandee->status) ?>">
                                                <span class="pe-2">
                                                    <i class="bi bi-pencil"></i>
                                                </span>
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer border-0 py-5">
                            <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link disabled" href="#">Previous</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link bg-info text-white" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>



        </div>
    </div>



    <!-- start Modal Eding Comande  status-->
    <div class="modal fade" id="editStatusModal" tabindex="-1" aria-labelledby="editStatusModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Edit Status Commande</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="get" action="{{ route('commande.update', ['id' => $commandee->id]) }}"> 
                  @csrf
                  <input type="hidden" name="commande_id" value="{{$commandee->id}}" id="commande_id">
                    <div class="mb-3" id="status">
                        <select class="form-select" aria-label="GFG Select">
                            <option value="GFG1"selected>encoure</option>
                            <option value="GFG2">expédiée</option>
                            <option value="GFG3">livrée</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal Eding user -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="">
      function loadStatusData(element) {
            document.getElementById('commande_id').value = element.getAttribute('data-id');
            document.getElementById('status').value = element.getAttribute('data-status');
           
        }
    </script>
</body>

</html>
