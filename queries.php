<html><head><meta charset="UTF-8">
  		<meta name="description" content="Black Hole Search">
  		<meta name="keywords" content="Bringing Solr Indexing and Machine Learning Interfacting to your Data Directories.">
  		<meta name="author" content="diveyez@r2nhosting.com">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="styles.css"></head>
      <body>
<h3>The cheat sheet to utilizing my technology.</h3>
<h4>Here you can find commonly uncommon queries for searches.</h4>
<pqueries>
If you wish to find something specific, you can type any "<phraseyouwish>"</br>
Doing so like that, should allow you to locate more specific results.</br></pqueries>
</br>
<pqueries>
Two Unique but similar tricks also incorporated are highlighting and wildcards.</br>
So if I the developer wanted to look through 50,000 pdf's and extract one specific word,</br>
Perhaps a middle name I do not know,</br>
I would type the following into the search box "'MICHAEL'*'DOUGLAS'" .</br>
If you want to highlight something for the search so it returns better results</br>
You would use something like this: "Something I Need To Find&hl.q=Something More Specific From That Document, Site, Etc."
</pqueries>
</br>
  <h4>That is too much information, lets take it back a step.</h4>
  <pqueries>
Okay, Wildcards produce too many results. How do we avoid that?</br>
We will search with the following "'-MICHAEL'*'-DOUGLAS'"</br>
This will strip the first and last name, but still match results to</br>
Any results that match the pre and post phrase to minimize results.</br></pqueries>
</br>
  <h4>What if I need to find more than one thing?</h4>
  <pqueries>
Lets say, we just indexed a website, or a book, into the library for searching.</br>
What now? How do I limit my results to one specific title or site/dir ?</br>
Think of the : as your saviour. What we want to do now, is type</br>
the following: "Website.com:phrase/sentence" "booktitle:phrase/sentence"</br>
How about matching activity with that? "website1.com site:website2.com"</br>
This same principle can be applied to documents as well.</br></pqueries>
</br>
  <h4>Doing that, for the documents, is fun, and tricky.</h4>
  <pqueries>


















</body>
&copy; 2016-<?php echo date("Y"); ?></html>
