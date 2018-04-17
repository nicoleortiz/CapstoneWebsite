<!-- Navigation -->
<div id="navigation">
  <nav class="navbar navbar-custom" role="navigation">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
              <img src="img/logo-light.png" height="100"/></a>
        </div>
        <div class="col-md-10">
          <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="home.php">Home</a></li>
              <li><a href="events.php">Events</a></li>
              <li><a href="sponsors.php">Sponsors</a></li>
              <li><a href="students.php">Students</a></li>
              <li><a href="apply.php">Apply</a></li>
              <li><a href="about.php" class="about">About</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
          
          <!-- /.Navbar-collapse -->
          <script>
            // Get the container element
            var btnContainer = document.getElementById("menu");
            console.log("here");

            // Get all buttons with class="btn" inside the container
            var btns = btnContainer.getElementsByClassName("btn");

            // Loop through the buttons and add the active class to the current/clicked button
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
              });
            }
          </script>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </nav>
</div>
