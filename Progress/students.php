<!DOCTYPE html>

<?php include_once 'head.php';?>
<?php include_once 'navigation.php';?>

<!-- <section id="application" class="fixpad home-section color-dark bg-white">
  <div class="container marginbot-50">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
      -->
      <div class="BackgroundHeader">
      <div class="row animatedParent">
          <h2 class="h-bold animated fadeIn slower">2018 Teams and Projects</h2>
      </div>
</div>


              <?php
                $string = file_get_contents("teams.json");
                $json_a = json_decode($string, true);
                $counter = 0;

                foreach ($json_a["teams"] as $project) {

                  if ($counter % 2){
                    echo"<section id=\"projType\" class=\"fixpad home-section color-dark bg-white\">";
                        echo"<div class=\"container marginbot-50\">";
                              echo"<div class=\"row\">";
                                    echo"<div class=\"col-lg-8 col-lg-offset-0\">";
                                          echo("<h2>".$project["project"].'</h2>');
                                          echo"<div style=\"clear: left;\">";
                                                echo("<p style=\"float: right;\"><img src=\"img/teams/".$project["image"]. "\".png\" style = \"width: 100%; align:left;\"/>trying to test out this text</p>");
                                                echo"<p>Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>";
                                          echo"</div>";
                                    echo"</div>";
                              echo"</div>";
                        echo"</div>";
                  echo"</section>";

                  } else {
                    echo"<section id=\"projType\" class=\"fixpad home-section color-dark bg-gray\">";
                        echo"<div class=\"container marginbot-50\">";
                        echo"<div class=\"row\">";
                          echo"<div class=\"col-lg-8 col-lg-offset-4\">";
                          echo("<h2>".$project["project"].'</h2>');
                          echo("<img src=\"img/teams/".$project["image"]. "\".png\" style = \"width: 100%; align:right;\"/></a>");
                          echo"</div>";
                          echo"</div>";
                      echo"</div>";
                    echo"</section>";
                  }
                  $counter = $counter+1;
                }
              ?>
    <!--
        </div>
      </div>
    </div>
  </section>
-->
  <!-- /Section: entrepreneurial -->

<?php include_once 'footer.php';?>
<?php include_once 'scripts.php';?>

</body>
</html>
