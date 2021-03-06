<!--Modal: Login / Register Form-->
    <div class="modal fade" id="loginregister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-2 light-blue" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#loginpanel" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#registerpanel" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                
                    <div class="tab-content">
                        <!--Panel 7-->
                        <div class="tab-pane fade in show active" id="loginpanel" role="tabpanel">

                            <!--Body-->
                            <form method="post" action="<?php echo site_url("home/login") ?>">
                                <div class="modal-body mb-1">
                                    <div class="md-form form-sm">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input type="text" id="username" name="username" class="form-control">
                                        <label for="username">Username</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-lock prefix"></i>
                                        <input type="password" id="password" name="password" class="form-control">
                                        <label for="pass">Password</label>
                                    </div>
                                    <div id="RecaptchaField1"></div>
                                    <div class="text-center mt-2">
                                        <button class="btn btn-info" name="submit" type="submit" value="login">Log in <i class="fa fa-sign-in ml-1"></i></button>
                                    </div>
                                </div>
                                
                            </form>
                          
                            <!--Footer-->
                            <div class="modal-footer display-footer">
                                <div class="options text-center text-md-right mt-1">
                                    <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close <i class="fa fa-times-circle ml-1"></i></button>
                            </div>

                        </div>
                        <!--/.Panel 7-->

                        <!--Panel 8-->
                        <div class="tab-pane fade" id="registerpanel" role="tabpanel">


                            <!--Body-->
                            <form method="post" action="<?php echo site_url("home/register") ?>">
                                <div class="modal-body">
                                     <div class="md-form form-sm">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" id="username" name="username" class="form-control">
                                        <label for="username">Username</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email">Email</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-lock prefix"></i>
                                        <input type="password" id="password" name="password" class="form-control">
                                        <label for="password">Password</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" id="nama" name="nama" class="form-control">
                                        <label for="nama">Nama Lengkap</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-building prefix"></i>
                                        <input type="text" id="alamat" name="alamat" class="form-control">
                                        <label for="alamat">Alamat Lengkap</label>
                                    </div>

                                    <div class="md-form form-sm">
                                        <i class="fa fa-phone prefix"></i>
                                        <input type="text" id="telp" name="telp" class="form-control">
                                        <label for="telp">No Handphone</label>
                                    </div>
                                    <!-- <div class="g-recaptcha" data-sitekey="6Lf9hjQUAAAAAHUctTh1AAIo3P_gVEbuxb4p041u"></div> -->
                                    <div class="text-center form-sm mt-2">
                                        <div id="RecaptchaField2"></div></div> <span><button class="btn btn-info" name="button" type="submit" value="register">Sign up <i class="fa fa-sign-in ml-1"></i></button> </span>
                                    </div>

                                </div>
                            </form>
                            
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-right">
                                    <p class="pt-1">Already have an account? <a href="#loginpanel" class="blue-text">Log In</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close <i class="fa fa-times-circle ml-1"></i></button>
                            </div>
                        </div>
                        <!--/.Panel 8-->
                    </div>

                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
<!--/Modal: Login / Register Form-->

<!-- Main Container -->
<div class="container">
<section class="section pb-5">

    <!--Section heading-->
    <center>
    <h2 class="section-heading h1 pt-4 title">TENTANG KAMI</h2>
    </center>
    <!--Section description-->
    <p class="section-description pb-4">Didirikan pada September 2017 dan berbasis di Universitas Negeri Jakarta – Indonesia, Mentoring.com adalah media untuk optimalisasi dakwah Islam melalui aktivitas mentoring. Terdapat beberapa fitur yang ada dalam aplikasi ini sebagai upaya mengatasi permasalahan yang ada dalam aktivitas mentoring</p>
    

    <div class="row">

        <!--Grid column-->
        <div class="col-lg-5 mb-4">

            <!--Form with header-->
            <div class="card">

                <div class="card-body" style="margin-left: 20px">
                    <!--Header-->
                    <div class="form-header blue accent-1">
                        <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                    </div>

                    <p>Kritik anda adalah kemajuan kami.</p>
                    <br>

                    <form method="post" action="<?php echo site_url('kritik/kirim_kritik')?>">
                    	<!--Body-->
	                    <div class="md-form">
	                        <i class="fa fa-user prefix grey-text"></i>
	                        <input type="text" id="form-name" class="form-control" name="nama">
	                        <label for="form-name">Nama</label>
	                    </div>

	                    <div class="md-form">
	                        <i class="fa fa-envelope prefix grey-text"></i>
	                        <input type="text" id="form-email" class="form-control" name="email">
	                        <label for="form-email">Email</label>
	                    </div>

	                    <div class="md-form">
	                        <i class="fa fa-tag prefix grey-text"></i>
	                        <input type="text" id="form-Subject" class="form-control" name="judul">
	                        <label for="form-Subject">Judul Kritik</label>
	                    </div>

	                    <div class="md-form">
	                        <i class="fa fa-pencil prefix grey-text"></i>
	                        <textarea type="text" id="form-text" class="md-textarea" name="isi"></textarea>
	                        <label for="form-text">Kritik Anda</label>
	                    </div>

	                    <div class="text-center">
	                        <button class="btn btn-pink">Submit</button>
	                    </div>
                    </form>

                </div>

            </div>
            <!--Form with header-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-7">

            <!--Google map-->
            <div id="map" class="z-depth-1-half map-container" style="height: 400px"></div>

            <br>
            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <a class="btn-floating"><i class="fa fa-map-marker"></i></a>
                    <p>Jalan Sunan Giri No 1, Rawamangun, Jakarta</p>
                    <p>Indonesia</p>
                </div>

                <div class="col-md-4">
                    <a class="btn-floating "><i class="fa fa-phone"></i></a>
                    <p>+ 62 859 2003 9600</p>
                    <p>Senin - Jumat, 8:00-22:00 WIB</p>
                </div>

                <div class="col-md-4">
                    <a class="btn-floating "><i class="fa fa-envelope"></i></a>
                    <p>admin@mentoring.com</p>
                    <p>mnurilmanbaehaqi@gmail.com</p>
                </div>
            </div>

        </div>
       <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.1-->
</div>
<script type="text/javascript">
	
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -6.194934, lng: 106.884058},
          zoom: 15
        });
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBugy3-Oigx17YzfthVMJwyLRGVPbKF5g&callback=initMap"
    async defer></script>
    <!-- Buat Captcha -->
<script type="text/javascript">
        var CaptchaCallback = function() {
            grecaptcha.render('RecaptchaField1', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
            grecaptcha.render('RecaptchaField2', {'sitekey' : '6LeegzQUAAAAAHHpsMGJBT4c7SopKvJ4GxNpoAPt'});
        };

</script>  