<?php
   include 'INI.class.php'; 
   
   // Parse config.ini
   $ini = new INI('config.ini');
   

   // echo 'Content of: config.ini' . PHP_EOL;
   // print_r($ini->data);
   
   // Udate settings
   
   if(!empty($_POST)){
      
   
   //    echo $ini->data['live']['erumedya1'] ;
      $ini->data['live']['ErumEdya1Link']  = $_POST['ErumEdya1Link'];
      $ini->data['live']['ErumEdya1Yayin']  = $_POST['ErumEdya1Yayin'];
      $ini->data['live']['ErumEdya2Link']  = $_POST['ErumEdya2Link'];
      $ini->data['live']['ErumEdya2Yayin']  = $_POST['ErumEdya2Yayin'];
   
      
      
      $ini->write();
   
     }
   
   
   // Save settings to file
   
   
   
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
      <title>Offcanvas template for Bootstrap</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/offcanvas/">
      <!-- Bootstrap core CSS -->
      <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.css" rel="stylesheet">
   </head>
   <body class="bg-light">
      <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
         <a class="navbar-brand" href="#">Offcanvas navbar</a>
         <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="#">Dashboard 
                  <span class="sr-only">(current)</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Notifications</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Profile</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Switch account</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown01">
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <a class="dropdown-item" href="#">Something else here</a>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
      <!-- 
         <div class="nav-scroller bg-white box-shadow"><nav class="nav nav-underline"><a class="nav-link active" href="#">Dashboard</a><a class="nav-link" href="#">
               Friends
               <span class="badge badge-pill bg-light align-text-bottom">27</span></a><a class="nav-link" href="#">Explore</a><a class="nav-link" href="#">Suggestions</a><a class="nav-link" href="#">Link</a><a class="nav-link" href="#">Link</a><a class="nav-link" href="#">Link</a><a class="nav-link" href="#">Link</a><a class="nav-link" href="#">Link</a></nav></div> -->
      <main role="main" class="container">
         <form  method="POST" action="/arastirma.php">
            <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
               <img class="mr-3" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
               <div class="lh-100">
                  <h6 class="mb-0 text-white lh-100">III. ARAŞTIRMA VE INOVASYON ÇALIŞTAYI</h6>
                  <small>yÖNETİM eKRANI</small>
               </div>
       
            </div>
            
             <div class="row">


                <div class="col-md-6">
                    <div class="my-3 p-3 bg-white rounded box-shadow">
                                <h6 class="border-bottom border-gray pb-2 mb-0">CANLI </h6>
                                
                                <div class="media text-muted pt-3">
                                    <img data-src="holder.js/32x32?theme=thumb&bg=6f42c1&fg=6f42c1&size=1" alt="" class="mr-2 rounded">
                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                        <strong class="d-block text-gray-dark">ERUMEDYA2 Kanalı ayarları</strong>
                                    </p>
                                </div>
                                
                                <div class="media text-muted pt-3">
                                    <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ERUMEDYA Kanalı linki </label>
                                            <input type="text" class="form-control" id="ErumEdya1Link" 
                                            value="<?php echo $ini->data['live']['erumedya1'] ?>" name="ErumEdya1Link" aria-describedby="emailHelp" >
                                            <small id="emailHelp" class="form-text text-muted">lütfen sadece https://www.youtube.com/watch?v=
                                            <span style="color:red">DF3XjEhJ40Y</span> 
                                            kırmızı ile belirtilen v den sonrakini giriniz   
                                            </small>
                                        </div>
                                    </div>
                                </div>

                                <div class="media text-muted pt-3">
                                    <img data-src="holder.js/32x32?theme=thumb&bg=e83e8c&fg=e83e8c&size=1" alt="" class="mr-2 rounded">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ERUMEDYA Kanalı gösterimde olan canlı yayın adı</label>
                                            <input type="text" class="form-control" id="ErumEdya1Yayin" name="ErumEdya1Yayin"  
                                            value="<?php echo $ini->data['live']['ErumEdya1Yayin'] ?>"  aria-describedby="emailHelp" >
                                            <small id="emailHelp" class="form-text text-muted"> Örnek Yapay Zeka ve Yazılım Araştırmaları</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="media text-muted pt-3">
                                    <img data-src="holder.js/32x32?theme=thumb&bg=6f42c1&fg=6f42c1&size=1" alt="" class="mr-2 rounded">
                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                        <strong class="d-block text-gray-dark">ERUMEDYA2 Kanalı ayarları</strong>
                                    </p>
                                </div>

                                <div class="media text-muted pt-3">
                                    <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ERUMEDYA2 Kanalı linki </label>
                                            <input type="text" class="form-control" id="ErumEdya2Link" name="ErumEdya2Link" 
                                            value="<?php echo $ini->data['live']['ErumEdya2Link'] ?>"  aria-describedby="emailHelp" >
                                            <small id="emailHelp" class="form-text text-muted">lütfen sadece https://www.youtube.com/watch?v=
                                            <span style="color:red">DF3XjEhJ40Y</span> 
                                            kırmızı ile belirtilen v den sonrakini giriniz   
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="media text-muted pt-3">
                                    <img data-src="holder.js/32x32?theme=thumb&bg=e83e8c&fg=e83e8c&size=1" alt="" class="mr-2 rounded">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ERUMEDYA Kanalı gösterimde olan canlı yayın adı</label>
                                            <input type="text" class="form-control" id="ErumEdya2Yayin"  name="ErumEdya2Yayin"  
                                            value="<?php echo $ini->data['live']['ErumEdya2Yayin'] ?>"  aria-describedby="emailHelp" >
                                            <small id="emailHelp" class="form-text text-muted"> Örnek Yapay Zeka ve Yazılım Araştırmaları</small>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
                <!-- col6 end -->



            </div>

            <input type="submit" value="Kaydet">
         </form>
      </main>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('
         <script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
      </script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
      <script src="../../assets/js/vendor/holder.min.js"></script>
      <script src="offcanvas.js"></script>
   </body>
</html>