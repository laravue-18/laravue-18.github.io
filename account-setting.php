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

                        <div class="main-card"
                            x-data="{isEmailModalOpen: false, isPasswordModalOpen: false}"
                        >
                            <div class="modal-card" role="dialog" tabindex="-1" 
                                x-show="isEmailModalOpen" 
                                @click.away="isEmailModalOpen = false" 
                                x-cloak x-transition
                            >
                                <div class="main-card-header mb-4">
                                    <h4><img src="./assets/icons/card-title.svg" alt="">Change Account Email</h4>
                                </div>

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

                            <div class="modal-card" role="dialog" tabindex="-1" 
                                x-show="isPasswordModalOpen" 
                                @click.away="isPasswordModalOpen = false" 
                                x-cloak x-transition
                            >
                                <div class="main-card-header mb-4">
                                    <h4><img src="./assets/icons/card-title.svg" alt=""> CHANGE PASSWORD</h4>
                                </div>

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
                                            <input :type="isShowing ? 'text' :'password'" name="" id="" class="form-control etc-bg-gray" type="password">
                                            </div>
                                            <div class="col-1 d-flex align-items-center pl-0">
                                                <img src="./assets/icons/eye.svg" @click="isShowing = !isShowing">
                                            </div>
                                        </div>
                                        <div class="row mb-3" x-data="{isShowing: false}">
                                            <label class="col-4 col-form-label">Confirm Password</label>
                                            <div class="col-7">
                                                <input :type="isShowing ? 'text' :'password'" name="" id="" class="form-control etc-bg-gray" type="password">
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


                            <div class="main-card-header mb-4">
                                <h4><img src="./assets/icons/card-title.svg" alt="">Settings</h4>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <h4 class="font-weight-bold font-size-18 mb-0 mr-5">Login Information</h4>
                                <div class="etc-bg-gray" style="flex: 1; height: 10px;"></div>
                            </div>
                            <div class="d-md-flex justify-content-between mb-3">
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
                                    <button class="btn etc-btn-1 etc-bg-gray" @click="isEmailModalOpen=true">Change</button>
                                </div>

                            </div>
                            <div class="d-md-flex justify-content-between mb-3">
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
                                    <button class="btn etc-btn-1 etc-bg-gray" @click="isPasswordModalOpen=true">Change</button>
                                </div>

                            </div>
                            <div class="d-md-flex justify-content-between mb-3">
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

                            <div class="d-flex align-items-center mb-3">
                                <h4 class="font-weight-bold font-size-18 mb-0 mr-5">Two-Factor Authentication</h4>
                                <div class="etc-bg-gray" style="flex: 1; height: 10px;"></div>
                            </div>
                            
                            <div x-data="{'enabled': null}">
                                <div class="d-md-flex justify-content-between mb-3">
                                    <div class="d-flex align-items-start" style="flex:3">
                                        <img src="./assets/icons/card-title.svg" alt="">
                                        <div class="ml-3">
                                            <h5 class="mb-0">Google Authenticator</h5>
                                            <p style="color: rgba(0, 0, 0, 0.4);">Use an app to genearte time- sensitive authentication codes on your phone </p>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn" 
                                            :class="enabled=='google'?'btn-success':'btn-inactive'" 
                                            x-text="enabled=='google'?'Enabled':'Enable'"
                                            @click="enabled='google'"
                                        ></button>
                                    </div>
    
                                </div>
                                <div class="d-md-flex justify-content-between mb-3">
                                    <div class="d-flex align-items-start" style="flex:3">
                                        <img src="./assets/icons/card-title.svg" alt="">
                                        <div class="ml-3">
                                            <h5 class="mb-0">OTP Code(SMS)</h5>
                                            <p style="color: rgba(0, 0, 0, 0.4);">Receive time-sensitive authentication code messaged to your phone</p>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn" 
                                            :class="enabled=='sms'?'btn-success':'btn-inactive'" 
                                            x-text="enabled=='sms'?'Enabled':'Enable'"
                                            @click="enabled='sms'"
                                        ></button>
                                    </div>
    
                                </div>
                                <div class="d-md-flex justify-content-between mb-3">
                                    <div class="d-flex align-items-start" style="flex:3">
                                        <img src="./assets/icons/card-title.svg" alt="">
                                        <div class="ml-3">
                                            <h5 class="mb-0">OTP CODE (Email)</h5>
                                            <p style="color: rgba(0, 0, 0, 0.4);">Receive time-sensitive authentication code messaged to your mail</p>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn" 
                                            :class="enabled=='email'?'btn-success':'btn-inactive'" 
                                            x-text="enabled=='email'?'Enabled':'Enable'"
                                            @click="enabled='email'"
                                        ></button>
                                    </div>
    
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <h4 class="font-weight-bold font-size-18 mb-0 mr-5">Device Management</h4>
                                <div class="etc-bg-gray" style="flex: 1; height: 10px;"></div>
                            </div>
                            <div style="overflow: auto;">
                                <div style="min-width: 800px;">
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

