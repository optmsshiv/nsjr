<?php
/**
 * navbar.php — Shared navigation component
 *
 * Include on every page with:
 *   <?php include '../components/navbar.php'; ?>   ← from pages/
 *   <?php include 'components/navbar.php'; ?>      ← from root (index)
 *
 * Active link highlighting is handled automatically by main.js.
 */
?>
  <!-- EMERGENCY STRIP -->
  <div class="emergency-strip">
    <i class="fa-solid fa-triangle-exclamation"></i>&nbsp;
    24/7 Emergency Plumbing — Call or Text:&nbsp;<a href="tel:+17188085827">718-808-5827</a>
  </div>

  <!-- NAVBAR -->
  <nav class="navbar" id="navbar" aria-label="Main navigation">
    <div class="nav-wrap">
      <a href="/index.php" class="nav-logo" aria-label="NSJR Inc. Plumbing Home">
        <img src="/assets/logo.jpeg" alt="NSJR Inc. Plumbing"
          style="height:64px;width:64px;object-fit:contain;border-radius:6px;" />
        <span>NSJR Plumbing <span class="logo-text-em">Inc.</span></span>
      </a>
      <ul class="nav-menu">
        <li><a href="/index.php" class="nav-link">Home</a></li>
        <li class="has-dropdown">
          <a href="/pages/services.php" class="nav-link">Services
            <i class="fa-solid fa-chevron-down drop-arrow"></i>
          </a>
          <ul class="dropdown">
            <li><a href="/pages/services.php#drain"    class="drop-item"><i class="fa-solid fa-sink"></i>Drain Cleaning</a></li>
            <li><a href="/pages/services.php#pipe"     class="drop-item"><i class="fa-solid fa-faucet-drip"></i>Pipe Repair</a></li>
            <li><a href="/pages/services.php#emergency"class="drop-item"><i class="fa-solid fa-bolt"></i>Emergency Service</a></li>
            <li><a href="/pages/services.php#heater"   class="drop-item"><i class="fa-solid fa-fire-flame-curved"></i>Water Heater</a></li>
            <li><a href="/pages/services.php#sewer"    class="drop-item"><i class="fa-solid fa-arrow-down"></i>Sewer Line</a></li>
          </ul>
        </li>
        <li><a href="/pages/about.php"   class="nav-link">About</a></li>
        <li><a href="/pages/blog.php"    class="nav-link">Blog</a></li>
        <li><a href="/pages/contact.php" class="nav-link">Contact</a></li>
      </ul>
      <div class="nav-actions">
        <a href="tel:+15168879687" class="nav-phone"><i class="fa-solid fa-phone"></i>516-887-9687</a>
        <a href="/pages/contact.php" class="btn btn-amber btn-sm">Free Quote</a>
      </div>
      <button class="hamburger" id="hamburger"
        aria-label="Toggle menu" aria-expanded="false" aria-controls="mobileMenu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>

  <!-- MOBILE MENU -->
  <div class="mobile-menu" id="mobileMenu">
    <a href="/index.php"          class="nav-link">Home</a>
    <a href="/pages/services.php" class="nav-link">Services</a>
    <a href="/pages/about.php"    class="nav-link">About</a>
    <a href="/pages/blog.php"     class="nav-link">Blog</a>
    <a href="/pages/contact.php"  class="nav-link">Contact</a>
    <div class="mobile-divider"></div>
    <div class="mobile-cta">
      <a href="tel:+15168879687" class="btn btn-amber btn-block">
        <i class="fa-solid fa-phone"></i>Call 516-887-9687
      </a>
      <a href="/pages/contact.php" class="btn btn-ghost btn-block">
        <i class="fa-solid fa-file-lines"></i>Get Free Quote
      </a>
    </div>
  </div>
