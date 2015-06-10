<?php

echo $value = '{"tradeoff_analytics":[{"name":"Tradeoff Analytics-ah","label":"tradeoff_analytics","tags":["watson","ibm_created","ibm_beta","ibm_dedicated_public"],"plan":"free","credentials":{"url":"https://gateway.watsonplatform.net/tradeoff-analytics-beta/api","username":"d61e40fd-e546-4e3d-a5e1-56aa10574221","password":"v3DPPpVOQZDD"}}],"mysql-5.5":[{"name":"mysql-je","label":"mysql-5.5","tags":["mysql","relational","data_management","ibm_experimental"],"plan":"100","credentials":{"name":"df0f277212ff54a83bb3910f8b6b7520c","hostname":"198.11.234.66","host":"198.11.234.66","port":3307,"user":"uaDGnAksNHKbw","username":"uaDGnAksNHKbw","password":"p8Ox19EL2biGR","uri":"mysql://uaDGnAksNHKbw:p8Ox19EL2biGR@198.11.234.66:3307/df0f277212ff54a83bb3910f8b6b7520c"}}]}';

$vcap_services = json_decode($value);

print_r($vcap_services);
echo "-----------------------------------";

$db = $vcap_services->{'mysql-5.5'}[0]->credentials;
print_r($db);

print_r($db);
echo "test 1";

$mysql_database = $db->name;
$mysql_port=$db->port;
$mysql_server_name =$db->host . ':' . $db->port;
$mysql_username = $db->username; 
$mysql_password = $db->password; 
echo "test 2";

echo $mysql_server_name;

