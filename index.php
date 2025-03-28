<?php

include 'parcials/header.php'

?>
        <div class="row">
            <div class="col-lg-12">
                <div class="tm-video-container">
                    <video id="tm-welcome-video" class="tm-welcome-video" autoplay="" loop="" muted="">
                        <source src="videos/video.mp4" type="video/mp4"> Your browser does not support the video tag.
                        </video>
                        <div id="tm-video-loader"></div>
                        <div id="tm-video-text-overlay" class="tm-video-text-overlay d-none">
                            <h1>
                                <div id="rotate" class="tm-video-text">
                                    <div>This is timeless</div>
                                    <div>We are invincible</div>
                                    <div>Quite unbeatable</div>
                                    <div>and indestructible</div>
                                </div>
                            </h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container tm-container-2">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="tm-welcome-text">Welcome to Timeless</h2>
                </div>
            </div>
            <div class="row tm-section-mb">
                <div class="col-lg-12">
                    <div class=" tm-timeline-item">
                        <div class="tm-timeline-item-inner">
                            <img src="img/img-01.jpg" alt="Image" class="rounded-circle tm-img-timeline">
                            <div class="tm-timeline-connector">
                                <p class="mb-0">&nbsp;</p>
                            </div>
                            <div class="tm-timeline-description-wrap">
                                <div class="tm-bg-dark tm-timeline-description">
                                    <h3 class="tm-text-green tm-font-400">Nulla venenatis purus nec quam</h3>
                                    <p>You may tell your co-workers about TemplateMo free stuffs to download and use for any website project. Thank you for supporting us.</p>
                                    <p class="tm-text-green float-right mb-0">New Event . 12 July 2018</p>
                                </div>
                            </div>
                        </div>

                        <div class="tm-timeline-connector-vertical"></div>
                    </div>

                    <div class="tm-timeline-item">
                        <div class="tm-timeline-item-inner">
                            <img src="img/img-02.jpg" alt="Image" class="rounded-circle tm-img-timeline">
                            <div class="tm-timeline-connector">
                                <p class="mb-0">&nbsp;</p>
                            </div>
                            <div class="tm-timeline-description-wrap">
                                <div class="tm-bg-dark-light tm-timeline-description">
                                    <h3 class="tm-text-cyan tm-font-400">Vestibulum ante ipsum primis</h3>
                                    <p>In imperdiet nisl quis sapien pellentesque, non rhoncus elit sollicitudin. Donec pharetra egestas magna at eleifend. Sed non magna vitae enim tempus faucibus.</p>
                                    <p class="tm-text-cyan float-right mb-0">Another Story . 9 July 2018</p>
                                </div>
                            </div>
                        </div>
                        <div class="tm-timeline-connector-vertical"></div>
                    </div>

                    <div class="tm-timeline-item">
                        <div class="tm-timeline-item-inner">
                            <img src="img/img-03.jpg" alt="Image" class="rounded-circle tm-img-timeline">
                            <div class="tm-timeline-connector">
                                <p class="mb-0">&nbsp;</p>
                            </div>
                            <div class="tm-timeline-description-wrap">
                                <div class="tm-bg-dark tm-timeline-description">
                                    <h3 class="tm-text-yellow tm-font-400">Pellentesque accumsan convallis</h3>
                                    <p>Suspendisse felis massa, maximus sed mauris at, elementum fermentum nisl. Aliquam quis elit vel ipsum ornare sollicitudin. Nulla et dolor eget nisi varius convallis.</p>
                                    <p class="tm-text-yellow float-right mb-0">Latest News . 30 June 2018</p>
                                </div>
                            </div>
                        </div>
                        <div class="tm-timeline-connector-vertical"></div>
                    </div>

                    <div class="tm-timeline-item">
                        <div class="tm-timeline-item-inner">
                            <img src="img/img-04.jpg" alt="Image" class="rounded-circle tm-img-timeline">
                            <div class="tm-timeline-connector">
                                <p class="mb-0">&nbsp;</p>
                            </div>
                            <div class="tm-timeline-description-wrap">
                                <div class="tm-bg-dark-light tm-timeline-description">
                                    <h3 class="tm-text-orange tm-font-400">Lorem ipsum dolor sit amet</h3>
                                    <p>Phasellus at quam facilisis sem congue lacinia. Fusce risus velit, bibendum in magna eu, sollicitudin pellentesque dolor. Nulla facilisi. Fusce libero mauris, maximus et liqula at.</p>
                                    <p class="tm-text-orange float-right mb-0">New Project . 22 June 2018</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!--  row -->
            <hr>
            <div class="row tm-section-mb tm-section-mt">
                <div class="col-lg-4 col-md-4 col-sm-12 pr-lg-5 mb-md-0 mb-4">
                    <h3 class="mt-2 mb-3 tm-text-gray">Nunc dictum consequat</h3>
                    <p>Integer imperdiet aliquet lobortis. In in metus risus. Pellentesque pulvinar venenatis dui id rutrum. In
                    pharetra neque et eleifend venenatis.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 pr-lg-5 mb-md-0 mb-4">
                    <h3 class="mt-2 mb-3 tm-text-gray">Morbi ultrices tellus</h3>
                    <p>Integer imperdiet aliquet lobortis. In in metus risus. Pellentesque pulvinar venenatis dui id rutrum. In
                    pharetra neque et eleifend venenatis.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="mt-2 mb-3 tm-text-gray">Suspendisse dolor tortor</h3>
                    <p>Integer imperdiet aliquet lobortis. In in metus risus. Pellentesque pulvinar venenatis dui id rutrum. In
                    pharetra neque et eleifend venenatis.</p>
                </div>
            </div>
            <hr>
            <div class="row tm-section-mt">
                <div class="col-lg-6">
                    <h3 class="mb-4 tm-text-gray">Our Location</h3>
                    <!-- GOOGLE MAP -->
                    <div id="google-map" class="text-center mb-5">
                    <!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                       -->
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945"
                       class="google-map-iframe" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                   </div>
               </div>
               <div class="col-lg-6 mb-5">
                <h3 class="mb-4 tm-text-gray">Contact Us</h3>
                <form action="#contact" method="post" class="tm-contact-form">
                    <div class="row">
                        <div class="form-group col-xl-6">
                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name..." required/>
                        </div>
                        <div class="form-group col-xl-6">
                            <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email..." required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Your Message..." required></textarea>
                    </div>
                    <button type="submit" class="btn  tm-btn-send">Send It</button>
                </form>
            </div>
        </div>
        <hr>
        <?php
        include 'parcials/footer.php'

        ?> 
