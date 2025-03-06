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
                            <a class="nav-link" aria-current="page" href="/dashbordadmin">
                                <i class="bi bi-house"></i> Dashboard
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active text-warning" aria-current="page" href="/produit">
                                <i class="bi bi-file-text"></i> produit
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./categorie">
                                <i class="bi bi-bar-chart"></i> Categorie
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./commande">
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
                            <?php foreach ($produit as $produite): ?>
                            <div class="col-md-4 p-5">
                                <div class="product-card bg-white rounded-4 shadow-sm h-100 position-relative">
                                    <span class="badge bg-danger">New</span>
                                    <div class="overflow-hidden">
                                        <img src="<?= $produite->photo ?>" class="product-image w-50" alt="Product">
                                    </div>
                                    <div class="p-4">
                                        <h5 class="fw-bold mb-3"><?= $produite->name ?></h5>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="me-2">
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star text-warning"></i>
                                                <i class="fas fa-star-half-alt text-warning"></i>
                                            </div>

                                            <div>
                                                <td>
                                                    <a class="text-heading font-semibold"> <?= $produite->prix ?> $$</a>
                                                </td>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-4"><?= $produite->description ?></p>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="btn d-inline-flex btn-sm btn-warning mx-1"
                                                data-bs-toggle="modal" data-bs-target="#editCourseModal"
                                                onclick="loadSallData(this)"
                                                data-id="<?= htmlspecialchars($produite->id) ?>"
                                                data-name="<?= htmlspecialchars($produite->name) ?>"
                                                data-description="<?= htmlspecialchars($produite->description) ?>"
                                                data-location="<?= htmlspecialchars($produite->prix) ?>"
                                                data-photo="<?= htmlspecialchars($produite->photo) ?>">
                                                <span class="pe-2">
                                                    <i class="bi bi-pencil"></i>
                                                </span>
                                                Edit
                                            </a>

                                            <form action="{{ route('produit.delete', $produite->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn d-inline-flex btn-sm btn-danger mx-1">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>



    <!-- start Modal creat-->
    <div class="modal fade" id="creatModal" tabindex="-1" aria-labelledby="creatModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Creat prduit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">product name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="courdescription" class="form-label">description</label>
                            <input type="text" name="description" class="form-control" id="description" required>
                        </div>

                        <div class="mb-3">
                            <label for="prix" class="form-label">prix</label>
                            <input type="number" name="prix" class="form-control" id="prix" required>
                        </div>

                        <div class="mb-3">
                            <label>Photo</label>
                            <input type="text" name="photo" id="CRedit-photo" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="categorie_id" class="form-label">categorie</label>
                            <select name="categorie_id" id="categorie_id" class="form-control" required>
                                <option value="">categorie</option>
                                @foreach($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                @endforeach
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

    <!-- Edit sall Modal -->
    <div class="modal fade" id="editCourseModal" tabindex="-1" aria-labelledby="editCourseModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCourseModalLabel">Edit Produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('produit.update', ['id' => $produite->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="produit_id" id="produit_id">

                        <div class="mb-3">
                            <label for="name" class="form-label">edit sall name</label>
                            <input type="text" class="form-control" name="name" id="editname" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">edit description</label>
                            <input type="text" name="description" class="form-control" id="editdescription"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="prix" class="form-label">edit prix</label>
                            {{-- <input type="number" name="prix" class="form-control" id="prix" required> --}}
                            <input type="number" name="prix" class="form-control" id="editprix" required>

                        </div>
                        <div class="mb-3">
                            <label for="categorie_id" class="form-label">categorie</label>
                            <select name="categorie_id" id="categorie_id" class="form-control" required>
                                <option value="">categorie</option>
                                @foreach($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>edit Photo</label>
                            <input type="text" name="photo" id="editphoto" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script>
        function loadSallData(element) {
            document.getElementById('produit_id').value = element.getAttribute('data-id');
            document.getElementById('editname').value = element.getAttribute('data-name');
            document.getElementById('editdescription').value = element.getAttribute('data-description');
            document.getElementById('editprix').value = element.getAttribute('data-prix');
            document.getElementById('editphoto').value = element.getAttribute('data-photo');
        }
    </script>

</body>

</html>
