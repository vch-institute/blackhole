<html>
<head>
<style>
		@import url('https://fonts.googleapis.com/css?family=Lato');
		body { background-repeat: no-repeat; background-color: #8e8e8e; black: white; font-family: 'Lato', serif; font-size: 16px; }
		p { color: black; font-size: 25px; }
		h5 { color: #000; font-size: 28px; text-shadow: 1.5px 1.5px 5px black; }
		p1 { font-size: 18px; border-radius: 0px; background-color: white; color: black; white-space: nowrap; width: 200px; border: 0.1px solid #000; overflow: hidden; text-overflow: ellipsis; opacity: 0.65; filter: alpha(opacity=50); }
		p1:hover { opacity: 1.0; filter: alpha(opacity=100); /* For IE8 and earlier */ }
		p2 { font-size: 18px; border-radius: 0px; background-color: black; color: red; white-space: nowrap; width: 200px; border: 0.1px solid #000; overflow: hidden; text-overflow: ellipsis; opacity: 0.65; filter: alpha(opacity=50); }
		p2:hover { opacity: 1.0; filter: alpha(opacity=100); /* For IE8 and earlier */ }
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
	<a href="./"><img src="./images/blackhole.png" height="250" width=" 350"></img></a>
		<div class="tooltip">
			<span class="tooltiptext">Libraries: Library </br> Server: localhost</span>
			<form method="post" action="search.php">
                <p><b>Keywords:</b><input name="search" type="text" />
                <b>Library:</b><input name="library" type="text" />
                <b>Server:</b><input name="server" type="text" />
                <input class="button" name="submit" type="submit" value="Search The Galaxy"/></p></form></div>
	<?php
	if($_POST['search']) { echo "</br>Search Successful, here are the results."; }
	else { echo ("</br>You did not search! Try again!"); }
	$query = $_POST['search']; $library = $_POST['library']; $server = $_POST['server'];
		echo "</br>"; // Gonna need more fancy shit here to wow them
		$starttime = microtime(true); $endtime = microtime(true); printf("Search performed in %f seconds", $endtime - $starttime );
	$ch = curl_init(); $encode = urlencode($query); $encode1 = urlencode($library); $encode2 = urlencode($server);
	curl_setopt($ch, CURLOPT_URL, "http://".$encode2.":8983/solr/".$encode1."/select?q=".$encode."&fl=id&fl=score&wt=php&indent=true&&hl=on&debugQuery=on&rows=5000&hl.fl=".$encode."hl.snippets=1&hl.fragsize=0");
	curl_setopt($ch, CURLOPT_HEADER, false); curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); $re = curl_exec($ch); curl_close($ch); $arr;
	eval("\$arr = " . $re . ";"); echo "<p><b>You searched for:</b><a></a><i>" . $query . "</i>"; echo "</br>";
	echo "<b>Found:</b><i>" . $arr['response']['numFound'] . "</i> results\n </p>" ;

	//echo "<b>Found Text:</b><i>"; foreach($arr['highlighting']['dc_title'] as $omittext) { echo "TESTING" $omittext['dc_titile'] "\n" ; }

	echo "</br>"; foreach($arr['response']['docs'] as $item) { echo "<b></b> <p1> " . $item['id'] . "</p1><p2><b>Score:</b>" . $item['score'] . "</p2>\n"; echo "</br>"; }
	?></br><a href="../blackhole/index.php" />GO BACK TO SEARCH...............</a>
</div><center></br>				<h5> <a href="https://github.com/diveyez/blackhole/">Black Hole Search</a> by <a href="https://github.com/diveyez/">Diveyez</a></p><p>&copy; 2016-<?php echo date("Y"); ?></h5>
													<h5>Los Angeles, California <a href="https://r2nhosting.com">R2N Hosting Solutions</a></h5> <h5>Made With</h5></br><a href="http://lucene.apache.org/solr/"><img src="images/solr.png"/></img></a>
													</center>
												</body>
</html>
14
