<?php

function exec_command() {
            if ($_POST['command']){
                $program=$_POST['command'];
                $output = shell_exec('/var/www/html/recon.sh $program');
                echo $output;
        }
}
exec_command();