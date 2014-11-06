<?php
    # Import de la conf Mysql
    require 'settings.php';

    # Ecriture d'un fichier le log partagé entre les releases
    $log_file = 'app/logs/access.log';
    $log_data = '';
    if (file_exists($log_file)) {
        $log_data = file_get_contents($log_file);
    }
    $log_data .= 'Access ' . date('H:i:s d/m/Y') . "\n";
    file_put_contents($log_file, $log_data);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello JeUXdiCode</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <style type="text/css">
            h1 { text-align: center; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Hello JeUXdiCode</h1>

            <div class="row">
                <div class="col-md-8">
                    <h3>Contenu de "settings.php"</h3>
                    <pre><?php var_export($mysql); ?></pre>

                    <hr />
                    <h3>Contenu de "app/logs/access.log"</h3>
                    <pre><?php print $log_data; ?></pre>
                </div>

                <div class="col-md-4">
                    <img src="chuck.jpg" />
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </body>
</html>
