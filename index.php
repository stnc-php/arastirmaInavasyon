<?php
    include 'INI.class.php'; 
    $ini = new INI('config.ini');
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    header("Content-type: application/json; charset=utf-8");

     $arr = array();
     $arr["panel1Live"]= $ini->data['live']['erumEdya1Yayin'];
     $arr["panel2Live"]= $ini->data['live']['erumEdya2Yayin'];
     $arr["erumedyaSingleYayin"]= $ini->data['live']['erumedyaSingleYayin'];
     $arr["erumedyaSingleYayinBaslik"]= $ini->data['live']['erumedyaSingleYayinBaslik'];
     $arr["erumedyaSingleYayinTitle"]= $ini->data['live']['erumedyaSingleYayinTitle'];
     $arr["erumedyaSingleYayinKonusmaci"]= $ini->data['live']['erumedyaSingleYayinKonusmaci'];


     $arr["erumedyaSingleYayinBaslik1"]= $ini->data['live']['erumedyaSingleYayinBaslik1'];
     $arr["erumedyaSingleYayinTitle1"]= $ini->data['live']['erumedyaSingleYayinTitle1'];
     $arr["erumedyaSingleYayinKonusmaci1"]= $ini->data['live']['erumedyaSingleYayinKonusmaci1'];


     $arr["erumedyaSingleYayinBaslik2"]= $ini->data['live']['erumedyaSingleYayinBaslik2'];
     $arr["erumedyaSingleYayinTitle2"]= $ini->data['live']['erumedyaSingleYayinTitle2'];
     $arr["erumedyaSingleYayinKonusmaci2"]= $ini->data['live']['erumedyaSingleYayinKonusmaci2'];

     $arr["status"]="ok";
     die(json_encode($arr));

        // if($_GET){ } 
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>III. Araştırma ve  İnovasyon Çalıştayı</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="https://www.erciyes.edu.tr/favicon.ico" type="image/x-icon">
  <link rel="icon" href="https://www.erciyes.edu.tr/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="57x57" href="https://www.erciyes.edu.tr/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="https://www.erciyes.edu.tr/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="https://www.erciyes.edu.tr/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="https://www.erciyes.edu.tr/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="https://www.erciyes.edu.tr/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="https://www.erciyes.edu.tr/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="https://www.erciyes.edu.tr/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="https://www.erciyes.edu.tr/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="https://www.erciyes.edu.tr/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="https://www.erciyes.edu.tr/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://www.erciyes.edu.tr/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="https://www.erciyes.edu.tr/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://www.erciyes.edu.tr/favicon/favicon-16x16.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?p=2021-v12" rel="stylesheet">

  <!-- =======================================================
  * Template Name: TheEvent - v4.0.1
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/

  modal box ekle 
  https://codepen.io/JacobLett/pen/xqpEYE
  ======================================================== -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-283E3QWGZP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-283E3QWGZP');
</script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <a href="https://www.erciyes.edu.tr/" class="scrollto"><img src="https://www.erciyes.edu.tr/images/logo.png" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Anasayfa</a></li>
          <li><a class="nav-link scrollto" href="#about">Hakkımızda</a></li>
          <li><a class="nav-link scrollto" href="#schedule">Program Akışı</a></li>
        
          <li><a class="nav-link scrollto" href="#supporters">Katılımcı Üniversiteler</a></li>

          <li><a class="nav-link scrollto" href="#OrganizasyonKomite">Organizasyon Komitesi</a></li>

          <li><a class="nav-link scrollto" href="#canliYa">Canlı Yayın</a></li>
          <li><a class="nav-link scrollto" href="#canliYa">İletişim</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0"><span>III.</span> Araştırma ve  İnovasyon <br>Çalıştayı </h1>
      <p class="mb-4 pb-0">23-25 Şubat Tarihlerinde Youtube'dan  Canlı Yayınlanacaktır</p>
<!-- <div class="row">
  <div class="col col-md-6">
    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn"></a>
    <a href="#about" class="about-btn ">Etkinlik Sayfası 1</a>
  </div>

  <div class="col col-md-6">
    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn"></a>
    <a href="#about" class="about-btn ">Etkinlik Sayfası 2</a>
  </div>
