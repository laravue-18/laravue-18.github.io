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
                                 NOTIFICATIONS
                            </h4>
                        </div>

                        <div class="main-card">
                            <div class="main-card-header d-md-flex justify-content-between align-items-end pb-0 mb-4" style="border-bottom: 1px solid rgba(0, 0, 0, 0.4);">
                                <div class="d-flex">
                                    <h4 class="text-center font-size-16 px-4 pb-2 tab" :class="{active: activeTab=='all'}" @click="activeTab='all'">
                                        All Messages
                                    </h4>
                                    <h4 class="text-center font-size-16 px-4 pb-2 tab" :class="{active: activeTab=='read'}" @click="activeTab='read'">
                                        Read Message
                                    </h4>
                                    <h4 class="text-center font-size-16 px-4 pb-2 tab" :class="{active: activeTab=='unread'}" @click="activeTab='unread'">
                                        Unread Messages
                                    </h4>
                                </div>
                                <button class="btn btn-sm">Mark All Notification Read</button>
                            </div>
                            
                            <div v-if="activeTab=='all'" class="">
                                <div class="notification-msg">
                                    <h4 class="mb-3">Lorem Ipsum dolor</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque
                                    </p>
                                </div>
                                <div class="notification-msg">
                                    <h4 class="mb-3">Lorem Ipsum dolor</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque
                                    </p>
                                </div>
                                <div class="notification-msg">
                                    <h4 class="mb-3">Lorem Ipsum dolor</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque
                                    </p>
                                </div>
                                <div class="notification-msg">
                                    <h4 class="mb-3">Lorem Ipsum dolor</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque
                                    </p>
                                </div>
                                <div class="notification-msg">
                                    <h4 class="mb-3">Lorem Ipsum dolor</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque
                                    </p>
                                </div>
                                <div class="notification-msg">
                                    <h4 class="mb-3">Lorem Ipsum dolor</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque
                                    </p>
                                </div>
                            </div>
                            <div v-if="activeTab=='read'" class="">
                                <div class="notification-msg">
                                    <h4 class="mb-3">Lorem Ipsum dolor</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque
                                    </p>
                                </div>
                                <div class="notification-msg">
                                    <h4 class="mb-3">Lorem Ipsum dolor</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque
                                    </p>
                                </div>
                            </div>
                            <div v-if="activeTab=='unread'" class="">
                                <div class="notification-msg">
                                    <h4 class="mb-3">Lorem Ipsum dolor</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque
                                    </p>
                                </div>
                                <div class="notification-msg">
                                    <h4 class="mb-3">Lorem Ipsum dolor</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque
                                    </p>
                                </div>
                                <div class="notification-msg">
                                    <h4 class="mb-3">Lorem Ipsum dolor</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque
                                    </p>
                                </div>
                                <div class="notification-msg">
                                    <h4 class="mb-3">Lorem Ipsum dolor</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et neque ac eros tempor pulvinar. Cras auctor ornare purus, sed pretium dui ultrices at. Curabitur elementum a sem ac scelerisque
                                    </p>
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

