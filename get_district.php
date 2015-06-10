
<?php
require_once 'config.php';
?>
<?php
$district = $_GET['district'];
echo "<option></option>";
$sql = "select distinct(village_panchayat) from schools where district = '".$district."' order by village_panchayat";
$village = mysql_query($sql) or die(mysql_error());
while ($row = mysql_fetch_array($village)) {
echo "<option>" . $row['village_panchayat'] . "</option>";
}
?>