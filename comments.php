<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Комментарии к набору данных</title>

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
    <div class="title_block">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h1>Летние детские площадки с вожатыми</h1>
        </div>
      </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="info_icons_block">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>78</span>
                    <i class="fa fa-eye" aria-hidden="true"></i><span>345</span>
                    <i class="fa fa-download" aria-hidden="true"></i><span>24</span>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
              <a href="#" class="left_i"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>вернуться к набору</a>
            </div>
          </div>
    </div>
  </div>

  <!--BG BLOCK-->
  <div class="bg_block">
    <div class="container">
      <div class="table_cell">
        <div class="cell_block">
        <h2>Комментарии к набору данных (2)</h2>        
        </div>
        <div class="text-right cell_block ">
          <p>Обновлено: 16 мая 2016 г.<br />Опубликовано: 15 мая 2014 г.</p>
        </div>
      </div>
    </div>
  </div>
  <!--//BG BLOCK-->
  

<div class="container">
  <div class="row">
    <!--CONTENT BLOCK-->
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 page" role="main">

<!--COMMENTS FORM-->
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Имя *</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Введите имя">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Комментарий *</label>
    <div class="col-sm-8">
     <textarea class="form-control" rows="6" placeholder="Введите текст сообщения"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12 text-right">
      <button type="submit" class="btn btn-default">Добавить комментарий</button>
    </div>
  </div>
</form>
<!--//COMMENTS FORM-->

<!--COMMENTS LIST-->
<div class="comments_list">
  <div class="comment">
    <div class="comment_top">
      <div class="row">
       <div class="col-xs-6 left_i"><i class="fa fa-user" aria-hidden="true"></i><span>Василий</span></div>
        <div class="col-xs-6 text-right">15 мая 2016</div>
      </div>
      <p>Этот набор данных очень помог, когда я делал курсовую работу по информационным системам: я использовал его в своем приложении.</p>
    </div>
  </div>  

    <div class="comment">
    <div class="comment_top">
      <div class="row">
       <div class="col-xs-6 left_i"><i class="fa fa-user" aria-hidden="true"></i><span>Программист</span></div>
        <div class="col-xs-6 text-right">15 мая 2016</div>
      </div>
      <p>Прошлогодняя версия набора была полнее. По каждой площадке публиковался набор инвентаря, который был в распоряжении вожатых. Сейчас все сильно упростили.</p>
    </div>
  </div> 
</div>
<!--//COMMENTS LIST-->
       
      </div>
    <!--//CONTENT BLOCK-->
      
    <!--RIGHT SIDEBAR-->
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
      <div id="sidebar_right" > 
        <div class="sidebar_block">
          <p>В наборе дано местоположение всех детских площадок, где летом 2016 года во второй половине дня с детьми бесплатно занимаются специально подготовленные вожатые педагогических отрядов и волонтеры в рамках программы летней занятости.</p>
        </div>
        <div class="sidebar_block">
          <div class="title">Ключевые слова</div>
          <p>Лето; дети; вожатые; педагогический отряд; педотряд; подвижные игры; эстафеты; досуг; развлечения; бесплатно; вторая половина дня; летняя занятость; подростки</p>
        </div> 
        <div class="sidebar_block">
        <a href="#">Устаревшие версии набора (3)</a> 
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