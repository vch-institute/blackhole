[![BUILD](https://img.shields.io/badge/BUILD-0.1.69.69--zetareticuli-green.svg)](https://github.com/diveyez/blackhole)
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
<html><h1><i>Black Hole Searching Platform</br></h1>
 <h5>A multi-language www & machine learning capable Solr index searching solution that can fit in your pocket. </h5><h2><i>Notebooks, Libraries, AI, and Technology in one place. We are going to Eat The Sun!</i><h2>
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
..* I have converted some of the code to JavaScript _over the last few hours_. </br>
...* I will be moving everything to *JavaScript Today and Tomorrow* if possible.</br>
- [x] Custom Schema's for the project  (9-24-18)</br>
- [x] Add more search fields (Continuing This Eternally (10-1-2018)</br>  
- [x] Instructions for Linux Server Install/Setup/Operation (9-24-18)</br>
- [x] Implement Navigation Menu's (9-25-18) </br>  
- [ ] Instructions for Windows Server Install/Setup/Operation  (9-26-18)</br>
- [ ] Incorporate third party software and plugins to improve functionality  (October)</br>
- [ ] Dockerize  (October)</br>
- [ ] Public Library for testing  (October)</br>
- [ ] Style and Decorate and publish a 1.0 final  (November)</br>
- [ ] Web Browser Plugins for consumers  (December)</br>
- [ ] Electron or equivalent application to remove need for browers and webservers  (Winter 2019 (Jan-April))</br>
- [ ] Solr enabled Jupyter Machine learning notebook to study data mining with computational capabilities  (Winter 2019 (Jan-April))</br>
- [?] Software to use Ray Tracing (RTX) to enhance the machine learning ratio and overall functionality (No Date; PLEASE @Nvidia, GIVE ME AN SDK)</br>
<h5><b>'x'</b> Indicates nearly full or full completion, periods <b>'.'</b> mark the in progress. <b>'?'</b> Indicates that there is no available information on completion date.</h5>

<!-- RULES -->

ALL RIGHTS RESERVED COPYRIGHT 2018 © ® Ricky 'Diveyez' N. of <a href="https://r2nhosting.com/">R2N Hosting Solutions</a></br>
GitHub.com/diveyez <i>@diveyez</i> ( Twitter, Facebook, Instagram, Soundcloud,  Steam )</br>
<h5>Discord: https://discord.gg/9Tpyxbq</h5></br><a href="lucene.apache.org/solr"><img src="images/solr.png" /></img></a>Made with Apache Lucerne Solr</br></html>

---


*Official GitHub Etiquette*

---

1. Keep file paths _short_ and sensible.
2. Don't use funky characters and spaces in your file names, these cause trouble because of differences in Mac/Windows systems.
3. Always pull before you push in case someone has done any work since the last time you pulled - you wouldn't want anyone's work to get lost or to have to resolve many coding conflicts.
⋅⋅* Any and all errors you encounter are indeed your own fault for not following this simple process. I will be coding and updating this repository everyday. Pull Push.

*Unofficial "Rules"*

1. If for any reason, you seem to have an issue with something and don't want to file an issue. Please contact me directly.
⋅⋅* I will not be offended or upset. *Discord:Div3y3z#1878*
2. If you decide to use my work, stop by for a while and chat. Id love to hear your ideas. Common Courtesy.
..* I am more than willing to branch this off once a login and UX system is implemented which can train the Solr servers using PiPy's SolrPy using the machine learning.
...* You want to be around for that! Trust me.
3. This is my work, my code, my time invested. If you decide to fork it, remember this is being sent to [https://www.copyright.gov/registration/] and I retain the rights to this work.
4. All third party components and additions will be credited as contribution and distributed as a library pack as long as the _content creators_ agree *100%* that this is okay.
..* If you feel I have used some of your open sources content and you do not want me to, just contact me privately. I will be glad to abide by your wishes.
...* Due to the Open Source nature of this planet right now, I feel a Fair Use Act Notice is justified.
---

*Fair Use Notice:*
The material on these sites and in its directories are provided for educational and informational purposes. It may contain copyrighted material the use of which has not always been specifically authorized by the copyright owner. It is being made available in an effort to advance the understanding of scientific, environmental, economic, social justice and human rights issues etc. It is believed that this constitutes a *‘fair use’* of any such copyrighted material as provided for in _Section 107 of the US Copyright Law_. In accordance with _Title 17 U.S.C. Section 107_, the material on this site is distributed without profit to those who have an interest in using the included information for research and educational purposes. If you wish to use copyrighted material from these sites and in its directories for purposes of your own that go beyond *‘fair use’*, you must obtain permission from the copyright owner. The information on these sites and in its directories does not constitute legal or technical advice.

---

*Gratitude*, and remember _just have some fun_ with *YOUR* projects! I am! *-Cheers Ricky*

---

<!-- END OF THIS -->
