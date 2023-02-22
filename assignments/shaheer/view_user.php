<?php require_once 'inc/top.php'; ?>

</head>

<body id="page-top">




    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once 'inc/sidebar.php'; ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once 'inc/navbar.php'; ?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800" ></h1>
                    <a href="add.php" class="btn btn-primary" style="float: right;">add</a> -->


                    <!-- DataTales Example -->

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mb-2 text-gray-800">Registered candidate</h1>
                           
                            <!-- <button type="submit" class="btn btn-dark btn-lg" style="float:right;" name="add">add</button> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <!-- <th>category</th> -->
                                            <th>name</th>
                                            <th>email</th>
                                            <th>password</th>
                                            
                                                                                        

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once 'inc/db.php';
                                        $select_category = "SELECT * from `table`";
                                        $run_category = mysqli_query($conn, $select_category);
                                     
                                        $i = 1;
                                        while ($row_category = mysqli_fetch_array($run_category)) {
                                            $id = $row_category['id'];
                          
                                        ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>


                                                <td><?php echo ($row_category['name']); ?></td>
                                                <td><?php echo ($row_category['email']); ?></td>

                                                <td><?php echo ($row_category['password']); ?></td>

                                                

                                               
                                                
                                            </tr>

                                        <?php
                                            $i++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
           
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>



    

   