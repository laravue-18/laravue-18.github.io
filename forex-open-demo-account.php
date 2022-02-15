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
                            <modal-dialog :show="isModalOpen" @close="isModalOpen=false">
                                <div class="main-card-header">
                                    <h4 class="mb-0"><img src="./assets/icons/card-title.svg" alt="">ACCOUNT GROUPS</h4>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-3 col-sm-6 mb-3">
                                        <div class="group-card px-2 py-4">
                                            <h5 class="text-center etc-text-black font-weight-bold">Fixed Spread Account</h5>
                                            <h2 class="text-center etc-text-navy font-weight-bold font-size-30">$100</h2>
                                            <p class="text-center">minimum funding</p>
                                            <p class="mb-2">Benefit from industry-leading entry prices</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> 1 PIP fixed spread</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> Up To 1:500 Leverage</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> 100$ Minimum funding</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> USD is the main currency</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> Islamic account - No Swap</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> Minimum lot 0.01</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> Expert advisor</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> Heading is available</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> 4 Digits</p>
                                            <p class="mb-2"><img src="./assets/icons/times.svg" alt="" class="ml-1 mb-1"> Scalping is not available</p>
                                            <div class="text-center mt-4">
                                                <button type="button" class="btn etc-btn-1 waves-effect waves-light px-4"
                                                    @click="accountGroup = 'fixed-spread-account'; isModalOpen = false"
                                                >SELECT NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 mb-3">
                                        <div class="group-card px-2 py-4">
                                            <h5 class="text-center etc-text-black font-weight-bold">Variable Spread Account</h5>
                                            <h2 class="text-center etc-text-navy font-weight-bold font-size-30">$500</h2>
                                            <p class="text-center">minimum funding</p>
                                            <p class="mb-2">Receive even tighter spreads and commissions</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> 1 PIP fixed spread</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> Up To 1:500 Leverage</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> 100$ Minimum funding</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> USD is the main currency</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> Islamic account - No Swap</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> Minimum lot 0.01</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> Expert advisor</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> Heading is available</p>
                                            <p class="mb-2"><img src="./assets/icons/check.svg" alt="" class="ml-1"> 4 Digits</p>
                                            <p class="mb-2"><img src="./assets/icons/times.svg" alt="" class="ml-1 mb-1"> Scalping is not available</p>
                                            <div class="text-center mt-4">
                                                <button type="button" class="btn etc-btn-1 waves-effect waves-light px-4"
                                                    @click="accountGroup = 'variable-spread-account'; isModalOpen = false"
                                                >SELECT NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3"></div>
                                </div>
                                
                            </modal-dialog>

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

                            <div class="main-card-header mb-4">
                                <h4><img src="./assets/icons/card-title.svg" alt=""> OPEN DEMO ACCOUNT</h4>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row mb-3">
                                        <label class="col-4 col-form-label">Account Group</label>
                                        <div class="col-7">
                                            <div @click="isModalOpen=true">
                                                <select class="form-control" v-model="accountGroup" disabled>
                                                    <option value="fixed-spread-account">Fixed Spread Account</option>
                                                    <option value="variable-spread-account">Variable Spread Account</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <div class="btn-icon">
                                                <i class="far fa-question-circle font-size-22" @click="isModalOpen=true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-4 col-form-label">Currency Base</label>
                                        <div class="col-7">
                                            <select class="form-control">
                                                <option value="">USD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-4 col-form-label">Leverage</label>
                                        <div class="col-7">
                                            <select class="form-control">
                                                <option value="">1:1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-4 col-form-label">Deposit</label>
                                        <div class="col-7">
                                            <select class="form-control">
                                                <option value="">100</option>
                                            </select>
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
                                            <button type="button" class="btn etc-btn-1 btn-block waves-effect waves-light mb-1 font-size-14 font-weight-bold">PROCEED</button>
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

        <?php include 'components/modal-dialog.php'; ?>

        <script>
            const vm = new Vue({
                el: '#vapp',
                data(){
                    return {
                        isModalOpen: false,
                        isTermsModalOpen: false,
                        accountGroup: 'fixed-spread-account'
                    }
                }
            })
        </script>


        <script src="assets/js/app.js"></script>

    </body>
</html>

