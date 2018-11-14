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
    <link rel="icon" href="plasmar.jpg" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="plasmar.jpg" />
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
                                                 <form action="verificaregistro.php" method=POST>
                                                        Fecha <input type="date" name=fecha required />*<br><br>
                                                        Aérea
                                                     <select  name=ubicacion required />
                                                        <option value="extruder"/>Extruder
                                                        <option value="impresion"/>Impresión
                                                        <option value="laminacion"/>Laminación
                                                        <option value="refilado"/>Refilado
                                                        <option value="bodega"/>Bodega
                                                        <option value="pisobodega"/>Piso Bodega
                                                     </select>*<br><br>
                                                            <input type=submit class="btn btn-primary" value='Ingresar' /><br><br>
                                                 </form>
                                              </td>
                                        </table>
                                     </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
     </div>
  </body>
</html>

