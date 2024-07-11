<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sweet-Shop-soft</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <linl href="css/sb-admin-2.css" rel="stylesheet">
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include 'sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column   bg-white">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include 'navbar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid ">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                    </div>


                    <!-- Content Row -->
                    <style>
                    .card-custom {
                        margin: 6px;
                        /* Reset margin to prevent extra space */
                    }
                    </style>
                    </head>

                    <body>
                        <div class="container">
                            <div class="row">
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h2 class="h2 mb-0 text-info mx-2">Recently Published Blogs</h2>
                                </div>
                                <div class='row row-custom no-gutters'>

                                    <?php
                                    // Database connection (replace with your actual database connection details)
                                    include '../../db.connection/db_connection.php';


                                    // Fetch blog data
                                    $sql = "SELECT id, title, content, video FROM blog";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            // $photos = json_decode($row['photos'], true);
                                            // $first_photo = isset($photos[0]) ? $photos[0] : "https://mailrelay.com/wp-content/uploads/2018/03/que-es-un-blog-1.png";
                                            echo "
                                            <div class='col-12 col-md-4 col-custom'>
                                            <div class='card card-custom'>
                                            <video src='./uploads/videos/{$row['video']}' class='card-img-top' autoplay muted controls>
                                                Your browser does not support the video tag.
                                            </video>

                                            <div class='card-body'>
                                            <h5 class='card-title' style='color:black;'>{$row['title']}</h5>
                                            <p class='card-text'>" . substr(strip_tags($row['content']), 0, 100) . "...</p>
                                            <div class='row'>
                                            <a href='editBlog.php?id={$row['id']}' class='btn btn-warning col-xl-4 mx-3 my-2'>Edit Blog</a>
                                            <a href='deleteBlog.php?id={$row['id']}' class='col-xl-4 btn btn-danger mx-3 my-2'>Delete</a>
                                            </div>
                                                </div>
                                                </div>
                                                </div>

                                        ";
                                        }
                                    } else {
                                        echo "<p>No blog posts found.</p>";
                                    }

                                    $conn->close();
                                    ?>
                                </div>
                            </div> <!-- Pie Chart -->

                        </div>
                        <!-- /.container-fluid -->
                    </body>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <div class="footer-widget__copyright">
                                <p class="mini_text" style="color:black"> ©2024 Ask-Oncologist . All Rights Reserved.
                                    Designed &
                                    Developed by <a href="https://bhavicreations.com/" target="_blank"
                                        style="text-decoration: none;color:black">Bhavi
                                        Creations</a></p>
                            </div>
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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>