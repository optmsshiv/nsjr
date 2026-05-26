<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Plumbing Services | NSJR Inc. Plumbing — Lynbrook &amp; Nassau County, NY</title>
  <meta name="description" content="Professional plumbing services in Lynbrook &amp; Nassau County: drain cleaning, sewer line, emergency plumbing, camera inspection. Licensed &amp; insured. Upfront pricing." />
  <meta name="robots" content="index,follow" />
  <link rel="canonical" href="https://www.mydraindr.com/pages/services.php" />
  <?php include '../components/head.php'; ?>
  <style>
    }

    .has-dropdown.drop-open .drop-arrow {
      transform: rotate(180deg);
    }
  </style>
  <style>
    .services-section {
      padding: clamp(60px, 8vw, 100px) 0;
      background: var(--off);
      position: relative;
      overflow: hidden
    }

    .services-section::before {
      content: '';
      position: absolute;
      top: -120px;
      left: -120px;
      width: 500px;
      height: 500px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(41, 147, 209, .08) 0%, transparent 70%);
      pointer-events: none
    }

    .services-section::after {
      content: '';
      position: absolute;
      bottom: -100px;
      right: -100px;
      width: 400px;
      height: 400px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(245, 166, 35, .07) 0%, transparent 70%);
      pointer-events: none
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
      gap: 22px;
      position: relative;
      z-index: 1
    }

    .srv-card {
      border-radius: 20px;
      padding: 28px 26px 24px;
      cursor: pointer;
      border: 2px solid transparent;
      position: relative;
      overflow: hidden;
      transition: transform .28s cubic-bezier(.4, 0, .2, 1), box-shadow .28s cubic-bezier(.4, 0, .2, 1), border-color .28s;
      display: flex;
      flex-direction: column;
      gap: 12px;
      outline: none;
      user-select: none;
      color: inherit
    }

    .srv-card::before {
      content: '';
      position: absolute;
      inset: 0;
      opacity: 0;
      transition: opacity .28s;
      border-radius: inherit
    }

    .srv-card:hover {
      transform: translateY(-6px)
    }

    .srv-card:hover::before {
      opacity: 1
    }

    .srv-card:focus-visible {
      outline: 3px solid var(--sky);
      outline-offset: 3px
    }

    .srv-card .card-arrow {
      position: absolute;
      top: 18px;
      right: 20px;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: rgba(255, 255, 255, .25);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: .8rem;
      color: rgba(255, 255, 255, .85);
      transition: transform .22s, background .22s
    }

    .srv-card:hover .card-arrow {
      transform: rotate(45deg);
      background: rgba(255, 255, 255, .4)
    }

    .srv-card .card-icon-wrap {
      width: 58px;
      height: 58px;
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      margin-bottom: 4px;
      flex-shrink: 0;
      transition: transform .28s
    }

    .srv-card:hover .card-icon-wrap {
      transform: scale(1.1) rotate(-4deg)
    }

    .srv-card .card-title {
      font-family: 'Nunito', sans-serif;
      font-weight: 800;
      font-size: 1.05rem;
      line-height: 1.2;
      margin: 0
    }

    .srv-card .card-desc {
      font-size: .84rem;
      line-height: 1.6;
      margin: 0;
      opacity: .85;
      flex: 1
    }

    .srv-card .card-tag {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: .74rem;
      font-weight: 700;
      padding: 4px 10px;
      border-radius: 99px;
      width: fit-content;
      margin-top: auto;
      letter-spacing: .04em
    }

    .srv-card .card-cta {
      font-size: .82rem;
      font-weight: 700;
      display: flex;
      align-items: center;
      gap: 6px;
      margin-top: 4px;
      letter-spacing: .04em;
      opacity: .85;
      transition: gap .2s, opacity .2s
    }

    .srv-card:hover .card-cta {
      gap: 10px;
      opacity: 1
    }

    /* Light muted card styles with colored borders */
    .srv-blue {
      background: #f0f6ff;
      color: #0f2a5e;
      box-shadow: 0 4px 18px rgba(21, 96, 189, .10);
      border-color: #2993d1 !important
    }

    .srv-blue::before {
      background: #e3eeff
    }

    .srv-blue .card-icon-wrap {
      background: #ddeeff;
      color: #1560bd
    }

    .srv-blue .card-tag {
      background: #ddeeff;
      color: #1560bd
    }

    .srv-blue .card-arrow {
      background: #ddeeff;
      color: #1560bd
    }

    .srv-blue .card-cta {
      color: #1560bd
    }

    .srv-teal {
      background: #f0faf9;
      color: #073d38;
      box-shadow: 0 4px 18px rgba(13, 158, 143, .10);
      border-color: #1fc4b2 !important
    }

    .srv-teal::before {
      background: #d8f5f2
    }

    .srv-teal .card-icon-wrap {
      background: #d8f5f2;
      color: #0d9e8f
    }

    .srv-teal .card-tag {
      background: #d8f5f2;
      color: #0d9e8f
    }

    .srv-teal .card-arrow {
      background: #d8f5f2;
      color: #0d9e8f
    }

    .srv-teal .card-cta {
      color: #0d9e8f
    }

    .srv-amber {
      background: #fffbf0;
      color: #3d2000;
      box-shadow: 0 4px 18px rgba(245, 166, 35, .12);
      border-color: #f5a623 !important
    }

    .srv-amber::before {
      background: #fff3d0
    }

    .srv-amber .card-icon-wrap {
      background: #fff3d0;
      color: #c07d00
    }

    .srv-amber .card-tag {
      background: #fff3d0;
      color: #a06500
    }

    .srv-amber .card-arrow {
      background: #fff3d0;
      color: #a06500
    }

    .srv-amber .card-cta {
      color: #a06500
    }

    .srv-amber .card-title {
      color: #3d2000
    }

    .srv-amber .card-desc {
      color: rgba(61, 32, 0, .75)
    }

    .srv-red {
      background: #fff5f4;
      color: #5a0a04;
      box-shadow: 0 4px 18px rgba(217, 41, 28, .10);
      border-color: #f04536 !important
    }

    .srv-red::before {
      background: #ffe4e1
    }

    .srv-red .card-icon-wrap {
      background: #ffe4e1;
      color: #d9291c
    }

    .srv-red .card-tag {
      background: #ffe4e1;
      color: #d9291c
    }

    .srv-red .card-arrow {
      background: #ffe4e1;
      color: #d9291c
    }

    .srv-red .card-cta {
      color: #d9291c
    }

    .srv-purple {
      background: #f7f2ff;
      color: #2d0d6e;
      box-shadow: 0 4px 18px rgba(107, 51, 204, .10);
      border-color: #9157e8 !important
    }

    .srv-purple::before {
      background: #ede0ff
    }

    .srv-purple .card-icon-wrap {
      background: #ede0ff;
      color: #6b33cc
    }

    .srv-purple .card-tag {
      background: #ede0ff;
      color: #6b33cc
    }

    .srv-purple .card-arrow {
      background: #ede0ff;
      color: #6b33cc
    }

    .srv-purple .card-cta {
      color: #6b33cc
    }

    .srv-green {
      background: #f0faf4;
      color: #0a3d22;
      box-shadow: 0 4px 18px rgba(26, 158, 94, .10);
      border-color: #22c97a !important
    }

    .srv-green::before {
      background: #d4f5e5
    }

    .srv-green .card-icon-wrap {
      background: #d4f5e5;
      color: #1a9e5e
    }

    .srv-green .card-tag {
      background: #d4f5e5;
      color: #1a9e5e
    }

    .srv-green .card-arrow {
      background: #d4f5e5;
      color: #1a9e5e
    }

    .srv-green .card-cta {
      color: #1a9e5e
    }

    .srv-navy {
      background: #f0f4fa;
      color: #0b1d35;
      box-shadow: 0 4px 18px rgba(11, 29, 53, .10);
      border-color: #2993d1 !important
    }

    .srv-navy::before {
      background: #dbe8f8
    }

    .srv-navy .card-icon-wrap {
      background: #dbe8f8;
      color: #1560bd
    }

    .srv-navy .card-tag {
      background: #dbe8f8;
      color: #1560bd
    }

    .srv-navy .card-arrow {
      background: #dbe8f8;
      color: #1560bd
    }

    .srv-navy .card-cta {
      color: #1560bd
    }

    .srv-indigo {
      background: #f2f4ff;
      color: #151e6e;
      box-shadow: 0 4px 18px rgba(58, 79, 200, .10);
      border-color: #5e73e8 !important
    }

    .srv-indigo::before {
      background: #e0e4ff
    }

    .srv-indigo .card-icon-wrap {
      background: #e0e4ff;
      color: #3a4fc8
    }

    .srv-indigo .card-tag {
      background: #e0e4ff;
      color: #3a4fc8
    }

    .srv-indigo .card-arrow {
      background: #e0e4ff;
      color: #3a4fc8
    }

    .srv-indigo .card-cta {
      color: #3a4fc8
    }

    .srv-rose {
      background: #fff2f6;
      color: #6b0b28;
      box-shadow: 0 4px 18px rgba(224, 36, 94, .10);
      border-color: #f5547e !important
    }

    .srv-rose::before {
      background: #ffd6e5
    }

    .srv-rose .card-icon-wrap {
      background: #ffd6e5;
      color: #e0245e
    }

    .srv-rose .card-tag {
      background: #ffd6e5;
      color: #e0245e
    }

    .srv-rose .card-arrow {
      background: #ffd6e5;
      color: #e0245e
    }

    .srv-rose .card-cta {
      color: #e0245e
    }

    .srv-orange {
      background: #fff7f0;
      color: #5a2200;
      box-shadow: 0 4px 18px rgba(232, 104, 10, .10);
      border-color: #f58c2a !important
    }

    .srv-orange::before {
      background: #ffe8d0
    }

    .srv-orange .card-icon-wrap {
      background: #ffe8d0;
      color: #e8680a
    }

    .srv-orange .card-tag {
      background: #ffe8d0;
      color: #e8680a
    }

    .srv-orange .card-arrow {
      background: #ffe8d0;
      color: #e8680a
    }

    .srv-orange .card-cta {
      color: #e8680a
    }

    .srv-wide {
      grid-column: span 2
    }

    @media(max-width:680px) {
      .srv-wide {
        grid-column: span 1
      }
    }

    /* ── Modal overlay — no blur ── */
    .modal-overlay {
      position: fixed;
      inset: 0;
      z-index: 2000;
      background: rgba(11, 29, 53, .72);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 16px;
      opacity: 0;
      pointer-events: none;
      transition: opacity .3s cubic-bezier(.4, 0, .2, 1)
    }

    .modal-overlay.open {
      opacity: 1;
      pointer-events: all
    }

    /* ── Modal box: flex column, fixed height ── */
    .modal-box {
      background: var(--white);
      border-radius: 28px;
      width: 100%;
      max-width: 660px;
      height: 88vh;
      max-height: 780px;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      box-shadow: 0 32px 80px rgba(11, 29, 53, .4), 0 8px 24px rgba(11, 29, 53, .18);
      transform: translateY(24px) scale(.97);
      transition: transform .32s cubic-bezier(.4, 0, .2, 1)
    }

    .modal-overlay.open .modal-box {
      transform: translateY(0) scale(1)
    }

    /* ── Header: big image, fixed, not scrollable ── */
    .modal-header {
      flex-shrink: 0;
      height: 240px;
      border-radius: 28px 28px 0 0;
      position: relative;
      overflow: hidden;
      background-size: cover;
      background-position: center
    }

    .modal-header-img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block
    }

    .modal-header-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgba(11, 29, 53, .38) 0%, rgba(11, 29, 53, .72) 100%)
    }

    .modal-header-content {
      position: absolute;
      inset: 0;
      padding: 22px 28px 24px;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      z-index: 2
    }

    .modal-close {
      position: absolute;
      top: 16px;
      right: 16px;
      z-index: 3;
      width: 34px;
      height: 34px;
      border-radius: 50%;
      background: rgba(255, 255, 255, .22);
      color: #fff;
      font-size: .95rem;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      border: none;
      transition: background .2s, transform .2s
    }

    .modal-close:hover {
      background: rgba(255, 255, 255, .38);
      transform: rotate(90deg)
    }

    .modal-icon {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      background: rgba(255, 255, 255, .2);
      color: #fff;
      margin-bottom: 10px;
      border: 1.5px solid rgba(255, 255, 255, .35);
      flex-shrink: 0
    }

    .modal-title {
      font-family: 'Nunito', sans-serif;
      font-weight: 900;
      font-size: clamp(1.4rem, 3vw, 1.9rem);
      color: #fff;
      line-height: 1.15;
      margin: 0 0 6px
    }

    .modal-subtitle {
      color: rgba(255, 255, 255, .8);
      font-size: .88rem;
      margin: 0
    }

    /* ── Scrollable body ── */
    .modal-body {
      flex: 1;
      overflow-y: auto;
      padding: 26px 30px 20px;
      overscroll-behavior: contain
    }

    .modal-body::-webkit-scrollbar {
      width: 5px
    }

    .modal-body::-webkit-scrollbar-track {
      background: transparent
    }

    .modal-body::-webkit-scrollbar-thumb {
      background: rgba(11, 29, 53, .18);
      border-radius: 99px
    }

    .modal-why {
      font-size: .92rem;
      line-height: 1.78;
      color: var(--text2);
      margin-bottom: 20px
    }

    .modal-bullets {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 9px;
      margin-bottom: 22px
    }

    @media(max-width:480px) {
      .modal-bullets {
        grid-template-columns: 1fr
      }
    }

    .modal-bullet {
      display: flex;
      align-items: flex-start;
      gap: 9px;
      background: var(--off);
      border-radius: 12px;
      padding: 11px 13px;
      font-size: .83rem;
      color: var(--text);
      border: 1px solid var(--gray2)
    }

    .modal-bullet i {
      font-size: .85rem;
      margin-top: 2px;
      flex-shrink: 0
    }

    .modal-badges {
      display: flex;
      flex-wrap: wrap;
      gap: 7px;
      margin-bottom: 8px
    }

    .modal-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: .76rem;
      font-weight: 700;
      padding: 4px 12px;
      border-radius: 99px;
      letter-spacing: .04em;
      border: 1.5px solid
    }

    /* ── Fixed bottom actions ── */
    .modal-footer {
      flex-shrink: 0;
      padding: 14px 30px 20px;
      border-top: 1px solid var(--gray2);
      background: var(--white);
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      border-radius: 0 0 28px 28px
  </style>
</head>
<body>
  <?php include '../components/navbar.php'; ?>
  <section class="page-hero">
    <div class="hero-dots" aria-hidden="true"></div>
    <div class="container page-hero-inner">
      <nav class="breadcrumb"><a href="../index.html">Home</a><i
          class="fa-solid fa-chevron-right"></i><span>Services</span></nav>
      <div class="section-label"><i class="fa-solid fa-toolbox"></i>All Services</div>
      <h1>Our Plumbing <span style="color:var(--amber);">Services</span></h1>
      <p class="lead mt-3">Tap any card to explore — from everyday clogs to full sewer overhauls. Upfront pricing &amp;
        1-year guarantee on every job.</p>
      <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:28px;">
        <a href="#services-grid" class="btn btn-outline btn-sm"><i class="fa-solid fa-table-cells"></i>Browse All
          Services</a>
        <a href="tel:+15168879687" class="btn btn-amber btn-sm"><i class="fa-solid fa-phone"></i>Call Now</a>
      </div>
    </div>
  </section>
  <section class="services-section" id="services-grid">
    <div class="container">
      <div class="services-header reveal">
        <div class="section-label" style="margin:0 auto 14px;"><i class="fa-solid fa-hand-pointer"></i>Tap to Explore
        </div>
        <h2>Everything We <span class="text-sky">Fix &amp; Clean</span></h2>
        <p class="lead">Click any service card to see full details, what's included, and how to book.</p>
      </div>
      <div class="services-grid" id="svcGrid">

        <div class="srv-card srv-blue" tabindex="0" role="button" data-title="Drain Cleaning"
          data-icon="fa-solid fa-sink" data-color="#1560bd" data-subtitle="Fast, thorough, and affordable clog removal"
          data-why="A clogged drain doesn't just inconvenience you — it can cause water backup, pipe stress, and mold if left untreated. Our licensed technicians use professional-grade hydro-jetting and rotary snaking tools to fully clear blockages, not just poke a hole through them."
          data-bullets='["Same-day appointments available","Hydro-jet &amp; rotary snake methods","All drain types: sink, tub, floor","No hidden fees — flat-rate pricing"]'
          data-tags='["Most Popular","Same Day"]' data-ctatext="Book Drain Cleaning">
          <div class="card-icon-wrap"><i class="fa-solid fa-sink"></i></div>
          <div class="card-title">Drain Cleaning</div>
          <div class="card-desc">Sink, tub, shower &amp; floor drains cleared fast with hydro-jet or rotary snake.</div>
          <div class="card-tag"><i class="fa-solid fa-star"></i>Most Popular</div>
          <div class="card-cta">Learn more <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-red" tabindex="0" role="button" data-title="Gas, Heating & Compliance Work"
          data-icon="fa-solid fa-fire" data-color="#e53935"
          data-subtitle="Safe, certified, and fully compliant gas & heating services"
          data-why="Gas and heating systems require strict compliance and expert handling. Improper installations or unresolved violations can lead to safety risks, fines, or system failures. Our certified technicians ensure everything meets safety regulations while restoring and installing systems efficiently."
          data-bullets='[
            "Gas pressure testing & certificates",
            "Gas meter restoration services",
            "Plumbing violation corrections",
            "Boiler & heating system installations"
          ]' data-tags='["Certified","Safety First"]' data-ctatext="Book Gas Service">

          <div class="card-icon-wrap">
            <i class="fa-solid fa-fire"></i>
          </div>

          <div class="card-title">Gas, Heating & Compliance Work</div>

          <div class="card-desc">
            Gas testing, meter restoration, violation fixes, and complete boiler & heating system installations.
          </div>

          <div class="card-tag">
            <i class="fa-solid fa-shield-halved"></i>Safety First
          </div>

          <div class="card-cta">
            Learn more <i class="fa-solid fa-arrow-right"></i>
          </div>

          <div class="card-arrow">
            <i class="fa-solid fa-arrow-up-right"></i>
          </div>
        </div>

        <div class="srv-card srv-teal" tabindex="0" role="button" data-title="Sewer Cleaning"
          data-icon="fa-solid fa-arrow-down" data-color="#0d9e8f" data-subtitle="Deep clean your main sewer line"
          data-why="Over time, grease, roots, and scale buildup can choke your main sewer line — causing slow drains throughout the house. We use high-pressure water jetting to completely flush out obstructions, restoring full flow capacity to your entire plumbing system."
          data-bullets='["High-pressure hydro-jetting","Main line descaling","Root cutting &amp; removal","Before &amp; after flow test"]'
          data-tags='["Hydro-Jet","Whole-Home"]' data-ctatext="Book Sewer Cleaning">
          <div class="card-icon-wrap"><i class="fa-solid fa-arrow-down"></i></div>
          <div class="card-title">Sewer Cleaning</div>
          <div class="card-desc">Main sewer line flushed clean with high-pressure water jetting technology.</div>
          <div class="card-tag"><i class="fa-solid fa-droplet"></i>Hydro-Jet</div>
          <div class="card-cta">Learn more <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-amber" tabindex="0" role="button" data-title="Clogged Drain Service"
          data-icon="fa-solid fa-ban" data-color="#f5a623" data-subtitle="Stubborn clogs cleared — guaranteed"
          data-why="Stubborn clogs that store-bought products can't touch are no match for our professional equipment. Whether it's hair, grease, soap scum or foreign objects, we locate and remove the blockage completely — and clean the pipe walls so it doesn't come back soon."
          data-bullets='["Hair, grease &amp; soap scum removed","Kitchen, bathroom &amp; laundry lines","Odor diagnosis included","60-day clog-free guarantee"]'
          data-tags='["Guaranteed","All Drain Types"]' data-ctatext="Fix My Clog">
          <div class="card-icon-wrap"><i class="fa-solid fa-ban"></i></div>
          <div class="card-title">Clogged Drain Service</div>
          <div class="card-desc">Stubborn clogs in any drain — cleared completely with a 60-day guarantee.</div>
          <div class="card-tag"><i class="fa-solid fa-shield-check"></i>60-Day Guarantee</div>
          <div class="card-cta">Learn more <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow" style="background:rgba(61,32,0,.12);color:rgba(61,32,0,.7)"><i
              class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-red" tabindex="0" role="button" data-title="Sewer Backup"
          data-icon="fa-solid fa-triangle-exclamation" data-color="#d9291c"
          data-subtitle="Emergency sewer backup cleared fast"
          data-why="Sewage backing up into your home is a health hazard and structural risk. We respond within 60 minutes, diagnose the blockage cause — roots, grease, collapse, or foreign debris — and clear it completely. Then we advise on prevention so it doesn't happen again."
          data-bullets='["60-min emergency response","Health &amp; safety containment","Root, grease &amp; debris causes","Post-clear camera inspection"]'
          data-tags='["Emergency","Health Risk"]' data-ctatext="Emergency Call Now">
          <div class="card-icon-wrap"><i class="fa-solid fa-triangle-exclamation"></i></div>
          <div class="card-title">Sewer Backup</div>
          <div class="card-desc">Sewage backing up is a health emergency — we respond in under 60 minutes.</div>
          <div class="card-tag"><i class="fa-solid fa-bolt"></i>Emergency</div>
          <div class="card-cta">Get emergency help <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-purple" tabindex="0" role="button" data-title="Drain Cleaning Near Me"
          data-icon="fa-solid fa-location-dot" data-color="#6b33cc"
          data-subtitle="Local DFW drain experts — fast dispatch"
          data-why="We're based in Dallas-Fort Worth and dispatch from multiple locations across the metroplex so you're never waiting hours for a plumber. We know the local plumbing landscape and can often arrive faster than national chains."
          data-bullets='["Serving all DFW zip codes","Multiple dispatch locations","Avg. arrival under 45 min","Local, licensed &amp; insured"]'
          data-tags='["DFW Local","Fast Arrival"]' data-ctatext="Find My Local Tech">
          <div class="card-icon-wrap"><i class="fa-solid fa-location-dot"></i></div>
          <div class="card-title">Drain Cleaning Near Me</div>
          <div class="card-desc">Local Dallas-Fort Worth plumbers dispatched from near you for fastest arrival.</div>
          <div class="card-tag"><i class="fa-solid fa-map-location-dot"></i>DFW Local</div>
          <div class="card-cta">Check my area <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-red" tabindex="0" role="button" data-title="Emergency Plumber"
          data-icon="fa-solid fa-phone-volume" data-color="#d9291c"
          data-subtitle="24/7/365 emergency dispatch — $0 extra"
          data-why="Plumbing emergencies strike at the worst times. Our 24/7 emergency line is always answered by a live dispatcher — no voicemail, no callback queues. We charge the same rate nights, weekends, and holidays. 18 fully stocked vans are on call across DFW right now."
          data-bullets='["Live answer every call, 24/7","$0 night &amp; weekend surcharge","18 vans fully stocked &amp; ready","Work begins within 60 minutes"]'
          data-tags='["24/7","No Extra Charge","Live Answer"]' data-ctatext="Call Emergency Line">
          <div class="card-icon-wrap"><i class="fa-solid fa-phone-volume"></i></div>
          <div class="card-title">Emergency Plumber</div>
          <div class="card-desc">Live dispatcher answers every call — nights, weekends, holidays. No extra charge.</div>
          <div class="card-tag"><i class="fa-solid fa-clock"></i>24/7 Live Answer</div>
          <div class="card-cta">Call now <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-navy srv-wide" tabindex="0" role="button" data-title="Sewer Line Services"
          data-icon="fa-solid fa-faucet-drip" data-color="#0b1d35"
          data-subtitle="Repair, reline or replace your sewer line"
          data-why="Cracked, collapsed or root-invaded sewer lines require expert diagnosis and precise repair. We use trenchless techniques wherever possible — saving your yard, landscaping, and driveway from unnecessary excavation. All work is camera-verified before and after every job."
          data-bullets='["Trenchless pipe lining","Pipe bursting replacement","Root intrusion removal","Full excavation if needed","Camera-verified results","1-year labor guarantee"]'
          data-tags='["Trenchless Option","Camera-Verified","1-Year Guarantee"]' data-ctatext="Book Sewer Assessment">
          <div class="card-icon-wrap"><i class="fa-solid fa-faucet-drip"></i></div>
          <div class="card-title">Sewer Line Services</div>
          <div class="card-desc">Repair, reline, or full replacement using modern trenchless methods — no yard
            destruction. Camera-verified before and after every job.</div>
          <div class="card-tag"><i class="fa-solid fa-check-circle"></i>Trenchless Available</div>
          <div class="card-cta">Explore options <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-indigo" tabindex="0" role="button" data-title="Slow Drain Fix"
          data-icon="fa-solid fa-hourglass-half" data-color="#3a4fc8"
          data-subtitle="Don't ignore a slow drain — fix it now"
          data-why="A slow drain is an early warning sign. Left alone, partial blockages become full clogs and can cause pipe pressure issues. We diagnose the exact cause — buildup, venting issues, or partial obstruction — and clear it the right way before it becomes an emergency."
          data-bullets='["Root cause diagnosis included","Prevents full clog development","Venting issues identified","Eco-safe enzyme treatment option"]'
          data-tags='["Preventive","Diagnostic"]' data-ctatext="Fix Slow Drain">
          <div class="card-icon-wrap"><i class="fa-solid fa-hourglass-half"></i></div>
          <div class="card-title">Slow Drain Fix</div>
          <div class="card-desc">A slow drain is a warning sign — we diagnose and fix the root cause before it
            escalates.</div>
          <div class="card-tag"><i class="fa-solid fa-magnifying-glass"></i>Diagnostic</div>
          <div class="card-cta">Learn more <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-teal" tabindex="0" role="button" data-title="Backed-Up Toilet"
          data-icon="fa-solid fa-toilet" data-color="#0d9e8f" data-subtitle="Overflow risk? We fix it fast."
          data-why="A backed-up toilet that won't respond to a plunger usually signals a blockage deeper in the drain line — or even in the main sewer. We snake the line, locate the blockage, and clear it completely. If it's recurring, we'll camera-inspect the line to find the real cause."
          data-bullets='["Works when plunging doesn' t","Deep-line snake clearing","Recurring issue diagnosis","Overflow
          prevention &amp; cleanup"]' data-tags='["Fast Fix","No Overflow"]' data-ctatext="Fix My Toilet">
          <div class="card-icon-wrap"><i class="fa-solid fa-toilet"></i></div>
          <div class="card-title">Backed-Up Toilet</div>
          <div class="card-desc">Deep line snaking clears what plungers can't — overflow risk eliminated fast.</div>
          <div class="card-tag"><i class="fa-solid fa-wrench"></i>Fast Fix</div>
          <div class="card-cta">Learn more <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-red" tabindex="0" role="button" data-title="Main Line Backup"
          data-icon="fa-solid fa-house-flood-water" data-color="#d9291c"
          data-subtitle="Whole-home blockage — priority response"
          data-why="When multiple fixtures are backing up at once, your main sewer line is blocked. This is one of the most serious plumbing emergencies — raw sewage can back up into the home if not addressed immediately. We treat this as an emergency and prioritize dispatch."
          data-bullets='["Emergency priority dispatch","Whole-home backup relief","Main line hydro-jetting","Post-clear camera inspection"]'
          data-tags='["Emergency","Whole-Home","Priority Dispatch"]' data-ctatext="Emergency Main Line">
          <div class="card-icon-wrap"><i class="fa-solid fa-house-flood-water"></i></div>
          <div class="card-title">Main Line Backup</div>
          <div class="card-desc">Multiple drains backing up? That's a main line emergency — we dispatch immediately.
          </div>
          <div class="card-tag"><i class="fa-solid fa-bell"></i>Priority</div>
          <div class="card-cta">Get urgent help <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-orange" tabindex="0" role="button" data-title="Broken Drain Pipe"
          data-icon="fa-solid fa-circle-xmark" data-color="#e8680a"
          data-subtitle="Camera-located crack or break — repaired"
          data-why="Broken drain pipes can leak inside walls, under slabs, or underground — causing water damage, mold, and foundation issues. We locate the break using camera inspection, then repair or replace the damaged section with minimal disruption to your home."
          data-bullets='["Camera-located break","In-wall &amp; under-slab repair","Trenchless options available","Water damage prevention"]'
          data-tags='["Camera-Located","Minimal Disruption"]' data-ctatext="Repair Broken Pipe">
          <div class="card-icon-wrap"><i class="fa-solid fa-circle-xmark"></i></div>
          <div class="card-title">Broken Drain Pipe</div>
          <div class="card-desc">Camera-located break diagnosis and repair — in-wall, under slab, or underground.</div>
          <div class="card-tag"><i class="fa-solid fa-camera"></i>Camera-Located</div>
          <div class="card-cta">Learn more <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-green" tabindex="0" role="button" data-title="Broken Pipe Repair"
          data-icon="fa-solid fa-wrench" data-color="#1a9e5e"
          data-subtitle="All pipe types repaired &amp; pressure-tested"
          data-why="Whether it's a supply line burst, a drain pipe crack, or corroded cast iron — we repair or replace it correctly the first time. We use current-code materials (CPVC, PEX, PVC) and perform pressure tests after every repair so you know it's right before we leave."
          data-bullets='["PEX, CPVC &amp; PVC repairs","Pressure-tested after repair","Code-compliant installations","Burst pipe emergency response"]'
          data-tags='["All Materials","Pressure-Tested"]' data-ctatext="Get Pipe Repaired">
          <div class="card-icon-wrap"><i class="fa-solid fa-wrench"></i></div>
          <div class="card-title">Broken Pipe Repair</div>
          <div class="card-desc">PEX, CPVC &amp; PVC repairs done right — pressure-tested and code-compliant every time.
          </div>
          <div class="card-tag"><i class="fa-solid fa-circle-check"></i>Pressure-Tested</div>
          <div class="card-cta">Learn more <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-blue" tabindex="0" role="button" data-title="Restaurant Drain Cleaning"
          data-icon="fa-solid fa-utensils" data-color="#1560bd" data-subtitle="Commercial kitchen drain specialists"
          data-why="Restaurant drains take on heavy grease, food waste, and scale far beyond residential use. We specialize in commercial kitchen drain maintenance, hydro-jetting grease traps and floor drains, and can set up recurring maintenance schedules to keep you in compliance and avoid surprise closures."
          data-bullets='["Grease trap cleaning","Floor drain hydro-jetting","Health code compliance","Recurring maintenance plans","After-hours service available","Commercial-grade equipment"]'
          data-tags='["Commercial","Health Code","Recurring Plans"]' data-ctatext="Book Commercial Service">
          <div class="card-icon-wrap"><i class="fa-solid fa-utensils"></i></div>
          <div class="card-title">Restaurant Drain Cleaning</div>
          <div class="card-desc">Grease trap cleaning, floor drains, health code compliance — commercial specialists.
          </div>
          <div class="card-tag"><i class="fa-solid fa-store"></i>Commercial</div>
          <div class="card-cta">Commercial inquiry <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-purple" tabindex="0" role="button" data-title="Drain Camera Inspection"
          data-icon="fa-solid fa-camera" data-color="#6b33cc" data-subtitle="See exactly what's inside your drain"
          data-why="Camera inspection takes the guesswork out of plumbing diagnosis. We insert a high-definition waterproof camera into your drains and sewer lines, giving us real-time video of what's causing your problem — cracks, roots, buildup, or misaligned joints. You see it too."
          data-bullets='["HD real-time video feed","Locates exact problem depth","No guesswork or over-digging","Digital report with recording"]'
          data-tags='["HD Camera","No Guesswork","From $149"]' data-ctatext="Book Camera Inspection">
          <div class="card-icon-wrap"><i class="fa-solid fa-camera"></i></div>
          <div class="card-title">Drain Camera Inspection</div>
          <div class="card-desc">HD waterproof camera shows exactly what's inside your pipes — live on our monitor.
          </div>
          <div class="card-tag"><i class="fa-solid fa-video"></i>HD Live Feed</div>
          <div class="card-cta">From $149 — Book now <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-indigo" tabindex="0" role="button" data-title="Sewer Camera Inspection"
          data-icon="fa-solid fa-magnifying-glass" data-color="#3a4fc8"
          data-subtitle="Full sewer line video investigation"
          data-why="A full sewer camera inspection is the most accurate way to understand the condition of your sewer line — whether you're buying a home, diagnosing recurring issues, or planning a repair. We provide a full digital recording you can keep for your records or share with a real estate agent."
          data-bullets='["Full sewer line inspected","Pre-purchase home buyer option","Digital recording provided","Root, crack &amp; joint issues found"]'
          data-tags='["Pre-Purchase Option","Digital Report"]' data-ctatext="Book Sewer Camera">
          <div class="card-icon-wrap"><i class="fa-solid fa-magnifying-glass"></i></div>
          <div class="card-title">Sewer Camera Inspection</div>
          <div class="card-desc">Full sewer line video investigation with digital report — ideal for home buyers.</div>
          <div class="card-tag"><i class="fa-solid fa-file-video"></i>Digital Report</div>
          <div class="card-cta">Learn more <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-green" tabindex="0" role="button" data-title="Sewer Maintenance Plans"
          data-icon="fa-solid fa-calendar-check" data-color="#1a9e5e" data-subtitle="Prevent problems before they start"
          data-why="Regular sewer maintenance catches small issues before they become expensive emergencies. Our maintenance plans include annual camera inspection, preventive hydro-jetting, and priority scheduling for urgent calls. Members save an average of $400/year versus reactive-only service."
          data-bullets='["Annual camera inspection","Preventive hydro-jetting","Priority emergency scheduling","Members save avg. $400/yr"]'
          data-tags='["Save $400/yr","Priority Access","Annual Plan"]' data-ctatext="Join Maintenance Plan">
          <div class="card-icon-wrap"><i class="fa-solid fa-calendar-check"></i></div>
          <div class="card-title">Sewer Maintenance Plans</div>
          <div class="card-desc">Annual plans with camera inspection, preventive jetting &amp; priority scheduling.
          </div>
          <div class="card-tag"><i class="fa-solid fa-piggy-bank"></i>Save $400/yr</div>
          <div class="card-cta">View plans <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-amber" tabindex="0" role="button" data-title="24/7 Plumber"
          data-icon="fa-solid fa-clock" data-color="#f5a623"
          data-subtitle="Around-the-clock plumbing — same rate always"
          data-why="We don't believe emergencies should come with a premium price tag. Our 24/7 plumbers charge the same rate at 3am as they do at 3pm — and they're fully stocked, licensed, and ready to work from the moment they arrive at your door."
          data-bullets='["Same rate — nights &amp; weekends","Fully stocked service vans","Licensed &amp; insured technicians","60-min or less arrival"]'
          data-tags='["$0 Surcharge","Always Available"]' data-ctatext="Call 24/7 Line">
          <div class="card-icon-wrap"><i class="fa-solid fa-clock"></i></div>
          <div class="card-title">24/7 Plumber</div>
          <div class="card-desc">Same rate at 3am as 3pm — fully stocked vans, licensed techs, always ready.</div>
          <div class="card-tag"><i class="fa-solid fa-dollar-sign"></i>No Surcharge</div>
          <div class="card-cta">Call now <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow" style="background:rgba(61,32,0,.12);color:rgba(61,32,0,.7)"><i
              class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-rose" tabindex="0" role="button" data-title="Emergency Drain Cleaning"
          data-icon="fa-solid fa-star-of-life" data-color="#e0245e"
          data-subtitle="Active overflow or backup — immediate help"
          data-why="When a drain is actively backing up or on the verge of overflowing, you need a tech — not an appointment. We dispatch emergency drain crews who carry all the tools needed to clear any drain on the spot, whether it's a single fixture or a whole-house backup."
          data-bullets='["Immediate emergency dispatch","All drain types cleared","Overflow containment","On-the-spot clearing — no delays"]'
          data-tags='["Immediate","Overflow Risk","All Drain Types"]' data-ctatext="Emergency Drain Help">
          <div class="card-icon-wrap"><i class="fa-solid fa-star-of-life"></i></div>
          <div class="card-title">Emergency Drain Cleaning</div>
          <div class="card-desc">Overflow risk or active backup — immediate dispatch, cleared on the spot.</div>
          <div class="card-tag"><i class="fa-solid fa-bell"></i>Immediate Dispatch</div>
          <div class="card-cta">Get help now <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-teal" tabindex="0" role="button" data-title="Kitchen Sink Plumbing"
          data-icon="fa-solid fa-utensils" data-color="#0d9e8f"
          data-subtitle="Clogs, leaks, disposals — all in one visit"
          data-why="Kitchen sinks take on grease, food scraps, and soap daily — making them one of the most clog-prone fixtures in any home. We clear the drain, inspect the p-trap and drain arm, and can repair or replace garbage disposals, supply lines, and shut-off valves on the same visit."
          data-bullets='["Grease &amp; food clog removal","P-trap &amp; drain arm repair","Garbage disposal fix/replace","Supply line &amp; valve service"]'
          data-tags='["Same-Visit Repairs","Disposal Service"]' data-ctatext="Fix Kitchen Drain">
          <div class="card-icon-wrap"><i class="fa-solid fa-utensils"></i></div>
          <div class="card-title">Kitchen Sink Plumbing</div>
          <div class="card-desc">Clogs, leaks, garbage disposal repair &amp; supply lines — handled in one visit.</div>
          <div class="card-tag"><i class="fa-solid fa-utensils"></i>Disposal Included</div>
          <div class="card-cta">Learn more <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-blue" tabindex="0" role="button" data-title="General Plumbing Repair"
          data-icon="fa-solid fa-screwdriver-wrench" data-color="#1560bd"
          data-subtitle="All types of plumbing repairs, done right"
          data-why="From leaky faucets to running toilets to corroded valves — our licensed plumbers handle any plumbing repair with upfront pricing and no unnecessary upsells. We fix it right the first time and guarantee the work for a full year."
          data-bullets='["Faucets, valves &amp; fixtures","Toilet repairs &amp; replacement","Leak detection &amp; repair","1-year labor guarantee"]'
          data-tags='["All Repairs","1-Year Guarantee"]' data-ctatext="Book Repair">
          <div class="card-icon-wrap"><i class="fa-solid fa-screwdriver-wrench"></i></div>
          <div class="card-title">General Plumbing Repair</div>
          <div class="card-desc">Faucets, toilets, valves, leaks — any repair with upfront pricing &amp; 1-year
            guarantee.</div>
          <div class="card-tag"><i class="fa-solid fa-medal"></i>1-Year Guarantee</div>
          <div class="card-cta">Learn more <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

        <div class="srv-card srv-orange srv-wide" tabindex="0" role="button" data-title="Sewer Line Repair"
          data-icon="fa-solid fa-helmet-safety" data-color="#e8680a"
          data-subtitle="Expert repair for any damaged sewer line"
          data-why="Sewer line repairs range from patching a small crack to replacing a collapsed 60-foot run. We use camera inspection to pinpoint the damage, present you with repair options ranked by cost and invasiveness, and execute whichever approach you choose — always with code-compliant materials and a written warranty."
          data-bullets='["Camera-pinpointed damage","Patch, reline or full replacement","Trenchless pipe bursting option","Minimal yard disruption","Code-compliant PVC &amp; HDPE","Written 1-year warranty"]'
          data-tags='["Camera-Pinpointed","Trenchless Option","Written Warranty"]' data-ctatext="Get Sewer Assessment">
          <div class="card-icon-wrap"><i class="fa-solid fa-helmet-safety"></i></div>
          <div class="card-title">Sewer Line Repair</div>
          <div class="card-desc">Camera-located damage, repair options upfront — patch, reline, or full replacement with
            trenchless options and a written 1-year warranty.</div>
          <div class="card-tag"><i class="fa-solid fa-shield"></i>Written Warranty</div>
          <div class="card-cta">Explore repair options <i class="fa-solid fa-arrow-right"></i></div>
          <div class="card-arrow"><i class="fa-solid fa-arrow-up-right"></i></div>
        </div>

      </div>
    </div>
  </section>

  <!-- ── St. Johns Electric Partner Banner ── -->
  <section class="section" style="padding-top:0;">
    <div class="container">
      <div class="electric-partner-banner reveal" style="
        background: linear-gradient(135deg, #0b1d35 0%, #1560bd 60%, #2993d1 100%);
        border-radius: 24px;
        padding: clamp(32px, 5vw, 52px) clamp(24px, 5vw, 52px);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 32px;
        flex-wrap: wrap;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 40px rgba(21,96,189,.25);
      ">
        <div aria-hidden="true"
          style="position:absolute;right:-20px;top:50%;transform:translateY(-50%);font-size:14rem;color:rgba(255,255,255,.04);line-height:1;pointer-events:none;user-select:none;">
          ⚡</div>
        <div style="display:flex;align-items:center;gap:24px;flex-wrap:wrap;position:relative;z-index:2;">
          <div
            style="width:68px;height:68px;border-radius:18px;background:rgba(255,255,255,.12);display:flex;align-items:center;justify-content:center;font-size:1.9rem;flex-shrink:0;border:1.5px solid rgba(255,255,255,.2);">
            ⚡</div>
          <div>
            <div
              style="font-size:.72rem;font-weight:700;letter-spacing:.12em;color:rgba(255,255,255,.55);text-transform:uppercase;margin-bottom:4px;">
              Proud Partner</div>
            <h3
              style="font-family:'Nunito',sans-serif;font-weight:900;font-size:clamp(1.2rem,2.5vw,1.7rem);color:#fff;margin:0 0 6px;line-height:1.15;">
              Electrical Services by <span style="color:#f5c842;">St. Johns Electric</span></h3>
            <p style="color:rgba(255,255,255,.65);font-size:.9rem;margin:0;max-width:480px;line-height:1.6;">NSJR is
              proud to offer electrical services through St. Johns Electric — keeping the lights on for over 40 years.
              Whether it's a dripping faucet or a faulty outlet, we've got you covered. Proudly serving Lynbrook and the
              surrounding areas.</p>
          </div>
        </div>
        <a href="https://stjohnselectric.com" target="_blank" rel="noopener"
          style="position:relative;z-index:2;display:inline-flex;align-items:center;gap:10px;background:#f5c842;color:#0b1d35;font-family:'Nunito',sans-serif;font-weight:800;font-size:.95rem;padding:14px 28px;border-radius:99px;text-decoration:none;white-space:nowrap;box-shadow:0 4px 18px rgba(245,200,66,.35);transition:transform .2s,box-shadow .2s;flex-shrink:0;"
          onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 28px rgba(245,200,66,.45)'"
          onmouseout="this.style.transform='';this.style.boxShadow='0 4px 18px rgba(245,200,66,.35)'">
          <i class="fa-solid fa-bolt"></i>Visit St. Johns Electric<i class="fa-solid fa-arrow-up-right"></i>
        </a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="cta-box reveal">
        <div
          style="position:relative;z-index:2;display:flex;align-items:center;justify-content:space-between;gap:32px;flex-wrap:wrap;">
          <div>
            <h2 class="text-white" style="font-size:clamp(1.8rem,4vw,3rem);">Ready to Solve Your<br><span
                class="text-amber">Plumbing Problem?</span></h2>
            <p style="color:rgba(255,255,255,.55);margin-top:10px;">Free estimate · Upfront pricing · 1-year warranty
            </p>
          </div>
          <div style="display:flex;gap:14px;flex-wrap:wrap;">
            <a href="contact.html" class="btn btn-amber btn-lg"><i class="fa-solid fa-clipboard-list"></i>Get Free
              Quote</a>
            <a href="tel:+15168879687" class="btn btn-outline btn-lg"><i class="fa-solid fa-phone"></i>Call Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include '../components/footer.php'; ?>

  <div class="modal-overlay" id="svcModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal-box" id="svcModalBox">
      <div class="modal-header" id="modalHeader">
        <img class="modal-header-img" id="modalHeaderImg" src="" alt="" />
        <div class="modal-header-overlay"></div>
        <button class="modal-close" id="modalClose" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        <div class="modal-header-content">
          <div class="modal-icon" id="modalIcon"><i class="fa-solid fa-wrench"></i></div>
          <div class="modal-title" id="modalTitle">Service</div>
          <div class="modal-subtitle" id="modalSubtitle"></div>
        </div>
      </div>
      <div class="modal-body">
        <p class="modal-why" id="modalWhy"></p>
        <div class="modal-bullets" id="modalBullets"></div>
        <div class="modal-badges" id="modalBadges"></div>
      </div>
      <div class="modal-footer">
        <a href="tel:+15168879687" class="btn btn-primary btn-lg" id="modalCta"><i class="fa-solid fa-phone"></i>Call
          Now</a>
        <a href="contact.html" class="btn btn-ghost btn-lg"><i class="fa-solid fa-clipboard-list"></i>Free Quote</a>
      </div>
    </div>
  </div>

</body>
</html>
