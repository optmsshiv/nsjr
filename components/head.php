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
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800;900&family=Outfit:wght@300;400;500;600;700&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet" />

  <!-- Font Awesome (free CDN) -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    crossorigin="anonymous" />

  <!-- Main stylesheet -->
  <link rel="stylesheet" href="/css/style.css" />

  <style>
    /* ── Floating action button ring-ripple animation ── */
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
