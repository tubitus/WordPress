<footer class="footer">
    <div>
    <p class="footer-text">&copy; <?php echo date('Y'); ?> Updraft. All rights reserved.</p>
    <!-- SVG for waves animation -->
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <!-- Defining SVG element for waves -->
      <defs>
        <!-- Defining the wave path once to reuse it for creating multiple wave layers -->
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="wave-parallax">
        <!-- Group of waves that will move at different speeds to create a parallax effect -->
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(0, 0, 0, 0.7)" /> <!-- First wave layer -->
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(85, 85, 85, 0.5)" /> <!-- Second wave layer -->
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(105, 105, 105, 0.3)" /> <!-- Third wave layer -->
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#8080816b" /> <!-- Fourth wave layer -->
      </g>
    </svg>
  </div>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>