<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card no-border-radius">
                <div class="card-header">
                    <h4 class="card-title">Order Overview</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="order-table" class="table table-hover table-striped order-column">
                            <thead class="text-primary table-header">
                            <tr>
                                <th>Id</th>
                                <th>Order Date</th>
                                <th>Shipping Date</th>
                                <th>Customer</th>
                                <th>Zipcode</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th class="text-right"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($orders as $item) {
                                echo '
                                  <tr style="font-size: 12px;">
                                    <td style="padding: 10px;">' . $item['ID'] . '</td>
                                    <td>' . $item['Orderdate'] . '</td>
                                    <td>' . $item['Shippingdate'] . '</td>
                                    <td style="padding: 10px;">' . $item['Firstname'] . " " . $item['Lastname'] . '</td>
                                    <td>' . $item['Zipcode'] . '</td>
                                    <td style="padding: 10px;">
                                      <form method="post" action="">
                                        <input type="hidden" name="action" value="ShipOrder"/>
                                        <input type="hidden" name="orderId" value="' . $item['ID'] . '"/>
                                        <select ' . ($item['Shippingdate'] == null ? '' : 'disabled="disabled"') . ' class="select changeShippingStatus">
                                            <option>Placed</option>
                                            <option ' . ($item['Shippingdate'] == null ? '' : 'selected="selected"') . '>Shipped</option>
                                        </select>
                                      </form>
                                    </td>
                                    <td style="padding:10px;">' . $item['TotalPrice'] . ' DKK</td>
                                    <td class="text-right">
                                        <a href="#">
                                            <p style="text-decoration: underline;">
                                                Details</p>
                                        </a>
                                    </td>
                                </tr>
                                 ';
                            } ?>

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
        $('#order-table').DataTable({});

        $('#order-table').on('change', '.changeShippingStatus', (e) => {
            $(e.target).closest('form').submit();
        });
    });
</script>