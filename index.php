<html>
		<head>
			<style>
			@import url('https://fonts.googleapis.com/css?family=Lato');
			body { max-width: 900px; margin: auto; height: 1200; background-repeat: no-repeat; background-color: #fefefe; black: white; font-family: 'Lato', serif; font-size: 16px; }
			p { color: black; font-size: 25px; } ptext { font-size: 12px; } pcontent { width: 900px; word-wrap: break-word; }
			h5 { color: #000; font-size: 12px; text-shadow: 1.5px 1.5px 5px black; }
			p1 { width: 900px; word-wrap: break-word; font-size: 12px; }
			p1:hover { opacity: 1.0; filter: alpha(opacity=100); }
			p2 { width: 900px; word-wrap: break-word; font-size: 12px; }
			p2:hover { opacity: 1.0; filter: alpha(opacity=100); }
			pactive { font-size: 20px; color: #4CAF50; text-shadow: 1.5px 1.5px 3px red; } a { color: red; }
			a { color: red; font-size: 18px; }
			.button1 { border-radius: 25px; background-color: #555555; color: #fff; } /* Black */
			.button1:hover { border-radius: 25px; background-color: #4CAF50; /* Green */ color: white; -webkit-transform: rotateX(150deg); /* Safari */ ntransform: rotateX(150deg);}
			input[type=text] { width: 130px; -webkit-transition: width 0.4s ease-in-out; transition: width 0.4s ease-in-out; }
			input[type=text]:focus { width: 250px; }
			.tooltip { position: relative; display: inline-block; border-bottom: 1px solid black; }
			.tooltip .tooltiptext { visibility: hidden; width: 120px; background-color: #555; color: #fff; text-align: center; padding: 5px 0; border-radius: 6px; position: absolute;
			z-index: 1; bottom: 125%; left: 50%; margin-left: -60px; opacity: 0; transition: opacity 0.3s; }
			.tooltip .tooltiptext::after { content: ""; position: absolute; top: 100%; left: 50%; margin-left: -5px; border-width: 5px; border-style: solid;
			border-color: #555 transparent transparent transparent; }
			.tooltip:hover .tooltiptext { visibility: visible; opacity: 1; }
			#ww { width: 900px; border: 1px solid black; padding: 25px; word-wrap: break-word; }
			#ww1 { width: 900px; padding: 25px; word-wrap: break-word; }
			</style>
		</head><body><center>
				<a href="./"><img src="./images/blackhole.png" height="250" width="350"></img></a></br>
				<plight>Welcome to Black Hole, What do you want to search for?</plight></br>
			<div class="tooltip">
			  <span class="tooltiptext">Libraries: Contact Administrator </br> Server: localhost</span>
				<form method="post" action="search.php">
                <p><b>Keywords:</b><input name="search" type="text" /><b>Library:</b><input name="library" type="text" /><b>Server:</b><input name="server" type="text" />
                <input class="button1" name="submit" type="submit" value="Search The Galaxy"/></p></form>
			</div>
				</br><p> <a href="https://github.com/diveyez/blackhole/">Black Hole Search</a> by <a href="https://github.com/diveyez/">Diveyez</a></p><p>&copy; 2016-<?php echo date("Y"); ?></p>
			</br><p>Built for <a href="https://universalcurrencysystems.com">Universal Currency Systems LLC</a>
			</br>Los Angeles, California <a href="https://r2nhosting.com">R2N Hosting Solutions</a></br>
				<a href="http://lucene.apache.org/solr/"><img src="images/solr.png"/></img></a>
				<p>Made with Apache Lucene Solr</p>
				</center></body>
</html>
