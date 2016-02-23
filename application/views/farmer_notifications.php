<?php require_once("includes/header.php"); ?>


    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">

            <h2>Notifications</h2>
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
                        <h5>Notifications</h5>


                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>&nbsp;</th>
                                <th>Date</th>


                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            if (!empty($notifications)) {
                                foreach ($notifications as $notification) {
                                    ?>
                                    <tr class="gradeU">
                                        <td><?php echo get_product_name_from_product_id($notification->product_id); ?></td>
                                        <td>


                                            <?php
                                            if ($notification->message == 'booking') {
                                                echo("<a href='" . base_url() . "buyer_profile/view/" . $notification->buyer_id . "'>" . get_buyer_name($notification->buyer_id) . "</a> booked your Product : " . get_product_name_from_product_id($notification->product_id));
                                            }

                                            ?>


                                        </td>
                                        <td><?php echo $notification->date; ?></td>

                                    </tr>

                                    <?php
                                }
                            } else {

                                ?>

                                <tr class="gradeU">
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
                                <th>&nbsp;</th>
                                <th>Date</th>

                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>

<?php require_once("includes/footer.php"); ?>