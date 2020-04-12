<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card no-border-radius">
                <div class="card-header ">
                    <h5 class="card-title">New Product</h5>
                </div>
                <div class="card-body">
                    <form method="post">
                        <input type="hidden" name="action" value="CreateProduct">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-9">
                                        <label for="productName">Name</label>
                                        <input id="productName" type="text" class="form-control"
                                               name="name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="productPrice">Price</label>
                                        <input id="productPrice" name="price" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label style="margin-top: 4px;">Category</label>
                                        <select name="categories[]" class="select form-control" multiple>
                                            <?php foreach ($categories as $row) {
                                                echo '<option value=' . $row["ID"] . '>' . $row["Category_name"] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <label>Image</label>
                                        <div class="custom-file">
                                            <input type="file" name="image">
                                            <label for="file"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <label for="productDescription">Description</label>
                                        <textarea id="productDescription" name="description"
                                                  class="form-control textarea"
                                                  style="padding: 10px 10px 10px 10px; min-height: 200px;"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-background-color" style="float: right;">Save</button>
                            </div>
                        </div>
                    </form>
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
                            <table id="product-table" class="table table-hover table-striped order-column">
                                <thead class="text-primary table-header">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th class="text-right"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <form action="">
                                    <?php foreach ($products as $row) {
                                        echo '
                                    <tr>
                                        <td style="padding: 10px;">' . $row["ID"] . '</td>
                                        <td style="padding: 10px;">' . $row["Name"] . '</td>
                                        <td style="padding: 10px; max-width: 200px;">' . $row["Description"] . '</td>
                                        <td style="padding:10px;">' . $row["Price"] . '</td>
                                        <td style="padding:10px;">' . $row["Category_name"] . '</td>
                                        <td style="padding:10px;">' . $row["Image"] . '</td>
                                        <td class="text-right"
                                            style="padding:10px; width: 130px; min-width: 130px;">
                                            <a href=""
                                               style="color: darkorange; text-decoration: underline; padding: 10px">Edit</a>
                                            <a href=""
                                               style="color:red; text-decoration: underline; padding: 5px 5px 5px 5px;">Delete</a>
                                        </td>
                                    </tr>';
                                    } ?>
                                </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#product-table').DataTable();
    });
</script>

