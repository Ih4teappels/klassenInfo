    <?php
// In dit bestand vind je alle instellingen, zoals databasegegevens.

// Voor de veiligheid zou dit bestand boven de webroot geplaatst moeten worden. 

// Definieer de status van het project
define('PROJECT_STATUS','development');

// Stel de instellingen in op Nederlands
setlocale(LC_ALL, 'nl_NL');

// databasegegevens

    if($_SERVER['HTTP_HOST'] == 'localhost'){
        define('DB_HOST','localhost');
        define('DB_NAME','klas');
        define('DB_USERNAME','root');
        define('DB_PASSWORD','');
    } else {
        define('DB_HOST','127.0.0.1');
        define('DB_NAME','overDeSchutting');
        define('DB_USERNAME','ODS');
        define('DB_PASSWORD','overDeSchuttingPass');
        //ODS
        //overDeSchuttingPass
    }


?>
