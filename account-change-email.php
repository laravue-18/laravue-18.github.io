<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Euro Trust Capital</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <?php include 'layouts-head.php' ?>

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include 'layouts-topbar.php'; ?>
            <?php include 'layouts-sidebar.php'; ?>

            <!-- Start right Content here -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="etc-card-1">
                            <h4><img src="./assets/icons/card-title.svg" alt="">Change Account Email</h4>

                            <p class="" style="background: rgba(0, 0, 0, 0.08); border-top: 3px solid #F8C12C;"></p>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row mb-3">
                                        <label class="col-4 col-form-label">Email Address</label>
                                        <div class="col-8">
                                            <input type="text" name="" id="" class="form-control etc-bg-gray" value="sam.smith@gmail.com">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-4 col-form-label"></label>
                                        <div class="col-8">
                                            <button class="btn etc-btn-1">UPDATE EMAIL ADDRESS</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?php include 'layouts-right-sidebar.php'; ?>

        <?php include 'layouts-scripts.php'; ?>

        <script src="assets/js/app.js"></script>

    </body>
</html>

