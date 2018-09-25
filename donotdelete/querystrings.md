_The following query url gave the cleanest results, now time to move it to JSON javascript then, trim it down and incorporate more fancy java to make it very very fancy._

***

http://10.1.1.37:8983/solr/library/select?q=jesus&fl=id&fl=score&fl=highlighting&fl=content&fl=manu&indent=true&hl=true&hl.q=jesus&hl.snippets=1&hl.method=unified&hl.bs.type=SENTENCE&hl.maxAlternateFieldLength=5&hl.encoder=html&wt=php&hl.tag.pre=%3Cem%3E&hl.tag.post=%3C/em%3E&hl.usePhraseHighlighter=true&hl.maxAnalyzedChars=15&results=50&hl.requireFieldMatch=true

***

// ** _Confirmed to be a better legible output than the previous highlight query strings. ['content'] outputs lots of text, but I cant locate a way to limit the characters it spits out at all._ _solr-7.5.0 is definitely working better!_
// http://".$encode2.":8983/solr/".$encode1."/select?q=".$encode."&fl=id&fl=score&fl=highlighting&fl=content&fl=manu&indent=true&hl=true&hl.q=".$encode."&hl.snippets=1&hl.method=unified&hl.bs.type=SENTENCE&hl.maxAlternateFieldLength=5&hl.encoder=html&wt=php&hl.tag.pre=<em>&hl.tag.post=</em>&hl.usePhraseHighlighter=true&hl.maxAnalyzedChars=15&results=50&hl.requireFieldMatch=true
// <html><i>:( Deprecated curl opt</i></html>
// http://".$encode2.":8983/solr/".$encode1."/select?q=".$encode."&fl=id&fl=score&fl=highlighting&fl=content&fl=manu&indent=true&hl=true&hl.q=".$encode."&hl.snippets=1&hl.method=unified&hl.bs.type=WORD&hl.maxAlternateFieldLength=25&hl.encoder=html&wt=php&hl.tag.pre=<em>&hl.tag.post=</em>&hl.usePhraseHighlighter=true&hl.maxAnalyzedChars=250&results=50&hl.requireFieldMatch=true
//
// :| FIXING THE BULK OUTPUT hl.fragmenter=regex&hl.regex.slop=0.5&hl.fl=text_*&hl.fragsize=20&hl.defaultSummary=true&hl.highlightMultiTerm=true&
// Alternate Field Maybe? &hl.alternateField=-
