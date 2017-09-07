<?php
require_once 'vendor/autoload.php';
//namespace Facebook\WebDriver;
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);


  require Facebook\WebDriver\Remote\RemoteWebDriver;

$browser_type = 'firefox';
$host = 'http://google.com';
  $driver = RemoteWebDriver::create($host, 0 );
# :firefox => firefox
# :chrome  => chrome
# :ie      => iexplore
?>
