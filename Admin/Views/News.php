<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card no-border-radius">
                <div class="card-header">
                    <h4 class="card-title">News Editor</h4>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="CreateNewsStory">
                        <div class="row">
                            <div class="col-md-8">
                                <label>Date</label>
                                <input type="date" class="form-control" name="date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title">
                                <label>Description</label>
                                <textarea name="text" class="form-control"
                                          style="min-height: 150px;"></textarea>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card no-border-radius">
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
                            <?php foreach ($news as $row) {
                                echo '
                            <tr style="font-size: 12px;">
                                <td style="padding: 10px;">' . $row['ID'] . '</td>
                                <td style="padding: 10px;">' . $row['Date'] . '</td>
                                <td style="padding: 10px;">' . $row['Title'] . '</td>
                                <td style="padding: 10px; max-width: 100px; white-space: nowrap; text-overflow: ellipsis;  overflow: hidden;">' . $row['Text'] . '</td>
                                <td style="padding: 10px; max-width: 50px;"><img class="img-hover" src="../ProductImages/' . $row['Image'] . '" style="width:25%"></td>
                                <td><a href="">Edit</a></td>
                            </tr>';
                            } ?>
                            </tbody>
                        </table>
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