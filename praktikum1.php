<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>praktek 1</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script> 
        WebFont.load({ google: {"families":["Lato:300,400,700,900"]}, custom: {"families":[ "Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css'] }, active: function() {sessionStorage.fonts = true;} }); 
    </script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/atlantis.min.css">
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="assets/js/atlantis.min.js"></script>
</head>
<body>
    <div class="col-md-6 ml-auto mr-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Percobaan Panel</h4>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills nav-secondary nav-pills-no-bd" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="pill" href="#tab1" role="tab">Tomorrow War</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#tab2" role="tab">Greyhound</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#tab3" role="tab">Army Of Thieves</a> </li>
                </ul>
                <div class="tab-content mt-2 mb-3">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <p style="color: red">A family man is drafted to fight in a future war where the fate of humanity relies on his
                            ability to confront the past</p>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <p style="color: green">Several months after the U.S. entry into World War II, an inexperienced U.S. Navy
                            commander must lead an Allied convoy being stalked by a German submarine wolf pack</p>
                    </div>
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <p style="color: blue">A prequel, set before the events of Army of the Dead, which focuses on German safecracker
                            Ludwig Dieter leading a group of aspiring thieves on a top secret heist during the early stages of the
                            zombie apocalypse</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p style="width: 100%; text-align: center; margin-top: 50px;"> 
        <button type="button" class="btn btn-secondary btn-lg">
            Tombol Percobaan
        </button> 
    </p>
</body>
</html>