<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrateur 2 - Tableau de bord</title>

    <!-- Custom fonts for this template-->
    <link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

<!-- Page Wrapper -->
<?php
// Définit $currentUrl pour capturer l'URL actuelle
$currentUrl = $_SERVER['REQUEST_URI'] ?? '/'; // Valeur par défaut si REQUEST_URI est indisponible

// Vérifie si l'URL actuelle ne contient pas '/administrator/articles'
if (!str_contains($currentUrl, '/administrator/articles')): ?>
<div id="wrapper">
    <?php endif; ?>

    <!-- Sidebar -->
    <!-- Placez votre code de barre latérale ici si nécessaire -->

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
            </nav>
            <!-- End of Topbar -->

            <!-- Section principale pour afficher les articles -->
            <div class="container">




                <?php if (isset($articles) && !empty($articles)): ?>
                    <div class="news-container">
                        <?php foreach ($articles as $article): ?>
                            <div class="news-item card" style="margin-bottom: 20px; padding: 15px; border: 1px solid #ddd; border-radius: 5px;">
                                <h2 style="margin-top: 0;"><?= htmlspecialchars($article['title']) ?></h2>
                                <p><strong>Source :</strong> <?= htmlspecialchars($article['source']) ?></p>
                                <p><strong>Publié le :</strong> <?= htmlspecialchars($article['publishedAt']) ?></p>
                                <p><strong>Description :</strong> <?= htmlspecialchars($article['description']) ?></p>
                                <?php if (!empty($article['urlToImage'])): ?>
                                    <img src="<?= htmlspecialchars($article['urlToImage']) ?>" alt="<?= htmlspecialchars($article['title']) ?>" style="max-width: 100%; height: auto; margin-bottom: 10px;">
                                <?php endif; ?>
                                <a href="<?= htmlspecialchars($article['url']) ?>" target="_blank" class="btn btn-info btn-sm">Lire l'article complet</a>
                                <div class="action-buttons" style="margin-top: 10px;">
                                    <a href="/administrator/articles/edit/<?= $article['id'] ?>" class="btn btn-secondary btn-sm">Modifier</a>
                                    <a href="/administrator/articles/delete/<?= $article['id'] ?>" onclick="return confirm('Voulez-vous vraiment supprimer cet article ?')" class="btn btn-danger btn-sm">Supprimer</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p>Aucun article trouvé.</p>
                <?php endif; ?>

            </div>
            <!-- Fin de la section principale -->
        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    <?php if (!str_contains($currentUrl, '/administrator/articles')): ?>
</div> <!-- Fin du wrapper -->
<?php endif; ?>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="/admin/vendor/jquery/jquery.min.js"></script>
<script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/admin/js/sb-admin-2.min.js"></script>

</body>
</html>
