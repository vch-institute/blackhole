$query = $_POST['search']; $library = $_POST['library']; $server = $_POST['server'];
$starttime = microtime(true); $endtime = microtime(true); printf("Search performed in %f seconds", $endtime - $starttime );
$ch = curl_init(); $encode = urlencode($query); $encode1 = urlencode($library); $encode2 = urlencode($server);
curl_setopt($ch,CURLOPT_URL,"http://localhost:8983/solr/library/select?q=dryrun&fl=id&fl=score&fl=highlighting&fl=content&fl=manu&indent=true&hl=true&hl.q=dryrun&hl.snippets=1&hl.method=unified&hl.bs.type=SENTENCE&hl.maxAlternateFieldLength=5&hl.encoder=html&wt=php&hl.usePhraseHighlighter=true&hl.maxAnalyzedChars=15&results=50&hl.requireFieldMatch=true");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); $re = curl_exec($ch); curl_close($ch); $arr;
eval("\$arr = " . $re . ";"); echo "" . $query . ""; ;
echo "" . $arr['response']['numFound'] . "\n" ;
								echo "";
								foreach($arr['response']['docs'] as $text)
								{ echo "Found:" . $text['id'] . "" .$text['content'] . "" . "\n"; }
