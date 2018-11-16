<?php

exit;
$memcache = new Memcache;
$memcache->addServer('127.0.0.1',11211);
$memcache->addServer('127.0.0.1',11212);
$memcache->addServer('127.0.0.1',11213);


for($i=0;$i<1000000;$i++){
        $memcache->set('var_key'.$i,'some really big varchar'.$i,MEMCACHE_COMPRESSED,50);
}

$file = '';
$result = file_get_contents($file);
$memcache->set('file',$result);
echo $memcache->get('var_key');
