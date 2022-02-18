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

                        <div class="main-card p-0 overflow-hidden">
                            <div class="text-center p-5" style="background: #36517E;">
                                <h4 class="text-white d-inline-block pb-2 mb-4" style="border-bottom: 2px solid #F8C12C;">Have a question or require specialist assistance?</h4>
                                <p class="text-white mb-3">
                                    Our dedicated customer service team is here <span style="color: #F8C12C;">24/7</span> to assist you.
                                </p>
                                <p class="text-white">
                                    Whether you're new to IC Markets or have a question about your existing account, we can help.
                                </p>
                            </div>
                            <div class="px-5 py-3">
                                <div class="row mb-3">
                                    <div class="col-md-6" >
                                        <div class="d-flex p-3 bg-gray h-100" style="border-radius: 5px;">
                                            <div>
                                                <img src="assets/images/phone.png" class="mr-3" alt="">
                                            </div>
                                            <div>
                                                <h5 class="font-weight-bold mb-3">Call us</h5>
                                                <p><strong>Telephone:</strong> +248 467 19 76</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex p-3 bg-gray h-100" style="border-radius: 5px;">
                                            <div>
                                                <img src="assets/images/email.png" class="mr-3" alt="">
                                            </div>
                                            <div>
                                                <h5 class="font-weight-bold mb-3">Email Inquiries</h5>
                                                <p class="mb-2"><strong>Client Relations:</strong> rm@icmarkets.com</p>
                                                <p class="mb-2"><strong>Support:</strong> support@icmarkets.com</p>
                                                <p class="mb-2"><strong>Accounts:</strong> accounts@icmarkets.com</p>
                                                <p class="mb-2"><strong>Marketing:</strong> marketing@icmarkets.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top pt-3">
                                    <div class="d-flex">
                                        <div>
                                            <img src="assets/images/seychelles.png" class="mr-3" alt="">
                                        </div>
                                        <div>
                                            <h5 class="font-weight-bold mb-3">Email Inquiries</h5>
                                            <h6 class="font-weight-bold mb-3">Raw Trading Ltd</h6>
                                            <div class="row">
                                                <div class="col-md-6"><p class="mb-2"><strong>Address:</strong> Eden Plaza, Office 209, Eden Island, Mahe, Seychelles</p></div>
                                                <div class="col-md-6"><p class="mb-2"><strong>Company License Number:</strong> SD018</p></div>
                                                <div class="col-md-6"><p class="mb-2"><strong>Contact:</strong> +248 467 19 76</p></div>
                                                <div class="col-md-6"><p class="mb-2"><strong>Company Number:</strong> 8419879-2</p></div>
                                                <div class="col-md-6"><p class="mb-2"><strong>Email:</strong> enquiries@icmarkets.com</p></div>
                                            </div>
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
        <?php include 'components/accordion-card.php'; ?>

        <script>
            const vm = new Vue({
                el: '#vapp',
            })
        </script>

        <script src="assets/js/app.js"></script>

    </body>
</html>

