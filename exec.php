<?php
// $DIR_PATH = "";
function exec_command() {
	// $var_exists = shell_exec( "echo \$RECON_PATH" );
	
	// if ( empty( $var_exists ) ) {
	// 	shell_exec( "export RECON_PATH=" . $DIR_PATH );
	// }

	if ( isset( $_POST['command'] ) ){
			$program=$_POST['command'];
			$output = shell_exec('bash /var/www/html/bbht-online/recon.sh' . ' ' . $program);
			echo $output;
	}
}
exec_command();