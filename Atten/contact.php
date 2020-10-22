<?php
include('header.php');
?>
<!-- ##### Google Maps ##### -->
    <!-- <div class="map-area">
        <div id="googleMap"></div>
    </div> --><br><br><br><br>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <style type="text/css">
                .wave{
                  position: fixed;
                  bottom: 0;
                  left: 0;
                  height: 100%;
                  width: 100%;
                  z-index: -1;
              }
              p{
                  color: black;
              }
          </style>
          <img class="wave" src="../admin/image/ind1.png"/>
          <div class="row">
            <!-- Contact Info -->
            <div class="col-12 col-lg-6">
                <div class="contact--info  mb-100">
                    <h4>Contact Info</h4>
                    <ul class="contact-list">
                        <li>
                            <h6 style="color: black;"><i class="fa fa-clock-o" aria-hidden="true"></i> Business Hours</h6>
                            <h6 style="color: black;">9:00 AM - 18:00 PM</h6>
                        </li>
                        <li>
                            <h6 style="color: black;"><i class="fa fa-phone" aria-hidden="true"></i> Number</h6>
                            <h6 style="color: black;">+91 9325684625</h6>
                        </li>
                        <li>
                            <h6 style="color: black;"><i class="fa fa-envelope" aria-hidden="true"></i> Email</h6>
                            <h6 style="color: black;">saurabbhwani256@gmail.com</h6>
                        </li>
                        <li>
                            <h6 style="color: black;"><i class="fa fa-map-pin" aria-hidden="true"></i> Address</h6>
                            <h6 style="color: black;">Temporary not available</h6>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-12 col-lg-6">
                <div class="contact-form">
                    <h4>Get In Touch</h4>

                    <form action="contactcon.php" method="post">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="fname" class="form-control" id="text" placeholder="Name"style="color: black">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="eml" style="color: black">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" placeholder="Phone"style="color: black" pattern="[0-9]{10}" name="phne">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message"  rows="3" placeholder="Message" required=""style="color: black"></textarea>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInDown" data-wow-delay="250ms">
                                <button type="submit" name="sub_btn" class="btn btn-primary w-100">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

<?php
include('footer.php');
?>