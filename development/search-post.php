<?php
if($_POST['search']) { echo "</br>Search Successful, here are the results."; }
else { echo ("</br>You did not search! Try again!"); }
$query = $_POST['search']; $library = $_POST['library']; $server = $_POST['server'];
  echo "</br>"; // Gonna need more fancy shit here to wow them
  $starttime = microtime(true); $endtime = microtime(true); printf("Search performed in %f seconds", $endtime - $starttime );
$ch = curl_init(); $encode = urlencode($query); $encode1 = urlencode($library); $encode2 = urlencode($server);
curl_setopt($ch,CURLOPT_URL,"http://".$encode2.":8983/solr/".$encode1."/select?q=".$encode."&fl=id&fl=score&fl=highlighting&fl=content&fl=manu&fl=creator&indent=true&hl=true&hl.q=".$encode."&hl.snippets=1&hl.fl=text_*&hl.fragsize=20&hl.method=unified&hl.bs.type=WORD&hl.defaultSummary=true&hl.maxAlternateFieldLength=25&hl.alternateField=content&hl.encoder=html&wt=php&hl.highlightMultiTerm=true&hl.tag.pre=<em>&hl.tag.post=</em>&hl.fragmenter=regex&hl.regex.slop=0.3&hl.usePhraseHighlighter=true&hl.maxAnalyzedChars=10&results=50&hl.requireFieldMatch=true");
//http://localhost:8983/solr/Library/select?q=ak47&fl=id&fl=score&fl=*&ident=true&hl=true&explainOther=dog&hl.fl=*&hl.snippets=1&hl.fragsize=0&wt=php
curl_setopt($ch, CURLOPT_HEADER, false); curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true); $re = curl_exec($ch); curl_close($ch); $arr;
eval("\$arr = " . $re . ";"); echo "<p><b>You searched for:</b><a></a><i>" . $query . "</i>"; echo "</br>";
echo "<b>Found:</b><i>" . $arr['response']['numFound'] . "</i> results\n </p>" ;
// FIX THIS ON SUNDAY - MONDAY
//	echo "<p><b>Found Text:</b></p>";
//			foreach($arr)['highlighting']['dc_title'] as $text) { echo $text['dc_title'] ; }

echo "</br>"; foreach($arr['response']['docs'] as $item) { echo "<b></b> <p1> " . $item['id'] . "</p1><p2><b>Score:</b>" . $item['score'] . "</p2>\n"; echo "</br>"; }
?>
