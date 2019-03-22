<?php 
/*Database Table
here is where the database 
connection will exist.
To be included in any other files
*/

//Show php errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = new mysqli("localhost", "mtugulea" ,"useiShiz", "mtugulea");

if(!$conn)
{
	echo"Database Connection Error;";	
}	
 
?>
