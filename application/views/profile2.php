<?php require_once("includes/header.php"); ?>


    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Buyer profile</h2>
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

        <?php


        if (!empty($user)) {
            ?>

            <div class="row">
                <div class="col-lg-6">

                    <form class="m-t" role="form" method="post"
                          action="<?php echo base_url(); ?>profile2/buyer_edit_account">
                        <div class="form-group">
                            <label class=" control-label">Full name</label>
                            <input type="text" name="customer_name" value="<?php echo($user->customer_name); ?>"
                                   class="form-control" placeholder="First Name" required="">
                        </div>

                        <div class="form-group">
                            <label class=" control-label">Telephone number</label>
                            <input type="tel" name="telephone_number" value="<?php echo($user->telephone_number); ?>"
                                   class="form-control" placeholder="Telephone number" required="">
                        </div>
                        <div class="form-group">
                            <label class=" control-label">Nearest market centre</label>
                            <input type="text" name="nearest_market_centre"
                                   value="<?php echo($user->nearest_market_center); ?>" class="form-control"
                                   placeholder="Nearest market centre" required="">
                        </div>

                        <div class="form-group">
                            <label class=" control-label">Email address</label>
                            <input type="email" name="email_address" value="<?php echo($user->email_address); ?>"
                                   class="form-control" placeholder="Email" required="">
                        </div>

                        <div class="form-group">
                            <label class=" control-label">Password</label>
                            <input type="password" value="original" class="form-control" placeholder="Password"
                                   required="">
                        </div>
                </div>
                <div class="col-lg-6">


                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                    <script type="text/javascript">
                        var geocoder = new google.maps.Geocoder();

                        function geocodePosition(pos) {
                            geocoder.geocode({
                                latLng: pos
                            }, function (responses) {
                                if (responses && responses.length > 0) {
                                    updateMarkerAddress(responses[0].formatted_address);
                                } else {
                                    updateMarkerAddress('Cannot determine address at this location.');
                                }
                            });
                        }

                        function updateMarkerStatus(str) {
                            // document.getElementById('markerStatus').innerHTML = str;
                        }

                        function updateMarkerPosition(latLng) {
                            /* document.getElementById('info').innerHTML = [
                             latLng.lat(),
                             latLng.lng()
                             ].join(', ');*/
                            document.getElementById('longitude').value = latLng.lng();
                            document.getElementById('latitude').value = latLng.lat();
                        }

                        function updateMarkerAddress(str) {
                            // document.getElementById('address').innerHTML = str;
                        }

                        function initialize() {
                            var latLng = new google.maps.LatLng(<?php if(!empty($user->latitude)){echo($user->latitude);}else{ echo(-2.0);} ?>, <?php if(!empty($user->longitude)){echo($user->longitude);}else{ echo(36.0);} ?>);
                            var map = new google.maps.Map(document.getElementById('mapCanvas'), {
                                zoom: 7,
                                center: latLng,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            });
                            var marker = new google.maps.Marker({
                                position: latLng,
                                title: 'Point A',
                                map: map,
                                draggable: true
                            });

                            google.maps.event.trigger(map, 'resize');
                            // Update current position info.
                            updateMarkerPosition(latLng);
                            //geocodePosition(latLng);

                            // Add dragging event listeners.
                            google.maps.event.addListener(marker, 'dragstart', function () {
                                updateMarkerAddress('Dragging...');
                            });

                            google.maps.event.addListener(marker, 'drag', function () {
                                updateMarkerStatus('Dragging...');
                                updateMarkerPosition(marker.getPosition());
                            });

                            google.maps.event.addListener(marker, 'dragend', function () {
                                updateMarkerStatus('Drag ended');
                                geocodePosition(marker.getPosition());
                            });
                        }

                        // Onload handler to fire off the app.
                        google.maps.event.addDomListener(window, 'load', initialize);

                    </script>

                    <style>
                        #mapCanvas {
                            width: 100%;
                            height: 400px;

                        }

                        #map-canvas img {
                            max-width: none;
                        }
                    </style>

                    <div class="form-group">
                        <label class=" control-label">Location on map</label>


                    </div>
                    <div id="mapCanvas"></div>
                    <!-- <div id="infoPanel">
                         <b>Marker status:</b>
                         <div id="markerStatus"><i>Click and drag the marker.</i></div>
                         <b>Current position:</b>
                         <div id="info"></div>
                         <b>Closest matching address:</b>
                         <div id="address"></div>
                     </div>-->

                    <div class="form-group">
                        <label class=" control-label">Latitude</label>

                        <input id="latitude" name="latitude" type="text" value="<?php echo($user->latitude); ?>"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label class=" control-label">Longitude</label>

                        <input id="longitude" name="longitude" value="<?php echo($user->longitude); ?>" type="text"
                               class="form-control">
                    </div>


                    <div class="form-group">

                        <button type="submit" class="btn btn-primary block full-width m-b">Edit</button>

                    </div>


                    </form>
                </div>

            </div>


            <?php
        }

        ?>


    </div>

<?php require_once("includes/footer.php"); ?>