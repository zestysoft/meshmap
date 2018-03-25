<?php
/*Aug 6, 2017 4:14:14 PM
*update_location.php
*Eric Satterlee - KG6WXC aka ride
*/
//simple page to change node locations on the map
//this page does the actual changing
$INCLUDE_DIR = "/srv/meshmap";
$USER_SETTINGS = parse_ini_file($INCLUDE_DIR . "/scripts/user-settings.ini");
require $INCLUDE_DIR . "/scripts/wxc_functions.inc";
@include $INCLUDE_DIR . "/wxc_custom.inc";

$sql_connection = wxc_connectToMySQL();

$query =    "UPDATE " . $USER_SETTINGS['sql_db_tbl'] .
            " SET " . $_POST['column'] . " = '" . $_POST['editval'] .
            "', location_fix = 1 WHERE node = '" . $_POST['node'] . "'";
if ($_POST['column'] == "location_fix") {
    $_POST['editval'] = strtolower($_POST['editval']);
    if ($_POST['editval'] == "yes<br>" || $_POST['editval'] == "yes") {
         $_POST['editval'] = 1;
     }
     if ($_POST['editval'] == "no") {
         $_POST['editval'] = 0;
     }
     $query =   "UPDATE " . $USER_SETTINGS['sql_db_tbl'] .
                " SET " . $_POST['column'] . " = '" . $_POST['editval'] .
                "' WHERE node = '" . $_POST['node'] . "'";
    $result = wxc_putMySql($query);
}else {
    $result = wxc_putMySql($query);
}
if ($_POST['column'] == "location_fix") {
    $query = "SELECT if(" . $_POST['column'] . ", 'yes', 'no') as location_fix FROM " . $USER_SETTINGS['sql_db_tbl'] . " WHERE node = '" . $_POST['node'] . "'";
}else {
    $query = "SELECT " . $_POST['column'] . " FROM " . $USER_SETTINGS['sql_db_tbl'] . " WHERE node = '" . $_POST['node'] . "'";
}
$result = wxc_getMySql($query);
mysqli_close($sql_connection);
echo $result[$_POST['column']];
?>
