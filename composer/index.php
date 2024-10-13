<?php 

    require_once("vendor/autoload.php");

//a partir daqui é cópia de basic usage

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('banco de dados');
$log->pushHandler(new StreamHandler('path/to/warning.log', Level::Warning));

// add records to the log
$log->warning('Cuidado, aquivo não encontrado');
$log->error('Erro ao tentar abrir arquivo');

?>