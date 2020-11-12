<?php
$menu1 = 'active';
?>
<?php
include "layouts/db.php";
include "layouts/header.php";
?>
    <div class="hero-v1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mr-auto text-center text-lg-left">
                    <span class="d-block subheading">Covid-19 Farkındalığı</span>
                    <h1 class="heading mb-3">Güvende Kal,Evde Kal</h1>
                    <p class="mb-5">Yüzeylerdeki koronavirüs hakkında bilinmesi gereken en önemli şey, virüsü öldürecek yaygın ev dezenfektanlarıyla kolayca temizlenebilmeleridir. Çalışmalar, COVID-19 virüsünün plastik ve paslanmaz çelikte 72 saate kadar, bakırda 4 saatten az ve kartonda 24 saatten daha az yaşayabildiğini göstermiştir.</p>
                    <p class="mb-4"><a href="#" class="btn btn-primary">Nasıl Korunursunuz ?</a></p>
                </div>
                <div class="col-lg-6">
                    <figure class="illustration">
                        <img src="images/illustration.png" alt="Image" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>
    <!-- MAIN -->

    <div class="site-section stats">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-7 text-center mx-auto">
                    <h2 class="section-heading">Dünya Koronavirüs İstatistikleri</h2>
                    <p>Yakalanmak İstemiyorsanız Kendinizi Koruyunuz</p>
                </div>
            </div>
            <?php
            $veri= $connect->query("SELECT * FROM confirmed WHERE tur = 'gl'");
            $sayi = $veri->fetch(PDO::FETCH_ASSOC);
            ?>
            <div class="row">
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
                        <strong class="d-block number"><?php echo number_format($sayi["top_vaka"]); ?></strong>
                        <span class="label">Toplam Vaka Sayısı</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
                        <strong class="d-block number"><?php echo number_format($sayi["top_death"]);?></strong>
                        <span class="label">Toplam Ölen Sayısı</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
                        <strong class="d-block number"><?php echo number_format($sayi["top_recovered"]);?></strong>
                        <span class="label">Toplam İyİleşen Sayısı</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
                        <strong class="d-block number"><?php echo number_format($sayi["day_case"]); ?></strong>
                        <span class="label">Günlük Vaka Sayısı</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
                        <strong class="d-block number"><?php echo number_format($sayi["day_death"]);?></strong>
                        <span class="label">Günlük Ölen Sayısı</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
                        <strong class="d-block number"><?php echo number_format($sayi["day_recovered"]);?></strong>
                        <span class="label">Günlük İyİleşen Sayısı</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section stats">h
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-7 text-center mx-auto">
                    <h2 class="section-heading"> Türkiye Koronavirüs İstatistikleri</h2>
                    <p>Yakalanmak İstemiyorsanız Kendinizi Koruyunuz</p>
                </div>
            </div>
            <?php
                $veri = $connect->query("SELECT * FROM confirmed WHERE tur ='tr'");
                $sayi = $veri->fetch(PDO::FETCH_ASSOC)
            ?>
            <div class="row">
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
                        <strong class="d-block number"><?php echo number_format( $sayi["top_vaka"]); ?></strong>
                        <span class="label">Toplam Vaka Sayısı</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
                        <strong class="d-block number"><?php echo number_format($sayi["top_death"]); ?></strong>
                        <span class="label">Toplam Ölen Sayısı</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
                        <strong class="d-block number"><?php echo number_format($sayi["top_recovered"]); ?></strong>
                        <span class="label">Toplam İyİleşen Sayısı</span>
                    </div>
                </div>                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
                        <strong class="d-block number"><?php echo number_format( $sayi["day_case"]); ?></strong>
                        <span class="label">Günlük Vaka Sayısı</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
                        <strong class="d-block number"><?php echo number_format($sayi["day_death"]); ?></strong>
                        <span class="label">Günlük Ölen Sayısı</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-virus"></span>
              </span>
                        <strong class="d-block number"><?php echo number_format($sayi["day_recovered"]); ?></strong>
                        <span class="label">Günlük İyİleşen Sayısı</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <figure class="img-play-vid">
                        <img src="images/coronavirus.jpg" alt="Image" class="img-fluid">
                        <div class="absolute-block d-flex">
                            <span class="text">Videoyu İzle</span>
                            <a href="https://youtu.be/Q9GMJ8-D_mw" data-fancybox class="btn-play">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="mb-4 section-heading"> Coronavirüs Nedir?</h2>
                    <p>Salgın başlangıçta bu bölgedeki deniz ürünleri ve hayvan pazarında bulunanlarda tespit edilmiştir. Daha sonra insandan insana bulaşarak Vuhan başta olmak üzere Hubei eyaletindeki diğer şehirlere ve Çin Halk Cumhuriyeti’nin diğer eyaletlerine ve diğer dünya ülkelerine yayılmıştır.</p>
                    <ul class="list-check list-unstyled mb-5">
                        <li>ateş</li>
                        <li>kuru öksürük</li>
                        <li>yorgunluk</li>
                    </ul>
                    <p><a href="#" class="btn btn-primary">Daha Fazla Öğren</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-protection"></span>
                    </div>
                    <div>
                        <h3>Korunma</h3>
                        <span class="d-block">Maskenizi Takın</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-patient"></span>
                    </div>
                    <div>
                        <h3>Önleme</h3>
                        <span class="d-block">Dikkatli Davranın</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-hand-sanitizer"></span>
                    </div>
                    <div>
                        <h3>Tedaviler</h3>
                        <span class="d-block">Eğer Yakalandıysanız Filyasyon Ekibi Evinize Gelene Kadar Dışarı Çıkmayın</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-virus"></span>
                    </div>
                    <div>
                        <h3>Semptomlar</h3>
                        <span class="d-block">ağrı,sızı,boğaz ağrısı,ishal...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-primary-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-6 col-lg-6 mt-lg-5">
                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-stay-at-home"></span>
                                </div>
                                <div class="body">
                                    <h3>Evde Kal</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>

                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-patient"></span>
                                </div>
                                <div class="body">
                                    <h3>Maske Tak</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6">
                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-social-distancing"></span>
                                </div>
                                <div class="body">
                                    <h3>Sosyal Mesafenizi Koruyunuz</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>

                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-hand-washing"></span>
                                </div>
                                <div class="body">
                                    <h3>Ellerinizi İyi Yıkayın</h3>
                                    <p><?php echo date("Y:m:d h:i:s") ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="section-heading mb-4">Koronavirüs'den Nasıl Korunursunuz?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis doloribus consequatur fugit voluptatum ex rerum perspiciatis cupiditate, esse hic!</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, error!</p>

                    <ul class="list-check list-unstyled mb-5">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipisicing elit</li>
                        <li>Unde doloremque</li>
                    </ul>

                    <p><a href="#" class="btn btn-primary">Daha Fazla Bİlgİ AL</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-7 mx-auto text-center">
                    <span class="subheading">Neye İhtiyacın Varsa...</span>
                    <h2 class="mb-4 section-heading">Kendini Nasıl Korursun?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="row mt-5 pt-5">
                        <div class="col-lg-6 do ">
                            <h3>Yapmalısın</h3>
                            <ul class="list-unstyled check">
                                <li>Evde Kal</li>
                                <li>Maske Tak</li>
                                <li>Dezenfektan Kullan</li>
                                <li>Evini Temiz Tut</li>
                                <li>Ellerini Yıka</li>
                                <li>Sosyal Mesafeyi Koru</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 dont ">
                            <h3>You should avoid</h3>
                            <ul class="list-unstyled cross">
                                <li>Avoid infected people</li>
                                <li>Avoid animals</li>
                                <li>Avoid handshaking</li>
                                <li>Aviod infected surfaces</li>
                                <li>Don't touch your face</li>
                                <li>Avoid droplets</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/protect.png" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-primary-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="mb-4 section-heading">Symptoms of Coronavirus</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="symptom d-flex">
                        <div class="img">
                            <img src="images/symptom_high-fever.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h3>High Fever</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum ipsum repellendus animi modi iure provident, cupiditate perferendis voluptatem!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="symptom d-flex">
                        <div class="img">
                            <img src="images/symptom_cough.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h3>Cough</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla ullam illo laborum repellendus vel esse dolor, sunt exercitationem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="symptom d-flex">
                        <div class="img">
                            <img src="images/symptom_sore-troath.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h3>Sore Troath</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum esse voluptatum, vel inventore at! Ullam, libero reiciendis amet?</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="symptom d-flex">
                        <div class="img">
                            <img src="images/symptom_headache.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h3>Headache</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus autem voluptatem ratione veniam rerum qui quibusdam reprehenderit quis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-lg-10">
                    <div class="note row">

                        <div class="col-lg-8 mb-4 mb-lg-0"><strong>Stay at home and call your doctor:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, eaque.</div>
                        <div class="col-lg-4 text-lg-right">
                            <a href="#" class="btn btn-primary"><span class="icon-phone mr-2 mt-3"></span>Help line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="mb-4 section-heading">News &amp; Articles</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="post-entry">
                        <a href="#" class="thumb">
                            <span class="date">30 Jul, 2020</span>
                            <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-meta text-center">
                            <a href="">
                                <span class="icon-user"></span>
                                <span>Admin</span>
                            </a>
                            <a href="#">
                                <span class="icon-comment"></span>
                                <span>3 Comments</span>
                            </a>
                        </div>
                        <h3><a href="#">How Coronavirus Very Contigous</a></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="post-entry">
                        <a href="#" class="thumb">
                            <span class="date">30 Jul, 2020</span>
                            <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-meta text-center">
                            <a href="">
                                <span class="icon-user"></span>
                                <span>Admin</span>
                            </a>
                            <a href="#">
                                <span class="icon-comment"></span>
                                <span>3 Comments</span>
                            </a>
                        </div>
                        <h3><a href="#">How Coronavirus Very Contigous</a></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="post-entry">
                        <a href="#" class="thumb">
                            <span class="date">30 Jul, 2020</span>
                            <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-meta text-center">
                            <a href="">
                                <span class="icon-user"></span>
                                <span>Admin</span>
                            </a>
                            <a href="#">
                                <span class="icon-comment"></span>
                                <span>3 Comments</span>
                            </a>
                        </div>
                        <h3><a href="#">How Coronavirus Very Contigous</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "layouts/footer.php";?>