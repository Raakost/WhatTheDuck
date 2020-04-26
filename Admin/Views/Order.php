<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card no-border-radius">
                <div class="card-header">
                    <h4 class="card-title">Order Overeview</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="order-table" class="table table-hover table-striped order-column">
                            <thead class="text-primary table-header">
                            <tr>
                                <th>Id</th>
                                <th>Date</th>
                                <th>Customer</th>
                                <th>Zipcode</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th class="text-right"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <form action="">
                                <tr style="font-size: 12px;">
                                    <td style="padding: 10px;">514</td>
                                    <td>15:37 - 14.03.2020</td>
                                    <td style="padding: 10px;">Charles Bronson</td>
                                    <td>8600</td>
                                    <td style="padding: 10px;">
                                        <select class="select">
                                            <option>Placed</option>
                                            <option>Shipped</option>
                                        </select>
                                    </td>
                                    <td style="padding:10px;">299 dkk</td>
                                    <td class="text-right">
                                        <a href="OrderDetails.php">
                                            <p style="text-decoration: underline;">
                                                Details</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr style="font-size: 12px;">
                                    <td style="padding: 10px;">420</td>
                                    <td>15:37 - 14.03.2020</td>
                                    <td style="padding: 10px;">Charlie Brown</td>
                                    <td>4200</td>
                                    <td style="padding: 10px;">
                                        <select class="select">
                                            <option>Placed</option>
                                            <option>Shipped</option>
                                    </td>
                                    <td style="padding:10px;">299 dkk</td>
                                    <td class="text-right">
                                        <a href="OrderDetails.php">
                                            <p style="text-decoration: underline;">
                                                Details</p>
                                        </a>
                                    </td>
                                </tr>
                            </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#order-table').DataTable({

        });
    });
</script>