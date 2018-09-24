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
If you wish to find something specific, you can type any <i>"phraseyouwish"</i></br>
Doing so like that, should allow you to locate more specific results.</br></pqueries>
</br>
<pqueries>
Two Unique but similar tricks also incorporated are highlighting and wildcards.</br>
So if I the developer wanted to look through 50,000 pdf's and extract one specific word,</br>
Perhaps a middle name I do not know,</br>
I would type the following into the search box <i>"'MICHAEL'*'DOUGLAS'"</i> .</br>
If you want to highlight something for the search so it returns better results</br>
You would use something like this: <i>"Something I Need To Find&hl.q=Something More Specific From That Document, Site, Etc. -*"</i></br>
In that search query what I did was term in, highlight something better, than subtract all the wildcard and extra bulk output.</br>
</pqueries>
</br>
  <h4>That is too much information, lets take it back a step.</h4>
  <pqueries>
Okay, Wildcards produce too many results. How do we avoid that?</br>
We will search with the following <i>"'-MICHAEL'*'-DOUGLAS'"</i></br>
This will strip the first and last name, but still match results to</br>
Any results that match the pre and post phrase to minimize results.</br></pqueries>
</br>
  <h4>What if I need to find more than one thing?</h4>
  <pqueries>
Lets say, we just indexed a website, or a book, into the library for searching.</br>
What now? How do I limit my results to one specific title or site/dir ?</br>
Think of the : as your saviour. What we want to do now, is type</br>
the following: <i>"Website.com:phrase/sentence" "booktitle:phrase/sentence"</i></br>
How about matching activity with that? <i>"website1.com site:website2.com"</i></br>
This same principle can be applied to documents as well.</br></pqueries>
</br>
  <h4>Doing that, for the documents, is fun, and tricky.</h4>
  <pqueries>
What we need to do now is explain things a bit more.</br>
The way this works is it catalogs information in arrays in a database.</br>
This is how it is able to match things together and give results.</br>
  <b>Hypothetical Situation:</b>I am sick, I have been sick for a while.</br>
I have been to the doctor and ..... It is time to find the cure myself.</br>
Very common in todays world, people are data mining for solutions without realizing it.</br>
This is how we are going to do this, I will type <i>"Medicine book:'Antibiotics'-*"</i></br>
The results output 3 of 2,357 books, one of which is "Curing a Bacterial Infection at Home"</br>
Another situation is looking for a specific date. Lets have a history lesson.</br></pqueries>
  <p2 style=" font-size: 14px;">
The Judiciary Act of 1789 is passed by Congress and signed by President George Washington, </br>
establishing the Supreme Court of the United States as a tribunal made up of six justices who were to serve on the court until death or retirement. </br>
That day, President Washington nominated John Jay to preside as chief justice, and John Rutledge, William Cushing, John Blair, Robert Harrison, </br>
and James Wilson to be associate justices. </br>
On September 26, all six appointments were confirmed by the U.S. Senate.</br>
The U.S. Supreme Court was established by Article 3 of the U.S. Constitution. </br>
The Constitution granted the Supreme Court ultimate jurisdiction over all laws, especially those in which their constitutionality was at issue. </br>
The high court was also designated to oversee cases concerning treaties of the United States, foreign diplomats, admiralty practice, and maritime jurisdiction. </br>
On February 1, 1790, the first session of the U.S. Supreme Court was held in New York City’s Royal Exchange Building.</br>
  </p2>
  <pqueries>
So I will search for a historical moment, ""</br>
  </pqueries>
  <h4>Vice Versa</h4>
  <pqueries>
How do things actually weigh against each other?</br>
Let's try that, <i>"Alcohol vs. Wine"</i></br>
Simple, what it does is weights them against one another and produces a competitive result.</br>
Competition in results are always a good thing with computers. I adore this method and strongly recommend it.</br>
  </pqueries>
















</body>
&copy; 2016-<?php echo date("Y"); ?></html>
