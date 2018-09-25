<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato');
			body {  background-repeat: no-repeat; background-color: #fefefe; black: white; font-family: 'Lato', serif; font-size: 16px; }
			p { color: black; font-size: 25px; } ptext { font-size: 12px; } pcontent { width: 900px; word-wrap: break-word; }
			h5 { color: #000; font-size: 12px; text-shadow: 1.5px 1.5px 5px black; }
			p1 { width: 900px; border: 0.25px solid black; word-wrap: break-word; font-size: 12px; border-radius: 0px; background-color: white; color: black; white-space: nowrap; border: 0.1px solid #000; overflow: hidden; text-overflow: ellipsis; opacity: 0.65; filter: alpha(opacity=33); }
			p1:hover { opacity: 1.0; filter: alpha(opacity=100); /* For IE8 and earlier */ }
			p2 { width: 900px; border: 0.25px solid black; word-wrap: break-word; font-size: 12px; border-radius: 0px; background-color: black; color: red; white-space: nowrap; border: 0.1px solid #000; overflow: hidden; text-overflow: ellipsis; opacity: 0.65; filter: alpha(opacity=33); }
			p2:hover { opacity: 1.0; filter: alpha(opacity=100); /* For IE8 and earlier */ }
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
			#ww { width: 900px; border: 1px solid black; padding: 25px; margin: 25px; word-wrap: break-word; }
			#ww1 { width: 900px; padding: 25px; margin: 25px; word-wrap: break-word; }
            .center {
                max-width: 500px;
                margin: auto;
            }
            </style>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<!-- PRESERVING SOME CODE -->
<script>
$(function() {
    $("#divResults").hide();

    $("#btnSearch").click(function() {
        $("#divSearch").slideUp();
        $("#divResults").fadeIn('500');

            $.getJSON(http://localhost:8983/solr/library/select?q="'VARIABLE'"&fl=id&fl=score&fl=highlighting&fl=content&fl=manu&indent=true&hl=true&hl.q='VARIABLE'&hl.snippets=1&hl.method=unified&hl.bs.type=WORD&hl.maxAlternateFieldLength=25&hl.encoder=json&wt=php&hl.tag.pre=<em>&hl.tag.post=</em>&hl.usePhraseHighlighter=true&hl.maxAnalyzedChars=250&results=50&hl.requireFieldMatch=true", function(data){
                data.response.docs.forEach(function(res){
                    $("#results").append("<li>"+res.id+"</li>")
                });
            });

    });

    $("#btnGoBack").click(function() {
        $("#divResults").slideUp();
        $("#divSearch").fadeIn('500');
    });
});
</script>
<!-- JAVASCRIPT AND JSON ARE NEAT SOME CODE -->
<body>
    <div id="divSearch" class="center">
        <a href="./"><img src="./images/blackhole.png" height="250" width="350"></a><br>
        <p>Welcome to Black Hole, What do you want to search for?</p><br>
        <div class="tooltip">
            <span class="tooltiptext">Libraries: Library <br> Server: localhost</span>
            <form method="post" action="search.php">
                <p>
                    <b>Keywords:</b><input name="search" type="text" /> <br>
                    <b>Library:</b><input name="library" type="text" /> <br>
                    <b>Server:</b><input name="server" type="text" /> <br> <br>
                    <input id="btnSearch" class="button" name="submit" type="button" value="Search The Galaxy" />
                </p>
            </form>
        </div>
        <br>
        <p> <a href="https://github.com/diveyez/blackhole/">Black Hole Search</a> by <a href="https://github.com/diveyez/">Diveyez</a></p>
        <p>&copy; 2016-
            <?php echo date("Y"); ?>
        </p>
        <br>
        <p>Built for <a href="https://universalcurrencysystems.com">Universal Currency Systems LLC</a>
            <br>Los Angeles, California <a href="https://r2nhosting.com">R2N Hosting Solutions</a><br>
            <a href="http://lucene.apache.org/solr/"><img src="images/solr.png" /></a>
            <p>Made with Apache Lucene Solr</p>
    </div>


    <div id="divResults" class="container">
        <input id="btnGoBack" class="button" name="submit" type="button" value="Go back to search....." />
        <ul id="results"></ul>
    </div>


</body>

</html>
