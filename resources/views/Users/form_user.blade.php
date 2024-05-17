<!DOCTYPE html>
<html lang="en">

@include('include_item/headashbord')

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('include_item/sidbard')
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                    </ul>
                </nav>
                <!-- Topbar -->
                <!-- Container Fluid-->
                <div class="container" id="container-wrapper">
                    <div class="row">
                        <div class="container">
                            <!-- Form Basic -->
                            <div class="card" style="width: 60%;"><br>
                                <h5 class="text-center mb-3">FORMULAIRE AJOUT DE COMPTE</h5>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">NOM</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Entrer le nom" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">EMAIL</label>
                                            <input type="email" class="form-control" id="exampleInputPassword1"
                                                placeholder="email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">MOT DE PASSE</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="mot de passe" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">TELEPHONE</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                placeholder="Entrer votre telephone" name="tel">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">COFIRME MOT DE PASSE</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Confirmer votre mot de passe">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->

                    <!-- Documentation Link -->

                    <!-- Modal Logout -->
                </div>
                <!---Container Fluid-->
            </div><br><br>
            <!-- Footer -->
            @include('include_item/footer')
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('include_item/jsdashboard')

</body>

</html>