</div> -->
 

    
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>Etkinlik Hakkında</h2>
            <p>Erciyes Üniversitesi tarafından üçüncü kez düzenlenecek olan Araştırma İnovasyon Çalıştayı’nın 
              bu yılki amacı; bölge üniversiteleri arasında iş birliğinin artırılması yoluyla; nitelikli insan 
              kaynağı yetiştirilmesi, ortak altyapıların kullanılması, katma değeri yüksek akademik çıktı elde
               edilmesi ve çalıştaya katılacak üniversitelerin birbirini ve araştırma potansiyelini tanımasıdır. 
              Çalıştay 23-25 Şubat tarihlerinde çevrimiçi platformlar üzerinden gerçekleştirilecektir.</p>
            
          </div>
          <div class="col-lg-3">
            <h3>Nerede</h3>
            <p>Etkinlik çevrimiçi yapılacak olup, youtube canlı yayını izlemek için 
              <br>
              <a style="color: cornflowerblue;" href="https://www.youtube.com/user/EruMedya">Erumedya</a>
              <br>
              <a style="color: cornflowerblue;" href="https://www.youtube.com/channel/UCo9voRWVF7weDc3kqe0B09g">Erumedya 2</a>
            </p>
          </div>
          <div class="col-lg-3">
            <h3>Zamanları</h3>
            <p>Çalıştay <strong style="color: brown;">23-25 Şubat</strong> tarihlerinde çevrimiçi platformlar üzerinden gerçekleştirilecektir.
            <br>
            Etkinlik akışı aşağıdadır
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->


    <section id="canliYa" >

      <div class="container" data-aos="fade-up">

<div class="row">

  <div class="section-header">
    <h2>Canlı Yayınlar</h2>
  </div>


  <h3 id="conta8" class="sub-heading text-center">
   Canlı Yayın Program Akışı ve Kanal Bilgilerine Aşağıdan Ulaşabilirsiniz.
   <br>
   Canlı Yayını Buradan İzleyebilirsiniz.
  </h3>

 
         <?php if ($ini->data['live']['erumedyaSingle']=="single"):?>
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="video-testimonial-block" style="height: 515px!important ;background-color: #F1F1F1; ">
        <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo  $ini->data['live']['erumedyaSingleLink']?>" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
        </div>
    </div>

    <div class="video-testimonial-content">
        <h4 style="margin:15px" class="mb10">   <a style="color:#0e1b4d" target="_blank" href="https://www.youtube.com/user/EruMedya">ERUMEDYA Kanalı</a> </h4>
        <p class="erumedyaSingleYayin"> Açılış Konuşmaları  </p>
        <strong class="erumedyaSingleYayinBaslik"> <?php echo  $ini->data['live']['erumedyaSingleYayinBaslik']?>  </strong>
        <br>
        <strong class="erumedyaSingleYayinTitle"> <?php echo  $ini->data['live']['erumedyaSingleYayinTitle']?>  </strong>
        <br>
        <strong class="erumedyaSingleYayinKonusmaci"> <?php echo  $ini->data['live']['erumedyaSingleYayinKonusmaci']?>  </strong>
    </div>
</div>
<?php
endif;
?>



<?php if ($ini->data['live']['erumedya1Open']=="yes"):?>
 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="video-testimonial-block" style="height: 315px!important ;background-color: #F1F1F1; ">
        <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo  $ini->data['live']['erumEdya1Link']?>" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
        </div>
    </div>

    <div class="video-testimonial-content">
        <h4 style="margin:15px" class="mb10">   <a style="color:#0e1b4d" target="_blank" href="https://www.youtube.com/user/EruMedya">ERUMEDYA Kanalı</a> </h4>
        <p class="erumEdya1Yayin"> <?php echo  $ini->data['live']['erumEdya1Yayin']?>  </p>
        <strong class="erumedyaSingleYayinBaslik1"> <?php echo  $ini->data['live']['erumedyaSingleYayinBaslik1']?>  </strong>
        <br>
        <strong class="erumedyaSingleYayinTitle1"> <?php echo  $ini->data['live']['erumedyaSingleYayinTitle1']?>  </strong>
        <br>
        <strong class="erumedyaSingleYayinKonusmaci1"> <?php echo  $ini->data['live']['erumedyaSingleYayinKonusmaci1']?>  </strong>
    </div>
</div>
<?php
endif;
?>


<?php if ($ini->data['live']['erumedya1Open']=="no"):?>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
  <div class="video-testimonial-block" style="height: 315px!important;background-color: #F1F1F1;  ">
      <div class="video-thumbnail"><img src="assets/img/youtubeLogo.png" alt="" class="img-fluid"></div>
      <div class="video">
      </div>
      <a href="#" class="video-play" style="    top: 74%;" ></a>
  </div>
  <div class="video-testimonial-content">
  <h4 style="margin:15px" class="mb10">   <a style="color:#0e1b4d" target="_blank" href="https://www.youtube.com/user/EruMedya">ERUMEDYA Kanalı</a> </h4>
    <p class="panel1Live"> <?php echo  $ini->data['live']['erumEdya1Yayin']?> </p>
  </div>
</div>
<?php
endif;
?>



