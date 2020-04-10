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
                        </div>
                        <div class="col-md-4">
                            <img src="assets/img/trump.jpeg" class="img-thumbnail"
                                 alt="Responsive image"
                                 style="border:none; min-width: 150px; max-width: 150px; padding:25px;">
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
                    <button class="btn btn-primary" style="float: right;">Save</button>
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
                            <table id="news-table" class="table table-hover table-striped order-column">
                                <thead class="text-primary table-header">
                                <tr>
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th class="text-right"></th>
                                </tr>
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
                                        <td class="text-right" style="padding:10px; width: 130px; min-width: 130px;">
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
                    <div class="card-footer ">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function () {
            $('#news-table').DataTable();
        });
    </script>