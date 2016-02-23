<?php require_once("includes/header.php"); ?>





    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Manage placed orders</h2>

        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="#" data-toggle="modal" data-target="#add_orders" class="btn btn-primary">Place an order</a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content">

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>My orders</h5>


                </div>
                <div class="ibox-content">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Product name</th>
                            <th>Status</th>
                            <th>Date needed</th>
                            <th>Special requirements</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tbody>
                        <?php $count = 1; ?>
                        <?php foreach ($manage_placed_orders as $porders): ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo get_product_name($porders->product_id); ?></td>
                                <td><?php echo $porders->status; ?></td>
                                <td><?php echo $porders->date_needed; ?></td>
                                <td><?php echo $porders->special_requirements; ?></td>

                                <td data-toggle="modal"
                                    data-target="#myModal_<?php echo $porders->buyer_product_id; ?>"><i
                                        class="fa fa-wrench"></i>


                                    <div class="modal inmodal" id="myModal_<?php echo $porders->buyer_product_id; ?>"
                                         tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content animated bounceInRight">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span
                                                            aria-hidden="true">&times;</span><span
                                                            class="sr-only">Close</span></button>
                                                    <i class="fa fa-laptop modal-icon"></i>
                                                    <h4 class="modal-title">Edit orders</h4>
                                                    <small class="font-bold">Update and delete details about a
                                                        particular order.
                                                    </small>
                                                </div>

                                                <form
                                                    action="<?= base_url(); ?>manage_placed_orders/update_buyer_orders"
                                                    method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">

                                                        <div class="form-group"><input type="hidden"
                                                                                       name="buyer_product_id"
                                                                                       value="<?php echo $porders->buyer_product_id; ?>"
                                                                                       class="form-control"></div>
                                                        <div class="form-group"><label>Product name: </label>
                                                            <select name="product_type" class="form-control">
                                                                <?php foreach ($product_type as $productype): ?>

                                                                    <option
                                                                        name="product_type" <?php if ($porders->product_id == $productype->product_type_id) {
                                                                        echo "Selected";
                                                                    } ?> ><?php echo $productype->product_type; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group"><label>Status: </label> <input
                                                                type="text" name="status"
                                                                value="<?php echo $porders->status; ?>"
                                                                class="form-control"></div>
                                                        <div class="form-group"><label>Date needed: </label> <input
                                                                type="text" name="davailable"
                                                                value="<?php echo $porders->date_needed; ?>"
                                                                class="form-control"></div>
                                                        <div class="form-group"><label>Special requirements: </label>
                                                            <input type="text" name="requirements"
                                                                   value="<?php echo $porders->special_requirements; ?>"
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

                                    <a href="<?php echo(base_url() . "manage_placed_orders/delete_buyer_orders/" . $porders->buyer_product_id); ?>"><i
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


    <div class="modal inmodal" id="add_orders" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-laptop modal-icon"></i>
                    <h4 class="modal-title">Orders</h4>
                    <small class="font-bold">Add an order here.</small>
                </div>

                <form action="<?= base_url(); ?>manage_placed_orders/save_buyer_orders" method="post"
                      enctype="multipart/form-data">
                    <div class="modal-body">

                        <label>Product Name:</label>
                        <select name="product_type" class="form-control">
                            <?php foreach ($product_type as $productype): ?>
                                <option name="product_type"
                                        value="<?php echo($productype->product_type_id); ?>"> <?php echo $productype->product_type; ?> </option>
                            <?php endforeach; ?>
                        </select>

                        <div class="form-group"><label>Status: </label> <input type="text" name="status"
                                                                               placeholder="Status"
                                                                               class="form-control"></div>
                        <div class="form-group"><label>Date needed: </label> <input type="date" name="davailable"
                                                                                    placeholder="Date needed"
                                                                                    class="form-control"></div>
                        <div class="form-group"><label>Special requirements: </label> <input type="text"
                                                                                             name="requirements"
                                                                                             placeholder="Special requirements"
                                                                                             class="form-control"></div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add order</button>

                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <!--  <input type="submit" id="submit" name="dsubmit" value="Update"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php require_once("includes/footer.php"); ?>