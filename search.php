<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Search Result</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/camera.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>


</head>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <section class="clearfix">

            <div class="container">



                <div class="navbar-header" >

          <a href="index.html" id="logo"><img src="images/logo2.png"></a>


                </div>
            </div>

            <div class="container">
                <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                    <label class="search-form_label">
                        <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder=""/>
                        <span class="search-form_liveout"></span>
                    </label>
                    <button class="search-form_submit fa-search" type="submit"></button>
                </form>

            </div>

        </section>

        <div id="stuck_container" class="stuck_container">
          <nav class="navbar navbar-default navbar-static-top ">
              <div class="container">

                  <ul class="navbar-nav sf-menu" data-type="navbar">
                      <li>
                          <a href="about.html">О компании</a>
                      </li>
                      <li class="dropdown">
                          <a href="logistic-3.html">Логистика</a>
                          <ul class="dropdown-menu">
                            <li><a href="logistic-3.html">О компании</a></li>
                            <li><a href="logistic-1.html">Услуги</a></li>
                            <li><a href="logistic-2.html">Таможенное оформление</a></li>

                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="certification-1.html">Сертификация</a>
                          <ul class="dropdown-menu">
                            <li><a href="certification-1.html">О компании</a></li>
                            <li><a href="certification-2.html">Сертификация</a></li>
                            <li><a href="certification-3.html">Сертификат соответствия техническим регламентам ТС</a></li>
                            <li><a href="certification-4.html">Действие Декларации о Соответствии ТС</a></li>
                            <li><a href="certification-5.html">Испытания</a></li>

                          </ul>
                      </li>
                      <li>
                          <a href="partners.html">Наши партнеры</a>

                      </li>
                      <li>
                          <a href="retail.html">Ритэйл</a>
                      </li>

                      <li>
                          <a href="contacts.html">Контакты</a>
                      </li>
                  </ul>
              </div>
          </nav>
        </div>
    </header>

  <!--========================================================
                            CONTENT
  =========================================================-->
  <main>
    <section id="content" class="content well">
        <div class="container">
            <h3>Результаты поиска</h3>
            <div id="search-results"></div>
        </div>
    </section>
  </main>

     <!--========================================================
                             FOOTER
   =========================================================-->
   <footer>
       <section class="bg-secondary well5">
           <div class="container center767">
               <div class="row">

                   <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.6s">
                       <h4 class="text-primary">ЦЭС</h4>
                       <ul class="text-uppercase">
                         <li><a href="certification-2.html">Сертификация</a></li>
                         <li><a href="certification-3.html">Сертификат соответствия </a></li>
                         <li><a href="certification-4.html">Действие Декларации о Соответствии Таможенного союза</a></li>
                         <li><a href="certification-5.html">Испытания</a></li>
                       </ul>
                   </div>

                   <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.2s">
                       <h4 class="text-primary">Страхование</h4>
                       <ul class="text-uppercase">
                         <li><a href="insurance-12.html">В таможенной сфере</a></li>
                         <li><a href="insurance-3.html">Грузоперевозок</a></li>
                         <li><a href="insurance-4.html">Имущества</a></li>

                       </ul>
                   </div>

                   <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.2s">
                       <h4 class="text-primary">Логистика</h4>
                       <ul class="text-uppercase">
                         <li><a href="logistic-1.html">Услуги</a></li>
                         <li><a href="logistic-2.html">Таможенное оформление</a></li>
                       </ul>
                   </div>

                   <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="" data-wow-delay="0.8s">
                       <h4 class="text-primary">Мы в сети</h4>
                       <ul class="inline-list">
                           <li><a class="fa fa-facebook" href="#"></a></li>
                           <li><a class="fa fa-rss" href="#"></a></li>
                           <li><a class="fa fa-twitter" href="#"></a></li>
                           <li><a class="fa fa-google-plus" href="#"></a></li>
                       </ul>
                   </div>
               </div>
           </div>

       </section>
           <div class="container">
               <p class="navbar-brand brand__footer">
                   <img id="footer_logo" src="images/logo_footer.png">
               </p>
               <p class="copyrights">
                   &#169; <span id="copyright-year"></span> |
                   <a href="index-6.html">Privacy Policy</a>

               </p>
           </div>
   </footer>
 </div>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
 <script src="js/tm-scripts.js"></script>
 <!-- </script> -->


 </body>
 </html>
