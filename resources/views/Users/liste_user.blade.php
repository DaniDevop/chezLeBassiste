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
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <form action="#" method="POST" class="d-flex">
                            @csrf
                            <input type="text" name="search" placeholder="Recherche..." required
                                class="form-control mr-2" style="width: auto; margin-right: 6px;">
                            <button type="submit" class="btn btn-primary">Valider</button>
                        </form>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="card">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Numero</th>
                                                <th scope="col">Nom</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Téléphone</th>
                                                <th scope="col">Profile</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#">RA0449</a></td>
                                                <td>Udin Wayang</td>
                                                <td>Nasi Padang</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                            </tr>

                                            <tr>
                                                <td><a href="#">RA1998</a></td>
                                                <td>Udin Cilok</td>
                                                <td>Baby Powder</td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->

                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to logout?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">Cancel</button>
                                    <a href="login.html" class="btn btn-primary">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

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
