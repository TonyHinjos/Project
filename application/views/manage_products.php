<?php require_once("includes/header.php"); ?>


    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Manage products</h2>

        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="#" data-toggle="modal" data-target="#add_products" class="btn btn-primary">Add Product</a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content">

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>My products</h5>


                </div>
                <div class="ibox-content">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Product name</th>
                            <th>Quantity available</th>
                            <th>Date available</th>
                            <th>Selling price</th>
                            <th>Weight</th>
                            <th>grade</th>
                            <th>Color</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tbody>
                        <?php $count = 1; ?>
                        <?php foreach ($manage_products as $fproduct): ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo get_product_name($fproduct->product_type_id); ?></td>
                                <td><?php echo $fproduct->quantity_available; ?></td>
                                <td><?php echo $fproduct->date_available; ?></td>
                                <td><?php echo $fproduct->proposed_selling_price; ?></td>
                                <td><?php echo $fproduct->weight; ?></td>
                                <td><?php echo $fproduct->grade; ?></td>
                                <td><?php echo $fproduct->color; ?></td>
                                <td><?php echo $fproduct->status; ?></td>
                                <td data-toggle="modal" data-target="#myModal_<?php echo $fproduct->product_id; ?>"><i
                                        class="fa fa-wrench"></i>


                                    <div class="modal inmodal" id="myModal_<?php echo $fproduct->product_id; ?>"
                                         tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content animated bounceInRight">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span
                                                            aria-hidden="true">&times;</span><span
                                                            class="sr-only">Close</span></button>
                                                    <i class="fa fa-laptop modal-icon"></i>
                                                    <h4 class="modal-title">Edit product</h4>
                                                    <small class="font-bold">Update and delete details about a
                                                        particular product.
                                                    </small>
                                                </div>

                                                <form action="<?= base_url(); ?>manage_products/update_farmer_products"
                                                      method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">

                                                        <div class="form-group"><input type="hidden" name="product_id"
                                                                                       value="<?php echo $fproduct->product_id; ?>"
                                                                                       class="form-control"></div>
                                                        <div class="form-group"><label>Product name: </label>
                                                            <select name="product_type" class="form-control">
                                                                <?php foreach ($product_type as $productype): ?>

                                                                    <option
                                                                        name="product_type" <?php if ($fproduct->product_type_id == $productype->product_type_id) {
                                                                        echo "Selected";
                                                                    } ?> ><?php echo $productype->product_type; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>

                                                        </div>
                                                        <div class="form-group"><label>Available quantity: </label>
                                                            <input type="text" name="qavailable"
                                                                   value="<?php echo $fproduct->quantity_available; ?>"
                                                                   class="form-control"></div>
                                                        <div class="form-group"><label>Available date: </label> <input
                                                                type="text" name="davailable"
                                                                value="<?php echo $fproduct->date_available; ?>"
                                                                class="form-control"></div>
                                                        <div class="form-group"><label>Selling_price: </label> <input
                                                                type="text" name="selling_price"
                                                                value="<?php echo $fproduct->proposed_selling_price; ?>"
                                                                class="form-control"></div>
                                                        <div class="form-group"><label>Weight: </label> <input
                                                                type="text" name="product_weight"
                                                                value="<?php echo $fproduct->weight; ?>"
                                                                class="form-control"></div>
                                                        <div class="form-group"><label>Grade: </label> <input
                                                                type="text" name="product_grade"
                                                                value="<?php echo $fproduct->grade; ?>"
                                                                class="form-control"></div>
                                                        <div class="form-group"><label>Color: </label> <input
                                                                type="text" name="product_color"
                                                                value="<?php echo $fproduct->color; ?>"
                                                                class="form-control"></div>
                                                        <div class="form-group"><label>Status: </label> <input
                                                                type="text" name="product_status"
                                                                value="<?php echo $fproduct->status; ?>"
                                                                class="form-control"></div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Save changes
                                                        </button>

                                                        <button type="button" class="btn btn-white"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <!--  <input type="submit" id="submit" name="dsubmit" value="Update"> -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>

                                    <a href="<?php echo(base_url() . "manage_products/delete_farmer_products/" . $fproduct->product_id); ?>"><i
                                            class="fa fa-trash"></i></a>

                                </td>
                            </tr>
                            <?php $count++; endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


    <div class="modal inmodal" id="add_products" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-laptop modal-icon"></i>
                    <h4 class="modal-title">Product</h4>
                    <small class="font-bold">Add a product here.</small>
                </div>

                <form action="<?= base_url(); ?>manage_products/save_farmer_products" method="post" id="form"
                      name="Pendingshipment" onsubmit="return validatePendingshipment()" enctype="multipart/form-data"
                      autocomplete="on">
                    <div class="modal-body">
                        <label>Product Name:</label>
                        <select name="product_type" class="form-control">
                            <?php foreach ($product_type as $productype): ?>
                                <option name="product_type"
                                        value="<?php echo($productype->product_type_id); ?>"> <?php echo $productype->product_type; ?> </option>
                            <?php endforeach; ?>
                        </select>

                        <!--<div class="form-group"><label>Product name: </label> <input type="text" name="product_name" placeholder="Product name"  class="form-control"></div>-->
                        <div class="form-group"><label>Available quantity: </label> <input type="text" name="qavailable"
                                                                                           placeholder="Available quantity"
                                                                                           class="form-control"></div>
                        <div class="form-group"><label>Available date: </label> <input type="date" name="davailable"
                                                                                       placeholder="Available date"
                                                                                       class="form-control"></div>
                        <div class="form-group"><label>Selling_price: </label> <input type="text" name="selling_price"
                                                                                      placeholder="Selling price"
                                                                                      class="form-control"></div>
                        <div class="form-group"><label>Weight: </label> <input type="text" name="product_weight"
                                                                               placeholder="Weight"
                                                                               class="form-control"></div>
                        <div class="form-group"><label>Grade: </label> <input type="text" name="product_grade"
                                                                              placeholder="Grade" class="form-control">
                        </div>
                        <div class="form-group"><label>Color: </label> <input type="text" name="product_color"
                                                                              placeholder="Color" class="form-control">
                        </div>
                        <div class="form-group"><label>Status: </label> <input type="text" name="product_status"
                                                                               placeholder="Status"
                                                                               class="form-control"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add product</button>

                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <!--  <input type="submit" id="submit" name="dsubmit" value="Update"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php require_once("includes/footer.php"); ?>