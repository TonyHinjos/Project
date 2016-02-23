<?php require_once("includes/header.php"); ?>


    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Supply bids</h2>
            <!--<ol class="breadcrumb">
                <li>
                    <a href="index.html">This is</a>
                </li>
                <li class="active">
                    <strong>Breadcrumb</strong>
                </li>
            </ol>-->
        </div>
        <div class="col-sm-8">
            <!--<div class="title-action">
                <a href="" class="btn btn-primary">This is action area</a>
            </div>-->
        </div>
    </div>

    <div class="wrapper wrapper-content">


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Click on the order name to view it in detail.</h5>

                        <div class="ibox-tools">


                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>status</th>
                                <th>Date needed</th>
                                <th>special requirements</th>
                                <th>Cancel</th>


                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            if (!empty($orders)) {
                                foreach ($orders as $order) {
                                    ?>
                                    <tr class="gradeU">
                                        <td><?php echo get_product_name($order->product_id); ?></td>
                                        <td><?php echo $order->status; ?></td>
                                        <td><?php echo $order->date_needed; ?></td>
                                        <td><?php echo $order->special_requirements; ?></td>

                                        <td>


                                            <a href="<?php echo(base_url()) ?>bookings/farmer_cancel_booking/<?php echo $order->buyer_product_id; ?>">
                                                <button class="btn btn-sm btn-success">Cancel</button>
                                            </a>


                                        </td>
                                    </tr>

                                    <?php
                                }
                            } else {

                                ?>

                                <tr class="gradeU">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                </tr>

                                <?php
                            }
                            ?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Product</th>
                                <th>status</th>
                                <th>Date needed</th>
                                <th>special requirements</th>
                                <th>Cancel</th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>

<?php require_once("includes/footer.php"); ?>