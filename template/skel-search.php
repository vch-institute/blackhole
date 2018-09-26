<!-- MAIN CONTENT (SEARCH TOOLTIPS)-->
<div class="tooltip">
<span class="tooltiptext">Library:'library'</b> </br> Server: localhost</span>
								<form method="post" action="search.php"/>
                <p><b>Keywords:</b><input name="search" type="text" />
                <b>Library:</b><input name="library" type="text" />
                <b>Server:</b><input name="server" type="text" />
                <input class="button1" name="submit" type="submit" value="Search The Galaxy"/></p></form></div>
<!-- MAIN CONTENT (SEARCH ARRAY CODE)-->
                <div id="ww">
			<?php
				if($_POST['search']) { echo "</br>Search Successful, here are the results."; }
					else { echo ("</br><h1>You did not search! Try again!</h1>"); }
								$query = $_POST['search']; $library = $_POST['library']; $server = $_POST['server'];
								echo "</br>"; // Gonna need more fancy shit here to wow them
		 						$starttime = microtime(true); $endtime = microtime(true); printf("Search performed in %f seconds", $endtime - $starttime );
								$ch = curl_init(); $encode = urlencode($query); $encode1 = urlencode($library); $encode2 = urlencode($server);
								curl_setopt($ch,CURLOPT_URL,"http://".$encode2.":8983/solr/".$encode1."/select?q=".$encode."&hl.q=".$encode."&wt=php&indent=true&fl=id,name,content&hl=on&hl.fl=*&hl.encoder=html&hl.fragmenter=regex&hl.regex.slop=1.0&hl.fl=text_*&hl.usePhraseHighlighter=true&hl.bs.type=WHOLE&hl.defaultSummary=true&hl.offsetSource=POSTINGS&hl.fragsize=125000&hl.maxAnalyzedChars=25000&hl.highlightMultiTerm=true&hl.tag.pre=<b>&hl.tag.post=</b>&results=50");
                curl_setopt($ch, CURLOPT_HEADER, false);                                                                                        //  &group=true&group.field=content //
								curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); $re = curl_exec($ch); curl_close($ch); $arr;
								eval("\$arr = " . $re . ";"); echo "<p><b>You searched for:</b><i>" . $query . "</i>"; echo "</br>";
								echo "<b>Found:</b><i>" . $arr['response']['numFound'] . "</i> results\n and displaying max 50.</p>" ;
								echo "<ptext><b>Found Matching Text/Terms:</b></ptext></br>";
								foreach($arr['response']['docs'] as $text)
								{ echo "<div id='ww2'><pcontent><b>Found:</b></br><b>" . $text['id'] . "</b></br>" .$text['content'] . "</br>" . "\n</pcontent></div></br></br>"; } //echo implode(',', $arr), "\n";// ?>
</div></div></br>
