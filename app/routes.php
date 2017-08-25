<?php

$router->get('', 'PageController@index');
$router->get('about', 'PageController@about');
$router->get('about/culture', 'PageController@aboutCulture');
$router->get('contact', 'PageController@contact');



