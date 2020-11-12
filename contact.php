<?php $menu6 ='active'; ?>
<?php
include 'layouts/header.php'
?>
<div class="hero-v1">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center mx-auto">
                <span class="d-block subheading">Contact</span>
                <h1 class="heading mb-3">Get In Touch</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel a, nulla incidunt eaque sit praesentium porro consectetur optio!</p>
            </div>

        </div>
    </div>
</div>


<!-- MAIN -->

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="main-form-wrapper">
                                <div class="input-wrapper">
						            <input type="text" required name="" class="form-control" id="fname">
						            <label for="fname" class="for-label">Kullanıcı Adı</label>
					            </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="lname">Soyadınız</label>
                                <input type="text" id="lname" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="email">E-posta</label>
                                <input type="text" id="email" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="subject">Konu</label>
                                <input type="text" id="subject" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="message">Mesajınız</label>
                                <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <button class="btn btn-primary">Gönder</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5 ml-auto">
                <h3 class="mb-3 side-title">Quick info</h3>
                <div class="quick-contact">

                    <div class="d-flex">
                        <span class="icon-room"></span>
                        <address>
                            Fake street, 3929, London
                        </address>
                    </div>
                    <div class="d-flex">
                        <span class="icon-phone"></span>
                        <a href="#">+1 291 2902 392</a>
                    </div>
                    <div class="d-flex">
                        <span class="icon-envelope"></span>
                        <a href="#">info@mydomain.com</a>
                    </div>
                    <div class="d-flex">
                        <span class="icon-globe"></span>
                        <a href="#">https://mywebsite.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "layouts/footer.php";
?>
