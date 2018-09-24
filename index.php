<html>
		<head>
			<style>
				@import url('https://fonts.googleapis.com/css?family=Lato');
				body { background-repeat: no-repeat; background-color: #fefefe; black: white; font-family: 'Lato', serif; font-size: 16px; }
				p { color: black; text-shadow: 0.5px 0.5px 5px black;} plight { font-size: 30px; color: #000; text-shadow: 1.5px 1.5px 5px black; }
				h5 { color: #000; font-size: 28px; text-shadow: 1.5px 1.5px 5px black; }
				pactive { font-size: 20px; color: #4CAF50; text-shadow: 1.5px 1.5px 3px red; } a { color: red; }
				.button { border-radius: 25px; background-color: #555555; color: #fff; }
				.button:hover { border-radius: 25px; background-color: #4CAF50; /* Green */ color: white; -webkit-transform: rotateX(150deg); transform: rotateX(150deg); }
				input[type=text] { width: 130px; -webkit-transition: width 0.4s ease-in-out; transition: width 0.4s ease-in-out; }
				input[type=text]:focus { width: 250px; }
				.tooltip { position: relative; display: inline-block; border-bottom: 1px solid black; }
				.tooltip .tooltiptext { visibility: hidden; width: 120px; background-color: #555; color: #fff; text-align: center; padding: 5px 0; border-radius: 6px; position: absolute;
				z-index: 1; bottom: 125%; left: 50%; margin-left: -60px; opacity: 0; transition: opacity 0.3s; }
				.tooltip .tooltiptext::after { content: ""; position: absolute; top: 100%; left: 50%; margin-left: -5px; border-width: 5px; border-style: solid;
				border-color: #555 transparent transparent transparent; }
				.tooltip:hover .tooltiptext { visibility: visible; opacity: 1; }
			</style>
		</head><body><center>
				<a href="./"><img src="./images/blackhole.png" height="250" width="350"></img></a></br>
				<plight>Welcome to Black Hole, What do you want to search for?</plight></br>
			<div class="tooltip">
			  <span class="tooltiptext">Libraries: Library </br> Server: localhost</span>
				<form method="post" action="search.php">
                <p><b>Keywords:</b><input name="search" type="text" /><b>Library:</b><input name="library" type="text" /><b>Server:</b><input name="server" type="text" />
                <input class="button" name="submit" type="submit" value="Search The Galaxy"/></p></form>
			</div>
				</br><p> <a href="https://github.com/diveyez/blackhole/">Black Hole Search</a> by <a href="https://github.com/diveyez/">Diveyez</a></p><p>&copy; 2016-<?php echo date("Y"); ?></p>
			</br><p>Built for <a href="https://universalcurrencysystems.com">Universal Currency Systems LLC</a>
			</br>Los Angeles, California <a href="https://r2nhosting.com">R2N Hosting Solutions</a></br>
				<a href="http://lucene.apache.org/solr/"><img src="images/solr.png"/></img></a>
				<p>Made with Apache Lucene Solr</p>
				</center></body>
</html>
