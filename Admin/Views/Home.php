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
                            <input type="text" class="form-control" id="contactEmail"
                                   value="<?php echo $companyInfo["Email"]; ?>">

                            <label for="contactPhone">Phone</label>
                            <input type="text" class="form-control" id="contactPhone"
                                   value="<?php echo $companyInfo["Phone"]; ?>">

                            <label for="contactAddress">Address</label>
                            <input type="text" class="form-control" id="contactAddress"
                                   value="<?php echo $companyInfo["Street"]; ?>">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="contactZipcode">Zipcode</label>
                                    <input type="text" class="form-control" id="contactZipcode"
                                           value="<?php echo $companyInfo["Zipcode"]; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="contactCity">City</label>
                                    <input type="text" class="form-control" id="contactCity"
                                           value="<?php echo $companyInfo["City"]; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-header" style="padding-left:0;">
                                <h5 class="card-title ">Opening Hours</h5>
                            </div>
                            <?php foreach ($businessHours as $row) {
                                echo '<div class="row">
                                <div class="col-md-6">
                                    <label>' . $row["Weekday"] . '</label>
                                    <input type="time" class="time form-control"
                                           style="height: 32px; min-width: 83px;" value=' . $row["Open_at"] . '>
                                </div>
                                <div class="col-md-6">
                                    <input type="time" class="time form-control"
                                           style="height: 32px; margin-top:25px;min-width: 83px;" value="' . $row["Close_at"] . '">
                                </div>
                            </div>';
                            } ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-header ">
                                <h5>Company Description</h5>
                            </div>
                            <div class="card-body">
                                        <textarea id="companyDescription"
                                                  class="form-control"
                                                  style="min-height: 150px;"><?php echo $companyInfo["Description"]; ?>
                                        </textarea>
                                <button class="btn btn-primary" style="float: right;">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // Time Picker Initialization
    $(document).ready(function () {
        $('.time').pickatime({});
    });
</script>