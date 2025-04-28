<?php require '../../includes/conn.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List User</title>

    <!-- Links -->
    <?php require '../../includes/links.php' ?>
    <!-- Links -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <!-- begin::navbar -->
        <?php require '../../includes/navbar.php' ?>
        <!-- end::navbar -->

        <!--begin::main content -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">List Genders</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add Users</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h5 class="header-title">Genders</h5>
                                </div>
                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Gender</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $select_user = mysqli_query($conn, "SELECT * FROM tbl_genders");
                                                while ($row = mysqli_fetch_array($select_user)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['gender']?></td>
                                                    <td>
                                                        <a href="genderData/ctrl.delete.gender.php?gender_id=<?php echo $row['gender_id'];?>" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Gender</th>
                                                    <th>Options</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!--end:::main content -->

    <!-- begin::sidebar -->
    <?php require '../../includes/sidebar.php' ?>
    <!-- end::sidebar -->

    <!-- begin::footer -->
    <?php require '../../includes/footer.php' ?>
    <!-- end::footer -->

    <!-- begin::scripts -->
    <?php require '../../includes/scripts.php' ?>
    <!-- end::scripts -->
</body>

</html>