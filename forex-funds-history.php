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
                                 HISTORY
                            </h4>
                        </div>

                        <div class="main-card">
                            <div class="main-card-header d-md-flex align-items-center" style="border-bottom: 1px solid rgba(0, 0, 0, 0.4);">
                                <h4 class="font-size-16 mr-4 mb-2 tab" @click="activeTab='all'">
                                    <img src="./assets/images/all.png" alt="" class="mr-2">ALL
                                </h4>
                                <h4 class="font-size-16 mr-4 mb-2 tab" @click="activeTab='deposit'">
                                    <img src="./assets/images/deposit.png" alt="" class="mr-2">DEPOSIT
                                </h4>
                                <h4 class="font-size-16 mr-4 mb-2 tab" @click="activeTab='withdraw'">
                                    <img src="./assets/images/withdraw.png" alt="" class="mr-2">WITHDRAW
                                </h4>
                                <h4 class="font-size-16 mr-4 mb-2 tab" @click="activeTab='internal-transfer'">
                                    <img src="./assets/images/internal.png" alt="" class="mr-2">INTERNAL TRANSFER
                                </h4>
                            </div>
                            
                            <div v-if="activeTab=='all'" class="row mt-4 mb-5">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="border p-2 mb-2">
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Type:</span>
                                            <span>Internal Transfer</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Via:</span>
                                            <span>9113</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Account:</span>
                                            <span>910000052</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Amount:</span>
                                            <span>10 USD</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Details:</span>
                                            <span>Loreum Ipsum is simple</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Data:</span>
                                            <span>2021.12.28T23:56:07.000Z</span>
                                        </div>
                                        
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Status</span>
                                            <div class="rounded-circle etc-bg-3" style="width: 10px; height: 10px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="border p-2 mb-2">
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Type:</span>
                                            <span>Deposit</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Via:</span>
                                            <span>9113</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Account:</span>
                                            <span>910000052</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Amount:</span>
                                            <span>10 USD</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Details:</span>
                                            <span>Loreum Ipsum is simple</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Data:</span>
                                            <span>2021.12.28T23:56:07.000Z</span>
                                        </div>
                                        
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Status</span>
                                            <div class="rounded-circle etc-bg-3" style="width: 10px; height: 10px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="border p-2 mb-2">
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Type:</span>
                                            <span>Widthraw</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Via:</span>
                                            <span>9113</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Account:</span>
                                            <span>910000052</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Amount:</span>
                                            <span>10 USD</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Details:</span>
                                            <span>Loreum Ipsum is simple</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Data:</span>
                                            <span>2021.12.28T23:56:07.000Z</span>
                                        </div>
                                        
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Status</span>
                                            <div class="rounded-circle etc-bg-3" style="width: 10px; height: 10px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div v-if="activeTab=='deposit'" class="row mt-4 mb-5">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="border p-2 mb-2">
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Type:</span>
                                            <span>Deposit</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Via:</span>
                                            <span>9113</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Account:</span>
                                            <span>910000052</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Amount:</span>
                                            <span>10 USD</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Details:</span>
                                            <span>Loreum Ipsum is simple</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Data:</span>
                                            <span>2021.12.28T23:56:07.000Z</span>
                                        </div>
                                        
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Status</span>
                                            <div class="rounded-circle etc-bg-3" style="width: 10px; height: 10px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="border p-2 mb-2">
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Type:</span>
                                            <span>Deposit</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Via:</span>
                                            <span>9113</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Account:</span>
                                            <span>910000052</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Amount:</span>
                                            <span>10 USD</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Details:</span>
                                            <span>Loreum Ipsum is simple</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Data:</span>
                                            <span>2021.12.28T23:56:07.000Z</span>
                                        </div>
                                        
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Status</span>
                                            <div class="rounded-circle etc-bg-3" style="width: 10px; height: 10px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div v-if="activeTab=='withdraw'" class="row mt-4 mb-5">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="border p-2 mb-2">
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Type:</span>
                                            <span>Withdraw</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Via:</span>
                                            <span>9113</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Account:</span>
                                            <span>910000052</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Amount:</span>
                                            <span>10 USD</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Details:</span>
                                            <span>Loreum Ipsum is simple</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Data:</span>
                                            <span>2021.12.28T23:56:07.000Z</span>
                                        </div>
                                        
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Status</span>
                                            <div class="rounded-circle etc-bg-3" style="width: 10px; height: 10px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="border p-2 mb-2">
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Type:</span>
                                            <span>Withdraw</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Via:</span>
                                            <span>9113</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Account:</span>
                                            <span>910000052</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Amount:</span>
                                            <span>10 USD</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Details:</span>
                                            <span>Loreum Ipsum is simple</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Data:</span>
                                            <span>2021.12.28T23:56:07.000Z</span>
                                        </div>
                                        
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Status</span>
                                            <div class="rounded-circle etc-bg-3" style="width: 10px; height: 10px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div v-if="activeTab=='internal-transfer'" class="row mt-4 mb-5">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="border p-2 mb-2">
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Type:</span>
                                            <span>Internal Transfer</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Via:</span>
                                            <span>9113</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Account:</span>
                                            <span>910000052</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Amount:</span>
                                            <span>10 USD</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Details:</span>
                                            <span>Loreum Ipsum is simple</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Data:</span>
                                            <span>2021.12.28T23:56:07.000Z</span>
                                        </div>
                                        
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Status</span>
                                            <div class="rounded-circle etc-bg-3" style="width: 10px; height: 10px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="border p-2 mb-2">
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Type:</span>
                                            <span>Internal Transfer</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Via:</span>
                                            <span>9113</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Account:</span>
                                            <span>910000052</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Amount:</span>
                                            <span>10 USD</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Details:</span>
                                            <span>Loreum Ipsum is simple</span>
                                        </div>
                                        <div class="etc-bg-2 rounded-lg p-2  d-flex justify-content-between align-items-center mb-1">
                                            <span>Data:</span>
                                            <span>2021.12.28T23:56:07.000Z</span>
                                        </div>
                                        
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Status</span>
                                            <div class="rounded-circle etc-bg-3" style="width: 10px; height: 10px;"></div>
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
            const vm = new Vue({
                el: '#vapp',
                data(){
                    return {
                        activeTab: 'all'
                    }
                }
            })
        </script>

        <script src="assets/js/app.js"></script>


    </body>
</html>

