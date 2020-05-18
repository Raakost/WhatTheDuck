<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card no-border-radius">
                <div class="card-header ">
                    <h4 class="card-title">Product</h4>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
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
                                            <input type="file" name="file">
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
                                    <th>Daily Special</th>
                                    <th>Image</th>
                                    <th class="text-right"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <form action="">
                                    <?php foreach ($tableProd as $row) {
                                        $categoryString = "";
                                        foreach ($row->categories as $category) {
                                            $categoryString = $categoryString . " " . $category->catName;
                                        }
                                        echo '
                                    <tr style="font-size: 12px;">
                                        <td style="padding: 10px;">' . $row->id . '</td>
                                        <td style="padding: 10px;">' . $row->name . '</td>
                                        <td style="padding: 10px; max-width: 200px; white-space: nowrap; text-overflow: ellipsis;  overflow: hidden;">' . $row->description . '</td>
                                        <td style="padding:10px;">' . $row->price . '</td>
                                        <td style="padding:10px;"> ' . $categoryString . ' </td>
                                        <td style="padding:10px;">' . $row->special . ' </td>
                                        <td style="padding: 10px; max-width: 50px;"><img src="../ProductImages/' . $row->image . '" style="width:50%"></td>
                                        <td class="text-right"
                                            style="padding:10px; width: 130px; min-width: 100px;">
                                            <a href="?editProduct=' . $row->id . '" style="padding: 10px; text-decoration: underline;">Edit</a>
                                            <a href="?action=DeleteProduct&id=' . $row->id . '" style="color:red; text-decoration: underline; padding: 5px 5px 5px 5px;" onClick="return confirm(\'Delete This product?\')">Delete</a>
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
<?php if ($editProduct != null) {
    $categoryOptions = "";
    foreach ($categories as $row) {
        $categoryOptions .= '<option value=' . $row["ID"] . '>' . $row["Category_name"] . '</option>';
    }
    echo '
<div class="modal" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="action" value="UpdateProduct">
                <input type="hidden" name="id" value="' . $editProduct['ID'] . '">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-9">
                                        <label for="productName">Name</label>
                                        <input id="productName" type="text" class="form-control"
                                               name="name" value="' . $editProduct['Name'] . '">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="productPrice">Price</label>
                                        <input id="productPrice" name="price" type="text" class="form-control" value="' . $editProduct['Price'] . '">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label style="margin-top: 4px;">Category</label>
                                        <select name="categories[]" class="select form-control" multiple>
                                           ' . $categoryOptions . '
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <label>Image</label>
                                        <div class="custom-file">
                                            <input type="file" name="file">
                                            <label for="file"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <label for="productDescription">Description</label>
                                        <textarea id="productDescription" name="description"
                                                  class="form-control textarea"
                                                  style="padding: 10px 10px 10px 10px; min-height: 200px;">' . $editProduct['Description'] . '</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
';
} ?>


<script>
    $(document).ready(function () {
        $('#product-table').DataTable();
        <?php if ($editProduct != null) {
        echo '$(\'#editModal\').modal(\'toggle\')';
    } ?>
    });

</script>

