<html>
<head>
<style>
		@import url('https://fonts.googleapis.com/css?family=Lato');
		body { background-repeat: no-repeat; background-color: white; black: white; font-family: 'Lato', serif; font-size: 16px; }
		p { color: black; font-size: 18px; }
		h5 { color: #000; font-size: 28px; text-shadow: 1.5px 1.5px 5px black; }
		p1 { border-radius: 25px; background-color: black; color: red; white-space: nowrap; width: 200px; border: 0.1px solid #000; overflow: hidden; text-overflow: clip; opacity: 0.75; filter: alpha(opacity=50); }
		p1:hover { opacity: 1.0; filter: alpha(opacity=100); /* For IE8 and earlier */ }
		pactive { font-size: 20px; color: #4CAF50; text-shadow: 1.5px 1.5px 3px red; } a { color: red; }
		a { color: red; }
		.button { border-radius: 25px; background-color: #555555; color: #fff; } /* Black */
		.button:hover { border-radius: 25px; background-color: #4CAF50; /* Green */ color: white; -webkit-transform: rotateX(150deg); /* Safari */ ntransform: rotateX(150deg);}
		input[type=text] { width: 130px; -webkit-transition: width 0.4s ease-in-out; transition: width 0.4s ease-in-out; }
		input[type=text]:focus { width: 250px; }
		.tooltip { position: relative; display: inline-block; border-bottom: 1px solid black; }
		.tooltip .tooltiptext { visibility: hidden; width: 120px; background-color: #555; color: #fff; text-align: center; padding: 5px 0; border-radius: 6px; position: absolute;
		z-index: 1; bottom: 125%; left: 50%; margin-left: -60px; opacity: 0; transition: opacity 0.3s; }
		.tooltip .tooltiptext::after { content: ""; position: absolute; top: 100%; left: 50%; margin-left: -5px; border-width: 5px; border-style: solid;
		border-color: #555 transparent transparent transparent; }
		.tooltip:hover .tooltiptext { visibility: visible; opacity: 1; }
			</style></head><body>
		<a href="../search/index.php" />GO BACK...</a><img src="./images/blackhole.png" height="250" width=" 350"></img>
		<form method="post" action="search.php">
                <p><b>Keywords:</b><input name="search" type="text" />
                <b>Library:</b><input name="library" type="text" />
                <b>Server:</b><input name="server" type="text" />
                <input class="button" name="submit" type="submit" value="Search The Galaxy"/></p></form>
	<?php
	if($_POST['search']) { echo "Search Successful, here are the results."; }
	else { echo ("You did not search! Try again!"); }
	$query = $_POST['search']; $library = $_POST['library']; $server = $_POST['server'];
		echo "</br>"; // Gonna need more fancy shit here to wow them
	$ch = curl_init(); $encode = urlencode($query); $encode1 = urlencode($library); $encode2 = urlencode($server);
	curl_setopt($ch, CURLOPT_URL, "http://".$encode2.":8983/solr/".$encode1."/select?q=".$encode."&fl=id&wt=php&indent=true&debugQuery=true&rows=5000");
	curl_setopt($ch, CURLOPT_HEADER, false); curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); $re = curl_exec($ch); curl_close($ch); $arr;
	eval("\$arr = " . $re . ";"); echo "<b>You searched for:</b><i>" . $query . "</i>"; echo "</br>";
	echo "<b>Found:</b><i> " . $arr['response']['numFound'] . "</i> results\n" ;
	echo "</br>"; foreach($arr['response']['docs'] as $item) { echo "<b></b><p1> " . $item['id'] . "\n"; echo "</p1></br>"; }
	?></br><a href="../search/index.php" />GO BACK TO SEARCH...............</a>
		</body>
</html>
