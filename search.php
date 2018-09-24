<html>
		<head>
							<style>
					@import url('https://fonts.googleapis.com/css?family=Lato');
					body { width: 1200px; height: 1200px; background-repeat: no-repeat; background-color: #fefefe; black: white; font-family: 'Lato', serif; font-size: 16px; }
					p { color: black; font-size: 25px; } ptext { font-size: 12px; } pcontent { width: 900px; word-wrap: break-word; }
					h5 { color: #000; font-size: 12px; text-shadow: 1.5px 1.5px 5px black; }
					p1 { width: 900px; word-wrap: break-word; font-size: 12px; }
					p1:hover { opacity: 1.0; filter: alpha(opacity=100); }
					p2 { width: 900px; word-wrap: break-word; font-size: 12px; }
					p2:hover { opacity: 1.0; filter: alpha(opacity=100); }
					pactive { font-size: 20px; color: #4CAF50; text-shadow: 1.5px 1.5px 3px red; } a { color: red; }
					a { color: red; font-size: 18px; }
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
					#ww { width: 900px; border: 1px solid black; padding: 25px; margin: 25px; word-wrap: break-word; }
					#ww1 { width: 900px; padding: 25px; margin: 25px; word-wrap: break-word; }
							</style></head><body>
	<a href="./"><img src="./images/blackhole.png" height="125" width=" 175"></img></a>
		<!-- TOOLTIPS -->
		<div class="tooltip">
			<span class="tooltiptext">Library: <corename> </br> Server: localhost</span>
			<form method="post" action="search.php">
                <p><b>Keywords:</b><input name="search" type="text" />
                <b>Library:</b><input name="library" type="text" />
                <b>Server:</b><input name="server" type="text" />
                <input class="button" name="submit" type="submit" value="Search The Galaxy"/></p></form></div>
								<div id="ww">
			<?php
				if($_POST['search']) { echo "</br>Search Successful, here are the results."; }
					else { echo ("</br>You did not search! Try again!"); }
								$query = $_POST['search']; $library = $_POST['library']; $server = $_POST['server'];
								echo "</br>"; // Gonna need more fancy shit here to wow them
		 						$starttime = microtime(true); $endtime = microtime(true); printf("Search performed in %f seconds", $endtime - $starttime );
								$ch = curl_init(); $encode = urlencode($query); $encode1 = urlencode($library); $encode2 = urlencode($server);
								curl_setopt($ch, CURLOPT_URL, "http://".$encode2.":8983/solr/".$encode1."/select?q=".$encode."&fl=id&fl=score&fl=highlighting&fl=content&fl=manu&fl=creator&indent=true&hl=true&hl.q=".$encode."&hl.snippets=1&hl.fragsize=0&hl.method=unified&hl.bs.type=SENTENCE&hl.defaultSummary=true&hl.maxAlternateFieldLength=50&hl.alternateField=content&hl.encoder=html&wt=php&hl.highlightMultiTerm=true&hl.usePhraseHighlighter=true&hl.maxAnalyzedChars=50&results=50&hl.requireFieldMatch=true");
								curl_setopt($ch, CURLOPT_HEADER, false); curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); $re = curl_exec($ch); curl_close($ch); $arr;
								eval("\$arr = " . $re . ";"); echo "<p><b>You searched for:</b><a></a><i>" . $query . "</i>"; echo "</br>";
								echo "<b>Found:</b><i>" . $arr['response']['numFound'] . "</i> results\n and displaying 50.</p>" ;
								//LOCATIONS
								// echo "</br>"; foreach($arr['response']['docs'] as $item) { echo "<b></b> <p1> " . $item['id'] . "</p1><p2><b>Score:</b>" . $item['score'] . "</p2>\n"; echo "</br>"; }
								// FOUND MATCHING TEXT OUTPUT
								echo "<ptext><b>Found Matching Text/Terms:</b></ptext></br>";
								foreach($arr['response']['docs'] as $text)
								{ echo "<div id='ww2'><pcontent><b>Found:</b></br><b>" . $text['id'] . "</b></br>" .$text['content'] . "</br>" . "\n</pcontent></div></br></br>"; }
			?>
							</div></div></br>
								<a href="../blackhole/index.php" />GO BACK TO SEARCH...............</a></br>
							<!-- FOOTER -->
							<div id="footer"><center>
									<h5> <a href="https://github.com/diveyez/blackhole/">Black Hole Search</a> by <a href="https://github.com/diveyez/">Diveyez</a></p><p>&copy; 2016-<?php echo date("Y"); ?></h5>
													<h5>Los Angeles, California <a href="https://r2nhosting.com">R2N Hosting Solutions</a></h5> <h5>Made With</h5></br><a href="http://lucene.apache.org/solr/"><img src="images/solr.png"/></img></a>
												</center></div></body>
</html>
