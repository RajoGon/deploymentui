<?php
	$serverName = "deploymentmetadata.database.windows.net"; //serverName\instanceName, portNumber (default is 1433)
	$connectionInfo = array( "Database"=>"deploymentmetadatadb", "UID"=>"SQLAdmin", "PWD"=>"MyPassword@123");
	$conn = sqlsrv_connect( $serverName, $connectionInfo);

	if( $conn ) {
	     echo "Connection established.<br />";
	}else{
	     echo "Connection could not be established.<br />";
	     die( print_r( sqlsrv_errors(), true));
	}
?>