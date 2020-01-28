<?php
error_reporting(~E_ALL);



$link=mysqli_connect("10.33.0.5","root","root","mysql");
if(!$link) die('连接失败'.mysqli_connect_error());





$redis = new Redis();
$redis->connect('10.33.0.110',6379);
$redis->auth('root');
$redis->set('docker_redis_test','success');
echo $redis->get('docker_redis_test');

?>