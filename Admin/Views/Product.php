<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Product Editor</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet"/>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
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
                        <div class="card-header ">
                            <h5 class="card-title">New Product</h5>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label for="productName">Name</label>
                                                <input id="productName" type="text" class="form-control">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="productPrice">Price</label>
                                                <input id="productPrice" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <label style="margin-top: 4px;">Category</label>
                                                <div class="form-group" style="margin-bottom: 5px;">
                                                    <select class="selectpicker form-control default-btn" multiple>
                                                        <option>Superhero</option>
                                                        <option>World leader</option>
                                                        <option>Red</option>
                                                        <option>Yellow</option>
                                                        <option>Blue</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label>Image</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="file">
                                                    <label class="custom-file-label" for="file"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label for="productDescription">Description</label>
                                                <textarea id="productDescription" class="form-control textarea"
                                                          style="padding: 10px 10px 10px 10px; min-height: 200px;"></textarea>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-background-color">Save</button>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="../assets/img/trump.jpeg" class="img-thumbnail"
                                             alt="Responsive image"
                                             style="border:none; max-width: 200px; padding:25px;">
                                    </div>
                                </div>
                            </form>
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
                            <h5 class="card-title">Product List</h5>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12" style="padding:0">
                                <div class="table-responsive">
                                    <table id="product-table" class="table table-hover">
                                        <thead class="text-primary table-header">
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th class="text-right"></th>
                                        </thead>
                                        <tbody>
                                        <form action="">
                                            <tr>
                                                <td style="padding: 10px;">1000</td>
                                                <td style="padding: 10px;">Trump Duck</td>
                                                <td style="padding: 10px; max-width: 200px;">
                                                    Make America great again with this awesome Trump
                                                    duck! Make America great again with this awesome
                                                    Trump duck! Make America great again with this awesome Trump
                                                    duck! Make America great again with this awesome
                                                    Trump duck!
                                                </td>
                                                <td style="padding:10px;">39 dkk</td>
                                                <td style="padding:10px;">
                                                    America, Worldleader
                                                </td>
                                                <td style="padding:10px;">
                                                    trump.jpeg
                                                </td>
                                                <td class="text-right"
                                                    style="padding:10px; width: 130px; min-width: 130px;">
                                                    <a href=""
                                                       style="color: darkorange; text-decoration: underline; padding: 10px">Edit</a>
                                                    <a href=""
                                                       style="color:red; text-decoration: underline; padding: 5px 5px 5px 5px;">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px;">1000</td>
                                                <td style="padding: 10px;">Trump Duck</td>
                                                <td style="padding: 10px; max-width: 200px;">
                                                    Make America great again with this awesome Trump
                                                    duck! Make America great again with this awesome
                                                    Trump duck! Make America great again with this awesome Trump
                                                    duck! Make America great again with this awesome
                                                    Trump duck!
                                                </td>
                                                <td style="padding:10px;">39 dkk</td>
                                                <td style="padding:10px;">
                                                    America, Worldleader
                                                </td>
                                                <td style="padding:10px;">
                                                    trump.jpeg
                                                </td>
                                                <td class="text-right"
                                                    style="padding:10px; width: 130px; min-width: 130px;">
                                                    <a href=""
                                                       style="color: darkorange; text-decoration: underline; padding: 10px">Edit</a>
                                                    <a href=""
                                                       style="color:red; text-decoration: underline; padding: 5px 5px 5px 5px;">Delete</a>
                                                </td>
                                            </tr>
                                        </form>
                                        </tbody>
                                    </table>
                                </div>
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
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
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
    $(document).ready(function () {
        $('#product-table').DataTable();
    });
</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
</body>

</html>
