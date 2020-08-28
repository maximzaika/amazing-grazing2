<?php
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, 'https://gnews.io/api/v3/search?q=grazing&max=10&country=au&mindate=2020-06-01&in=title&token=2f43dc9d754f3008f68a7f50b670c208'); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
$data = curl_exec($ch); 
curl_close($ch); ?>