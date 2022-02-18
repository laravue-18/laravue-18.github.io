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
                                <img src="./assets/icons/card-title.svg" alt=""> ACCOUNT AGREEMENT
                            </h4>

                            <div class="row mt-5">
                                <div class="col-xl-7 col-lg-9 col-11">
                                    <div class="row mb-4">
                                        <label class="col-4 col-form-label">Name</label>
                                        <div class="col-7">
                                            <input type="text" name="" id="" class="form-control etc-bg-gray" value="Sam Smith">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-12 col-form-label">Customer Account Agreement</label>
                                        <div class="col-11">
                                            <div class="p-2 etc-bg-gray" style="border: 1px solid rgba(0, 0, 0, 0.16);">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut purus ligula. Mauris ut felis augue. Curabitur molestie felis vitae vestibulum fermentum. Suspendisse gravida luctus nisi, at dictum augue interdum et. Nunc semper lobortis enim, sit amet dignissim magna rhoncus at. Proin in rhoncus neque. Ut quis tempus erat. Donec id felis odio. Quisque porta urna neque, in pellentesque dui vulputate ut. Nam posuere tincidunt augue sit amet dignissim. Donec rutrum tellus a consectetur mattis. Sed sollicitudin lacus nec purus consequat pharetra a eu velit. Cras et cursus lorem, non maximus dui. Ut ultrices eleifend sagittis. Nam sodales est quis dolor fermentum, vel consequat velit volutpat.
                                                </p>
                                                <p>
                                                    Nunc in malesuada massa, in luctus justo. Maecenas sit amet erat in augue pulvinar volutpat non et turpis. Maecenas lacus felis, facilisis sit amet tellus ut, iaculis auctor nibh. Suspendisse imperdiet dapibus suscipit. Ut vulputate neque enim, at vehicula magna tristique eget. Vestibulum enim metus, tristique eget commodo a, pellentesque sit amet tellus. Nam a viverra eros. Maecenas viverra interdum purus, eu volutpat purus pellentesque fermentum. Donec ac pharetra nunc. Nullam ornare cursus molestie. Suspendisse sed risus sed arcu lacinia rhoncus eget ac felis. Praesent gravida leo nec elementum elementum. Donec elementum sed libero nec ultrices. Cras quis tellus urna.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-11">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                <label class="form-check-label" for="inlineFormCheck">
                                                    I agree <a href="#" class="etc-text-light"><u>the terms and conditions</u> </a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-11">
                                            <div class="d-md-flex justify-content-between">
                                                <label class="col-form-label">Signature</label>

                                                <canvas id="sig-canvas" height="90" class="bg-gray" style="border: 1px solid rgba(0, 0, 0, 0.16); cursor: crosshair;">
                                                    Get a better browser, bro.
                                                </canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-1 d-flex align-items-end">
                                            <button id="sig-clearBtn" class="btn font-size-8 font-weight-bold" style="background: rgba(0, 0, 0, 0.08);">CLEAR</button>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-4 col-form-label"></label>
                                        <div class="col-7">
                                            <button type="button" class="btn etc-btn-1 btn-block waves-effect waves-light mb-1 font-size-14 font-weight-bold">SUBMIT</button>
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

        <script>
            (function() {
                window.requestAnimFrame = (function(callback) {
                    return window.requestAnimationFrame ||
                    window.webkitRequestAnimationFrame ||
                    window.mozRequestAnimationFrame ||
                    window.oRequestAnimationFrame ||
                    window.msRequestAnimaitonFrame ||
                    function(callback) {
                        window.setTimeout(callback, 1000 / 60);
                    };
                })();

                var canvas = document.getElementById("sig-canvas");
                var ctx = canvas.getContext("2d");
                ctx.strokeStyle = "#222222";
                ctx.lineWidth = 4;

                var drawing = false;
                var mousePos = {
                    x: 0,
                    y: 0
                };
                var lastPos = mousePos;

                canvas.addEventListener("mousedown", function(e) {
                    drawing = true;
                    lastPos = getMousePos(canvas, e);
                }, false);

                canvas.addEventListener("mouseup", function(e) {
                    drawing = false;
                }, false);

                canvas.addEventListener("mousemove", function(e) {
                    mousePos = getMousePos(canvas, e);
                }, false);

                // Add touch event support for mobile
                canvas.addEventListener("touchstart", function(e) {

                }, false);

                canvas.addEventListener("touchmove", function(e) {
                    var touch = e.touches[0];
                    var me = new MouseEvent("mousemove", {
                    clientX: touch.clientX,
                    clientY: touch.clientY
                    });
                    canvas.dispatchEvent(me);
                }, false);

                canvas.addEventListener("touchstart", function(e) {
                    mousePos = getTouchPos(canvas, e);
                    var touch = e.touches[0];
                    var me = new MouseEvent("mousedown", {
                    clientX: touch.clientX,
                    clientY: touch.clientY
                    });
                    canvas.dispatchEvent(me);
                }, false);

                canvas.addEventListener("touchend", function(e) {
                    var me = new MouseEvent("mouseup", {});
                    canvas.dispatchEvent(me);
                }, false);

                function getMousePos(canvasDom, mouseEvent) {
                    var rect = canvasDom.getBoundingClientRect();
                    return {
                    x: mouseEvent.clientX - rect.left,
                    y: mouseEvent.clientY - rect.top
                    }
                }

                function getTouchPos(canvasDom, touchEvent) {
                    var rect = canvasDom.getBoundingClientRect();
                    return {
                    x: touchEvent.touches[0].clientX - rect.left,
                    y: touchEvent.touches[0].clientY - rect.top
                    }
                }

                function renderCanvas() {
                    if (drawing) {
                    ctx.moveTo(lastPos.x, lastPos.y);
                    ctx.lineTo(mousePos.x, mousePos.y);
                    ctx.stroke();
                    lastPos = mousePos;
                    }
                }

                // Prevent scrolling when touching the canvas
                document.body.addEventListener("touchstart", function(e) {
                    if (e.target == canvas) {
                    e.preventDefault();
                    }
                }, false);
                document.body.addEventListener("touchend", function(e) {
                    if (e.target == canvas) {
                    e.preventDefault();
                    }
                }, false);
                document.body.addEventListener("touchmove", function(e) {
                    if (e.target == canvas) {
                    e.preventDefault();
                    }
                }, false);

                (function drawLoop() {
                    requestAnimFrame(drawLoop);
                    renderCanvas();
                })();

                function clearCanvas() {
                    canvas.width = canvas.width;
                }

                // Set up the UI
                var sigText = document.getElementById("sig-dataUrl");
                var sigImage = document.getElementById("sig-image");
                var clearBtn = document.getElementById("sig-clearBtn");
                var submitBtn = document.getElementById("sig-submitBtn");
                clearBtn.addEventListener("click", function(e) {
                    clearCanvas();
                    // sigText.innerHTML = "Data URL for your signature will go here!";
                    // sigImage.setAttribute("src", "");
                }, false);
                // submitBtn.addEventListener("click", function(e) {
                //     var dataUrl = canvas.toDataURL();
                //     sigText.innerHTML = dataUrl;
                //     sigImage.setAttribute("src", dataUrl);
                // }, false);

            })();
        </script>

        <script src="assets/js/app.js"></script>

    </body>
</html>

