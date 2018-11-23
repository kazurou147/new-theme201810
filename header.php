<!DOCTYPE html>
<html lang="ja">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?ver=<?php echo date('U'); ?>">
<link rel="alternate" type="application/rssxml" title="RSSフィード" href="<?php bloginfo('rss2_url'); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php wp_head(); ?>

<meta name="google-site-verification" content="IGjtE-0jJ2d6vtVKLAWPN0-mR22-XQ1TdnOrjvaD9C4" />
</head>


<div class="site-wrapper">

  <div class="site-wrapper-inner">

	<div class="cover-container">

	  <header>
		<div class="container-fluid width1900">

		  <div class="header-brand"><a class="hover-none" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' );  ?></a>
		  </div>

		  <div class="header-right-wrap">
	  	  	  <div class="nav-overlay" id="nav-overlay"></div>
		  	  <div class="header-nav-menu-wrap">
		  	  	<div class="haeder-nav-switchBtn" id="haeder-nav-switchBtn"></div>
		  	  </div>
			  <div class="header-nav-pc" id="header-nav-pc">
				<?php wp_nav_menu( array( 'theme_location' => 'navigation' ) ); ?>

            </div>
		  </div>
		</div>
	  </header>


