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

                        <div class="main-card">
                            <div class="main-card-header mb-4">
                                <h4>
                                    <img src="./assets/icons/card-title.svg" alt=""> Withdraw
                                </h4>
                            </div>

                            <div x-data="{ open: false }" class="accordion-card mb-3" :class="open && 'opened'">
                                <div @click="open = !open" class="header py-2 px-3">
                                    <i class="fas mr-2" :class="open ? ' fa-chevron-circle-up' : ' fa-chevron-circle-down'"></i>
                                    <div class="accordion-header-logo">
                                        <img src="./assets/images/fund1.png" alt="">
                                    </div>
                                    <h5>Fund now using Bank Wire</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="border-top p-3">
                                        <div class="d-md-flex">
                                            <div class="mr-2 text-md-left text-center">
                                                <img src="./assets/images/fund2.png" alt="">
                                            </div>
                                            <div>
                                                <div class="d-md-flex">
                                                    <p class="font-size-18"> 7 Account Currency: </p>
                                                    <p class="font-size-18"><strong>EUR, USD, AUD, GBP, JPY, SGD, CAD</strong></p>
                                                </div>
                                                <div class="d-md-flex">
                                                    <p class="font-size-18"> Processing Time (approx): </p>
                                                    <p class="font-size-18"><strong>Instant</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Number</label>
                                                <div class="col-8">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Currency</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">USD</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Withdraw Amount</label>
                                                <div class="col-8">
                                                    <input type="number" name="" id="" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-primary">Withdraw</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                
                            </div>
                            <div x-data="{ open: false }" class="accordion-card mb-3" :class="open && 'opened'">
                                <div @click="open = !open" class="header py-2 px-3">
                                    <i class="fas mr-2" :class="open ? ' fa-chevron-circle-up' : ' fa-chevron-circle-down'"></i>
                                    <div class="accordion-header-logo">
                                        <img src="./assets/images/fund1.png" alt="">
                                    </div>
                                    <h5>Fund now using Advcash</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="border-top p-3">
                                        <div class="d-flex">
                                            <div class="mr-2">
                                                <img src="./assets/images/fund3.png" alt="">
                                            </div>
                                            <div>
                                                <p class="font-size-20 my-1">
                                                7 Account Currency: <strong>EUR, USD, AUD, GBP, JPY, SGD, CAD</strong>
                                                </p>
                                                <p class="font-size-20 mb-0">
                                                Processing Time (approx): <strong>Instant</strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Number</label>
                                                <div class="col-8">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Currency</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">USD</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Withdraw Amount</label>
                                                <div class="col-8">
                                                    <input type="number" name="" id="" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-primary">Withdraw</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                
                            </div>
                            <div x-data="{ open: false }" class="accordion-card mb-3" :class="open && 'opened'">
                                <div @click="open = !open" class="header py-2 px-3">
                                    <i class="fas mr-2" :class="open ? ' fa-chevron-circle-up' : ' fa-chevron-circle-down'"></i>
                                    <div class="accordion-header-logo">
                                        <img src="./assets/images/fund-epay.png" alt="" width="50">
                                    </div>
                                    <h5>Fund now using Epay</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="border-top p-3">
                                        <div class="d-flex">
                                            <div class="mr-2">
                                                <img src="./assets/images/fund2.png" alt="">
                                            </div>
                                            <div>
                                                <p class="font-size-20 my-1">
                                                7 Account Currency: <strong>EUR, USD, AUD, GBP, JPY, SGD, CAD</strong>
                                                </p>
                                                <p class="font-size-20 mb-0">
                                                Processing Time (approx): <strong>Instant</strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Number</label>
                                                <div class="col-8">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Currency</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">USD</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Withdraw Amount</label>
                                                <div class="col-8">
                                                    <input type="number" name="" id="" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-primary">Withdraw</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                
                            </div>
                            <div x-data="{ open: false }" class="accordion-card mb-3" :class="open && 'opened'">
                                <div @click="open = !open" class="header py-2 px-3">
                                    <i class="fas mr-2" :class="open ? ' fa-chevron-circle-up' : ' fa-chevron-circle-down'"></i>
                                    <div class="accordion-header-logo">
                                        <img src="./assets/images/fund-western.png" alt="">
                                    </div>
                                    <h5>Fund now using Western Union</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="border-top p-3">
                                        <div class="d-flex">
                                            <div class="mr-2">
                                                <img src="./assets/images/fund2.png" alt="">
                                            </div>
                                            <div>
                                                <p class="font-size-20 my-1">
                                                7 Account Currency: <strong>EUR, USD, AUD, GBP, JPY, SGD, CAD</strong>
                                                </p>
                                                <p class="font-size-20 mb-0">
                                                Processing Time (approx): <strong>Instant</strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Number</label>
                                                <div class="col-8">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Currency</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">USD</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Withdraw Amount</label>
                                                <div class="col-8">
                                                    <input type="number" name="" id="" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-primary">Withdraw</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                
                            </div>
                            <div x-data="{ open: false }" class="accordion-card mb-3" :class="open && 'opened'">
                                <div @click="open = !open" class="header py-2 px-3">
                                    <i class="fas mr-2" :class="open ? ' fa-chevron-circle-up' : ' fa-chevron-circle-down'"></i>
                                    <div class="accordion-header-logo">
                                        <img src="./assets/images/fund-coinbase.png" alt="">
                                    </div>
                                    <h5>Fund now using Bank Coinbase</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="border-top p-3">
                                        <div class="d-flex">
                                            <div class="mr-2">
                                                <img src="./assets/images/fund2.png" alt="">
                                            </div>
                                            <div>
                                                <p class="font-size-20 my-1">
                                                7 Account Currency: <strong>EUR, USD, AUD, GBP, JPY, SGD, CAD</strong>
                                                </p>
                                                <p class="font-size-20 mb-0">
                                                Processing Time (approx): <strong>Instant</strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Number</label>
                                                <div class="col-8">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Currency</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">USD</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Withdraw Amount</label>
                                                <div class="col-8">
                                                    <input type="number" name="" id="" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-primary">Withdraw</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                
                            </div>
                            <div x-data="{ open: false }" class="accordion-card mb-3" :class="open && 'opened'">
                                <div @click="open = !open" class="header py-2 px-3">
                                    <i class="fas mr-2" :class="open ? ' fa-chevron-circle-up' : ' fa-chevron-circle-down'"></i>
                                    <div class="accordion-header-logo">
                                        <img src="./assets/images/fund-moneygram.png" alt="">
                                    </div>
                                    <h5>Fund now using Money Gram</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="border-top p-3">
                                        <div class="d-flex">
                                            <div class="mr-2">
                                                <img src="./assets/images/fund2.png" alt="">
                                            </div>
                                            <div>
                                                <p class="font-size-20 my-1">
                                                7 Account Currency: <strong>EUR, USD, AUD, GBP, JPY, SGD, CAD</strong>
                                                </p>
                                                <p class="font-size-20 mb-0">
                                                Processing Time (approx): <strong>Instant</strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Number</label>
                                                <div class="col-8">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Currency</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">USD</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Withdraw Amount</label>
                                                <div class="col-8">
                                                    <input type="number" name="" id="" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-primary">Withdraw</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                
                            </div>
                            <div x-data="{ open: false }" class="accordion-card mb-3" :class="open && 'opened'">
                                <div @click="open = !open" class="header py-2 px-3">
                                    <i class="fas mr-2" :class="open ? ' fa-chevron-circle-up' : ' fa-chevron-circle-down'"></i>
                                    <div class="accordion-header-logo">
                                        <img src="./assets/images/fund1.png" alt="">
                                    </div>
                                    <h5>Fund now using Perfect Money</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="border-top p-3">
                                        <div class="d-flex">
                                            <div class="mr-2">
                                                <img src="./assets/images/fund2.png" alt="">
                                            </div>
                                            <div>
                                                <p class="font-size-20 my-1">
                                                7 Account Currency: <strong>EUR, USD, AUD, GBP, JPY, SGD, CAD</strong>
                                                </p>
                                                <p class="font-size-20 mb-0">
                                                Processing Time (approx): <strong>Instant</strong>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Number</label>
                                                <div class="col-8">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Currency</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">USD</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Withdraw Amount</label>
                                                <div class="col-8">
                                                    <input type="number" name="" id="" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-primary">Withdraw</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                
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

