<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/dist/images/favicon.ico" type="image/x-icon">
<title><?php bloginfo( 'name' ); ?></title>
<?php wp_head(); ?>
</head>
<body>
  <div class="navbar-fixed">
    <nav class="blue-bg">
      <div class="nav-wrapper blue-bg">
        <a href="#" class="brand-logo">PulseCheck</a>
        <menu>
          <?php wp_nav_menu(); ?>
        </menu>
      </div>
    </nav>
  </div>
