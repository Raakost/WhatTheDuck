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
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-9">
                                        <label for="productName">Name</label>
                                        <input id="productName" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="productPrice">Price</label>
                                        <input id="productPrice" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label style="margin-top: 4px;">Category</label>
                                        <select class="select form-control" multiple>
                                            <option>Superhero</option>
                                            <option>World leader</option>
                                            <option>Red</option>
                                            <option>Yellow</option>
                                            <option>Blue</option>
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
                                        <textarea id="productDescription" class="form-control textarea"
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

