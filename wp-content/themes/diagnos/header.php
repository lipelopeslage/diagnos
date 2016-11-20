<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0, user-scalable=no"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<title>DIAGNOS | Laboratorio em Santos | Medicina Especializada  (13) 3342-4667</title>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,200,700,500' rel='stylesheet' type='text/css'>
	<?php wp_head();?>
</head>
<?if(is_home()):?>
	<body class="home">
<?else:?>
	<body class="<?=$post->post_name?> <?=(is_single()) ? 'central-de-relacionamento blog' : '';?> <?=(is_page() && $post->post_parent) ? get_post($post->post_parent)->post_name : '';?>">
<?endif;?>
	<header class="container-fluid">
		<div class="container holder">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4">
					<a href="<?=esc_url(home_url());?>"><img src="<?=get_template_directory_uri()?>/assets/image/logo.png" alt=""></a>
				</div>
				<div class="col-xs-10 col-sm-9 col-md-8 search hidden-sm hidden-xs">
					<form action="<?=esc_url(home_url());?>" method="get" class="row">
						<div class="col-sm-5 col-md-5 field">
							<input type="text" name="s" placeholder="Pesquisa" class="form-control">
						</div>
						<div class="col-sm-1 col-md-1 button">
							<button type="submit" class="col-md-1">btn</button>
						</div>
					</form>
				</div>				
			</div>
		</div>
		<?if(!is_home()):?>
		<menu class="">
			<div class="container menu-holder">
				<div class="row links">
					<div class="col-xs-12 col-sm-12 col-md-4">
						<a href="<?=esc_url(home_url());?>"><img src="<?=get_template_directory_uri()?>/assets/image/logo_white.png" alt=""></a>
					</div>
					<?
						wp_nav_menu(array(
							'menu'=>'Principal',
							'menu_class'=>'row',
							'container_class'=>'container col-xs-12 col-sm-12 col-md-8'
						));
					?>
				</div>
				<div class="row toggle">
					<div class="menu_icon">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</div>
				</div>
			</div>
		</menu>
		<?endif;?>
	</header>
	<main>