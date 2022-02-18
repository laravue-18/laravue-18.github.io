<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Euro Trust Capital</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <style>
            input[type="number"] {
                appearance: textfield;
                -webkit-appearance: textfield;
            }

            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
            }

            input[type="number"]:nth-of-type(n+4) {
                order: 2;
            }
        </style>

        <?php include 'layouts-head.php' ?>

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include 'layouts-topbar.php'; ?>
            <?php include 'layouts-sidebar.php'; ?>

            <!-- Start right Content here -->
            <div class="main-content" id="vapp">

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="main-card">
                            <!-- Modals -->
                            <div>
                                <modal-dialog :show="isRecoveryModalOpen" v-on:close="isRecoveryModalOpen=false">
                                    <div class="main-card-header mb-4">
                                        <h4><img src="./assets/icons/card-title.svg" alt="">RECOVERY CODES</h4>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="assets/images/qRCode.png" class="mb-4" alt="">
                                            <input type="text" class="form-control mb-3" value="Lorem ipsum">
                                            <input type="text" class="form-control mb-3" value="Lorem ipsum">
                                            <input type="text" class="form-control mb-3" value="Lorem ipsum">
                                            <input type="text" class="form-control mb-3" value="Lorem ipsum">
                                            <div>
                                                <button class="btn btn-primary" @click="enabled='google'; isRecoveryModalOpen=false">REPLY</button>
                                            </div>
                                        </div>
                                    </div>
                                </modal-dialog>
                                <modal-dialog :show="isPasswordModalOpen" v-on:close="isPasswordModalOpen=false">
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
                                            <pwd-input label="New Password"></pwd-input>
                                            <pwd-input label="Confirm Password"></pwd-input>
                                            
                                            <div class="row mb-3">
                                                <div class="col-4"></div>
                                                <div class="col-7">
                                                    <button type="button" 
                                                        class="btn etc-btn-1 waves-effect waves-light mb-1 font-size-14 font-weight-bold"
                                                        @click="isPasswordModalOpen=false"
                                                    >UPDATE PASSWORD</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <p class="ntfy mt-5">
                                        The password should contain only numbers and letters of the alphabet. Should be in the length from 8 to15 symbols
                                    </p>
                                </modal-dialog>
                                <modal-dialog :show="isConfirmModalOpen" v-on:close="isConfirmModalOpen=false">
                                    <div class="main-card-header mb-4">
                                        <h4><img src="./assets/icons/card-title.svg" alt="">EMAIL CONFIRMATION</h4>
                                    </div>
    
                                    <div class="d-flex justify-content-center">
                                        <div class="py-5">
                                            <h4 class="text-center mb-3">OTP CONFIRMATION</h4>
                                            <p class="mb-4">Kindly enter the OTP sent to your mail</p>
                                            <div class="d-flex justify-content-between mb-4">
                                                <input type="number" inputtype="numeric" class="form-control text-center rounded otp-in" style="width: 2rem;" type="text" pattern="[0-9]*"  value="" inputtype="numeric" autocomplete="one-time-code" id="otp-in1" required>
                                                <input type="number" inputtype="numeric" class="form-control text-center rounded otp-in" style="width: 2rem;" type="text" pattern="[0-9]*" id="otp-in2" required>
                                                <input type="number" inputtype="numeric" class="form-control text-center rounded otp-in" style="width: 2rem;" type="text" pattern="[0-9]*" id="otp-in3" required>
                                                <input type="number" inputtype="numeric" class="form-control text-center rounded otp-in" style="width: 2rem;" type="text" pattern="[0-9]*" id="otp-in4" required>
                                                <input type="number" inputtype="numeric" class="form-control text-center rounded otp-in" style="width: 2rem;" type="text" pattern="[0-9]*" id="otp-in5" required>
                                                <input type="number" inputtype="numeric" class="form-control text-center rounded otp-in" style="width: 2rem;" type="text" pattern="[0-9]*" id="otp-in6" required>
                                            </div>
                                            <div class="mb-5">
                                                <button class="btn btn-primary btn-block" @click="isConfirmModalOpen=false">Submit</button>
                                            </div>
                                            <p class="text-center">Did not get code? <span style="color: #F8C12C; cursor: pointer;">Resend</span></p>
                                        </div>
                                    </div>
                                </modal-dialog>
                                <modal-dialog :show="isBankModalOpen" v-on:close="isBankModalOpen=false">
                                    <div class="main-card-header mb-4">
                                        <h4><img src="./assets/icons/card-title.svg" alt="">Contact With Bank</h4>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Email Address</label>
                                                <div class="col-7">
                                                    <input type="text" name="" id="" class="form-control etc-bg-gray" value="sam.smith@gmail.com">
                                                </div>
                                            </div>
                                            <pwd-input label="Password"></pwd-input>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-7">
                                                    <button class="btn btn-primary" @click="isBankModalOpen=false">SUBMIT</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </modal-dialog>
                                <modal-dialog :show="isEmailModalOpen" v-on:close="isEmailModalOpen=false">
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
                                                    <button class="btn btn-primary"
                                                        @click="isConfirmModalOpen=true; isEmailModalOpen=false"
                                                    >UPDATE EMAIL ADDRESS</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </modal-dialog>
                            </div>

                            <div class="main-card-header mb-4">
                                <h4><img src="./assets/icons/card-title.svg" alt="">Settings</h4>
                            </div>

                            <div>
                                <div class="d-flex align-items-center mb-3">
                                    <h4 class="font-weight-bold font-size-18 mb-0 mr-5">Login Information</h4>
                                    <div class="etc-bg-gray" style="flex: 1; height: 10px;"></div>
                                </div>
    
                                <div class="d-flex align-items-start mb-3">
                                    <img class="mr-3" src="./assets/icons/card-title.svg" alt="">
                                    <div class="d-md-flex justify-content-between" style="flex: 1">
                                        <div class="mb-2" style="flex: 2;">
                                            <h5>Email Address</h5>
                                            <p style="color: rgba(0, 0, 0, 0.4);">Protect your account and transactions</p>
                                        </div>
                                        <div class="mb-2" style="flex:2">
                                            sam.smith@gmail.com
                                        </div>
                                        <div class="mb-2">
                                            <button class="btn etc-btn-1 etc-bg-gray" @click="isEmailModalOpen=true">Change</button>
                                        </div>
                                    </div>  
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <img class="mr-3" src="./assets/icons/card-title.svg" alt="">
    
                                    <div class="d-md-flex justify-content-between" style="flex: 1">
                                        <div style="flex: 2">
                                            <h5 class="mb-0">Password</h5>
                                            <p style="color: rgba(0, 0, 0, 0.4);">Protect your account and transactions</p>
                                        </div>
                                        <div class="mb-2" style="flex:2">
                                            *****************
                                        </div>
                                        <div>
                                            <button class="btn etc-btn-1 etc-bg-gray" @click="isPasswordModalOpen=true">Change</button>
                                        </div>
                                    </div>
    
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <img class="mr-3" src="./assets/icons/card-title.svg" alt="">
                                    <div class="d-md-flex align-items-start" style="flex:1">
                                        <div class="mb-2" style="flex: 2">
                                            <h5 class="mb-0">Automatic connect to Ebank</h5>
                                            <p style="color: rgba(0, 0, 0, 0.4);">Protect your account and transactions</p>
                                        </div>
                                        <div class="mb-2" style="flex:2">
                                            sam.smith@gmail.com
                                        </div>
                                        <div>
                                            <button class="btn etc-btn-1 etc-bg-gray" @click="isBankModalOpen=true">Change</button>
                                        </div>
                                    </div>
    
                                </div>
                            </div>

                            <div>
                                <div class="d-flex align-items-center mb-3">
                                    <h4 class="font-weight-bold font-size-18 mb-0 mr-5">Two-Factor Authentication</h4>
                                    <div class="etc-bg-gray" style="flex: 1; height: 10px;"></div>
                                </div>
                            
                                <div class="d-flex align-items-start mb-3">
                                    <img class="mr-3" src="./assets/icons/card-title.svg" alt="">
                                    <div class="d-md-flex justify-content-between" style="flex:3">
                                        <div class="mb-2">
                                            <h5 class="mb-0">Google Authenticator</h5>
                                            <p style="color: rgba(0, 0, 0, 0.4);">Use an app to genearte time- sensitive authentication codes on your phone </p>
                                        </div>
                                        <button class="btn" 
                                            :class="enabled=='google'?'btn-success':'btn-inactive'" 
                                            v-text="enabled=='google'?'Enabled':'Enable'"
                                            @click="isRecoveryModalOpen=true"
                                        ></button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <img class="mr-3" src="./assets/icons/card-title.svg" alt="">
                                    <div class="d-md-flex justify-content-between" style="flex:1">
                                        <div>
                                            <h5 class="mb-0">OTP Code(SMS)</h5>
                                            <p style="color: rgba(0, 0, 0, 0.4);">Receive time-sensitive authentication code messaged to your phone</p>
                                        </div>
                                        <button class="btn" 
                                            :class="enabled=='sms'?'btn-success':'btn-inactive'" 
                                            v-text="enabled=='sms'?'Enabled':'Enable'"
                                            @click="enabled='sms'"
                                        ></button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <img class="mr-3" src="./assets/icons/card-title.svg" alt="">
                                    <div class="d-md-flex justify-content-between" style="flex:3">
                                        <div class="">
                                            <h5 class="mb-0">OTP CODE (Email)</h5>
                                            <p style="color: rgba(0, 0, 0, 0.4);">Receive time-sensitive authentication code messaged to your mail</p>
                                        </div>
                                        <button class="btn" 
                                            :class="enabled=='email'?'btn-success':'btn-inactive'" 
                                            v-text="enabled=='email'?'Enabled':'Enable'"
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

        <!-- Components -->

        <?php include 'components/pwd-input.php'; ?>
        <?php include 'components/modal-dialog.php'; ?>

        <script>
            const vm = new Vue({
                el: '#vapp',
                data(){
                    return {
                        isEmailModalOpen: false, 
                        isPasswordModalOpen: false, 
                        isBankModalOpen: false, 
                        isConfirmModalOpen: true,
                        isRecoveryModalOpen: false,
                        enabled: null
                    }
                }
            })
        </script>

        <script>
            $(function(){
                let in1 = document.getElementById('otp-in1'),
                ins = document.querySelectorAll('.otp-in');

                ins.forEach(function(input) {
                    input.addEventListener('keyup', function(e){
                        // Break if Shift, Tab, CMD, Option, Control.
                        if (e.keyCode === 16 || e.keyCode == 9 || e.keyCode == 224 || e.keyCode == 18 || e.keyCode == 17) {
                            return;
                        }
                        
                        // On Backspace or left arrow, go to the previous field.
                        if ( (e.keyCode === 8 || e.keyCode === 37) && this.previousElementSibling && this.previousElementSibling.tagName === "INPUT" ) {
                            this.previousElementSibling.select();
                        } else if (e.keyCode !== 8 && this.nextElementSibling) {
                            this.nextElementSibling.select();
                        }
                    });
                    
                    /**
                    * Better control on Focus
                    * - don't allow focus on other field if the first one is empty
                    * - don't allow focus on field if the previous one if empty (debatable)
                    * - get the focus on the first empty field
                    */
                    input.addEventListener('focus', function(e) {
                        // If the focus element is the first one, do nothing
                        if ( this === in1 ) return;
                        
                        // If value of input 1 is empty, focus it.
                        if ( in1.value == '' ) {
                            in1.focus();
                        }
                        
                        // If value of a previous input is empty, focus it.
                        // To remove if you don't wanna force user respecting the fields order.
                        if ( this.previousElementSibling.value == '' ) {
                            this.previousElementSibling.focus();
                        }
                    });
                });

                in1.addEventListener('input', function(e) {
                    let data = e.data || this.value; // Chrome doesn't get the e.data, it's always empty, fallback to value then.
                    if ( ! data ) return; // Shouldn't happen, just in case.
                    if ( data.length === 1 ) return; // Here is a normal behavior, not a paste action.
                    
                    for (i = 0; i < data.length; i++ ) {
                        ins[i].value = data[i];
                    }
                });
            })
        </script>

        <script src="assets/js/app.js"></script>

        

    </body>
</html>

