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

                            <modal-dialog :show="isTermsModalOpen" @close="isTermsModalOpen=false">
                                <h4 class="mb-4">The Terms And Conditions</h4>

                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum repellendus, tenetur ducimus iusto nobis aperiam dicta quae, ut est esse deserunt at sunt numquam. Neque ut eligendi quae dolor aspernatur.
                                    Aspernatur minus, quae ipsum officia alias id dolore nihil laboriosam quod, quisquam modi ex laudantium esse qui placeat quasi doloremque, ipsam dicta totam! Sit dolores ipsa doloribus eius, repellendus illo.
                                    Totam expedita, aliquam dolores commodi ut doloremque recusandae et numquam dolore molestiae quisquam praesentium eveniet velit natus iste maiores, quasi tempora exercitationem nulla vitae quae nostrum accusamus. Blanditiis, ducimus fuga!
                                    Consectetur culpa nostrum quam iure odio. Facere excepturi inventore obcaecati natus. Quibusdam quo nobis repellendus nisi ullam iusto unde nulla aut quod! Aperiam voluptate explicabo, quasi molestiae accusamus vero magnam!
                                    Maxime, voluptas? Ipsa amet rem deserunt commodi quod, laborum fuga officiis suscipit at error exercitationem repudiandae debitis quis quae. Quam necessitatibus distinctio sapiente maxime ipsum excepturi, fugiat quod aliquid molestias.
                                </p>
                            </modal-dialog>

                            <div class="main-card-header">
                                <h4><img src="./assets/icons/card-title.svg" alt=""> TRANSFER FORM</h4>
                            </div>

                            <div class="row mt-5">
                                <div class="col-lg-6">
                                    <div class="row mb-3">
                                        <label class="col-4 col-form-label">Transfer Form</label>
                                        <div class="col-7">
                                            <select name="" id="" class="form-control">
                                                <option value="" disabled hidden>Select...</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <pwd-input label="Account Password"></pwd-input>
                                    <div class="row mb-3">
                                        <label class="col-4 col-form-label">Transfer To</label>
                                        <div class="col-7">
                                            <select name="" id="" class="form-control">
                                                <option value="" disabled hidden>Select...</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-4 col-form-label">Currency Base</label>
                                        <div class="col-7">
                                            <select name="" id="" class="form-control">
                                                <option value="">USD</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-4 col-form-label">Transfer Amount</label>
                                        <div class="col-7">
                                            <input type="text" class="form-control">
                                        </div>
                                        
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4"></div>
                                        <div class="col-7">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                <label class="form-check-label" for="inlineFormCheck">
                                                I agree <span class="etc-text-light" @click="isTermsModalOpen=true"><u>the terms and conditions</u> </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class="col-4"></div>
                                        <div class="col-7">
                                            <button type="button" class="btn etc-btn-1 waves-effect waves-light mb-1 font-size-14 font-weight-bold">DEPOSIT</button>
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

        <?php include 'components/pwd-input.php'; ?>
        <?php include 'components/modal-dialog.php'; ?>

        <script>
            const vm = new Vue({
                el: '#vapp',
                data(){
                    return {
                        isTermsModalOpen: false
                    }
                },
                created(){
                    
                }
            })
        </script>

        <script src="assets/js/app.js"></script>

    </body>
</html>

