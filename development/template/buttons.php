<html>

<!-- ADD SECURITY HEADERS ASAP FOR PUBLIC LIBRARY -->
      <body>
<!-- GO BACK button -->
      <button id="back" onclick="goBack()">Go Back To Search</button>
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
