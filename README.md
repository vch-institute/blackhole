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
			.button { border-radius: 25px; background-color: #555555; color: #fff; } /* Black */
			.button:hover { border-radius: 25px; background-color: #4CAF50; /* Green */ color: white; -webkit-transform: rotateX(150deg); /* Safari */ ntransform: rotateX(150deg);}
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
        </head>
        <center><h1>*Black Hole PHP Solr Index Searching Platform*</p></h1></br>
<img src="images/blackhole.png" height="350" width="800"></img></br>

<h5>REQUIREMENTS, Linux or Windows Server with installed Webserver, GitHub, JRE8+, & Solr 7.5.0, 4+GB of RAM.</h5></br>

```
* <h5>Firstly,</h5> cd to your working web server, then do git clone https://github.com/diveyez/blackhole </br>
* apt install install default-jdk solr </br>
* wget http://www.apache.org/dyn/closer.lua/lucene/solr/7.5.0/solr-7.5.0.tgz && tar -xvf solr-7.5.0.tgz </br>
* cd solr-7.5.0/bin 
* nano solr.in.sh
* <h3>UNCOMMENT (-#)Set SOLR_HEAP="4096m" (4,096MB of Ram for Java's Heap)</h3>
* <h3>UNCOMMENT (-#)Set SOLR_ULIMIT_CHECKS=false </h3>
* ./solr start -c <corename> </br>
* ./post -C <corename> /path/to/files </br>
```

<h4>An Extremely fast and lightweight</h4> <i>PHP</i> LAN Web interface for finding specific keyword strings in <b>Solr indexes</b>.</br>
If you intend to use it, this must be on a webserver, or equivalent,</br>
With <i>Apache Lucene Solr</i> and JRE 8+ running all on the same machine.</br>
Currently a beta, but will build and share from here. This is my own code.</br>
ALL RIGHTS RESERVED COPYRIGHT 018©® Diveyez of <a href="https://r2nhosting.com/"></a></br>
GitHub.com/diveyez @diveyez (Twitter,Soundcloud, Instagram)
Intended for usage with:</br>
        <a href="lucene.apache.org/solr"><img src="images/solr.png" width="250" height="125"></img></a></center>
</html>
