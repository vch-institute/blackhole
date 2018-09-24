[![PHP](https://img.shields.io/packagist/php-v/symfony/symfony.svg)](https://github.com/diveyez/blackhole)
<html><center>
        <h1><i>Black Hole PHP Solr Index Searching Platform</i></p></h1>
        
        </br>
        
<img src="images/blackhole.png" height="350" width="800"></img></br>

<h5>REQUIREMENTS, <ul>Linux or Windows Server with installed Webserver, GitHub, JRE8+, & Solr 7.5.0, 4+GB of RAM.</ul></h5></br>

```
* Firstly, cd to your working web server
 * git clone https://github.com/diveyez/blackhole 
* apt install install default-jdk solr 
* wget http://www.apache.org/dyn/closer.lua/lucene/solr/7.5.0/solr-7.5.0.tgz && tar -xvf solr-7.5.0.tgz 
* cd solr-7.5.0/bin 
* nano solr.in.sh
* UNCOMMENT (-#) & Set SOLR_HEAP="4096m" (4,096MB of Ram for Java's Heap)
* UNCOMMENT (-#) & Set SOLR_ULIMIT_CHECKS=false 
* ./solr start -c <corename>
* ./post -C <corename> /path/to/files
```
<h3>EXAMPLE:</h3>
```
cd /opt/solr-7.5.0/bin && ./solr start -c Library && ./post -C Library /mnt/Library/Aeronautics\ /and \ /Spaceflight/
```

<h4>An Extremely fast and lightweight</h4> <i>PHP</i> LAN Web interface for finding specific keyword strings in <b>Solr indexes</b>.</br>
If you intend to use it, this must be on a webserver, or equivalent,</br>
With <i>Apache Lucene Solr</i> and JRE 8+ running all on the same machine.</br>
<b>I really hope you enjoy this searching interface, I will add lots of more features eventually.</b></br>

<h3><b>Planned Features:</b></h3></br>
        - [x] Instructions for Linux Server</br>
        - [ ] Instructions for Windows Server</br>
        - [ ] Test Core</br>
        - [x] Full text output in results</br>
        - [ ] JSON/JavaScript version</br>
        - [ ] Custom Schema's for the project</br>
        - [ ] JSON/JavaScript version</br> 
        - [ ] Add more search fields</br>
        - [ ] Style and Decorate and publish a 1.0 final</br>
        - [ ] Dockerize</br>
   </br>


ALL RIGHTS RESERVED COPYRIGHT 2018©® Diveyez of <a href="https://r2nhosting.com/">R2N Hosting Solutions</a></br>
GitHub.com/diveyez @diveyez (Twitter,Soundcloud, Instagram)
Intended for usage with:</br>
        <a href="lucene.apache.org/solr"><img src="images/solr.png" /></img></a>
</html>
