<html><head><meta charset="UTF-8"/>
  		<meta name="description" content="Black Hole Search"/>
  		<meta name="keywords" content="Bringing Solr Indexing and Machine Learning Interfacting to your Data Directories."/>
  		<meta name="author" content="diveyez@r2nhosting.com"/>
  		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<link rel="stylesheet" type="text/css" href="style.css"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"></head><body><div id="cont">
			<a href="./"><img src="./images/blackhole.png" height="125" width=" 175"></img></a>
								<div class="tooltip"><span class="tooltiptext"/>Library: "corename" </br> Server: localhost</span>
								<form method="post" action="search.php"/>
                <p><b>Keywords:</b><input name="search" type="text" />
                <b>Library:</b><input name="library" type="text" />
                <b>Server:</b><input name="server" type="text" />
                <input class="button1" name="submit" type="submit" value="Search The Galaxy"/></p></form></div>
								<button onclick="goBack()">Go Back To Search</button>
								<script> function goBack() { window.history.back(); } </script>
								<div id="ww">
			<?php
				if($_POST['search']) { echo "</br>Search Successful, here are the results."; }
					else { echo ("</br>You did not search! Try again!"); }
								$query = $_POST['search']; $library = $_POST['library']; $server = $_POST['server'];
								echo "</br>"; // Gonna need more fancy shit here to wow them
		 						$starttime = microtime(true); $endtime = microtime(true); printf("Search performed in %f seconds", $endtime - $starttime );
								$ch = curl_init(); $encode = urlencode($query); $encode1 = urlencode($library); $encode2 = urlencode($server);
								curl_setopt($ch,CURLOPT_URL,"http://".$encode2.":8983/solr/".$encode1."/select?q=".$encode."&fl=id&fl=score&fl=highlighting&fl=content&fl=manu&indent=true&hl=true&hl.q=".$encode."&hl.snippets=1&hl.method=unified&hl.bs.type=WORD&hl.maxAlternateFieldLength=25&hl.encoder=html&wt=php&hl.tag.pre=<em>&hl.tag.post=</em>&hl.usePhraseHighlighter=true&hl.maxAnalyzedChars=250&results=50&hl.requireFieldMatch=true");
                // FIXING THE BULK OUTPUT hl.fragmenter=regex&hl.regex.slop=0.5&hl.fl=text_*&hl.fragsize=20&hl.defaultSummary=true&hl.highlightMultiTerm=true&
                // Alternate Field Maybe? &hl.alternateField=-
                curl_setopt($ch, CURLOPT_HEADER, false);
								curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); $re = curl_exec($ch); curl_close($ch); $arr;
								eval("\$arr = " . $re . ";"); echo "<p><b>You searched for:</b><i>" . $query . "</i>"; echo "</br>";
								echo "<b>Found:</b><i>" . $arr['response']['numFound'] . "</i> results\n and displaying max 50.</p>" ;
								echo "<ptext><b>Found Matching Text/Terms:</b></ptext></br>";
								foreach($arr['response']['docs'] as $text)
								{ echo "<div id='ww2'><pcontent><b>Found:</b></br><b>" . $text['id'] . "</b></br>" .$text['content'] . "</br>" . "\n</pcontent></div></br></br>"; } //echo implode(',', $arr), "\n";// ?>
							</div></div></br>
              <!-- back button -->
							<button onclick="goBack()">Go Back To Main Page</button>
							<script> function goBack() { window.history.back(); } </script><!-- back button --> </br>
							<!-- FOOTER -->
							<div id="footer"><center>
									<h5> <a href="https://github.com/diveyez/blackhole/">Black Hole Search</a> by <a href="https://github.com/diveyez/">Diveyez</a></p><p>&copy; 2016-<?php echo date("Y"); ?></h5>
													<h5>Los Angeles, California <a href="https://r2nhosting.com">R2N Hosting Solutions</a></h5> <h5>Made With</h5></br>
													<a href="http://lucene.apache.org/solr/"><img src="images/solr.png"/></img></a>
												</center></div></div></body></html>
