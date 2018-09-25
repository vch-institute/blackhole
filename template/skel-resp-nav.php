<!-- RESPONSIVE NAV BAR -->
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="about.php">About</a>
  <a href="https://github.com/diveyez/blackhole">Contact Developer</a>
  <div class="dropdown">
    <button class="dropbtn">Explore
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="news.php">News</a>
      <a href="queries.php">Queries Explained</a>
      <a href="search.php">Search</a>
    </div>
  </div>
  <a href="#login">Login</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<!--RESPONSIVE NAV BAR -->
