<?php
/**
 * footer.php — Shared footer component
 *
 * Include on every page with:
 *   <?php include '../components/footer.php'; ?>   ← from pages/
 *   <?php include 'components/footer.php'; ?>      ← from root (index)
 */
?>
  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">

        <div class="footer-brand">
          <a href="/index.php" class="nav-logo">
            <img src="/assets/logo.jpeg" alt="NSJR Inc. Plumbing"
              style="height:94px;width:94px;object-fit:contain;border-radius:6px;" />
          </a>
          <p>Serving with fast, honest plumbing for homes and businesses.</p>
          <div class="footer-socials mt-5">
            <a href="#" class="social-btn" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="social-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="social-btn" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#" class="social-btn" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>

        <div>
          <div class="footer-col-title">Quick Links</div>
          <ul class="footer-links">
            <li><a href="/index.php"><i class="fa-solid fa-chevron-right"></i>Home</a></li>
            <li><a href="/pages/services.php"><i class="fa-solid fa-chevron-right"></i>Services</a></li>
            <li><a href="/pages/about.php"><i class="fa-solid fa-chevron-right"></i>About</a></li>
            <li><a href="/pages/blog.php"><i class="fa-solid fa-chevron-right"></i>Blog</a></li>
            <li><a href="/pages/contact.php"><i class="fa-solid fa-chevron-right"></i>Contact</a></li>
          </ul>
        </div>

        <div>
          <div class="footer-col-title">Services</div>
          <ul class="footer-links">
            <li><a href="/pages/services.php#drain"><i class="fa-solid fa-chevron-right"></i>Drain Cleaning</a></li>
            <li><a href="/pages/services.php#pipe"><i class="fa-solid fa-chevron-right"></i>Pipe Repair</a></li>
            <li><a href="/pages/services.php#leak"><i class="fa-solid fa-chevron-right"></i>Gas Work</a></li>
            <li><a href="/pages/services.php#emergency"><i class="fa-solid fa-chevron-right"></i>Emergency</a></li>
            <li><a href="/pages/services.php#heater"><i class="fa-solid fa-chevron-right"></i>Water Heater</a></li>
            <li><a href="/pages/services.php#sewer"><i class="fa-solid fa-chevron-right"></i>Sewer Line</a></li>
          </ul>
        </div>

        <div>
          <div class="footer-col-title">Contact</div>
          <div class="footer-contact-row">
            <i class="fa-solid fa-phone"></i>
            <a href="tel:+15168879687" style="color:rgba(255,255,255,.65);">516-887-9687</a>
          </div>
          <div class="footer-contact-row">
            <i class="fa-solid fa-envelope"></i>
            <a href="mailto:info@nsjrplumbingli.com" style="color:rgba(255,255,255,.65);">info@nsjrplumbingli.com</a>
          </div>
          <div class="footer-contact-row">
            <i class="fa-solid fa-map-location-dot"></i>
            <span style="color:rgba(255,255,255,.5);">Lynbrook, NY</span>
          </div>
          <div class="footer-contact-row">
            <i class="fa-solid fa-clock"></i>
            <span>Mon–Sun 24Hrs<br><span style="color:var(--amber);">Emergency 24/7</span></span>
          </div>
        </div>

      </div>
      <div class="footer-bottom">
        <span>© <?php echo date('Y'); ?> NSJR Inc. Plumbing. All rights reserved.</span>
        <div style="display:flex;gap:16px;">
          <a href="#" style="color:rgba(255,255,255,.3);font-size:.78rem;">Privacy Policy</a>
          <a href="#" style="color:rgba(255,255,255,.3);font-size:.78rem;">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- FLOATING ACTION BUTTONS -->
  <a href="tel:+17188085827" class="floating-btn floating-btn--call" aria-label="Call us">
    <i class="fa-solid fa-phone"></i>
  </a>
  <a href="https://wa.me/17188085827" class="floating-btn floating-btn--whatsapp"
    aria-label="Chat on WhatsApp" target="_blank" rel="noreferrer noopener">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <!-- BACK TO TOP -->
  <button id="backTop" aria-label="Back to top"><i class="fa-solid fa-chevron-up"></i></button>

  <!-- SCRIPTS -->
  <script src="/js/main.js"></script>
