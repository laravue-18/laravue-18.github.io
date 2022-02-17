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

                        <div class="main-card">
                            <div class="main-card-header">
                                <h4><img src="./assets/icons/card-title.svg" alt="">ACCOUNT DETAILS</h4>
                            </div>

                            <form class="mt-4">
                                <div class="d-flex align-items-center">
                                    <h4 class="font-weight-bold font-size-18 mb-0">General Information</h4>
                                    <button 
                                        v-show="!edit"
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
                                                <input type="text" name="" id="" class="form-control" value="Sam Smith" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Email</label>
                                            <div class="col-8">
                                                <input type="email" name="" id="" class="form-control" value="sam.smith@gmail.com" disabled="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Country</label>
                                            <div class="col-8">
                                                <select name="" id="" class="form-control" v-model="country" :disabled="!edit">
                                                    <option value="" disabled hidden>Select Country</option>
                                                    <option v-for="i in countries" :value="i">{{ i.name }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Mobile</label>
                                            <div class="col-8">
                                                <input type="text" name="" id="" class="form-control" value="11555446669911" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Country Code</label>
                                            <div class="col-8">
                                                <select name="" id="" class="form-control" v-model="country" :disabled="!edit">
                                                    <option value="" disabled hidden>Select Country</option>
                                                    <option v-for="i in countries" :value="i">{{ i.code }} ({{i.phone}})</option>
                                                </select>
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
                                                <input type="text" name="" id="" class="form-control" value="Sam Smith" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Address 2</label>
                                            <div class="col-8">
                                                <input type="email" name="" id="" class="form-control" value="sam.smith@gmail.com" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">City</label>
                                            <div class="col-8">
                                                <input type="text" name="" id="" class="form-control" value="007" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-4 col-form-label">Birthday</label>
                                            <div class="col-8">
                                                <input type="date" name="" id="" class="form-control" :max="currentDay" :disabled="!edit">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <template v-if="edit">
                                    <div>
                                        <button 
                                            class="btn btn-primary"
                                        >
                                            Save
                                        </button>
                                        <button 
                                            class="btn btn-inactive"
                                            @click.prevent = "edit = false"
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

        <script>
            const vm = new Vue({
                el: '#vapp',
                data(){
                    return {
                        edit: false,
                        countries: [],
                        country: ''
                    }
                },
                computed: {
                    currentDay(){
                        var today = new Date();
                        var dd = String(today.getDate()).padStart(2, '0');
                        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                        var yyyy = today.getFullYear();

                        today = yyyy + '-' + mm + '-' + dd
                        
                        return today
                    }
                },
                created(){
                    fetch('data/countries.json')
                        .then(response => response.json())
                        .then(data => (this.countries = data));
                }
            })
        </script>

        <script src="assets/js/app.js"></script>

    </body>
</html>

