<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- CSS files-->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/media.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/colors.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  </head>
  <body>
  <!--HEADER-->
    <header>
      <div class="top_wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <!--TOP LOGO-->
              <div class="top_logo">
                <a href="#">
                  <img src="images/gerb.png" alt="Открытые данные администрации города Омска">
                  <div class="logo_txt">
                    <p class="top_logo_txt">Открытые данные</p>
                    <p class="bottom_logo_txt">Администрации города Омска</p>
                  </div>
                </a>
              </div>
            <!--//TOP LOGO-->
              <a href="/" class="hidden-lg hidden-md hidden-xs pull-right">Портал «Омск.РФ»</a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
              <a href="/" class="hidden-sm">Портал «Омск.РФ»</a>
            <!--TOP SEARCH-->  
              <form action="#" id="top-search">
                <input type="text" class="form-control" placeholder="Поиск..."/>
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            <!--//TOP SEARCH--> 
            </div>
          </div>
        </div>
      </div>

      <!--MOBILE MENU--> 
      <div class="mobile_menu hidden-lg hidden-md hidden-sm">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <a href="#" id="toggle_menu"><p>Меню</p><span></span></a>
            </div>
          </div>
        </div>
      </div>
      <!--//MOBILE MENU-->    

      <!--TOP MENU-->
      <nav class="top_menu">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <ul>
                <li class="active"><a href="#">Наборы данных</a></li>
                <li><a href="#">О проекте</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Вопросы и ответы</a></li>
                <li><a href="#">Контакты</a></li>
              </ul>
            </div>
          </div>
        </div>       
      </nav>
      <!--//TOP MENU-->
    </header>
  <!--//HEADER-->

  <!--CONTENT-->
<article class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1>Спорт и молодежная политика (2)</h1>
      </div>
    </div>
  </div>
  
  <!--MAIN SORT BLOCK-->
    <div class="main_sort_block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul>
              <li>Сортировать по:</li>
              <li class="active"><a href="#"><span>дате оновления</span><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></li>
              <li><a href="#">дате публикации</a></li>
              <li><a href="#">рейтингу</a></li>
              <li><a href="#">числу просмотров</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  <!--MAIN SORT BLOCK-->

<div class="container">
  <div class="row">
    <!--CONTENT BLOCK-->
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 page" role="main">
      <div class="open_date_list">

        <div class="item">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
              <a href="#" class="title_item">Летние детские площадки с вожатыми</a> 
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <div class="rating text-right">
                <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="top_info_item">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
               <div class="info_icons_block">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>78</span>
                <i class="fa fa-eye" aria-hidden="true"></i><span>345</span>
                <i class="fa fa-download" aria-hidden="true"></i><span>24</span>
               </div>
               <a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i>Спорт и молодежная политика</a> 
              </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right">
              <p>Обновлено: 16 мая 2016 г.</p>
              <p>Опубликовано: 15 мая 2014 г.</p>
            </div>
            </div>
          </div>

            <div class="middle_info_item text-justify">
              <p>В наборе дано местоположение всех детских площадок, где летом 2016 года во второй половине дня с детьми бесплатно занимаются специально подготовленные вожатые педагогических отрядов и волонтеры в рамках программы летней занятости.</p>
            </div>

            <div class="bottom_info_item">
              <a href="#"><i class="fa fa-university" aria-hidden="true"></i>Департамент по делам молодежи, физической культуре и спорту</a>  
            </div>
        </div>   

            <div class="item">
          <div class="row vertical-align">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
              <a href="#" class="title_item">Результаты заездов участников праздника «ВелоОмск-2015»</a> 
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <div class="rating text-right">
                <ul>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="top_info_item">
            <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
               <div class="info_icons_block">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>128</span>
                <i class="fa fa-eye" aria-hidden="true"></i><span>545</span>
                <i class="fa fa-download" aria-hidden="true"></i><span>64</span>
               </div>
               <a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i>Спорт и молодежная политика</a> 
              </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right">
              <p>Обновлено: 1 сентября 2016 г.</p>
              <p>Опубликовано: 10 мая 2016 г.</p>
            </div>
            </div>
          </div>

            <div class="middle_info_item text-justify">
              <p>Личные результаты всех участников массового заезда XVI Городского культурно-спортивного праздника «ВелоОмск». Таблица составлена на основании финишных протоколов, с подлинниками которых можно ознакомиться в учреждении.</p>
            </div>

            <div class="bottom_info_item">
              <a href="#"><i class="fa fa-university" aria-hidden="true"></i>Казенное учреждение города Омска «Спортивный город»</a>  
            </div>
        </div> 


      
      </div>



       
      </div>
    <!--//CONTENT BLOCK-->
      
    <!--RIGHT SIDEBAR-->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
      <div id="sidebar_right" > 
        <div class="sidebar_menu">
          <div class="title text-uppercase">Рубрики</div>
          <ul class="list-unstyled">
            <li><a href="#"><span>Информатизация (5)</span></a></li>
            <li><a href="#"><span>История и культура (11)</span></a></li>
            <li><a href="#"><span>Транспорт и дороги (3)</span></a></li>
            <li class="active"><a href="#"><span>Спорт и молодежная политика (8)</span></a></li>
            <li><a href="#"><span>Экономика города (1)</span></a></li>
          </ul>
        </div> 

         <div class="sidebar_menu">
          <div class="title text-uppercase">Поставщики наборов<br />открытых данных</div>
          <ul class="list-unstyled">
            <li><a href="#"><span>Администрация Кировского округа (4)</span></a></li>
            <li><a href="#"><span>Департамент по делам молодежи, физической культуре и спорту (7)</span></a></li>
            <li><a href="#"><span>Департамент cтроительства (3)</span></a></li>
            <li><a href="#"><span>Управление делами (12)</span></a></li>
          </ul>
        </div>       
      </div>
    </div>
    <!--//RIGHT SIDEBAR--> 

    </div>
  </div>
</article>
  <!--//CONTENT-->

  <!--FOOTER-->
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <p>© 2016 Администрация города Омска.</p>
                  <p>При использовании открытых данных ссылка на <a href="http://opendata.admomsk.ru" target="_blank">opendata.admomsk.ru</a> обязательна.</p>
                  <p>Поддержка: Казенное учреждение города Омска «Управление информационно-коммуникационных технологий».</p>
              </div>
          </div>
      </div>
  </footer>
  <!--//FOOTER-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/common.js"></script>
  </body>
</html>