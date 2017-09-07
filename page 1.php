<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="title" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
</head>
<body>
<div id="wrapper">
<?php require 'bloks/header.php'; ?>
<!-- основной блок -->
 <div id="middle">
  <div id="container">
  <div id="content">
<!-- между метками AAA и BBB будем писать все наполнение сайта -->
<!-- AAA -->
	 <h2 align="center" style="color:#009933;">Динамический сайт - страница 1</h2>
	 <br>
	 <h3 align="center">наполнение может быть любое...</h3>
	 <br>
    <p class="p_1" >
	 Основной принцип динамики данного сайта - это отделение блоков <b>header, sideLeft и footer</b><br>
     в отдельные файлы с расширением <b>.php</b>, и подключение их при помощи функции PHP <span style="color:#009900;">require</span> ко всем <br>
     создаваемым файлам. На данном шаблоне будет создано три страницы, для более точного примера.<br>
     Даже если вы не знакомы с языком PHP, то можно просто вставлять свои материалы в отдельные файлы <br>
     между метками.
	  </p>
      <p class="p_1" >
      Для файла <big>header</big> нужно придумать фон, или нарисовать красивую шапку, по принципу обычного <big>HTML сайта</big>.
      Колоссальное удобство будет сильно заметно, когда сайт разрастется на несколько десятков<br> страниц и управлять баннерами и основным меню
      на сайте будет очень просто по данному принципу.<br>
      Такая - же ситуация и с другими блоками.
      </p>
      <p class="p_1" >
      Основное наполнение - <big>контент</big>, нужно делать посредством изменения файла temp.php между метками <big>"AAA и BBB"</big>  и присвоением ему названия, обязательно с расширением <b>.php</b> (важно), например - <big>page 1.php, или rabota.php.</big> Редактировать можно в программе <big>Adobe Dreamweaver CS3</big> , или <big>PHP Expert Editor</big>, который бесплатно можно скачать на официальном сайте.
      </p>
      <p class="p_1" >
      <big>Очень важно</big> - запускать такой сайт нужно на локальном сервере, если у вас его нет, то установите, это довольно просто.
      </p>
      <p align="right">по материалам сайта <a href="http://kapon.com.ua/">kapon.com.ua/</a></p>
      <br>
<!-- BBB -->
<!-- наполнение сайта - наш контент -->
  </div><!-- #content-->
</div><!-- #container-->
<?php require 'bloks/sideLeft.php'; ?>
<?php require 'bloks/footer.php'; ?>