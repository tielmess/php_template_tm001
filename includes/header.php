<?php 
  // Require your client content matrix data
  require_once 'config.php'; 
  // Set the title
  if (!isset($title)) {
    $title = "";
  }
?>
<!DOCTYPE html>
<html lang="en-GB">
  <head>
    <script>
      (function() {
        const savedTheme = localStorage.getItem('theme');
        
        if (savedTheme) {
          // If they have explicitly toggled on your site before, respect it
          document.documentElement.setAttribute('data-theme', savedTheme);
        } else {
          // If no memory exists, check their browser setting
          const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
          
          // Dynamically apply the attribute so your CSS [data-theme="dark"] triggers
          if (prefersDark) {
            document.documentElement.setAttribute('data-theme', 'dark');
          } else {
            document.documentElement.setAttribute('data-theme', 'light');
          }
        }
      })();
    </script>
    <!-- Google tag (gtag.js) -->
    <!-- ####################################### -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="public, max-age=31536000, immutable" />
    <title><?php echo TITLE ?></title>
    <meta name="author" content="<?php echo AUTHOR ?>" />
    <meta name="description" content="<?php echo DESCRIPTION ?>" />
    <meta property="og:locale" content="en_GB" />
    <link rel="canonical" href="<?php echo URL ?>" />
    <link rel="alternate" type="text/markdown" title="Site summary for LLMs" href="<?php echo URL ?>llms.txt">
    <!-- SEO Meta Tags -->
    <meta name="keywords" content="<?php echo KEYWORDS ?>" />
    <meta name="robots" content="index, follow" />
    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="<?php echo TITLE ?>" />
    <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo URL ?>" />
    <meta property="og:image" content="<?php echo DESCIMG ?>" />
    <meta property="og:site_name" content="<?php echo $content['site']['name'] ?>" />
    <!-- Color Scheme Support for Browser UI -->
    <meta name="color-scheme" content="light dark" />
    <link rel="preload" href="assets/fonts/icons.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Styles -->
    <link rel="preload" href="assets/css/style.css" as="style" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- ####################################### -->

</head>
<body>

    <!-- Header with Mobile Menu -->
    <header class="site-header">
      <nav class="container nav-inner">
        <div id="logo" class="site-title">
          <a
            href="<?php echo URL ?>"
            class="logo"
            aria-label="Home"
            style="display: flex; flex-direction: row; align-items: start"
          >
            <div>
              <img
                id="imgLogo"
                src="https://trudymessingham.co.uk/assets/logo50.webp"
                alt=""
                width="50"
                height="50"
                aria-hidden="true"
                style="border: 0; vertical-align: baseline"
              />
            </div>
            <div class="logo" style="margin-left: 10px; padding-top: 6px">
              <span id="site-title"><?php echo htmlspecialchars($content['site']['name']); ?></span>
            </div>
          </a>
        </div>

        <!-- Mobile Overlay -->
        <div class="menu-overlay" id="menuOverlay"></div>

        <!-- Navigation Links (Sliding Drawer on Mobile) -->
        <div class="nav-links-wrapper" id="mobileMenu">
          <div class="mobile-menu-header">
            <span class="label-md text-primary">MENU</span>
            <button
              class="material-symbols-outlined btn-close-menu"
              id="closeMenu"
              aria-label="Close Menu"
            >
              close
            </button>
          </div>
          <div class="nav-links">
            <?php foreach ($content['nav'] as $nav): ?>
              <a 
              class="<?php echo htmlspecialchars($nav['class']); ?>" 
              href="<?php echo htmlspecialchars($nav['url']); ?>" 
              <?php if ($nav['current']) { echo "aria-current=\"page\""; } ?>>
                <?php echo htmlspecialchars($nav['title']); ?>
              </a>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="nav-actions">
          <button
            type="button"
            class="material-symbols-outlined btn-theme-toggle"
            id="themeToggle"
            aria-label="Toggle Dark Mode"
          >
            dark_mode
          </button>
          <button
            type="button"
            class="material-symbols-outlined btn-menu-toggle"
            id="openMenu"
            aria-label="Open Menu"
          >
            menu
          </button>
        </div>
      </nav>
    </header>

  <main>