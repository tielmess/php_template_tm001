<?php
define("TITLE", "Local Business");
define("AUTHOR", "Local");
define("DESCRIPTION", "Explore premium local business services");
define("KEYWORDS", "Local Services, Local Tools, Local Design, Local Minimalist");
define("DESCIMG", "https://images.unsplash.com/photo-1517842645767-c639042777db?q=80&w=600");
define("URL", "https://example.com");
$section = "home";
//include "inc/header.php";
?>
<?php include 'includes/header.php';?>

  <main>
    <?php include "components/card.php"; ?>
    <?php include "components/faq.php"; ?>
  </main>

<?php include 'includes/footer.php';?>

  