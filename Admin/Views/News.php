<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>News</title>
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
                        <div class="card-header">
                            <h4 class="card-title">News</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Title</label>
                                    <input type="text" class="form-control" id="newsTitle">
                                    <label>Description</label>
                                    <textarea id="newsDescription" class="form-control"
                                              style="min-height: 150px;"></textarea>
                                    <label>Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file">
                                        <label class="custom-file-label" for="file"></label>
                                    </div>
                                    <button class="btn btn-primary">Save</button>
                                </div>
                                <div class="col-md-4">
                                    <img src="../assets/img/trump.jpeg" class="img-thumbnail"
                                         alt="Responsive image" style="border:none; max-width: 200px; padding:25px;">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card no-border-radius">
                        <div class="card-header">
                            <h4 class="card-title">News List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="order-table" class="table table-hover">
                                    <thead class="text-primary table-header">
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th class="text-right"></th>
                                    </thead>
                                    <tbody>
                                    <form action="">
                                        <tr>
                                            <td style="padding: 10px;">420</td>
                                            <td>15:37 - 14.03.2020</td>
                                            <td style="padding: 10px;">Huge ducks!</td>
                                            <td style="padding: 10px; max-width: 200px;">Some exciting news text, Some
                                                exciting news text, Some exciting news
                                                text, Some exciting news text, Some exciting news text, Some exciting
                                                news text, Some exciting news text,
                                            </td>
                                            <td style="padding: 10px;">
                                            </td>
                                            <td class="text-right"
                                                style="padding:10px; width: 130px; min-width: 130px;"><a href=""
                                                                                                         style="color: darkorange; text-decoration: underline; padding: 10px">Edit</a><a
                                                    href=""
                                                    style="color:red; text-decoration: underline; padding: 5px 5px 5px 5px;">Delete</a>
                                            </td>
                                        </tr>
                                    </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer ">
                        </div>
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
