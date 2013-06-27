<?php
$googlebottag   = 'Googlebot';
$botgoogle = strpos($_SERVER['HTTP_USER_AGENT'], $googlebottag);


if ($botgoogle === True){
   exit('Error 500 Unwanted visitor!!!!!!');
}