<?php
include 'includes/connect.php';
include 'includes/header.php';
include 'includes/top-left-nav.php'
?>

<span style="float:right">

    <a href="parking-details.php" class="btn btn-primary"> <i class="fas fa-home"></i>Park Vehicle </a>

</span><br><br>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">DAILY PARKINGS OVERVIEW</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Customer Name</th>
                        <th>Vehicle Brand </th>
                        <th>Number Plate.</th>
                        <th>Color</th>
                        <th>Parking Lot</th>
                        <th>Parking Space</th>
                        <th>Phone</th>
                        <th>Service Provider</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <?php
                $my_data = "SELECT * FROM parking_details  JOIN customers ON parking_details.id = customers.id 
                JOIN brands ON customers.id= brands.id JOIN parking_lots ON brands.id = parking_lots.id JOIN parking_spaces ON parking_lots.id = parking_spaces.id JOIN staffs ON  parking_spaces.id = staffs.id 
                ";
                $parkresult = mysqli_query($conn, $my_data);
                $i = 0;
                foreach ($parkresult as $view_customer) {

                    $i++;
                ?>
                    <tr>
                        <td><?= $i ?> </td>
                        <td><?= $view_customer['full_name'] ?> </td>
                        <td><?= $view_customer['vehicle_brand'] ?> </td>
                        <td><?= $view_customer['number_plate'] ?> </td>
                        <td><?= $view_customer['color'] ?> </td>
                        <td><?= $view_customer['parking_lot'] ?> </td>
                        <td><?= $view_customer['parking_space'] ?> </td>
                        <td><?= $view_customer['phone'] ?> </td>
                        <td><?= $view_customer['name'] ?> </td>

                        <td>

                            <a href="javascript:void()" data-toggle="modal" data-target="#edit<?= $view_customer['id'] ?>" class="btn btn-primary"><i class="fas fa-pencil-square-o"></i> Edit</a>
                            <a href="javascript:void()" data-toggle="modal" data-target="#delete<?= $view_customer['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>

                    <!-- DELETE  -->

                    <div class="modal fade none-border" id="delete<?= $view_customer['id'] ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">DELETE CUSTOMER: <?= $view_customer['full_name'] ?></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <form action="includes/delete-customer.php" method="POST">
                                    <div class="modal-body">
                                        <p style="color: red;"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> IF you click <b>YES</b>,the information of <?= $view_customer['full_name'] ?> Won't appear again</p>

                                        <input id="" name="full_name" value="<?= $view_customer['id'] ?>" type="hidden" class="form-control" required>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="delete" class="btn btn-danger ">Yes</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--------edit------>

                    <div class="modal fade none-border" id="edit<?= $view_customer['id'] ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit the Parking Information of<b style="color:blue"> <?= $view_customer['full_name'] ?></b></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>

                                <form action="includes/edit-customer.php" method="POST">
                                    <div class=" container-fluid">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Customer Name <span class="text-danger">*</span></label>
                                                    <input id="" name="fullname" value="<?= $view_customer['full_name'] ?>" type="text" class="form-control" required>
                                                    <input id="" name="updatecustomer" value="<?= $view_customer['id'] ?>" type="hidden" class="form-control" required>

                                                    <label for="">Vehicle Brand <span class="text-danger">*</span></label>
                                                    <input id="" name="vehicle_brand" value="<?= $view_customer['vehicle_brand'] ?>" type="text" class="form-control" required>
                                                    <input id="" name="updatecustomer" value="<?= $view_customer['id'] ?>" type="hidden" class="form-control" required>

                                                    <label for="">Number Plate <span class="text-danger">*</span></label>
                                                    <input id="" name="number_plate" value="<?= $view_customer['number_plate'] ?>" type="text" class="form-control" required>
                                                    <input id="" name="updatecustomer" value="<?= $view_customer['id'] ?>" type="hidden" class="form-control" required>

                                                    <label for="">Color <span class="text-danger">*</span></label>
                                                    <input id="" name="color" value="<?= $view_customer['color'] ?>" type="text" class="form-control" required>
                                                    <input id="" name="updatecustomer" value="<?= $view_customer['id'] ?>" type="hidden" class="form-control" required>

                                                </div>

                                                <div class="col-md-6">
                                                    <label for="">Parking Lot<span class="text-danger">*</span></label>
                                                    <input id="" name="parking_lot" value="<?= $view_customer['parking_lot'] ?>" type="text" class="required form-control" required>
                                                    <input id="" name="updatecustomer" value="<?= $view_customer['id'] ?>" type="hidden" class="form-control" required>

                                                    <label for="">Parking Space <span class="text-danger">*</span></label>
                                                    <input id="" name="parking_space" value="<?= $view_customer['parking_space'] ?>" type="text" class="form-control" required>
                                                    <input id="" name="updatecustomer" value="<?= $view_customer['id'] ?>" type="hidden" class="form-control" required>

                                                    <label for="">Phone <span class="text-danger">*</span></label>
                                                    <input id="" name="phone" value="<?= $view_customer['phone'] ?>" type="text" class="form-control" required>
                                                    <input id="" name="updatecustomer" value="<?= $view_customer['id'] ?>" type="hidden" class="form-control" required>


                                                    <label for="">Service Provider<span class="text-danger">*</span></label>
                                                    <input id="" name="name" value="<?= $view_customer['name'] ?>" type="text" class="required form-control" required>
                                                    <input id="" name="updatecustomer" value="<?= $view_customer['id'] ?>" type="hidden" class="form-control" required>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="update" class="btn btn-secondary">Save</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                <?php } ?>

            </table>


        </div>


    </div>

</div>

<?php include 'includes/footer.php' ?>