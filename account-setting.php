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
                            <h4><img src="./assets/icons/card-title.svg" alt="">Settings</h4>

                            <p class="" style="background: rgba(0, 0, 0, 0.08); border-top: 3px solid #F8C12C;"></p>

                            <div class="d-flex align-items-center">
                                <h4 class="font-weight-bold font-size-18 mb-0 mr-5">Login Information</h4>
                                <div class="etc-bg-gray" style="flex: 1; height: 10px;"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <div class="d-flex align-items-start" style="flex:3">
                                    <img src="./assets/icons/card-title.svg" alt="">
                                    <div class="ml-3">
                                        <h5 class="mb-0">Email Address</h5>
                                        <p style="color: rgba(0, 0, 0, 0.4);">Protect your account and transactions</p>
                                    </div>
                                </div>
                                <div style="flex:2">
                                    sam.smith@gmail.com
                                </div>
                                <div>
                                    <a href="account-change-email.php" class="btn etc-btn-1 etc-bg-gray">Change</a>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-start" style="flex:3">
                                    <img src="./assets/icons/card-title.svg" alt="">
                                    <div class="ml-3">
                                        <h5 class="mb-0">Password</h5>
                                        <p style="color: rgba(0, 0, 0, 0.4);">Protect your account and transactions</p>
                                    </div>
                                </div>
                                <div style="flex:2">
                                    *****************
                                </div>
                                <div>
                                    <a href="account-change-password.php" class="btn etc-btn-1 etc-bg-gray">Change</a>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-start" style="flex:3">
                                    <img src="./assets/icons/card-title.svg" alt="">
                                    <div class="ml-3">
                                        <h5 class="mb-0">Automatic connect to Ebank</h5>
                                        <p style="color: rgba(0, 0, 0, 0.4);">Protect your account and transactions</p>
                                    </div>
                                </div>
                                <div style="flex:2">
                                    sam.smith@gmail.com
                                </div>
                                <div>
                                    <a href="#" class="btn etc-btn-1 etc-bg-gray">Change</a>
                                </div>

                            </div>

                            <div class="d-flex align-items-center">
                                <h4 class="font-weight-bold font-size-18 mb-0 mr-5">Two-Factor Authentication</h4>
                                <div class="etc-bg-gray" style="flex: 1; height: 10px;"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <div class="d-flex align-items-start" style="flex:3">
                                    <img src="./assets/icons/card-title.svg" alt="">
                                    <div class="ml-3">
                                        <h5 class="mb-0">Google Authenticator</h5>
                                        <p style="color: rgba(0, 0, 0, 0.4);">Use an app to genearte time- sensitive authentication codes on your phone </p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn etc-btn-1 etc-bg-gray">Enable</a>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-start" style="flex:3">
                                    <img src="./assets/icons/card-title.svg" alt="">
                                    <div class="ml-3">
                                        <h5 class="mb-0">OTP Code(SMS)</h5>
                                        <p style="color: rgba(0, 0, 0, 0.4);">Receive time-sensitive authentication code messaged to your phone</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn etc-btn-1 etc-bg-gray">Enable</a>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-start" style="flex:3">
                                    <img src="./assets/icons/card-title.svg" alt="">
                                    <div class="ml-3">
                                        <h5 class="mb-0">OTP CODE (Email)</h5>
                                        <p style="color: rgba(0, 0, 0, 0.4);">Receive time-sensitive authentication code messaged to your mail</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn etc-btn-1 etc-bg-gray">Enable</a>
                                </div>

                            </div>

                            <div class="d-flex align-items-center">
                                <h4 class="font-weight-bold font-size-18 mb-0 mr-5">Device Management</h4>
                                <div class="etc-bg-gray" style="flex: 1; height: 10px;"></div>
                            </div>
                            <div class="d-flex mt-3">
                                <div style="flex:1"></div>
                                <div style="flex:5"><h6 class="mb-0">IP Address</h6></div>
                                <div style="flex:25"><h6 class="mb-0">Browser</h6></div>
                                <div style="flex:5"><h6 class="mb-0">Last Active</h6></div>
                                <div style="flex:3" class="text-right"><h6 class="mb-0">Actions</h6></div>
                            </div>
                            <div class="d-flex mt-3">
                                <div style="flex:1"><img src="./assets/icons/octicon_dot-16.svg" alt=""></div>
                                <div style="flex:5"><p class="mb-0">192.168.0.1</p></div>
                                <div style="flex:25"><p class="mb-0">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</p></div>
                                <div style="flex:5"><p class="mb-0">Current Device</p></div>
                                <div style="flex:3" class="text-right"><img src="./assets/icons/carbon_delete.svg" alt=""></div>
                            </div>
                            <div class="d-flex mt-3">
                                <div style="flex:1"><img src="./assets/icons/octicon_dot-16.svg" alt=""></div>
                                <div style="flex:5"><p class="mb-0">192.168.0.1</p></div>
                                <div style="flex:25"><p class="mb-0">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</p></div>
                                <div style="flex:5"><p class="mb-0">Current Device</p></div>
                                <div style="flex:3" class="text-right"><img src="./assets/icons/carbon_delete.svg" alt=""></div>
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

