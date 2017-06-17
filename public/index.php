<?php

require '../vendor/autoload.php';
require 'helpers/helper.php';
Flight::set('secret_key', 'sdaf654sdaf321as34');
Flight::set('domain', 'http://example.com');
$link = connect();


Flight::route('/', function(){

  Flight::render('header', array('inicio' => true), 'header');
  Flight::render('items', array('body' => 'World'), 'body');
  Flight::render('layout');
});

Flight::route('/login', function(){
  $response = array();
  if (isset($_POST['email']) AND isset($_POST['password'])) {

    $secret_key = Flight::get('secret_key');
    $email = $_POST['email'];
    $password = get_crypt_password($_POST['password'], $secret_key);

    $sql_select_by_email = "SELECT * FROM USER WHERE email = '$email'";
    $rq_select_by_email = mysqli_query($link, $sql_select_by_email);
    $user = parse_result($rq_select_by_email);


  if (empty($user)) {
          $response['mensajeerror'] = "Usuario o contraseña incorrecto. Intente nuevamente.";
    			// Flight::json(array("error" => "problema1"));
          Flight::json($response);
          Flight::view()->set($response);

    		} else if ($user[0]['password'] == $password) {
    			// get user auth token
    			$user_id = $user[0]['id'];
    			$sql_get_token = "SELECT name FROM SESSIONS WHERE user_id = '$user_id'";
    			$rq_get_token = mysqli_query($link, $sql_get_token);
    			$founded_token = parse_result($rq_get_token);
    			Flight::json(array("OK" => $founded_token[0]['name']));
    		} else {


    		}
  }else{
    Flight::render('header', array('inicio' => true), 'header');
    Flight::render('login-admin', array('body' => 'World'), 'body');
    Flight::render('layout');
  }
});
Flight::route('/admin', function(){
  if (isset($_POST['token'])) {
    Flight::render('header', array('inicio' => true), 'header');
    Flight::render('items-admin', array('body' => 'World'), 'body');
    Flight::render('layout');
  }else{
    Flight::redirect('/login');

  }

});

Flight::start();
