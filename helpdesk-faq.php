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
                            <div class="main-card-header mb-4">
                                <h4>
                                    <img src="./assets/icons/card-title.svg" alt=""> FREQUENTLY ASKED QUESTIONS
                                </h4>
                            </div>

                            <accordion-card>
                                <template v-slot:header>
                                    <h4 class="font-size-16 font-weight-normal">Why Lorem Ispum?</h4>
                                </template>
                                <template v-slot:content>
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis odio nulla, eu aliquet lacus convallis tincidunt. Duis tincidunt varius erat a volutpat. Mauris convallis mi nec ligula sodales pharetra. Duis volutpat pharetra mauris a rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                    </p>
                                </template>
                            </accordion-card>
                            <accordion-card>
                                <template v-slot:header>
                                    <h4 class="font-size-16 font-weight-normal">Why Lorem Ispum?</h4>
                                </template>
                                <template v-slot:content>
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis odio nulla, eu aliquet lacus convallis tincidunt. Duis tincidunt varius erat a volutpat. Mauris convallis mi nec ligula sodales pharetra. Duis volutpat pharetra mauris a rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                    </p>
                                </template>
                            </accordion-card>
                            <accordion-card>
                                <template v-slot:header>
                                    <h4 class="font-size-16 font-weight-normal">Why Lorem Ispum?</h4>
                                </template>
                                <template v-slot:content>
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis odio nulla, eu aliquet lacus convallis tincidunt. Duis tincidunt varius erat a volutpat. Mauris convallis mi nec ligula sodales pharetra. Duis volutpat pharetra mauris a rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                    </p>
                                </template>
                            </accordion-card>
                            <accordion-card>
                                <template v-slot:header>
                                    <h4 class="font-size-16 font-weight-normal">Why Lorem Ispum?</h4>
                                </template>
                                <template v-slot:content>
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis odio nulla, eu aliquet lacus convallis tincidunt. Duis tincidunt varius erat a volutpat. Mauris convallis mi nec ligula sodales pharetra. Duis volutpat pharetra mauris a rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                    </p>
                                </template>
                            </accordion-card>
                            <accordion-card>
                                <template v-slot:header>
                                    <h4 class="font-size-16 font-weight-normal">Why Lorem Ispum?</h4>
                                </template>
                                <template v-slot:content>
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis odio nulla, eu aliquet lacus convallis tincidunt. Duis tincidunt varius erat a volutpat. Mauris convallis mi nec ligula sodales pharetra. Duis volutpat pharetra mauris a rutrum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                    </p>
                                </template>
                            </accordion-card>
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