<?php if ($ini->data['live']['erumedya2Open']=="yes"):?>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
  <div class="video-testimonial-block" style="height: 315px!important;background-color: #F1F1F1;  ">
  <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo  $ini->data['live']['erumEdya2Link']?>" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
        </div>
  </div>


  <div class="video-testimonial-content">
        <h4 style="margin:15px" class="mb10">    <a style="color:#0e1b4d" target="_blank" href="https://www.youtube.com/channel/UCo9voRWVF7weDc3kqe0B09g">ERUMEDYA2 Kanalı</a> </h4>
        <p class="erumEdya2Yayin"> <?php echo  $ini->data['live']['erumEdya2Yayin']?>  </p>
        <strong class="erumedyaSingleYayinBaslik2"> <?php echo  $ini->data['live']['erumedyaSingleYayinBaslik2']?>  </strong>
        <br>
        <strong class="erumedyaSingleYayinTitle2"> <?php echo  $ini->data['live']['erumedyaSingleYayinTitle2']?>  </strong>
        <br>
        <strong class="erumedyaSingleYayinKonusmaci2"> <?php echo  $ini->data['live']['erumedyaSingleYayinKonusmaci2']?>  </strong>
    </div>


</div>
<?php
endif;
?>


<?php if ($ini->data['live']['erumedya2Open']=="no"):?>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
  <div class="video-testimonial-block" style="height: 315px!important;background-color: #F1F1F1;  ">
      <div class="video-thumbnail"><img src="assets/img/youtubeLogo.png" alt="" class="img-fluid"></div>
      <div class="video">
          <!-- <iframe src="https://www.youtube.com/embed/KEiAVv1UNac" allowfullscreen>
          </iframe> -->
      </div>
      <a href="#" class="video-play" style="    top: 74%;" ></a>
  </div>
  <div class="video-testimonial-content">
  <h4 style="margin:15px" class="mb10">   <a style="color:#0e1b4d" target="_blank" href="https://www.youtube.com/channel/UCo9voRWVF7weDc3kqe0B09g">ERUMEDYA2 Kanalı</a> </h4>

    <p class="panel2Live">  <?php echo  $ini->data['live']['erumEdya2Yayin']?> </p>
  </div>
</div>
<?php
endif;
?>


</div>
</div>



    </section><!-- End About Section -->

    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Etkİnlİk Program Akışı</h2>
        </div>

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab"> 23/02/2021</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">24/02/2021</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-bs-toggle="tab">25/02/2021</a>
          </li> 
        </ul>

        <h3 id="conta" class="sub-heading">Canlı yayınlar belirtilen saatte ilgili youtube linkinde aktif olacaktır.
          Panellerle alakalı sorularınızı <a style="color: crimson;" href="mailto:arastirmainovasyon@erciyes.edu.tr">arastirmainovasyon@erciyes.edu.tr</a> adresine  panel başlığını belirterek

         gönderiniz.
        
        </h3>

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <?php include "gun1.php"; ?>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <?php include "gun2.php"; ?>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <?php include "gun3.php"; ?>
        <!-- End Schdule Day 3 -->
        </div>
      </div>
      </div>

    </section><!-- End Schedule Section -->

    <section id="supporters" style="background-color: white;" class="section-with-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
                <div class="text-center">
                    <img src="assets/img/spons.jpg" alt="" class="img-fluid" alt="">
                </div>
        </div>
        </div>
      </div>
    </section>


      <section id="OrganizasyonKomite">
                <?php include "komite.php" ?>
      </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
       Tüm hakları saklıdır, Erciyes Üniversitesi / Erciyes Teknopark 
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<script>

setInterval(ajaxCall, 90000); //2.5dk //300000 MS == 10 minutes
// setInterval(ajaxCall, 5000); //5000 MS == 5 second

function ajaxCall() {
    fetch("https://arastirmainovasyon.erciyes.edu.tr/?action=panel", {
      method: 'GET',
      headers: {'X-Requested-With': 'XMLHttpRequest'}
    })
    .then(response => {
      if( response.ok ) {
        return response.json()
      } else {
       console.log("error")
      }
    })
    .then(data => {
        console.log(data.status)
      if (data.status == 'ok') {
         $(".panel1Live").text(data.panel1Live);
         $(".panel2Live").text(data.panel2Live);
         $(".erumedyaSingleYayin").text(data.erumedyaSingleYayin);
         $(".erumedyaSingleYayinBaslik").text(data.erumedyaSingleYayinBaslik);
         $(".erumedyaSingleYayinTitle").text(data.erumedyaSingleYayinTitle);
         $(".erumedyaSingleYayinKonusmaci").text(data.erumedyaSingleYayinKonusmaci);

         $(".erumedyaSingleYayinBaslik1").text(data.erumedyaSingleYayinBaslik1);
         $(".erumedyaSingleYayinTitle1").text(data.erumedyaSingleYayinTitle1);
         $(".erumedyaSingleYayinKonusmaci1").text(data.erumedyaSingleYayinKonusmaci1);


         $(".erumedyaSingleYayinBaslik2").text(data.erumedyaSingleYayinBaslik2);
         $(".erumedyaSingleYayinTitle2").text(data.erumedyaSingleYayinTitle2);
         $(".erumedyaSingleYayinKonusmaci2").text(data.erumedyaSingleYayinKonusmaci2);
      } else {
        console.log("error")
      }
    })
    .catch((error) => {
        console.log("error")
    });
}


</script>


</body>

</html>