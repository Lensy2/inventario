<?php
date_default_timezone_set('America/Bogota');

error_reporting(0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
ini_set ('error_reporting', E_ALL & ~E_NOTICE);
session_start();

$_SESSION['ubicacion']=$_POST['ubicacion'];
$ubicacion=$_SESSION['ubicacion'];

$_SESSION['fecha']=$_POST['fecha'];
$fecha=$_SESSION['fecha'];


?>

<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <title>Ingresar Rollos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="assets/js/require.min.js"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <link href="assets/css/dashboard.css" rel="stylesheet" />
    <script src="assets/js/dashboard.js"></script>
    <link href="assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="assets/plugins/charts-c3/plugin.js"></script>
    <link href="assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="assets/plugins/maps-google/plugin.js"></script>
    <script src="assets/plugins/input-mask/plugin.js"></script>
</head>
<body class="">
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown d-none d-md-flex"></div>
                    </div>
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 ml-auto">
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3 my-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action=" " method="post" class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ingresar Rollos</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <table>
                                            <BR>
                                            <td>
                                                <form action="verificaregistro2.php" method=POST >
                                                    <h3> Fecha <input type=text   name=fecha  value= <?echo $fecha?> />*<br><br> </h3>
                                                    <h3> Aérea <input type=text   name=ubicacion  value= <?echo $ubicacion?> />*<br><br> </h3>
                                                    <h3> Rollo <input type=text   name=rollo required />*<br><br> <h3>

                                                            <input type=submit class="btn btn-primary" value='Ingresar' />

                                            </td></form>
                        </form>
                                         </table>
                                       </div>
                                   </div>
                              </div>
                           </div>
                       </div>
                   </div>
              </div>
          </div>
      </div>
   </body>
</html>







   
   