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
                            <h4><img src="./assets/icons/card-title.svg" alt=""> CHANGE PASSWORD</h4>

                            <p class="" style="background: rgba(0, 0, 0, 0.08); border-top: 3px solid #F8C12C;"></p>

                            <div class="row mt-5">
                                <div class="col-lg-6">
                                    <div class="row mb-3">
                                        <label class="col-4 col-form-label">Account Login</label>
                                        <div class="col-7">
                                            <input type="text" name="" id="" class="form-control etc-bg-gray">
                                        </div>
                                        
                                    </div>
                                    <div class="row mb-3" x-data="{isShowing: false}">
                                        <label class="col-4 col-form-label">New Password</label>
                                        <div class="col-7">
                                        <input :type="isShowing ? 'text' :'password'" name="" id="" class="form-control etc-bg-gray">
                                        </div>
                                        <div class="col-1 d-flex align-items-center pl-0">
                                            <img src="./assets/icons/eye.svg" @click="isShowing = !isShowing">
                                        </div>
                                    </div>
                                    <div class="row mb-3" x-data="{isShowing: false}">
                                        <label class="col-4 col-form-label">Confirm Password</label>
                                        <div class="col-7">
                                            <input :type="isShowing ? 'text' :'password'" name="" id="" class="form-control etc-bg-gray">
                                        </div>
                                        <div class="col-1 d-flex align-items-center pl-0">
                                            <img src="./assets/icons/eye.svg" @click="isShowing = !isShowing">
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class="col-4"></div>
                                        <div class="col-7">
                                            <button type="button" class="btn etc-btn-1 waves-effect waves-light mb-1 font-size-14 font-weight-bold">UPDATE PASSWORD</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="px-3 py-2 mt-5 d-inline-block" style="background: rgba(0, 0, 0, 0.08); border-left: 3px solid #F8C12C;">
                                The password should contain only numbers and letters of the alphabet. Should be in the length from 8 to15 symbols
                            </p>
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

