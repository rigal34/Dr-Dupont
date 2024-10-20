

<?php require_once __DIR__ . '/navbar.php'; ?>


<nav>
    <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="/services">Services</a></li>
        <li><a href="/rendezvous">Rendez-vous</a></li>
        <li><a href="/about">À propos</a></li>
        <li><a href="/news">Actualités</a></li>
    </ul>
</nav>

<style>
    nav {
        background-color: #0056b3;
        padding: 10px;
        text-align: center;
    }
    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    nav ul li {
        display: inline;
        margin-right: 15px;
    }
    nav ul li a {
        color: white;
        text-decoration: none;
        font-size: 18px;
    }
    nav ul li a:hover {
        text-decoration: underline;
    }
</style>

