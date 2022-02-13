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
                            <h4 class="py-2 mb-4" style="border-bottom: 3px solid #F8C12C;">
                                <img src="./assets/icons/card-title.svg" alt=""> DEPOSIT
                            </h4>

                            <div x-data="{ open: false }" class="mb-3">
                                <div @click="open = !open" class="px-3 py-2 d-flex align-items-center" style="border: 1px solid rgba(0, 0, 0, 0.16);">
                                    <button class="btn p-1 etc-bg-gray-2 rounded-circle mr-3">
                                        <template x-if="open">
                                            <img src="./assets/icons/arrow-up.svg" alt="">
                                        </template>
                                        <template x-if="!open">
                                            <img src="./assets/icons/arrow-down.svg" alt="">
                                        </template>
                                    </button>
                                    <div class="mr-3" style="width: 110px;">
                                        <img src="./assets/images/fund1.png" alt="">
                                    </div>
                                    <h5 class="text-dark mb-0">Fund now using Bank Wire</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="p-4" style="border: 1px solid rgba(0, 0, 0, 0.16);">
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
                                        <div class="row mt-5">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Email</label>
                                                <div class="col-8">
                                                    <input type="email" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Trading account</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Gross Deposit Amount</label>
                                                <div class="col-5">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                <label class="col-3 col-form-label">USD</label>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-block etc-btn-1 waves-effect waves-light mb-1 font-size-14 font-weight-bold">UPDATE PASSWORD</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                
                            </div>
                            <div x-data="{ open: false }" class="mb-3">
                                <div @click="open = !open" class="px-3 py-2 d-flex align-items-center" style="border: 1px solid rgba(0, 0, 0, 0.16);">
                                    <button class="btn p-1 etc-bg-gray-2 rounded-circle mr-3">
                                        <template x-if="open">
                                            <img src="./assets/icons/arrow-up.svg" alt="">
                                        </template>
                                        <template x-if="!open">
                                            <img src="./assets/icons/arrow-down.svg" alt="">
                                        </template>
                                    </button>
                                    <div class="mr-3" style="width: 110px;">
                                        <img src="./assets/images/fund3.png" alt="">
                                    </div>
                                    <h5 class="text-dark mb-0">Fund now using Advcash</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="p-4" style="border: 1px solid rgba(0, 0, 0, 0.16);">
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
                                        <div class="row mt-5">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Email</label>
                                                <div class="col-8">
                                                    <input type="email" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Trading account</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Gross Deposit Amount</label>
                                                <div class="col-5">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                <label class="col-3 col-form-label">USD</label>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-block etc-btn-1 waves-effect waves-light mb-1 font-size-14 font-weight-bold">UPDATE PASSWORD</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                
                            </div>
                            <div x-data="{ open: false }" class="mb-3">
                                <div @click="open = !open" class="px-3 py-2 d-flex align-items-center" style="border: 1px solid rgba(0, 0, 0, 0.16);">
                                    <button class="btn p-1 etc-bg-gray-2 rounded-circle mr-3">
                                        <template x-if="open">
                                            <img src="./assets/icons/arrow-up.svg" alt="">
                                        </template>
                                        <template x-if="!open">
                                            <img src="./assets/icons/arrow-down.svg" alt="">
                                        </template>
                                    </button>
                                    <div class="mr-3" style="width: 110px;">
                                        <img src="./assets/images/fund-epay.png" alt="">
                                    </div>
                                    <h5 class="text-dark mb-0">Fund now using Epay</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="p-4" style="border: 1px solid rgba(0, 0, 0, 0.16);">
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
                                        <div class="row mt-5">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Email</label>
                                                <div class="col-8">
                                                    <input type="email" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Trading account</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Gross Deposit Amount</label>
                                                <div class="col-5">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                <label class="col-3 col-form-label">USD</label>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-block etc-btn-1 waves-effect waves-light mb-1 font-size-14 font-weight-bold">UPDATE PASSWORD</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                
                            </div>
                            <div x-data="{ open: false }" class="mb-3">
                                <div @click="open = !open" class="px-3 py-2 d-flex align-items-center" style="border: 1px solid rgba(0, 0, 0, 0.16);">
                                    <button class="btn p-1 etc-bg-gray-2 rounded-circle mr-3">
                                        <template x-if="open">
                                            <img src="./assets/icons/arrow-up.svg" alt="">
                                        </template>
                                        <template x-if="!open">
                                            <img src="./assets/icons/arrow-down.svg" alt="">
                                        </template>
                                    </button>
                                    <div class="mr-3" style="width: 110px;">
                                        <img src="./assets/images/fund-western.png" alt="">
                                    </div>
                                    <h5 class="text-dark mb-0">Fund now using Western Union</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="p-4" style="border: 1px solid rgba(0, 0, 0, 0.16);">
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
                                        <div class="row mt-5">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Email</label>
                                                <div class="col-8">
                                                    <input type="email" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Trading account</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Gross Deposit Amount</label>
                                                <div class="col-5">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                <label class="col-3 col-form-label">USD</label>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-block etc-btn-1 waves-effect waves-light mb-1 font-size-14 font-weight-bold">UPDATE PASSWORD</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                
                            </div>
                            <div x-data="{ open: false }" class="mb-3">
                                <div @click="open = !open" class="px-3 py-2 d-flex align-items-center" style="border: 1px solid rgba(0, 0, 0, 0.16);">
                                    <button class="btn p-1 etc-bg-gray-2 rounded-circle mr-3">
                                        <template x-if="open">
                                            <img src="./assets/icons/arrow-up.svg" alt="">
                                        </template>
                                        <template x-if="!open">
                                            <img src="./assets/icons/arrow-down.svg" alt="">
                                        </template>
                                    </button>
                                    <div class="mr-3" style="width: 110px;">
                                        <img src="./assets/images/fund-coinbase.png" alt="">
                                    </div>
                                    <h5 class="text-dark mb-0">Fund now using Coinbase</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="p-4" style="border: 1px solid rgba(0, 0, 0, 0.16);">
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
                                        <div class="row mt-5">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Email</label>
                                                <div class="col-8">
                                                    <input type="email" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Trading account</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Gross Deposit Amount</label>
                                                <div class="col-5">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                <label class="col-3 col-form-label">USD</label>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-block etc-btn-1 waves-effect waves-light mb-1 font-size-14 font-weight-bold">UPDATE PASSWORD</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                
                            </div>
                            <div x-data="{ open: false }" class="mb-3">
                                <div @click="open = !open" class="px-3 py-2 d-flex align-items-center" style="border: 1px solid rgba(0, 0, 0, 0.16);">
                                    <button class="btn p-1 etc-bg-gray-2 rounded-circle mr-3">
                                        <template x-if="open">
                                            <img src="./assets/icons/arrow-up.svg" alt="">
                                        </template>
                                        <template x-if="!open">
                                            <img src="./assets/icons/arrow-down.svg" alt="">
                                        </template>
                                    </button>
                                    <div class="mr-3" style="width: 110px;">
                                        <img src="./assets/images/fund-moneygram.png" alt="">
                                    </div>
                                    <h5 class="text-dark mb-0">Fund now using Money Gram</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="p-4" style="border: 1px solid rgba(0, 0, 0, 0.16);">
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
                                        <div class="row mt-5">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Email</label>
                                                <div class="col-8">
                                                    <input type="email" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Trading account</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Gross Deposit Amount</label>
                                                <div class="col-5">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                <label class="col-3 col-form-label">USD</label>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-block etc-btn-1 waves-effect waves-light mb-1 font-size-14 font-weight-bold">UPDATE PASSWORD</button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                
                            </div>
                            <div x-data="{ open: false }" class="mb-3">
                                <div @click="open = !open" class="px-3 py-2 d-flex align-items-center" style="border: 1px solid rgba(0, 0, 0, 0.16);">
                                    <button class="btn p-1 etc-bg-gray-2 rounded-circle mr-3">
                                        <template x-if="open">
                                            <img src="./assets/icons/arrow-up.svg" alt="">
                                        </template>
                                        <template x-if="!open">
                                            <img src="./assets/icons/arrow-down.svg" alt="">
                                        </template>
                                    </button>
                                    <div class="mr-3" style="width: 110px;">
                                        
                                    </div>
                                    <h5 class="text-dark mb-0">Fund now using Perfect Money</h5>
                                </div>

                                <template x-if="open" x-cloak x-transition>
                                    <div class="p-4" style="border: 1px solid rgba(0, 0, 0, 0.16);">
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
                                        <div class="row mt-5">
                                        <div class="col-xl-6 col-lg-8 col-md-9">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Account Email</label>
                                                <div class="col-8">
                                                    <input type="email" name="" id="" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Trading account</label>
                                                <div class="col-8">
                                                    <select name="" id="" class="form-control">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Gross Deposit Amount</label>
                                                <div class="col-5">
                                                    <input type="text" name="" id="" class="form-control">
                                                </div>
                                                <label class="col-3 col-form-label">USD</label>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label"></label>
                                                <div class="col-8">
                                                    <button type="button" class="btn btn-block etc-btn-1 waves-effect waves-light mb-1 font-size-14 font-weight-bold">UPDATE PASSWORD</button>
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

