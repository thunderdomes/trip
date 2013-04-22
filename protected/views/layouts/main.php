<?php /* @var $this Controller */ ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- Le styles -->
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css" rel="stylesheet" />
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/common.css" rel="stylesheet" />
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/home.css" rel="stylesheet" />

  
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/Aristo/Aristo.css" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/static/js/netra.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/static/js/wizard.js"></script>
  <!--<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>-->
  <!--<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>-->
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->

</head>

<body>

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="menu">
      <div class="container">
        <div class="logo">
         <a href="<?php echo Yii::app()->request->baseUrl; ?>">
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/static/img/logo.png" width="149px" height="30px" />
        </a></div>
        <div class="menu-left">
          <div class="nav-collapse collapse">
            <ul class="nav">

              <li><a href="#about">Promo Trip</a></li>
               <li><a href="#about">Day Tripper</a></li>
             
            </ul>
          </div>
        </div>
        <div class="nav-collapse collapse">
          <ul class="nav">
            <?php if(Yii::app()->user->isGuest): ?>

				<li><a href="<?php echo CHtml::normalizeUrl(Yii::app()->user->loginUrl); ?>">Sign In</a></li>
          <a class="facebook-log" href="<?php echo Yii::app()->facebook->getLoginUrl(array('scope'=>'email')) ?>"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/static/img/facebook.png"></a>
            <?php else: ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello <?php print_r(Yii::app()->user->getProfileName()); //echo $_data_user['user_profile']['first_name']; ?><b class="caret"></b></a>
              <ul class="dropdown-menu">
					  <li><a href="<?php echo CHtml::normalizeUrl(array('/profile')); ?>">Profile</a></li>
					  <li><a href="<?php echo CHtml::normalizeUrl(Yii::app()->getModule('user')->logoutUrl); ?>">Logout</a></li>
              </ul>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php echo $content; ?>
  <!-- /container -->
  <div class="footer">
    <div class="container bottom">
        <div class="bottom-left">
        <ul>
          <li><a href="#">Tentang Tripify</a></li>
          <li><a href="#">Beriklan</a></li>
          <li><a href="#">Copyright</a></li>
          <li><a href="#">Pengembang</a></li>
          <li><a href="#">Blog</a></li>
           <li><a href="#">Hubungi Kami</a></li>
     
        </ul>
      </div>
      <!--
      <div class="bottom-right">
        <ul>
          <li>Tentang Tripify</li>
          <li>Beriklan</li>
          <li>Copyright</li>
          <li>Developer</li>
          <li>Blog</li>
     
        </ul>
      </div>
    -->
    </div>

  </div>


    <!-- Le javascript
    ================================================== -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/noUiSlider/2.5.5/jquery.nouislider.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/static/js/netra.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/static/js/sticky.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/masonry/2.1.07/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.lazyload/1.8.4/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js"></script>
    <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-38347108-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

    </script>
  </body>
  </html>
