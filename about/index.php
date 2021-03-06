<?php
  include $_SERVER['DOC_ROOT'] . "../src/common/Head.php";
  include $_SERVER['DOC_ROOT'] . "../src/common/NavBar.php";
  include $_SERVER['DOC_ROOT'] . "../src/common/Footer.php";
  include $_SERVER['DOC_ROOT'] . "../src/common/ScriptSource.php";
?>

<!DOCTYPE html>
<html lang="en">
  <?php
    $head = new Head();

    $head->displayHead();
  ?>

  <body>
    <?php
      $navbar = new NavBar('about');

      $navbar->displayNavBar();
    ?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-12">
          <div class="jumbotron">
            <img src="<?php echo $_SERVER['DOC_ROOT']; ?>/images/profile.jpg" class="img-circle img-responsive" id="profile"/>
            <h1>About</h1>
            <p>
              Hey I'm Marcus Molchany. I am a software engineer and currently work at NetApp. In 2012 I graduated from Duke University
              with a Dual Major in Electrical & Computer Engineering and Computer Science. Outside of work and side projects I love to
              do Crossfit, running and mountain biking and most importantly trips to the beach for some surfing. Thanks for checking out
              my site, you can reach me at any of the social accounts below.
            </p>
            <a href="https://twitter.com/molchanimal" target="_blank">@molchanimal</a>
            <p></p>
            <a href="https://github.com/marcusmolchany" target="_blank">github</a>
            <p></p>
            <a href="https://linkedin.com/in/marcusmolchany" target="_blank">linkedin</a>
            <p></p>
            <a href="<?php echo $_SERVER['DOC_ROOT']; ?>/images/Resume_2013.pdf" target="_blank">resume</a>
            <p></p>
            <p></p>
            <p>
              This page is <a href="https://github.com/marcusmolchany/first_twitter_bootstrap_page" target="_blank">100% open source</a>!
              Feel free to view, review or even fork this repository.
            </p>
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <?php
        $footer = new Footer();

        $footer->displayFooter();
      ?>

    </div><!--/.container-->

    <?php
      $scriptSource= new ScriptSource();

      $scriptSource->displayScriptSource();
    ?>
  </body>
</html>
