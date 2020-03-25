<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>General Info</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet"/>
</head>

<body class="">
<div class="wrapper ">
    <?php include("PartialViews/SideMenu.php"); ?>
    <div class="main-panel">
        <?php include("PartialViews/Navbar.php"); ?>
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card no-border-radius">
                        <form action="">
                            <div class="row col-md-12">
                                <div class="col-md-7">
                                    <div class="card-header" style="padding-left:0;">
                                        <h5 class="card-title">Contact Info</h5>
                                    </div>
                                    <label for="contactEmail">Email</label>
                                    <input type="text" class="form-control" id="contactEmail">

                                    <label for="contactPhone">Phone</label>
                                    <input type="text" class="form-control" id="contactPhone">

                                    <label for="contactAddress">Address</label>
                                    <input type="text" class="form-control" id="contactAddress">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="contactZipcode">Zipcode</label>
                                            <input type="text" class="form-control" id="contactZipcode">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="contactCity">City</label>
                                            <input type="text" class="form-control" id="contactCity">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-header" style="padding-left:0;">
                                        <h5 class="card-title ">Opening Hours</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Monday</label>
                                            <input type="time" id="timeFrom" class="form-control"
                                                   style="height: 32px; min-width: 83px;">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" id="timeTo" class="form-control"
                                                   style="height: 32px; margin-top:25px;min-width: 83px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Tuesday</label>
                                            <input type="time" id="timeFrom" class="form-control"
                                                   style="height: 32px; min-width: 83px;">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" id="timeTo" class="form-control"
                                                   style="height: 32px; margin-top: 25px;min-width: 83px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Wednesday</label>
                                            <input type="time" id="timeFrom" class="form-control"
                                                   style="height: 32px; min-width: 83px;">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" id="timeTo" class="form-control"
                                                   style="height: 32px; margin-top: 25px;min-width: 83px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Thursday</label>
                                            <input type="time" id="timeFrom" class="form-control"
                                                   style="height: 32px; min-width: 83px;">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" id="timeTo" class="form-control"
                                                   style="height: 32px; margin-top: 25px;min-width: 83px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Friday</label>
                                            <input type="time" id="timeFrom" class="form-control"
                                                   style="height: 32px; min-width: 83px;">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" id="timeTo" class="form-control"
                                                   style="height: 32px; margin-top: 25px;min-width: 83px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Saturday</label>
                                            <input type="time" id="timeFrom" class="form-control"
                                                   style="height: 32px; min-width: 83px;">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" id="timeTo" class="form-control"
                                                   style="height: 32px; margin-top: 25px;min-width: 83px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Sunday</label>
                                            <input type="time" id="timeFrom" class="form-control"
                                                   style="height: 32px; min-width: 83px;">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" id="timeTo" class="form-control"
                                                   style="height: 32px; margin-top: 25px;min-width: 83px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-header ">
                                        <h5 class="card-title">Company Description</h5>
                                    </div>
                                    <div class="card-body ">
                                        <textarea id="companyDescription" class="form-control"
                                                  style="min-height: 150px;"></textarea>
                                        <button class="btn btn-primary">Save</button>
                                    </div>
                                    <div class="card-footer ">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include("PartialViews/Footer.php"); ?>
    </div>
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
</body>

</html>
