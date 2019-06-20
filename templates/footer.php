    <nav class="next-prev-project">
      <!-- for some reason, having a <nav> here "fixes" the double scrollbar issue -->
      <?php getProjectLink('Previous', $prev_project); ?>
      <?php getProjectLink('Next', $next_project); ?>
    </nav>
  </main>
  <footer class="hidden display-after-load">
    &copy; <?php echo date("Y"); ?> Brian M Low. All Rights Reserved.
  </footer>
  <script src="scripts/jquery-1.12.4.min.js"></script>
  <script src="scripts/jquery.lazy.min.js"></script>
  <script src="scripts/slideshow.js"></script>
  <script src="scripts/site.js<?php echo $version; ?>"></script>
</body>
</html>