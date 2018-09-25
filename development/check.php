
				if($_POST['search']) { echo "Search Successful, here are the results."; }
					else { echo ("You did not search! Try again!"); }
								$query = $_POST['search']; $library = $_POST['library']; $server = $_POST['server'];
								echo ""; // Gonna need more fancy shit here to wow them
		 						$starttime = microtime(true); $endtime = microtime(true); printf("Search performed in %f seconds", $endtime - $starttime );
								$ch = curl_init(); $encode = urlencode($query); $encode1 = urlencode($library); $encode2 = urlencode($server);
								curl_setopt($ch,CURLOPT_URL,"http://".$encode2.":8983/solr/".$encode1."/select?q=".$encode."&fl=id&fl=score&fl=highlighting&fl=content&fl=manu&indent=true&hl=true&hl.q=".$encode."&hl.snippets=1&hl.method=unified&hl.bs.type=SENTENCE&hl.maxAlternateFieldLength=5&hl.encoder=html&wt=php&hl.tag.pre=<em>&hl.tag.post=</em>&hl.usePhraseHighlighter=true&hl.maxAnalyzedChars=15&results=50&hl.requireFieldMatch=true");
                curl_setopt($ch, CURLOPT_HEADER, false);
								curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); $re = curl_exec($ch); curl_close($ch); $arr;
								eval("\$arr = " . $re . ";"); echo "You searched for:" . $query . ""; echo "";
								echo "Found:" . $arr['response']['numFound'] . " results\n and displaying max 50." ;
								echo "Found Matching Text/Terms:";
								foreach($arr['response']['docs'] as $text)
								{ echo "Found:" . $text['id'] . "" .$text['content'] . "" . "\n"; }
