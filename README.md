[![BUILD](https://img.shields.io/badge/BUILD-0.1.5.8--breaker19-green.svg)](https://github.com/diveyez/blackhole)
[![BASHScripts](https://img.shields.io/badge/BASH-Shell%20Scripts-blue.svg)](https:github.com/diveyez/blackhole)
[![CSS3](https://img.shields.io/badge/CSS-3.0-blue.svg)](https:github.com/diveyez/blackhole)
[![HTML5](https://img.shields.io/badge/HTML-5-green.svg)](https://github.com/diveyez)
[![JavaScript](https://img.shields.io/badge/JavaScript-Performing%20Conversion-grey.svg)](https://github.com/diveyez)
[![JSON](https://img.shields.io/badge/JSON-Writer%20Implemented-grey.svg?style=flat-rounded)](https://github.com/diveyez)
[![Python](https://img.shields.io/badge/Python-3.5%2B-red.svg)](https://github.com/diveyez)
[![PHP](https://img.shields.io/packagist/php-v/symfony/symfony.svg)](https://github.com/diveyez/blackhole)
[![PHP version from PHP-Eye](https://img.shields.io/php-eye/symfony/symfony.svg?style=popout)](https://github.com/diveyez/blackhole)
[![Dependencies](https://img.shields.io/badge/DEPENDENCIES-See%20List%20Below-orange.svg)](https://github.com/diveyez/blackhole/blob/master/README.md#requirementslinux-or-windows-server-with-installed-webserver-github-jre8--solr-750-4gb-of-ram)
[![GitHub language count](https://img.shields.io/github/languages/count/badges/shields.svg?style=popout)](https://github.com/diveyez/blackhole)
[![Github commit merge status](https://img.shields.io/github/commit-status/badges/shields/master/5d4ab86b1b5ddfb3c4a70a70bd19932c52603b8c.svg?style=popout)](https://github.com/diveyez/blackhole)
[![GitHub last commit](https://img.shields.io/github/last-commit/google/skia.svg?style=popout)](https://github.com/diveyez)
[![GitHub commit activity the past week, 4 weeks, year](https://img.shields.io/github/commit-activity/y/eslint/eslint.svg?style=popout)](https://github.com/diveyez)
[![GitHub repo size in bytes](https://img.shields.io/github/repo-size/badges/shields.svg?style=popout)](https://github.com/diveyez/blackhole)</br>
<html><h1><i>Black Hole PHP Solr Index Searching Platform</br>
A multi-language www capable Solr index searching solution that can fit in your pocket. Eat The Sun!
</i></p></h1><img src="images/blackhole.png" height="350" width="800"></img></br>
<h3>NOTICE: Incomplete and work time code has been moved to /development/ to purify the main directory. I will be adding more coming the next 18 hours.</h3></br>
<h4>An Extremely fast and lightweight</h4> <i>PHP</i> LAN Web interface for finding specific keyword strings in <b>Solr indexes</b>.</br>
If you intend to use it, this must be on a webserver, or equivalent,</br>
With <i>Apache Lucene Solr</i> and JRE 8+ running all on the same machine.</br>
<b>I really hope you enjoy this searching interface, I will add lots of more features eventually.</b></br>
<h5>REQUIREMENTS,
 Linux or Windows Server with installed Webserver, GitHub, JRE8+, & Solr 7.5.0, 4+GB of RAM.  </h5></br>

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
cd /opt/solr-7.5.0/bin && ./solr start -c Library && ./post -C Library /mnt/Library/Aeronautics_and_Spaceflight/*.*
```

<h3><b>Planned Features:</b></h3></br>
- [x] Test Core (9-24-18)</br>  
- [x] Full text output in results (9-24-18)</br>  
- [x] JSON/JavaScript version will release in the next 14 days (9-24-18)</br>  
- [x] Custom Schema's for the project  (9-24-18)</br>
- [x] Add more search fields (Continuing This Eternally (10-1-2018)</br>  
- [x] Instructions for Linux Server Install/Setup/Operation (9-24-18)</br>
- [.] Implement Navigation Menu's (9-25-18) </br>  
- [ ] Instructions for Windows Server Install/Setup/Operation  (9-26-18)</br>
- [ ] Incorporate third party software and plugins to improve functionality  (October)</br>
- [ ] Dockerize  (October)</br>
- [ ] Public Library for testing  (October)</br>
- [ ] Style and Decorate and publish a 1.0 final  (November)</br>
- [ ] Web Browser Plugins for consumers  (December)</br>
- [ ] Electron or equivalent application to remove need for browers and webservers  (Winter 2019 (Jan-April))</br>
- [ ] Solr enabled Jupyter Machine learning notebook to study data mining with computational capabilities  (Winter 2019 (Jan-April))</br>
- [ ] Software to use Ray Tracing (RTX) to enhance the machine learning ratio and overall functionality (No Date; PLEASE @Nvidia, GIVE ME AN SDK)</br>
<h5><b>'x'</b> Indicates nearly full or full completion, periods <b>'.'</b> mark the in progress. <b>'?'</b> Indicates that there is no available information on completion date.</h5>

<!-- END OF THIS -->

ALL RIGHTS RESERVED COPYRIGHT 2018 © ® Ricky 'Diveyez' N. of <a href="https://r2nhosting.com/">R2N Hosting Solutions</a></br>
GitHub.com/diveyez <i>@diveyez</i> ( Twitter, Facebook, Instagram, Soundcloud,  Steam )</br>
<h5>Discord: https://discord.gg/9Tpyxbq</h5></br><a href="lucene.apache.org/solr"><img src="images/solr.png" /></img></a>Made with Apache Lucerne Solr</br></html>
