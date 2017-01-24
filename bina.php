#!/usr/bin/php5-cgi -q
<?php

//CRIA ABERTURA DE MANIPULADORES DE ARQUIVOS
if (!defined('STDIN')){
        define('STDIN',fopen('php://stdin','r'));
}
if (!defined('STDOUT')){
        define('STDOUT',fopen('php://stdout','r'));
}
if (!defined('STDERR')){
        define('STERR',fopen('php://stderr','r'));
}

//RECUPERA VARIAVERIS DO AGI
while(!feof(STDIN)){
        $temp = trim(fgets(STDIN,4096));
        if (($temp == "") || ($temp == "\n")) {
                break;
        }
        $s = split(":",$temp);
        $agi[str_replace("agi_","",$s[0])] = trim($s[1]);
}

//recupera o argumento passado no dialplan
//$argumento = $argv[1];

//recupera o campo callerid do array $agi[], que foi passado pelo asterisk na chamada do AGI
$bina = $agi["callerid"];

printf("EXEC PLAYBACK /pabx/agi/ramal \n",STDOUT,STDIN);
printf("SAY DIGITS ".$bina." \"\" \n",STDOUT,STDIN);

//fwrite(STDOUT,"SAY DIGITS ".$bina."\n");
//fflush($stdout);

?>
