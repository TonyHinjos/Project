<?php require_once("includes/header.php"); ?>


    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Products</h2>
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
                        <h5>Click on the product name to view it in detail.</h5>

                        <div class="ibox-tools">


                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity available</th>
                                <th>Date available</th>
                                <th>Selling price</th>
                                <th>Grade</th>
                                <th>Weight</th>
                                <th>Color</th>
                                <th>Book</th>


                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            if (!empty($products)) {
                                foreach ($products as $product) {
                                    ?>
                                    <tr class="gradeU">
                                        <td><?php echo get_product_name($product->product_type_id); ?></td>
                                        <td><?php echo $product->quantity_available; ?></td>
                                        <td><?php echo $product->date_available; ?></td>
                                        <td><?php echo $product->proposed_selling_price; ?></td>
                                        <td><?php echo $product->grade; ?></td>
                                        <td><?php echo $product->weight; ?></td>
                                        <td><?php echo $product->color; ?></td>
                                        <td>

                                            <?php
                                            if (check_if_product_is_booked($product->product_id, $this->session->userdata('user_id')) == true) {
                                                echo('<span class="badge-primary badge">Booked</span>');
                                            } else {
                                                ?>

                                                <a href="<?php echo(base_url()) ?>bookings/buyer_booking/<?php echo $product->product_id; ?>">
                                                    <button class="btn btn-sm btn-success">Book</button>
                                                </a>


                                                <?php
                                            }
                                            ?>
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
                                <th>Quantity available</th>
                                <th>Date available</th>
                                <th>Selling price</th>
                                <th>Grade</th>
                                <th>Weight</th>
                                <th>Color</th>
                                <th>Book</th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>

<?php require_once("includes/footer.php"); ?>