<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon">
            <img src="img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">BIOMEDITECH</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!---------------------- Partie utilisateurs et Admin access ------------------------>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Formualaire et liste
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm"
            aria-expanded="true" aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>FORMULAIRES</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">AJOUT</h6>
                <a class="collapse-item" href="form_basics.html">CLIENT</a>
                <a class="collapse-item" href="form_basics.html">STOCK ET PRODUIT</a>
                <a class="collapse-item" href="form_basics.html">COMMANDES</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
            aria-expanded="true" aria-controls="collapseTable">
            <i class="fas fa-fw fa-table"></i>
            <span>TABLES</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">LISTES</h6>
                <a class="collapse-item" href="simple-tables.html">CLIENT</a>
                <a class="collapse-item" href="simple-tables.html">STOCK ET PRODUIT</a>
                <a class="collapse-item" href="simple-tables.html">COMMANDES</a>
            </div>
        </div>
        <!---------------------- ---------------------------------------------------------------->
    </li>

    <hr class="sidebar-divider">

    <!---------------------- --Partie Administrateurs access --------------------------------->
    <div class="sidebar-heading">
        GESTION ADMINISTRATEUR
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage"
            aria-expanded="true" aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>ADMIN COMPTE</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">GESTION DES ROLES</h6>
                <a class="collapse-item" href="{{ url('/Users/form_user') }}">AJOUT USERS</a>
                <a class="collapse-item" href="{{ url('/Users/liste_user') }}">LISTES USERS</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        GESTION ADMINISTRATEUR
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage"
            aria-expanded="true" aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>ADMIN ACTION</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">GESTION ADMIN</h6>
                <a class="collapse-item" href="login.html">AJOUT DEPENSES</a>
                <a class="collapse-item" href="register.html">LISTES DEPENSES</a>
                <a class="collapse-item" href="login.html">AJOUT EMPLOYES</a>
                <a class="collapse-item" href="register.html">LISTES EMPLOYES</a>
            </div>
        </div>
    </li>
    <!---------------------- ---------------------------------------------------------------->
</ul>
