<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Lato');
body { background-color: black; color: white;font-family: 'Lato', serif; font-size: 16px; }
p { color: white; }
</style>
</head>

<body>

<?php
//  Written by Diveyez
echo "<h4>LIBRARY SEARCH</h4>";
//
//
//
//
?>

<?php
// CURL BITCES
$ch = curl_init();
$search = "1901";
$encode = urlencode($search);
// 
curl_setopt($ch, CURLOPT_URL, "http://localhost:8983/solr/Library/select?q=".$encode."&wt=php&indent=true&debugQuery=true&rows=5000");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
// 
$re = curl_exec($ch);
curl_close($ch);
//
// MORE? 
$arr;
eval("\$arr = " . $re . ";");
// FINALIZING
//
echo "<b>You searched for:</b><i>" . $search . "</i>";
echo "</br>";
echo "<b>Found:</b><i> " . $arr['response']['numFound'] . "</i> results\n";
	echo "</br>";
foreach($arr['response']['docs'] as $item)
 {
    echo "<b>location:</b>" . $item['id']. "\n";
	echo"</br>";

}
?>
</br>
<p>Written by R. Neff aka <a href="https://github.com/diveyez/">Diveyez 2018</a></p>
</body>
</html>
