
<?php
require '../../includes/conn.php';
$id = $_GET['user_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Users</title>

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
                            <h1 class="m-0">Update Users</h1>
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
                        <div class="col-md-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h5 class="header-title">Update Users</h5>
                                </div>
                                <?php
                                $select_user = mysqli_query($conn, "SELECT * from tbl_users WHERE user_id = '$id'");
                                while ($row = mysqli_fetch_array($select_user)) {
                                ?>
                                <form action="userData/ctrl.update.users.php?user_id=<?php echo $row['user_id'];?>" method="POST">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname']?>">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label>Middle Name</label>
                                                <input type="text" class="form-control" name="middlename" value="<?php echo $row['middlename']?>">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label>E-mail</label>
                                                <input type="text" class="form-control" name="email" value="<?php echo $row['email']?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username" value="<?php echo $row['username']?>">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                    </div>
                                </form>
                                <?php } ?>
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