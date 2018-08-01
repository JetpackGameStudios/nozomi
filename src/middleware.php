<?php
spl_autoload_register(function ($classname) {
  require(__DIR__ . "/../nozomi/classes/" . $classname . ".php");
});

// Application middleware

$nozomiAdminAuth = function ($request, $response, $next) {
  $conf = new Configuration();
  $config = $conf->GetConfig();
  if ($config) {
    $token = $_SESSION['token'];
    $auth = new Authorization();
    if (!$auth->auth($token, 1)) {
      $response = $response->withRedirect('/nozomi/login');
    } else {
      $response = $next($request, $response);
    }

  } else {
    $response = $response->withRedirect('/');
  }
  return $response;
};

$nozomiDesignerAuth = function ($request, $response, $next) {
  $conf = new Configuration();
  $config = $conf->GetConfig();
  if ($config) {
    $token = $_SESSION['token'];
    $auth = new Authorization();
    if (!$auth->auth($token, 2)) {
      $response = $response->withRedirect('/nozomi/login');
    } else {
      $response = $next($request, $response);
    }

  } else {
    $response = $response->withRedirect('/');
  }
  return $response;
};

$nozomiAuth = function ($request, $response, $next) {
  $conf = new Configuration();
  $config = $conf->GetConfig();
  if ($config) {
    $token = $_SESSION['token'];
    $auth = new Authorization();
    if (!$auth->auth($token, 3)) {
      $response = $response->withRedirect('/nozomi/login');
    } else {
      $response = $next($request, $response);
    }

  } else {
    $response = $response->withRedirect('/');
  }
  return $response;
};