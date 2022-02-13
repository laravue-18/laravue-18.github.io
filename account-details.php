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
                            <div class="main-card-header">
                                <h4><img src="./assets/icons/card-title.svg" alt="">ACCOUNT DETAILS</h4>
                            </div>

                            <form x-data="{edit: false}" class="mt-4">
                                <div class="d-flex align-items-center">
                                    <h4 class="font-weight-bold font-size-18 mb-0">General Information</h4>
                                    <button 
                                        x-show="!edit"
                                        class="btn btn-sm btn-rounded etc-btn-1 waves-effect waves-light font-size-12 font-weight-bold px-3 py-1 mx-3"
                                        @click.prevent = "edit = true"
                                    >
                                        Edit
                                    </button>
                                    <div class="etc-bg-gray ml-3" style="flex: 1; height: 10px;"></div>
                                </div>
                        
                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Name</label>
                                            <div class="col-8">
                                                <input type="text" name="" id="" class="form-control etc-bg-gray" value="Sam Smith" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Email</label>
                                            <div class="col-8">
                                                <input type="email" name="" id="" class="form-control etc-bg-gray" value="sam.smith@gmail.com" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Country Code</label>
                                            <div class="col-8">
                                                <input type="text" name="" id="" class="form-control etc-bg-gray" value="007" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Mobile</label>
                                            <div class="col-8">
                                                <input type="text" name="" id="" class="form-control etc-bg-gray" value="11555446669911" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Birthday</label>
                                            <div class="col-8">
                                                <input type="text" name="" id="" class="form-control etc-bg-gray" value="10.12.2000" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Gender</label>
                                            <div class="col-8">
                                                <select name="" id="" class="form-control" :disabled="!edit">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="d-flex align-items-center">
                                    <h4 class="font-weight-bold font-size-18 mb-0">Address Information</h4>
                                    <div class="etc-bg-gray ml-3" style="flex: 1; height: 10px;"></div>
                                </div>
                        
                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Address 1</label>
                                            <div class="col-8">
                                                <input type="text" name="" id="" class="form-control etc-bg-gray" value="Sam Smith" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Address 2</label>
                                            <div class="col-8">
                                                <input type="email" name="" id="" class="form-control etc-bg-gray" value="sam.smith@gmail.com" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">City</label>
                                            <div class="col-8">
                                                <input type="text" name="" id="" class="form-control etc-bg-gray" value="007" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Country</label>
                                            <div class="col-8">
                                                <input type="text" name="" id="" class="form-control etc-bg-gray" value="11555446669911" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <template x-if="edit">
                                    <div>
                                        <button 
                                            class="btn etc-btn-1 waves-effect waves-light font-size-12 font-weight-bold px-3 py-1 mr-3"
                                        >
                                            Save
                                        </button>
                                        <button 
                                            class="btn etc-btn-1 etc-bg-gray waves-effect waves-light font-size-12 font-weight-bold px-3 py-1 mr-3"
                                            @click = "edit = false"
                                        >
                                            Cancel
                                        </button>
                                    </div>
                                </template>
                            </form>

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

