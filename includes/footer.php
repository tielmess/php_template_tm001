

    <footer>
      <div class="container">
        <p class="center" style="margin: 1em auto 1.5em;">
        </p>
        <nav id="footer-nav" aria-label="Footer Navigation">
          <!-- <?php foreach ($footer_nav as $footer_nav_item): ?> 
            <a class="<?php echo $footer_nav_item['class']; ?>" id="footer-<?php echo $footer_nav_item['class']; ?>" href="<?php echo $footer_nav_item['url']; ?>" <?php if ($footer_nav_item['current']) { echo "aria-current=\"page\""; } ?>><?php echo $footer_nav_item['title']; ?></a>
          <?php endforeach; ?> -->
        </nav>
        <p class="center" style="margin-top: 2em;">
          &copy;2016-<?php echo date("Y"); ?> Local Business. All rights reserved.
        </p>
      </div>
    </footer>

    <div
      id="announcements"
      aria-live="polite"
      aria-atomic="true"
      class="sr-only"
    ></div>

    <!-- Theme toggle, burger menu, smooth scroll -->
    <script>
      /* --- Theme Toggle Logic --- */
      const themeToggle = document.getElementById("themeToggle");

      // 1. Grab the actual active theme attribute calculated by your <head> guard script.
      let currentTheme =
        document.documentElement.getAttribute("data-theme") ||
        localStorage.getItem("theme") ||
        (window.matchMedia("(prefers-color-scheme: light)").matches
          ? "light"
          : "dark");

      function applyTheme(theme) {
        document.documentElement.setAttribute("data-theme", theme);

        // Update the Material icon
        if (themeToggle) {
          if (theme === "light") {
            themeToggle.textContent = "dark_mode"; // Offer dark mode
          } else {
            themeToggle.textContent = "light_mode"; // Offer light mode
          }
        }
      }

      // Initialise the UI states correctly on load
      applyTheme(currentTheme);

      // Listen for explicit manual toggle clicks
      if (themeToggle) {
        themeToggle.addEventListener("click", () => {
          const activeTheme =
            document.documentElement.getAttribute("data-theme") || currentTheme;
          currentTheme = activeTheme === "light" ? "dark" : "light";

          applyTheme(currentTheme);
          localStorage.setItem("theme", currentTheme);
        });
      }

      // Listen for automatic system colour scheme changes
      window
        .matchMedia("(prefers-color-scheme: light)")
        .addEventListener("change", (e) => {
          if (!localStorage.getItem("theme")) {
            currentTheme = e.matches ? "light" : "dark";
            applyTheme(currentTheme);
          }
        });

      /* --- Mobile Menu Logic --- */
      const openMenuBtn = document.getElementById("openMenu");
      const closeMenuBtn = document.getElementById("closeMenu");
      const mobileMenu = document.getElementById("mobileMenu");
      const menuOverlay = document.getElementById("menuOverlay");

      function toggleMenu() {
        mobileMenu.classList.toggle("active");
        menuOverlay.classList.toggle("active");

        // Prevent background scrolling when menu is open
        document.body.style.overflow = mobileMenu.classList.contains("active")
          ? "hidden"
          : "";
      }

      if (openMenuBtn) openMenuBtn.addEventListener("click", toggleMenu);
      if (closeMenuBtn) closeMenuBtn.addEventListener("click", toggleMenu);
      if (menuOverlay) menuOverlay.addEventListener("click", toggleMenu);

      // Listen for automatic system colour scheme changes
      window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", (e) => {
        // ONLY adjust if the user hasn't explicitly overridden their choices via localStorage
        if (!localStorage.getItem("theme")) {
          currentTheme = e.matches ? "dark" : "light";
          applyTheme(currentTheme);
          if (announcements) {
            announcements.textContent = `System theme changed to ${currentTheme} mode`;
          }
        }
      });

      // === Smooth Scroll Logic ===
      document.querySelectorAll('nav a[href^="#"]').forEach((link) => {
        link.addEventListener("click", function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute("href"));
          if (target) {
            const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
            target.scrollIntoView({
              behavior: reducedMotion ? "auto" : "smooth",
              block: "start",
            });
            target.focus();
            document.querySelectorAll("nav a").forEach((navLink) => {
              navLink.removeAttribute("aria-current");
            });
            this.setAttribute("aria-current", "page");
          }
        });
      });
    </script>
  </body>
</html>
