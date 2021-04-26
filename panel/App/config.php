<?php




define( 'link' , 'website.link' );
define( 'favicon' , 'website.icon' );
define(
  'domain' ,
  (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on')
  ?
  $domain = 'http://'.$_SERVER['HTTP_HOST']
  :
  $domain = 'https://'.$_SERVER['HTTP_HOST']
);


/******  DataBase --> Information ********/
define( 'DB_HOST' , 'localhost' );
define( 'DB_DATABASE' , 'vbName' );
define( 'DB_USERNAME' , 'vbUserName' );
define( 'DB_PASSWORD' , 'password' );
define( 'CHARSET' , 'utf8' );
/******  DataBase --> Information ********/


/******  User - Message --> Information ********/
define( 'danger' , 'Problem Has Occurred - You Are Redirected.' );

define( 'success' , 'Successful - You are being redirected.' );

define( 'warning' , 'One thing to watch out for - You are being redirected.' );

define( 'info' , 'Nothing seems to be changing - You are being diverted.' );

define( 'secondary' , 'Value Not Found - You are being redirected.' );
/******  User - Message --> Information ********/



/******  Constant --> Information ********/
define( 'dil' , 'TR' );
setlocale(LC_TIME, strtolower(dil).'_'.dil.'.UTF-8');
define( 'dateClock' , strftime('%d %B %Y | %A - %T') );
define( 'user' , 'Ruşan Ali' );
define( 'ipData' , $_SERVER["REMOTE_ADDR"] );
define( 'urlMap' , $_SERVER["REQUEST_URI"] );
define( 'space' , '&nbsp;' );
/******  Constant --> Information ********/


/******  App / Project --> Information ********/
define( 'dirnameProject' , dirname($_SERVER['PHP_SELF']) );
define( 'dirnameProjectHome' , 'dashboard' );

define( 'homeRoot' , domain.dirnameProject );
define( 'documentRoot' , $_SERVER['DOCUMENT_ROOT'] );
define( 'homeDirectory' , dirnameProject.'/App/' ); // '/'.
define( 'systemDirectory' , dirnameProject.'/Core/' );
/******  App / Project --> Information ********/
