<html>
<!-- ADD SECURITY HEADERS ASAP FOR PUBLIC LIBRARY -->
			<head><meta charset="UTF-8"/>
			<meta name="description" content="Black Hole Search"/>
			<meta name="keywords" content="Bringing Solr Indexing and Machine Learning Interfacting to your Data Directories."/>
			<meta name="author" content="diveyez@r2nhosting.com"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<link rel="stylesheet" type="text/css" href="style.css"/>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"></head>
<!-- ADD SECURITY HEADERS ASAP FOR PUBLIC LIBRARY -->
      <body>
<!-- GO BACK button -->
      <button onclick="goBack()">Go Back To Search</button>
      <script> function goBack() { window.history.back(); } </script>
<!-- GO BACK button -->


<!-- TOOL TIP & SEARCH SECTION -->
      <div class="tooltip">
      <span class="tooltiptext">Libraries: <b><i>"This is whatever you called the core during setup. I have many."</i></b> </br> Server: localhost</span><form method="post" action="search.php">
      <searchbox><b>Keywords:</b><input name="search" type="text" /><b>Library:</b><input name="library" type="text" /><b>Server:</b><input name="server" type="text" /></searchbox>
      <input class="button1" name="submit" type="submit" value="Search The Galaxy"/></p></form>
<!-- TOOL TIP & SEARCH SECTION -->

<!-- back button -->
      <button onclick="goBack()">Go Back To Main Page</button>
      <script> function goBack() { window.history.back(); } </script></br>
<!-- back button -->
<!-- FOOTER REGION-->
      <div id="footer"><center>
          <h5> <a href="https://github.com/diveyez/blackhole/">Black Hole Search</a> by <a href="https://github.com/diveyez/">Diveyez</a></p><p>&copy; 2016-<?php echo date("Y"); ?></h5>
          <h5>Los Angeles, California <a href="https://r2nhosting.com">R2N Hosting Solutions</a></h5> <h5>Made With</h5></br>
          <a href="http://lucene.apache.org/solr/"><img src="images/solr.png"/></img></a></center></div></div></body></html>
