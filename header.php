<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TechShum
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>


	<link rel='stylesheet prefetch' href='https://unpkg.com/flickity@2/dist/flickity.min.css'>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Oxygen" rel="stylesheet"> 

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<title>TechShum - Главная</title>

</head>

<body <?php body_class(); ?>>


									<!-- HEADER here start  -->
<div class="HeaderBlock">

  <nav class="Nav1Menu">
    <div class="nav-wrapper">

    	<div class="brand-logo" id="logoMenuIndexW">Tech<b style="color:red;">Shum</b></div>

      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li class="linksMenu"><a href="index.html">Главная</a></li>
		<li class="linksMenu"><a href="portfolio.html">Портфолио</a></li>
		<li class="linksMenu"><a href="contact.html">Заказать проект</a></li>
		<li class="linksMenu"><a href="collective.html">Наш коллектив</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    	<li><a href="index.html">Главная</a></li>
		<li><a href="portfolio.html">Портфолио</a></li>
		<li><a href="contact.html">Заказать проект</a></li>
		<li><a href="collective.html">Наш коллектив</a></li>
  </ul>
          


		<div>
			<div class="hoverLogoIndex">
			<p><div class="logo"><a href="collective.html">TechShum</a></div></p>
			</div>
			<p class="logoTextInformation"><a href="collective.html">-Webstudio-</a></p>
		</div>
</div>

									<!-- HEADER here stop  -->