<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Euro Trust Capital</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link rel="stylesheet" type="text/css" href="assets/libs/dropzone/min/dropzone.min.css">

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

                        <div class="main-card position-relative"
                           
                        >
                            <div
                                class="modal-card main-card p-0 overflow-hidden"
                                role="dialog"
                                tabindex="-1"
                                v-show="isModalOpen"
                            >
                                <div class="d-md-flex align-items-stretch">
                                    <div style="flex: 1; background: rgba(0, 0, 0, 0.06);">
                                        <div class="p-4">
                                            <select name="" id="" class="form-control rounded" v-model="type">
                                                <option value=""> Document Type </option>
                                                <optgroup label="Proof of ID" data-description="proof-of-id-text">
                                                    <option value="0">National Identity Card</option>
                                                    <option value="1">Passport</option>
                                                    <option value="2">Driver's License</option>
                                                </optgroup>
                                                <optgroup label="Proof of address" data-description="proof-of-address-text">
                                                    <option value="3">Bank account statement</option>
                                                    <option value="4">Credit Card Statement</option>
                                                    <option value="5">Phone Bill</option>
                                                    <option value="6">Electricity bill</option>
                                                    </optgroup>
                                                <optgroup label="Card Scans" data-description="proof-of-address-text">
                                                    <option value="7">Credit Card Scan</option>
                                                </optgroup>
                                            </select>
                                            <div class="p-2 d-flex justify-content-center">
                                                <img src="assets/images/carbon_license-global.png" alt="" style="width: 85px">
                                            </div>
                                            <hr>

                                            <template v-if="type==0 || type==1 || type==2">
                                                <div class="pr-2">
                                                    <h5 class="mt-4 mb-3">e.g. Passport | National ID | Drivers Licence </h5>
                                                    <div class="d-flex align-items-start mb-2">
                                                        <img src="assets/icons/charm_tick.svg" alt="" class="mr-3">
                                                        <p class="mb-0">
                                                        Your Photo ID must be valid and clearly showing your Name, Date of Birth and Expiry/Issue date
                                                        </p>
                                                    </div>
                                                    <div class="d-flex align-items-start mb-2">
                                                        <img src="assets/icons/charm_tick.svg" alt="" class="mr-3">
                                                        <p class="mb-0">
                                                        Your Photo ID should be in colour 
                                                        </p>
                                                    </div>
                                                    <div class="d-flex align-items-start mb-2">
                                                        <img src="assets/icons/charm_tick.svg" alt="" class="mr-3">
                                                        <p class="mb-0">
                                                        Please attach the front and back of your document as separate files
                                                        </p>
                                                    </div>
                                                    <div class="d-flex align-items-start mb-2">
                                                        <img src="assets/icons/charm_tick.svg" alt="" class="mr-3">
                                                        <p class="mb-0">
                                                        Should be different to other already provided documents
                                                        </p>
                                                    </div>
                                                </div>
                                            </template>
                                            <template v-if="type==3 || type==4 || type==5 || type==6 || type==7">
                                                <div class="pr-2">
                                                    <h5 class="mt-4 mb-3">e.g. Utility bill | Phone/Internet Bill | Bank </h5>
                                                    <div class="d-flex align-items-start mb-2">
                                                        <img src="assets/icons/charm_tick.svg" alt="" class="mr-3">
                                                        <p class="mb-0">
                                                        Statement Should be a full page document, clearly showing your name, residential address (no P.O. Box)
                                                        </p>
                                                    </div>
                                                    <div class="d-flex align-items-start mb-2">
                                                        <img src="assets/icons/charm_tick.svg" alt="" class="mr-3">
                                                        <p class="mb-0">
                                                        Should be dated within last 90 days and show provision of services such as money owed or paid
                                                        </p>
                                                    </div>
                                                    <div class="d-flex align-items-start mb-2">
                                                        <img src="assets/icons/charm_tick.svg" alt="" class="mr-3">
                                                        <p class="mb-0">
                                                        Should be different to other already provided documents
                                                        </p>
                                                    </div>
                                                </div>
                                            </template>

                                            <textarea name="" id="" cols="30" rows="3" class="form-control mb-4" style= placeholder="Comment..."></textarea>
                                        </div>
                                    </div>
                                    <div style="flex: 2">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div class="d-flex justify-content-end">
                                                <button class="btn" aria-label="Close" @click="isModalOpen=false">✖</button>  
                                            </div>

                                            <div class="p-5">
                                                <div id="dropContainer" class="drop-container">
                                                    <div class="text-center">
                                                        <div class="mb-3">
                                                            <img src="assets/images/upload.jpeg" alt="" style="width: 85px;">
                                                        </div>
                                                        <div class="files-name"></div>

                                                        <hr class="upload-container-hr">
                                                        
                                                        <h4 class="mb-4">Drag and drop your files here or</h4>

                                                        <div class="browse-button-container mb-4">
                                                            <input type="file" class="file-input" id="fileInput" style="display: none;">
                                                            <button type="button" class="btn btn-primary file-button">Browse File</button><br>
                                                        </div>
                                                        <div>
                                                            <p> File Type: .pdf, .gif, .png, .doc, .docx, .jpeg and .jpg</p>
                                                            <p> Max File Size 12 Mb. </p>
                                                        </div>
                                                    </div>
                                                </div>
                
                                            </div>

                                            <div class="d-flex justify-content-end mr-5 p-2 px-4" style="background: rgba(0, 0, 0, 0.06);">
                                                <button type="button" 
                                                    class="btn etc-btn-1 text-dark waves-effect waves-light font-size-14 font-weight-bold"
                                                >
                                                    Upload
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="main-card-header d-flex justify-content-between align-items-center">
                                <h4><img src="./assets/icons/card-title.svg" alt="">DOCUMENTS</h4>
                                <button type="button" class="btn btn-primary"
                                    @click="isModalOpen = true"
                                >
                                    Add Document
                                </button>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-6 mb-3">
                                    <a href="" target="_blank">
                                    <div class="d-flex p-3 align-items-center mr-3" style="background: rgba(0, 0, 0, 0.02); border: 1px solid rgba(0, 0, 0, 0.08); box-sizing: border-box; border-radius: 10px;">
                                        <div style="
                                            height: 70px;
                                            background: #36517E;
                                            border-radius: 10px;
                                            flex: 1;
                                        "
                                            class="d-flex align-items-center justify-content-center mr-4"
                                        >
                                            <img src="./assets/icons/document1.svg" alt="">
                                        </div>
                                        <div style="flex: 3">
                                            <h5>All Documents</h5>
                                            <span>20 files</span>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <a href="" target="_blank">
                                    <div class="d-flex p-3 align-items-center mr-3" style="background: rgba(0, 0, 0, 0.02); border: 1px solid rgba(0, 0, 0, 0.08); box-sizing: border-box; border-radius: 10px;">
                                        <div style="
                                            height: 70px;
                                            background: #36517E;
                                            border-radius: 10px;
                                            flex: 1;
                                        "
                                            class="d-flex align-items-center justify-content-center mr-4"
                                        >
                                            <img src="./assets/icons/document1.svg" alt="">
                                        </div>
                                        <div style="flex: 3">
                                            <h5>All Documents</h5>
                                            <span>1 files</span>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <a href="" target="_blank">
                                    <div class="d-flex p-3 align-items-center mr-3" style="background: rgba(0, 0, 0, 0.02); border: 1px solid rgba(0, 0, 0, 0.08); box-sizing: border-box; border-radius: 10px;">
                                        <div style="
                                            height: 70px;
                                            background: #36517E;
                                            border-radius: 10px;
                                            flex: 1;
                                        "
                                            class="d-flex align-items-center justify-content-center mr-4"
                                        >
                                            <img src="./assets/icons/document1.svg" alt="">
                                        </div>
                                        <div style="flex: 3;">
                                            <h5>Customer Account Agreement</h5>
                                            <span>20 files</span>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <a href="" target="_blank">
                                    <div class="d-flex p-3 align-items-center mr-3" style="background: rgba(0, 0, 0, 0.02); border: 1px solid rgba(0, 0, 0, 0.08); box-sizing: border-box; border-radius: 10px;">
                                        <div style="
                                            height: 70px;
                                            background: #36517E;
                                            border-radius: 10px;
                                            flex: 1;
                                        "
                                            class="d-flex align-items-center justify-content-center mr-4"
                                        >
                                            <img src="./assets/icons/document1.svg" alt="">
                                        </div>
                                        <div style="flex: 3">
                                            <h5>Customer Account Agreement</h5>
                                            <span>20 files</span>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <a href="" target="_blank">
                                    <div class="d-flex p-3 align-items-center mr-3" style="background: rgba(0, 0, 0, 0.02); border: 1px solid rgba(0, 0, 0, 0.08); box-sizing: border-box; border-radius: 10px;">
                                        <div style="
                                            height: 70px;
                                            background: #36517E;
                                            border-radius: 10px;
                                            flex: 1;
                                        "
                                            class="d-flex align-items-center justify-content-center mr-4"
                                        >
                                            <img src="./assets/icons/document1.svg" alt="">
                                        </div>
                                        <div style="flex: 3;">
                                            <h5>Passport</h5>
                                            <span>20 files</span>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <a href="" target="_blank">
                                    <div class="d-flex p-3 align-items-center mr-3" style="background: rgba(0, 0, 0, 0.02); border: 1px solid rgba(0, 0, 0, 0.08); box-sizing: border-box; border-radius: 10px;">
                                        <div style="
                                            height: 70px;
                                            background: #36517E;
                                            border-radius: 10px;
                                            flex: 1;
                                        "
                                            class="d-flex align-items-center justify-content-center mr-4"
                                        >
                                            <img src="./assets/icons/document1.svg" alt="">
                                        </div>
                                        <div style="flex: 3">
                                            <h5>Passport</h5>
                                            <span>20 files</span>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <a href="" target="_blank">
                                    <div class="d-flex p-3 align-items-center mr-3" style="background: rgba(0, 0, 0, 0.02); border: 1px solid rgba(0, 0, 0, 0.08); box-sizing: border-box; border-radius: 10px;">
                                        <div style="
                                            height: 70px;
                                            background: #36517E;
                                            border-radius: 10px;
                                            flex: 1;
                                        "
                                            class="d-flex align-items-center justify-content-center mr-4"
                                        >
                                            <img src="./assets/icons/document1.svg" alt="">
                                        </div>
                                        <div style="flex: 3;">
                                            <h5>National ID</h5>
                                            <span>20 files</span>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <a href="" target="_blank">
                                    <div class="d-flex p-3 align-items-center mr-3" style="background: rgba(0, 0, 0, 0.02); border: 1px solid rgba(0, 0, 0, 0.08); box-sizing: border-box; border-radius: 10px;">
                                        <div style="
                                            height: 70px;
                                            background: #36517E;
                                            border-radius: 10px;
                                            flex: 1;
                                        "
                                            class="d-flex align-items-center justify-content-center mr-4"
                                        >
                                            <img src="./assets/icons/document1.svg" alt="">
                                        </div>
                                        <div style="flex: 3;">
                                            <h5>National ID</h5>
                                            <span>20 files</span>
                                        </div>
                                    </div>
                                    </a>
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
                        isModalOpen: false,
                        type: '',

                    }
                }
            })

            $(document).ready(function(){
                $(document).on('click','.file-button', function() {
                    $('.file-input').click();
                });

                $(document).on('change','.file-input', function() {
                    var filenames = '';
                    for (var i = 0; i < this.files.length; i++) {
                        filenames += this.files[i].name + ', ';
                    }
                    $(".files-name").html(filenames.slice(0, -2));

                });

                dropContainer.ondragover = dropContainer.ondragenter = function(evt) {
                  evt.preventDefault();
                };

                dropContainer.ondrop = function(evt) {
                  // pretty simple -- but not for IE
                  fileInput.files = evt.dataTransfer.files;

                  // If you want to use some of the dropped files
                  const dT = new DataTransfer();
                  dT.items.add(evt.dataTransfer.files[0]);
                  // dT.items.add(evt.dataTransfer.files[3]);
                  fileInput.files = dT.files;
                  $('#fileInput').change();
                  evt.preventDefault();
                };
            })
    
        </script>

        <script src="assets/js/app.js"></script>

        

    </body>
</html>

