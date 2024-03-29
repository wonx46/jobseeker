<?php global $categories, $cities; ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php _e($seo_title); ?></title>
    <meta name="author" content="<?php _e(APP_AUTHOR); ?>">
    <meta name="description" content="<?php _e($seo_desc); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- Bootstrap -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php _e(THEME_ASSETS); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php _e(THEME_ASSETS); ?>css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php _e(THEME_ASSETS); ?>css/theme.css" rel="stylesheet">
    <link href="<?php _e(THEME_ASSETS); ?>css/custom.css" rel="stylesheet">
    <link href="<?php _e(THEME_ASSETS); ?>css/color.css" rel="stylesheet">
    <!-- <link href="<?php _e(THEME_ASSETS); ?>css/responsive.css" rel="stylesheet"> -->
    <link href="<?php _e(THEME_ASSETS); ?>css/owl.carousel.css" rel="stylesheet">
    <link href="<?php _e(THEME_ASSETS); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php _e(THEME_ASSETS); ?>css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php _e(THEME_ASSETS);; ?>ico/favicon.png">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php _e($seo_title); ?>" />
    <meta property="og:url" content="<?php _e($seo_url); ?>" />
    <?php if (isset($job) && $job->logo != ''): ?>
    <meta property="og:image" content="<?php _e(ASSET_URL . "images/thumb_{$job->logo}"); ?>" />
    <?php endif; ?>
    <meta property="og:description" content="<?php _e($seo_desc); ?>" />
    <meta property="og:site_name" content="<?php _e($seo_title); ?>" />

    <link rel="canonical" href="<?php _e($seo_url); ?>" />
    <link rel="shortlink" href="<?php _e($seo_url); ?>" />

    <?php if (isset($markdown)): ?>
        <link href="<?php _e(ASSET_URL); ?>bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet">
    <?php endif; ?>
  </head>
  <body class="theme-style-1">
    <!-- Fixed navbar -->
    <!-- <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php _e(BASE_URL); ?>"><?php _e(APP_NAME); ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php _e(BASE_URL); ?>"><?php echo $lang->t('link|home'); ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang->t('link|categories'); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <?php foreach($categories as $cat): ?>
                <li><a href="<?php _e(BASE_URL . "categories/{$cat->id}/{$cat->url}"); ?>"><?php _e($cat->name); ?></a></li>
                <?php endforeach; ?>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang->t('link|cities'); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <?php foreach($cities as $cit): ?>  
                <li><a href="<?php _e(BASE_URL . "cities/{$cit->id}/{$cit->url}"); ?>"><?php _e($cit->name); ?></a></li>
                <?php endforeach; ?>
              </ul>
            </li>
            <li><a href="<?php _e(BASE_URL .'about'); ?>"><?php echo $lang->t('link|about'); ?></a></li>
            <li><a href="<?php _e(BASE_URL .'contact'); ?>"><?php echo $lang->t('link|contact'); ?></a></li>
            <?php if (userIsValid()): ?>
                <li><a href="<?php _e(BASE_URL .'admin/manage'); ?>"><?php echo $lang->t('link|admin'); ?></a></li>
            <?php else: ?>
            	<li><a href="<?php _e(BASE_URL .'admin/login'); ?>"><?php echo $lang->t('link|login'); ?></a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div> -->
    <header id="header"> 

    <div class="cp-burger-nav" style="width: auto;float: left;display: flex;margin: 22px 9px 0px 28px"> 
      <div id="cp_side-menu-btn"><a href="#" class=""><img src="<?php echo ASSET_URL ."images/menu-icon.png"; ?>"></a></div>
      <div id="cp_side-menu"> <a href="#" id="cp-close-btn" class="crose" style="background: transparent;font-size: 23px;color: white;margin: 11px;"><i class="fa fa-close"></i></a>
        <a class="navbar-brand" style="color: white" href="<?php _e(BASE_URL); ?>"><?php _e(APP_NAME); ?></a>
        <div class="content mCustomScrollbar">
          <div id="content-1" class="content">
            <div class="cp_side-navigation">
              <nav>
                <ul class="navbar-nav">
                  <li class="active"><a href="<?php _e(BASE_URL); ?>" class="" data-toggle="" role="button" aria-expanded="false">Home</a>
                  </li>
                  <li class="dropdown"><a href="<?php _e(BASE_URL .'about'); ?>"><?php echo $lang->t('link|about'); ?></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang->t('link|categories'); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <?php foreach($categories as $cat): ?>
                      <li><a href="<?php _e(BASE_URL . "categories/{$cat->id}/{$cat->url}"); ?>"><?php _e($cat->name); ?></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang->t('link|cities'); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <?php foreach($cities as $cit): ?>  
                      <li><a href="<?php _e(BASE_URL . "cities/{$cit->id}/{$cit->url}"); ?>"><?php _e($cit->name); ?></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </li>
                  <li><a href="<?php _e(BASE_URL .'contact'); ?>"><?php echo $lang->t('link|contact'); ?></a> </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="cp-sidebar-social">
          <ul>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div style="float: left; display: flex; flex-direction: row;width: 206px; justify-content: flex-start;" class="navbar-brand">
      <a class="" href="<?php _e(BASE_URL); ?>"><?php _e(APP_NAME); ?></a>
    </div>
    <form class="form-horizontal" role="form" method="post" action="<?php _e(BASE_URL . 'search/'); ?>" style="display: flex;margin: 10px 74px;
flex: 1;flex-direction: row;">
      <input type="hidden" name="<?php _e($csrf_key); ?>" value="<?php _e($csrf_token); ?>">
        <input type="text" class="form-control input-lg" name="terms" placeholder="<?php echo $lang->t('search|search_for'); ?>">
    </form>
    <div class="user-option-col" style="width:36px; float: right; display: flex; flex: 1; justify-content: flex-end; position: inherit;">
      <div class="dropdown-box">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img src="<?php echo ASSET_URL ."images/option-icon.png"; ?>"></button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <?php if (userIsValid()): ?>
                <li><a href="<?php _e(BASE_URL .'admin/manage'); ?>" class="btn-login"><?php echo $lang->t('link|admin'); ?></a></li>
            <?php else: ?>
            	<li><a href="<?php _e(BASE_URL .'admin/login'); ?>" class="btn-login"><?php echo $lang->t('link|login'); ?></a></li>
            <?php endif; ?>
            <li> <a href="#" class="btn-login">Signup</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <div class=" theme-showcase" style="margin-top: 68px;">
     