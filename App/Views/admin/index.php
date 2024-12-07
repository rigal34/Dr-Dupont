<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Back Office - Tableau de bord</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="/public/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/public/assets/css/style.css" rel="stylesheet">
</head>

<body id="page-top">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Brand -->
        <li class="nav-item">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/administrator">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-tools"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Panel</div>
            </a>
        </li>

        <!-- Divider -->
        <li class="nav-item">
            <hr class="sidebar-divider my-0">
        </li>


        <!-- Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/administrator">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tableau de bord</span>
            </a>
        </li>

        <!-- Divider -->
        <li class="nav-item">
            <hr class="sidebar-divider">
        </li>


        <!-- Gestion des articles -->
        <li class="nav-item">
            <a class="nav-link" href="/administrator/articles">
                <i class="fas fa-newspaper"></i>
                <span>Gestion des articles</span>
            </a>
        </li>

        <!-- Gestion des utilisateurs -->
        <li class="nav-item">
            <a class="nav-link" href="/administrator/users">
                <i class="fas fa-users"></i>
                <span>Gestion des utilisateurs</span>
            </a>
        </li>

        <!-- Divider -->
        <li class="nav-item">
            <hr class="sidebar-divider d-none d-md-block">
        </li>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Déconnexion</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->

            <!-- Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Articles Card -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Articles publiés</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">45</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Utilisateurs Card -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Utilisateurs</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">120</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Other widgets -->
                    <!-- Ajoute ici d'autres widgets si nécessaire -->

                </div>
            </div>
            <!-- End of Page Content -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Votre Site 2024</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Wrapper -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="/public/assets/js/sb-admin-2.min.js"></script>
<script src="/public/assets/js/custom.js"></script>
</body>
</html>


