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

                <div class="page-content" id="vapp">
                    <div class="container-fluid">
                        <div class="main-card-header mb-4"> 
                            <h4 class="px-2">
                                <img src="./assets/icons/card-title.svg" alt=""> DEMO ACCOUNTS
                            </h4>
                        </div>

                        <div class="main-card">
                            <div class="main-card-header d-flex justify-content-between align-items-center" style="border-bottom: 1px solid rgba(0, 0, 0, 0.4);">
                                <h4>
                                    <img src="./assets/images/img2.png" alt=""> MT4 Accounts
                                </h4>
                                <button type="button" class="btn btn-primary">
                                    + OPEN NEW DEMO ACCOUNT
                                </button>
                            </div>
                            
                            <div class="row mt-4">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="account-card">
                                        <div class="header py-2 px-3">
                                            <div>
                                                <h5>TRADING ACCOUNT</h5>
                                                <h6>MT4 Demo 30919111</h6>
                                            </div>
                                            <div class="position-relative"
                                                x-data="{open: false}"
                                                @mouseover="open=true"
                                                @mouseover.away="open=false"
                                            >
                                                <img 
                                                    src="./assets/icons/gear.svg" alt=""
                                                    style="cursor: pointer"
                                                >
                                                <div x-show="open" class="position-absolute p-2" style="background:#36517E; border-radius: 5px; width: 150px; top:95%; right: -10px;" x-cloak x-transition>
                                                    <a href="forex-change-password.php" class="text-white">
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.40625 4.8125C2.31508 4.8125 2.22765 4.84872 2.16318 4.91318C2.09872 4.97765 2.0625 5.06508 2.0625 5.15625V9.28125C2.0625 9.37242 2.09872 9.45985 2.16318 9.52432C2.22765 9.58878 2.31508 9.625 2.40625 9.625H8.59375C8.68492 9.625 8.77235 9.58878 8.83682 9.52432C8.90128 9.45985 8.9375 9.37242 8.9375 9.28125V5.15625C8.9375 5.06508 8.90128 4.97765 8.83682 4.91318C8.77235 4.84872 8.68492 4.8125 8.59375 4.8125H2.40625ZM2.40625 4.125H8.59375C8.86725 4.125 9.12956 4.23365 9.32295 4.42705C9.51635 4.62044 9.625 4.88275 9.625 5.15625V9.28125C9.625 9.55475 9.51635 9.81706 9.32295 10.0105C9.12956 10.2039 8.86725 10.3125 8.59375 10.3125H2.40625C2.13275 10.3125 1.87044 10.2039 1.67705 10.0105C1.48365 9.81706 1.375 9.55475 1.375 9.28125V5.15625C1.375 4.88275 1.48365 4.62044 1.67705 4.42705C1.87044 4.23365 2.13275 4.125 2.40625 4.125Z" fill="white"/>
                                                            <path d="M5.5 5.84375C5.59117 5.84375 5.6786 5.87997 5.74307 5.94443C5.80753 6.0089 5.84375 6.09633 5.84375 6.1875V8.25C5.84375 8.34117 5.80753 8.4286 5.74307 8.49307C5.6786 8.55753 5.59117 8.59375 5.5 8.59375C5.40883 8.59375 5.3214 8.55753 5.25693 8.49307C5.19247 8.4286 5.15625 8.34117 5.15625 8.25V6.1875C5.15625 6.09633 5.19247 6.0089 5.25693 5.94443C5.3214 5.87997 5.40883 5.84375 5.5 5.84375ZM7.5625 4.125V3.4375C7.5625 2.89049 7.3452 2.36589 6.95841 1.97909C6.57161 1.5923 6.04701 1.375 5.5 1.375C4.95299 1.375 4.42839 1.5923 4.04159 1.97909C3.6548 2.36589 3.4375 2.89049 3.4375 3.4375V4.125H7.5625ZM5.5 0.6875C6.22935 0.6875 6.92882 0.977231 7.44454 1.49296C7.96027 2.00868 8.25 2.70815 8.25 3.4375V4.8125H2.75V3.4375C2.75 2.70815 3.03973 2.00868 3.55546 1.49296C4.07118 0.977231 4.77065 0.6875 5.5 0.6875Z" fill="white"/>
                                                        </svg>
                                                        Change Password
                                                    </a>
                                                    <br>
                                                    <a href="" class="text-white">
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.125 4.125H4.8125V8.25H4.125V4.125Z" fill="white"/>
                                                            <path d="M6.1875 4.125H6.875V8.25H6.1875V4.125Z" fill="white"/>
                                                            <path d="M1.375 2.0625V2.75H2.0625V9.625C2.0625 9.80734 2.13493 9.9822 2.26386 10.1111C2.3928 10.2401 2.56766 10.3125 2.75 10.3125H8.25C8.43234 10.3125 8.6072 10.2401 8.73614 10.1111C8.86507 9.9822 8.9375 9.80734 8.9375 9.625V2.75H9.625V2.0625H1.375ZM2.75 9.625V2.75H8.25V9.625H2.75Z" fill="white"/>
                                                            <path d="M4.125 0.6875H6.875V1.375H4.125V0.6875Z" fill="white"/>
                                                        </svg>

                                                        Delete Account
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <div class="d-flex mb-2">
                                                <div class="mr-1">
                                                    <div><strong>Name:</strong></div>
                                                    <div><strong>Login:</strong></div>
                                                    <div><strong>Group:</strong></div>
                                                </div>
                                                <div>
                                                    <div>John Paul</div>
                                                    <div>30911</div>
                                                    <div>Variable spread account</div>
                                                </div>
                                            </div>
                                            <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                                <div>
                                                    <img src="./assets/icons/key.svg" alt="" style="margin-top: -4px;">
                                                    <span>Password</span>
                                                </div>
                                                <div>
                                                    <span>ntat404</span>
                                                </div>
                                            </div>
                                            <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                                <div>
                                                    <img src="./assets/icons/key.svg" alt="">
                                                    <span>Leverage</span>
                                                </div>
                                                <div>
                                                    <span>200</span>
                                                </div>
                                            </div>
                                            <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                                <div>
                                                    <img src="./assets/icons/key.svg" alt="">
                                                    <span>Balance</span>
                                                </div>
                                                <div>
                                                    <span>00.0</span>
                                                </div>
                                            </div>
                                            <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                                <div>
                                                    <img src="./assets/icons/key.svg" alt="">
                                                    <span>Enquity</span>
                                                </div>
                                                <div>
                                                    <span>00.0</span>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>Status</span>
                                                <div class="rounded-circle etc-bg-3" style="width: 10px; height: 10px;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <h5 class="text-center font-weight-bold m-0 font-size-14">
                                                <img src="./assets/icons/fund-now.svg" alt="" style="margin-top: -4px;">
                                                FUND NOW
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="account-card">
                                        <div class="header py-2 px-3">
                                            <div>
                                                <h5>TRADING ACCOUNT</h5>
                                                <h6>MT4 Demo 30919111</h6>
                                            </div>
                                            <div class="position-relative"
                                                x-data="{open: false}"
                                                @mouseover="open=true"
                                                @mouseover.away="open=false"
                                            >
                                                <img 
                                                    src="./assets/icons/gear.svg" alt=""
                                                    style="cursor: pointer"
                                                >
                                                <div x-show="open" class="position-absolute p-2" style="background:#36517E; border-radius: 5px; width: 150px; top:95%; right: -10px;" x-cloak x-transition>
                                                    <a href="forex-change-password.php" class="text-white">
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.40625 4.8125C2.31508 4.8125 2.22765 4.84872 2.16318 4.91318C2.09872 4.97765 2.0625 5.06508 2.0625 5.15625V9.28125C2.0625 9.37242 2.09872 9.45985 2.16318 9.52432C2.22765 9.58878 2.31508 9.625 2.40625 9.625H8.59375C8.68492 9.625 8.77235 9.58878 8.83682 9.52432C8.90128 9.45985 8.9375 9.37242 8.9375 9.28125V5.15625C8.9375 5.06508 8.90128 4.97765 8.83682 4.91318C8.77235 4.84872 8.68492 4.8125 8.59375 4.8125H2.40625ZM2.40625 4.125H8.59375C8.86725 4.125 9.12956 4.23365 9.32295 4.42705C9.51635 4.62044 9.625 4.88275 9.625 5.15625V9.28125C9.625 9.55475 9.51635 9.81706 9.32295 10.0105C9.12956 10.2039 8.86725 10.3125 8.59375 10.3125H2.40625C2.13275 10.3125 1.87044 10.2039 1.67705 10.0105C1.48365 9.81706 1.375 9.55475 1.375 9.28125V5.15625C1.375 4.88275 1.48365 4.62044 1.67705 4.42705C1.87044 4.23365 2.13275 4.125 2.40625 4.125Z" fill="white"/>
                                                            <path d="M5.5 5.84375C5.59117 5.84375 5.6786 5.87997 5.74307 5.94443C5.80753 6.0089 5.84375 6.09633 5.84375 6.1875V8.25C5.84375 8.34117 5.80753 8.4286 5.74307 8.49307C5.6786 8.55753 5.59117 8.59375 5.5 8.59375C5.40883 8.59375 5.3214 8.55753 5.25693 8.49307C5.19247 8.4286 5.15625 8.34117 5.15625 8.25V6.1875C5.15625 6.09633 5.19247 6.0089 5.25693 5.94443C5.3214 5.87997 5.40883 5.84375 5.5 5.84375ZM7.5625 4.125V3.4375C7.5625 2.89049 7.3452 2.36589 6.95841 1.97909C6.57161 1.5923 6.04701 1.375 5.5 1.375C4.95299 1.375 4.42839 1.5923 4.04159 1.97909C3.6548 2.36589 3.4375 2.89049 3.4375 3.4375V4.125H7.5625ZM5.5 0.6875C6.22935 0.6875 6.92882 0.977231 7.44454 1.49296C7.96027 2.00868 8.25 2.70815 8.25 3.4375V4.8125H2.75V3.4375C2.75 2.70815 3.03973 2.00868 3.55546 1.49296C4.07118 0.977231 4.77065 0.6875 5.5 0.6875Z" fill="white"/>
                                                        </svg>
                                                        Change Password
                                                    </a>
                                                    <br>
                                                    <a href="" class="text-white">
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.125 4.125H4.8125V8.25H4.125V4.125Z" fill="white"/>
                                                            <path d="M6.1875 4.125H6.875V8.25H6.1875V4.125Z" fill="white"/>
                                                            <path d="M1.375 2.0625V2.75H2.0625V9.625C2.0625 9.80734 2.13493 9.9822 2.26386 10.1111C2.3928 10.2401 2.56766 10.3125 2.75 10.3125H8.25C8.43234 10.3125 8.6072 10.2401 8.73614 10.1111C8.86507 9.9822 8.9375 9.80734 8.9375 9.625V2.75H9.625V2.0625H1.375ZM2.75 9.625V2.75H8.25V9.625H2.75Z" fill="white"/>
                                                            <path d="M4.125 0.6875H6.875V1.375H4.125V0.6875Z" fill="white"/>
                                                        </svg>

                                                        Delete Account
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <div class="d-flex mb-2">
                                                <div class="mr-1">
                                                    <div><strong>Name:</strong></div>
                                                    <div><strong>Login:</strong></div>
                                                    <div><strong>Group:</strong></div>
                                                </div>
                                                <div>
                                                    <div>John Paul</div>
                                                    <div>30911</div>
                                                    <div>Variable spread account</div>
                                                </div>
                                            </div>
                                            <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                                <div>
                                                    <img src="./assets/icons/key.svg" alt="" style="margin-top: -4px;">
                                                    <span>Password</span>
                                                </div>
                                                <div>
                                                    <span>ntat404</span>
                                                </div>
                                            </div>
                                            <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                                <div>
                                                    <img src="./assets/icons/key.svg" alt="">
                                                    <span>Leverage</span>
                                                </div>
                                                <div>
                                                    <span>200</span>
                                                </div>
                                            </div>
                                            <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                                <div>
                                                    <img src="./assets/icons/key.svg" alt="">
                                                    <span>Balance</span>
                                                </div>
                                                <div>
                                                    <span>00.0</span>
                                                </div>
                                            </div>
                                            <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                                <div>
                                                    <img src="./assets/icons/key.svg" alt="">
                                                    <span>Enquity</span>
                                                </div>
                                                <div>
                                                    <span>00.0</span>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>Status</span>
                                                <div class="rounded-circle etc-bg-3" style="width: 10px; height: 10px;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <h5 class="text-center font-weight-bold m-0 font-size-14">
                                                <img src="./assets/icons/fund-now.svg" alt="" style="margin-top: -4px;">
                                                FUND NOW
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="account-card">
                                        <div class="header py-2 px-3">
                                            <div>
                                                <h5>TRADING ACCOUNT</h5>
                                                <h6>MT4 Demo 30919111</h6>
                                            </div>
                                            <div class="position-relative"
                                                x-data="{open: false}"
                                                @mouseover="open=true"
                                                @mouseover.away="open=false"
                                            >
                                                <img 
                                                    src="./assets/icons/gear.svg" alt=""
                                                    style="cursor: pointer"
                                                >
                                                <div x-show="open" class="position-absolute p-2" style="background:#36517E; border-radius: 5px; width: 150px; top:95%; right: -10px;" x-cloak x-transition>
                                                    <a href="forex-change-password.php" class="text-white">
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.40625 4.8125C2.31508 4.8125 2.22765 4.84872 2.16318 4.91318C2.09872 4.97765 2.0625 5.06508 2.0625 5.15625V9.28125C2.0625 9.37242 2.09872 9.45985 2.16318 9.52432C2.22765 9.58878 2.31508 9.625 2.40625 9.625H8.59375C8.68492 9.625 8.77235 9.58878 8.83682 9.52432C8.90128 9.45985 8.9375 9.37242 8.9375 9.28125V5.15625C8.9375 5.06508 8.90128 4.97765 8.83682 4.91318C8.77235 4.84872 8.68492 4.8125 8.59375 4.8125H2.40625ZM2.40625 4.125H8.59375C8.86725 4.125 9.12956 4.23365 9.32295 4.42705C9.51635 4.62044 9.625 4.88275 9.625 5.15625V9.28125C9.625 9.55475 9.51635 9.81706 9.32295 10.0105C9.12956 10.2039 8.86725 10.3125 8.59375 10.3125H2.40625C2.13275 10.3125 1.87044 10.2039 1.67705 10.0105C1.48365 9.81706 1.375 9.55475 1.375 9.28125V5.15625C1.375 4.88275 1.48365 4.62044 1.67705 4.42705C1.87044 4.23365 2.13275 4.125 2.40625 4.125Z" fill="white"/>
                                                            <path d="M5.5 5.84375C5.59117 5.84375 5.6786 5.87997 5.74307 5.94443C5.80753 6.0089 5.84375 6.09633 5.84375 6.1875V8.25C5.84375 8.34117 5.80753 8.4286 5.74307 8.49307C5.6786 8.55753 5.59117 8.59375 5.5 8.59375C5.40883 8.59375 5.3214 8.55753 5.25693 8.49307C5.19247 8.4286 5.15625 8.34117 5.15625 8.25V6.1875C5.15625 6.09633 5.19247 6.0089 5.25693 5.94443C5.3214 5.87997 5.40883 5.84375 5.5 5.84375ZM7.5625 4.125V3.4375C7.5625 2.89049 7.3452 2.36589 6.95841 1.97909C6.57161 1.5923 6.04701 1.375 5.5 1.375C4.95299 1.375 4.42839 1.5923 4.04159 1.97909C3.6548 2.36589 3.4375 2.89049 3.4375 3.4375V4.125H7.5625ZM5.5 0.6875C6.22935 0.6875 6.92882 0.977231 7.44454 1.49296C7.96027 2.00868 8.25 2.70815 8.25 3.4375V4.8125H2.75V3.4375C2.75 2.70815 3.03973 2.00868 3.55546 1.49296C4.07118 0.977231 4.77065 0.6875 5.5 0.6875Z" fill="white"/>
                                                        </svg>
                                                        Change Password
                                                    </a>
                                                    <br>
                                                    <a href="" class="text-white">
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.125 4.125H4.8125V8.25H4.125V4.125Z" fill="white"/>
                                                            <path d="M6.1875 4.125H6.875V8.25H6.1875V4.125Z" fill="white"/>
                                                            <path d="M1.375 2.0625V2.75H2.0625V9.625C2.0625 9.80734 2.13493 9.9822 2.26386 10.1111C2.3928 10.2401 2.56766 10.3125 2.75 10.3125H8.25C8.43234 10.3125 8.6072 10.2401 8.73614 10.1111C8.86507 9.9822 8.9375 9.80734 8.9375 9.625V2.75H9.625V2.0625H1.375ZM2.75 9.625V2.75H8.25V9.625H2.75Z" fill="white"/>
                                                            <path d="M4.125 0.6875H6.875V1.375H4.125V0.6875Z" fill="white"/>
                                                        </svg>

                                                        Delete Account
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <div class="d-flex mb-2">
                                                <div class="mr-1">
                                                    <div><strong>Name:</strong></div>
                                                    <div><strong>Login:</strong></div>
                                                    <div><strong>Group:</strong></div>
                                                </div>
                                                <div>
                                                    <div>John Paul</div>
                                                    <div>30911</div>
                                                    <div>Variable spread account</div>
                                                </div>
                                            </div>
                                            <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                                <div>
                                                    <img src="./assets/icons/key.svg" alt="" style="margin-top: -4px;">
                                                    <span>Password</span>
                                                </div>
                                                <div>
                                                    <span>ntat404</span>
                                                </div>
                                            </div>
                                            <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                                <div>
                                                    <img src="./assets/icons/key.svg" alt="">
                                                    <span>Leverage</span>
                                                </div>
                                                <div>
                                                    <span>200</span>
                                                </div>
                                            </div>
                                            <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                                <div>
                                                    <img src="./assets/icons/key.svg" alt="">
                                                    <span>Balance</span>
                                                </div>
                                                <div>
                                                    <span>00.0</span>
                                                </div>
                                            </div>
                                            <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                                <div>
                                                    <img src="./assets/icons/key.svg" alt="">
                                                    <span>Enquity</span>
                                                </div>
                                                <div>
                                                    <span>00.0</span>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>Status</span>
                                                <div class="rounded-circle etc-bg-3" style="width: 10px; height: 10px;"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer py-3">
                                            <h5 class="text-center font-weight-bold m-0 font-size-14">
                                                <img src="./assets/icons/fund-now.svg" alt="" style="margin-top: -4px;">
                                                FUND NOW
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div> <!-- container-fluid -->

                    <hr>

                    <div class="container-fluid">
                        <p class="mt-5">
                            <strong>Risk Warning:</strong> Trading foreign exchange and/or contracts for differences on margin carries a high level of risk, and may not be suitable for all investors. The possibility exists that you could sustain a loss in excess of your deposited funds and therefore, you should not speculate with capital that you cannot afford to lose. Before deciding to trade the products offered by JMI Brokers you should carefully consider your objectives, financial situation, needs and level of experience. You should be aware of all the risks associated with trading on margin. JMI Brokers provides general advice that does not take into account your objectives, financial situation or needs. The content of this Website must not be construed as personal advice. JMI Brokers recommends you seek advice from a separate financial advisor.
                        </p>
                        <p>
                            All opinions, news, analysis, prices or other information contained on this website are provided as general market commentary and does not constitute investment advice, nor a solicitation or recommendation for you to buy or sell any over-the-counter product or other financial instrument.
                        </p>
                    </div>
                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?php include 'layouts-right-sidebar.php'; ?>

        <?php include 'layouts-scripts.php'; ?>

        <script>
            $(function () {
                $('[data-toggle="popover"]').popover()
            })
        </script>

        <script src="assets/js/app.js"></script>


    </body>
</html>

