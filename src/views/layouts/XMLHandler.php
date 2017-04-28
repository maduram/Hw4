<?php

namespace excalibur\hw4\views\layouts;

use excalibur\hw4\configs as CFG;

$cfg = new CFG\Config();

$postXML = $cfg::BASE_URL."index.php?c=read&m=display&arg1="; //.$hash
$post_string = '<?xml version="1.0" encoding="UTF-8"?>
<spreadsheet>
    
</spreadsheet>';

$header = $post_string;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $postXML);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $header);

$data = curl_exec($ch);

if (curl_errno($ch)) {
    print curl_error($ch);
} else {
    curl_close($ch);
}
