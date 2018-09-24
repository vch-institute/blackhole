<html><center>
        <h1>*Black Hole PHP Solr Index Searching Platform*</p></h1></br>
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

<h5><b>Planned Features:</b></h5></br>
        - [x] Instructions for Linux Server</br>
        - [ ] Instructions for Windows Server</br>
        - [ ] Test Core</br>
        - [x] Full text output in results</br>
        - [ ] JSON/JavaScript version</br>
        </br>


ALL RIGHTS RESERVED COPYRIGHT 2018©® Diveyez of <a href="https://r2nhosting.com/">R2N Hosting Solutions</a></br>
GitHub.com/diveyez @diveyez (Twitter,Soundcloud, Instagram)
Intended for usage with:</br>
        <a href="lucene.apache.org/solr"><img src="images/solr.png" /></img></a>
</html>
