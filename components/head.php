<?php
/**
 * head.php — Shared <head> assets (fonts, CSS, global styles)
 *
 * Include INSIDE your <head> tag, after your page-specific <title> and <meta> tags:
 *
 *   <?php include '../components/head.php'; ?>   ← from pages/
 *   <?php include 'components/head.php'; ?>      ← from root (index)
 */
?>
  <!-- Fonts — preconnect for speed -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- Load fonts non-render-blocking -->
  <link rel="preload"
    href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800;900&family=Outfit:wght@300;400;500;600;700&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap"
    as="style" onload="this.onload=null;this.rel='stylesheet'" />
  <noscript>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800;900&family=Outfit:wght@300;400;500;600;700&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet" />
  </noscript>

  <!-- Font Awesome — load async to avoid render-blocking -->
  <link rel="preload"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    as="style" crossorigin="anonymous"
    onload="this.onload=null;this.rel='stylesheet'" />
  <noscript>
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      crossorigin="anonymous" />
  </noscript>

  <!-- Main stylesheet — load async -->
  <link rel="preload" href="/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
  <noscript><link rel="stylesheet" href="/css/style.css" /></noscript>

  <!-- Critical CSS + Page Loader -->
  <style>
    /* ── Variables ── */
    :root {
      --navy:#0b1d35; --navy2:#112843; --blue:#1560bd; --sky:#2993d1;
      --amber:#f5a623; --white:#ffffff; --off:#f7f9fc;
      --gray1:#f0f4f8; --gray2:#dde4ed; --gray3:#8da0b5;
      --text:#1e2d3d; --text2:#4a607a;
      --r-sm:6px; --r-md:12px; --r-lg:20px; --r-pill:9999px;
      --nav-h:70px;
    }
    /* ── Reset ── */
    *,*::before,*::after { box-sizing:border-box; margin:0; padding:0 }
    html { scroll-behavior:smooth }
    body {
      font-family:'Outfit',Arial,sans-serif;
      font-size:16px; line-height:1.65;
      color:var(--text); background:var(--white);
      overflow-x:hidden;
    }
    img { max-width:100%; display:block }
    a { color:inherit; text-decoration:none }
    ul,ol { list-style:none }

    /* ── Page Loader Overlay ── */
    #page-loader {
      position:fixed; inset:0; z-index:99999;
      background:var(--navy);
      display:flex; flex-direction:column;
      align-items:center; justify-content:center; gap:24px;
      transition:opacity .4s ease, visibility .4s ease;
    }
    #page-loader.hide {
      opacity:0; visibility:hidden;
    }
    /* Logo */
    #page-loader .loader-logo {
      width:90px; height:90px;
      border-radius:18px;
      overflow:hidden;
      box-shadow:0 8px 32px rgba(0,0,0,.4);
      animation:loader-pulse 1.6s ease-in-out infinite;
    }
    #page-loader .loader-logo img {
      width:100%; height:100%; object-fit:contain;
    }
    /* Brand name */
    #page-loader .loader-brand {
      font-family:'Nunito',Arial,sans-serif;
      font-weight:800; font-size:1.3rem;
      color:#fff; letter-spacing:.02em;
      opacity:.9;
    }
    #page-loader .loader-brand span {
      color:var(--amber);
    }
    /* Progress bar */
    #page-loader .loader-bar-wrap {
      width:180px; height:3px;
      background:rgba(255,255,255,.12);
      border-radius:99px; overflow:hidden;
    }
    #page-loader .loader-bar {
      height:100%; width:0%;
      background:linear-gradient(90deg, var(--sky), var(--amber));
      border-radius:99px;
      animation:loader-progress 1.2s ease-out forwards;
    }
    @keyframes loader-progress {
      0%   { width:0% }
      60%  { width:75% }
      100% { width:95% }
    }
    @keyframes loader-pulse {
      0%,100% { transform:scale(1);   box-shadow:0 8px 32px rgba(0,0,0,.4); }
      50%      { transform:scale(1.06); box-shadow:0 12px 40px rgba(41,147,209,.35); }
    }

    /* ── Hide body content until loader hides ── */
    body { visibility:hidden }
    body.css-loaded { visibility:visible }

    /* ── Navbar critical ── */
    .navbar {
      position:sticky; top:0; z-index:1000;
      height:var(--nav-h); background:var(--navy);
      border-bottom:1px solid rgba(255,255,255,.06);
    }
    .nav-wrap {
      height:100%; display:flex; align-items:center;
      justify-content:space-between; gap:24px;
      width:min(1160px,92vw); margin:0 auto;
    }
    .hero {
      background:var(--navy);
      padding:clamp(80px,12vw,140px) 0;
      position:relative; overflow:hidden;
    }
    .container { width:min(1160px,92vw); margin:0 auto }
    h1,h2,h3,h4,h5 {
      font-family:'Nunito',Arial,sans-serif;
      font-weight:800; line-height:1.1; color:var(--navy);
    }
    h1 { font-size:clamp(2.4rem,6vw,4.5rem) }
    .emergency-strip {
      background:#d9291c; color:#fff;
      text-align:center; padding:10px 20px;
      font-size:.85rem; font-weight:600;
    }

    /* ── Floating button ripple ── */
    .floating-btn { overflow:visible; isolation:isolate; }
    .floating-btn i { position:relative; z-index:2; }
    .floating-btn::before,
    .floating-btn::after {
      content:""; position:absolute; inset:0; border-radius:50%;
      border:2px solid currentColor; opacity:0; pointer-events:none;
    }
    .floating-btn::before { z-index:0; animation:floating-ring-ripple 2.4s ease-out infinite; }
    .floating-btn::after  { z-index:1; animation:floating-ring-ripple 2.4s ease-out .9s infinite; }
    .floating-btn--call::before,
    .floating-btn--call::after      { border-color:rgba(125,209,255,.72); }
    .floating-btn--whatsapp::before,
    .floating-btn--whatsapp::after  { border-color:rgba(103,255,173,.68); }
    @keyframes floating-ring-ripple {
      0%   { transform:scale(1);    opacity:.9; }
      70%  {                        opacity:.2; }
      100% { transform:scale(1.75); opacity:0;  }
    }
  </style>

  <!-- Page Loader HTML — injected before body content renders -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Insert loader as first element in body
      var loader = document.createElement('div');
      loader.id = 'page-loader';
      loader.innerHTML =
        '<div class="loader-logo"><img src="/assets/logo.jpeg" alt="NSJR Inc. Plumbing" /></div>' +
        '<div class="loader-brand">NSJR <span>Inc.</span> Plumbing</div>' +
        '<div class="loader-bar-wrap"><div class="loader-bar"></div></div>';
      document.body.insertBefore(loader, document.body.firstChild);

      // Show body content
      document.body.classList.add('css-loaded');

      // Hide loader once page fully loaded
      window.addEventListener('load', function() {
        // Complete the progress bar to 100%
        loader.querySelector('.loader-bar').style.cssText =
          'width:100%;transition:width .3s ease;';
        setTimeout(function() {
          loader.classList.add('hide');
          setTimeout(function() {
            loader.remove();
          }, 400);
        }, 300);
      });

      // Fallback: hide after 3s max
      setTimeout(function() {
        if (document.getElementById('page-loader')) {
          loader.classList.add('hide');
          setTimeout(function() { loader.remove(); }, 400);
        }
      }, 3000);
    });
  </script>