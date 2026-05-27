<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="theme-color" content="#0b1d35" />
  <title>Plumbing Tips Blog | NSJR Inc. Plumbing — Lynbrook, NY</title>
  <meta name="description" content="Expert plumbing tips, DIY guides, and advice from licensed plumbers at NSJR Inc. Plumbing. Learn how to maintain your pipes, save water, and prevent costly repairs in Lynbrook, NY." />
  <meta name="robots" content="index,follow" />
  <link rel="canonical" href="https://www.mydraindr.com/pages/blog.php" />
  <?php include '../components/head.php'; ?>
  <style>
    /* Blog page redesign styles */
    .blog-hero-search {
      display: flex;
      gap: 0;
      max-width: 460px;
      margin-top: 28px;
    }

    .blog-hero-search input {
      flex: 1;
      padding: 13px 20px;
      background: rgba(255, 255, 255, .1);
      border: 1.5px solid rgba(255, 255, 255, .2);
      border-right: none;
      border-radius: var(--r-md) 0 0 var(--r-md);
      color: var(--white);
      font-family: 'Outfit', sans-serif;
      font-size: .92rem;
      outline: none;
    }

    .blog-hero-search input::placeholder {
      color: rgba(255, 255, 255, .4);
    }

    .blog-hero-search button {
      border-radius: 0 var(--r-md) var(--r-md) 0;
      padding: 13px 20px;
    }

    .cat-bar {
      background: var(--white);
      border-bottom: 1px solid var(--gray2);
      padding: 14px 0;
      position: sticky;
      top: var(--nav-h);
      z-index: 50;
    }

    .cat-bar-inner {
      display: flex;
      gap: 8px;
      overflow-x: auto;
      padding-bottom: 2px;
      scrollbar-width: none;
    }

    .cat-btn {
      border: 1.5px solid var(--gray2);
      color: var(--text2);
      white-space: nowrap;
      background: transparent;
      padding: 7px 16px;
      border-radius: var(--r-pill);
      font-family: 'Outfit', sans-serif;
      font-size: .82rem;
      font-weight: 600;
      cursor: pointer;
      transition: all .18s;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .cat-btn:hover,
    .cat-btn.active {
      background: var(--navy);
      color: var(--white);
      border-color: var(--navy);
    }

    .cat-btn.active {
      background: var(--blue);
      border-color: var(--blue);
    }

    /* Featured article */
    .featured-article {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0;
      background: var(--navy);
      border-radius: var(--r-xl);
      overflow: hidden;
      margin-bottom: 56px;
    }

    @media(max-width:700px) {
      .featured-article {
        grid-template-columns: 1fr;
      }
    }

    .featured-graphic {
      min-height: 280px;
      background: linear-gradient(135deg, #1a3a6b, #2979b8);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 90px;
      position: relative;
      overflow: hidden;
    }

    .featured-graphic::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(41, 121, 184, .3), rgba(11, 29, 53, .6));
    }

    .featured-graphic span {
      position: relative;
      z-index: 1;
    }

    .featured-content {
      padding: clamp(28px, 5vw, 48px);
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .featured-label {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(245, 166, 35, .15);
      border: 1px solid rgba(245, 166, 35, .3);
      color: var(--amber);
      padding: 5px 14px;
      border-radius: var(--r-pill);
      font-size: .75rem;
      font-weight: 700;
      letter-spacing: .06em;
      text-transform: uppercase;
      margin-bottom: 16px;
      width: fit-content;
    }

    .featured-title {
      font-family: 'Nunito', sans-serif;
      font-size: clamp(1.3rem, 2.5vw, 1.8rem);
      font-weight: 800;
      color: var(--white);
      line-height: 1.3;
      margin-bottom: 12px;
    }

    .featured-excerpt {
      font-size: .9rem;
      color: rgba(255, 255, 255, .6);
      line-height: 1.7;
      margin-bottom: 24px;
    }

    .featured-meta {
      display: flex;
      align-items: center;
      gap: 16px;
      font-size: .78rem;
      color: rgba(255, 255, 255, .4);
      margin-bottom: 20px;
    }

    .featured-cta {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--amber);
      color: var(--navy);
      padding: 11px 22px;
      border-radius: var(--r-md);
      font-weight: 700;
      font-size: .88rem;
      text-decoration: none;
      transition: opacity .18s;
      width: fit-content;
    }

    .featured-cta:hover {
      opacity: .88;
    }

    /* Blog grid */
    .blog-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 28px;
    }

    .blog-card {
      background: var(--white);
      border: 1.5px solid var(--gray2);
      border-radius: var(--r-lg);
      overflow: hidden;
      transition: transform .22s, box-shadow .22s;
      display: flex;
      flex-direction: column;
    }

    .blog-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 16px 40px rgba(11, 29, 53, .1);
    }

    .blog-card-graphic {
      height: 180px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 64px;
      position: relative;
      overflow: hidden;
    }

    .blog-card-body {
      padding: 24px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .blog-card-title {
      font-family: 'Nunito', sans-serif;
      font-size: 1.05rem;
      font-weight: 800;
      color: var(--navy);
      line-height: 1.4;
      margin: 10px 0 8px;
    }

    .blog-card-excerpt {
      font-size: .85rem;
      color: var(--text2);
      line-height: 1.65;
      flex: 1;
    }

    .blog-card-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 16px;
      padding-top: 14px;
      border-top: 1px solid var(--gray2);
    }

    .blog-card-date {
      font-size: .75rem;
      color: var(--gray3);
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .blog-read-link {
      font-size: .82rem;
      font-weight: 700;
      color: var(--blue);
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .blog-read-link:hover {
      color: var(--navy);
    }

    /* Sidebar */
    .blog-layout {
      display: grid;
      grid-template-columns: 1fr 300px;
      gap: 48px;
      align-items: start;
    }

    @media(max-width:900px) {
      .blog-layout {
        grid-template-columns: 1fr;
      }

      .blog-sidebar {
        display: none;
      }
    }

    .sidebar-card {
      background: var(--white);
      border: 1.5px solid var(--gray2);
      border-radius: var(--r-lg);
      padding: 24px;
      margin-bottom: 24px;
    }

    .sidebar-title {
      font-family: 'Nunito', sans-serif;
      font-size: 1rem;
      font-weight: 800;
      color: var(--navy);
      margin-bottom: 16px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .sidebar-tip {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      padding: 12px 0;
      border-bottom: 1px solid var(--gray2);
    }

    .sidebar-tip:last-child {
      border-bottom: none;
      padding-bottom: 0;
    }

    .sidebar-tip-icon {
      width: 32px;
      height: 32px;
      border-radius: var(--r-sm);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: .85rem;
      flex-shrink: 0;
    }

    /* Pagination */
    .pagination {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 8px;
      margin-top: 48px;
    }

    .page-btn {
      width: 42px;
      height: 42px;
      border-radius: var(--r-md);
      border: 1.5px solid var(--gray2);
      background: var(--white);
      color: var(--text2);
      font-family: 'Outfit', sans-serif;
      font-size: .92rem;
      font-weight: 600;
      cursor: pointer;
      transition: all .18s;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .page-btn:hover {
      border-color: var(--blue);
      color: var(--blue);
    }

    .page-btn.active {
      background: var(--blue);
      border-color: var(--blue);
      color: var(--white);
    }

    .page-btn:disabled {
      opacity: .35;
  </style>
</head>
<body>
  <?php include '../components/navbar.php'; ?>

  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="hero-dots" aria-hidden="true"></div>
    <div class="container page-hero-inner">
      <nav class="breadcrumb"><a href="../index.html">Home</a><i class="fa-solid fa-chevron-right"></i><span>Blog</span>
      </nav>
      <div class="section-label"><i class="fa-solid fa-newspaper"></i>Tips &amp; Guides</div>
      <h1>NSJR Inc. <span style="color:var(--amber);">Plumbing Blog</span></h1>
      <p class="lead mt-3">Expert plumbing advice, money-saving maintenance tips, and DIY guides from our licensed NY
        technicians.</p>
      <div class="blog-hero-search">
        <input type="search" placeholder="Search articles…" aria-label="Search articles" />
        <button class="btn btn-amber" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
      </div>
    </div>
  </section>

  <!-- CATEGORY FILTER -->
  <div class="cat-bar">
    <div class="container">
      <div class="cat-bar-inner">
        <button class="cat-btn active">All Posts</button>
        <button class="cat-btn"><i class="fa-solid fa-wrench"></i> DIY Tips</button>
        <button class="cat-btn"><i class="fa-solid fa-calendar-check"></i> Maintenance</button>
        <button class="cat-btn"><i class="fa-solid fa-bolt"></i> Emergency</button>
        <button class="cat-btn"><i class="fa-solid fa-droplet"></i> Water Saving</button>
        <button class="cat-btn"><i class="fa-solid fa-snowflake"></i> Winter Prep</button>
        <button class="cat-btn"><i class="fa-solid fa-map-location-dot"></i> NY</button>
      </div>
    </div>
  </div>

  <!-- BLOG CONTENT -->
  <section class="section">
    <div class="container">

      <!-- Featured Article -->
      <article class="featured-article reveal">
        <div class="featured-graphic"><span>🚰</span></div>
        <div class="featured-content">
          <div class="featured-label"><i class="fa-solid fa-star"></i> Featured</div>
          <h2 class="featured-title">5 Signs Your Drains Need Professional Attention — Before It Becomes a Crisis</h2>
          <div class="featured-meta">
            <span><i class="fa-regular fa-calendar"></i> March 15, 2026</span>
            <span><i class="fa-regular fa-clock"></i> 8 min read</span>
            <span><span class="badge badge-sky" style="font-size:.7rem;">Maintenance</span></span>
          </div>
          <p class="featured-excerpt">Most plumbing disasters don't happen out of nowhere. There are warning signs — and
            catching them early can save NY homeowners thousands. Here's what to watch for.</p>
          <a href="#" class="featured-cta">Read Article <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </article>

      <!-- Blog grid + sidebar -->
      <div class="blog-layout">
        <!-- Main grid -->
        <div>
          <div class="blog-grid">

            <article class="blog-card reveal">
              <div class="blog-card-graphic" style="background:linear-gradient(135deg,#0b3d6e,#1a6daa);">💧</div>
              <div class="blog-card-body">
                <span class="badge badge-sky" style="font-size:.72rem;width:fit-content;"><i
                    class="fa-solid fa-droplet"></i> Water Saving</span>
                <h3 class="blog-card-title">How to Lower Your Water Bill Without Sacrificing Comfort</h3>
                <p class="blog-card-excerpt">Simple habits and affordable fixes that could cut your NY home's water
                  usage — and your bill — by up to 30% this year.</p>
                <div class="blog-card-footer">
                  <span class="blog-card-date"><i class="fa-regular fa-calendar"></i> Feb 28, 2026</span>
                  <a href="#" class="blog-read-link">Read <i class="fa-solid fa-arrow-right"
                      style="font-size:.7rem;"></i></a>
                </div>
              </div>
            </article>

            <article class="blog-card reveal">
              <div class="blog-card-graphic" style="background:linear-gradient(135deg,#1a4a6e,#2979b8);">🔥</div>
              <div class="blog-card-body">
                <span class="badge badge-amber" style="font-size:.72rem;width:fit-content;"><i
                    class="fa-solid fa-fire-flame-curved"></i> Water Heater</span>
                <h3 class="blog-card-title">Is a Tankless Water Heater Worth the Investment?</h3>
                <p class="blog-card-excerpt">Real numbers — upfront cost, energy savings over 10 years, and exact ROI
                  for NY homeowners considering a tankless upgrade.</p>
                <div class="blog-card-footer">
                  <span class="blog-card-date"><i class="fa-regular fa-calendar"></i> Jan 30, 2026</span>
                  <a href="#" class="blog-read-link">Read <i class="fa-solid fa-arrow-right"
                      style="font-size:.7rem;"></i></a>
                </div>
              </div>
            </article>

            <article class="blog-card reveal">
              <div class="blog-card-graphic" style="background:linear-gradient(135deg,#6b1a9b,#a02ddb);">🪠</div>
              <div class="blog-card-body">
                <span class="badge badge-sky" style="font-size:.72rem;width:fit-content;"><i
                    class="fa-solid fa-wrench"></i> DIY Tips</span>
                <h3 class="blog-card-title">When to DIY Plumbing — and When to Call a Pro</h3>
                <p class="blog-card-excerpt">Some jobs you can handle yourself. Others will void your warranty or cause
                  bigger problems. Here's the clear line every homeowner should know.</p>
                <div class="blog-card-footer">
                  <span class="blog-card-date"><i class="fa-regular fa-calendar"></i> Jan 12, 2026</span>
                  <a href="#" class="blog-read-link">Read <i class="fa-solid fa-arrow-right"
                      style="font-size:.7rem;"></i></a>
                </div>
              </div>
            </article>

            <article class="blog-card reveal">
              <div class="blog-card-graphic" style="background:linear-gradient(135deg,#6b5a1a,#dba42d);">🌳</div>
              <div class="blog-card-body">
                <span class="badge badge-amber" style="font-size:.72rem;width:fit-content;"><i
                    class="fa-solid fa-tree"></i> Sewer</span>
                <h3 class="blog-card-title">Tree Roots in Your Sewer Line: What to Do</h3>
                <p class="blog-card-excerpt">Root intrusion is one of the most common causes of sewer backups in NY
                  neighborhoods. Here's how it happens and how we fix it permanently.</p>
                <div class="blog-card-footer">
                  <span class="blog-card-date"><i class="fa-regular fa-calendar"></i> Dec 20, 2025</span>
                  <a href="#" class="blog-read-link">Read <i class="fa-solid fa-arrow-right"
                      style="font-size:.7rem;"></i></a>
                </div>
              </div>
            </article>

            <article class="blog-card reveal">
              <div class="blog-card-graphic" style="background:linear-gradient(135deg,var(--navy),var(--blue));">❄️
              </div>
              <div class="blog-card-body">
                <span class="badge badge-sky" style="font-size:.72rem;width:fit-content;"><i
                    class="fa-solid fa-snowflake"></i> Winter Prep</span>
                <h3 class="blog-card-title">How to Winterize Your Plumbing in NY</h3>
                <p class="blog-card-excerpt">Long Island winters can be brutal on pipes. Here's the complete checklist
                  to protect your home's plumbing before the cold hits hard.</p>
                <div class="blog-card-footer">
                  <span class="blog-card-date"><i class="fa-regular fa-calendar"></i> Nov 5, 2025</span>
                  <a href="#" class="blog-read-link">Read <i class="fa-solid fa-arrow-right"
                      style="font-size:.7rem;"></i></a>
                </div>
              </div>
            </article>

            <article class="blog-card reveal">
              <div class="blog-card-graphic" style="background:linear-gradient(135deg,#1a6b5a,#2ddb9b);">🏠</div>
              <div class="blog-card-body">
                <span class="badge badge-green" style="font-size:.72rem;width:fit-content;"><i
                    class="fa-solid fa-map-location-dot"></i> NY</span>
                <h3 class="blog-card-title">Common Plumbing Problems in NY Homes</h3>
                <p class="blog-card-excerpt">Older pipe materials, hard water, and aging infrastructure make NY homes
                  prone to specific plumbing issues. Here's what to watch for.</p>
                <div class="blog-card-footer">
                  <span class="blog-card-date"><i class="fa-regular fa-calendar"></i> Oct 18, 2025</span>
                  <a href="#" class="blog-read-link">Read <i class="fa-solid fa-arrow-right"
                      style="font-size:.7rem;"></i></a>
                </div>
              </div>
            </article>

          </div>

          <!-- Pagination -->
          <div class="pagination reveal">
            <button class="page-btn" aria-label="Previous page" disabled><i
                class="fa-solid fa-chevron-left"></i></button>
            <button class="page-btn active" aria-current="page">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">3</button>
            <button class="page-btn" aria-label="Next page"><i class="fa-solid fa-chevron-right"></i></button>
          </div>
        </div>

        <!-- Sidebar -->
        <aside class="blog-sidebar">
          <!-- Emergency CTA -->
          <div
            style="background:linear-gradient(135deg,var(--navy),var(--navy2));border-radius:var(--r-lg);padding:28px;margin-bottom:24px;text-align:center;">
            <i class="fa-solid fa-bolt" style="font-size:2rem;color:var(--amber);margin-bottom:12px;display:block;"></i>
            <h4 style="color:var(--white);font-size:1rem;margin-bottom:8px;">Plumbing Emergency?</h4>
            <p style="color:rgba(255,255,255,.55);font-size:.82rem;margin-bottom:18px;">We pick up 24/7 — no extra
              charges for nights or weekends.</p>
            <a href="tel:+15168879687" class="btn btn-amber btn-block"><i class="fa-solid fa-phone"></i>516-887-9687</a>
          </div>

          <!-- Quick Tips -->
          <div class="sidebar-card">
            <div class="sidebar-title"><i class="fa-solid fa-lightbulb" style="color:var(--amber);"></i>Quick Homeowner
              Tips</div>
            <div class="sidebar-tip">
              <div class="sidebar-tip-icon" style="background:var(--sky-lt);"><i class="fa-solid fa-sink"
                  style="color:var(--blue);font-size:.8rem;"></i></div>
              <div>
                <div style="font-size:.83rem;font-weight:700;color:var(--navy);margin-bottom:2px;">Run hot water after
                  each use</div>
                <div style="font-size:.78rem;color:var(--gray3);">Helps flush grease from drain lines</div>
              </div>
            </div>
            <div class="sidebar-tip">
              <div class="sidebar-tip-icon" style="background:rgba(26,158,94,.1);"><i class="fa-solid fa-toilet"
                  style="color:var(--green);font-size:.8rem;"></i></div>
              <div>
                <div style="font-size:.83rem;font-weight:700;color:var(--navy);margin-bottom:2px;">Never flush wipes —
                  even "flushable" ones</div>
                <div style="font-size:.78rem;color:var(--gray3);">Top cause of sewer backups</div>
              </div>
            </div>
            <div class="sidebar-tip">
              <div class="sidebar-tip-icon" style="background:rgba(245,166,35,.1);"><i
                  class="fa-solid fa-temperature-low" style="color:var(--amber);font-size:.8rem;"></i></div>
              <div>
                <div style="font-size:.83rem;font-weight:700;color:var(--navy);margin-bottom:2px;">Know where your main
                  shutoff is</div>
                <div style="font-size:.78rem;color:var(--gray3);">Essential for emergencies</div>
              </div>
            </div>
            <div class="sidebar-tip">
              <div class="sidebar-tip-icon" style="background:rgba(109,40,217,.08);"><i class="fa-solid fa-droplet"
                  style="color:#7c3aed;font-size:.8rem;"></i></div>
              <div>
                <div style="font-size:.83rem;font-weight:700;color:var(--navy);margin-bottom:2px;">Check your water
                  pressure regularly</div>
                <div style="font-size:.78rem;color:var(--gray3);">Over 80 PSI damages pipes over time</div>
              </div>
            </div>
          </div>

          <!-- Services widget -->
          <div class="sidebar-card">
            <div class="sidebar-title"><i class="fa-solid fa-toolbox" style="color:var(--blue);"></i>Our Services</div>
            <ul class="footer-links" style="margin:0;">
              <li style="margin-bottom:8px;"><a href="services.html#drain"
                  style="color:var(--navy);font-size:.85rem;font-weight:600;"><i class="fa-solid fa-chevron-right"
                    style="color:var(--blue);font-size:.65rem;margin-right:6px;"></i>Drain Cleaning</a></li>
              <li style="margin-bottom:8px;"><a href="services.html#pipe"
                  style="color:var(--navy);font-size:.85rem;font-weight:600;"><i class="fa-solid fa-chevron-right"
                    style="color:var(--blue);font-size:.65rem;margin-right:6px;"></i>Pipe Repair</a></li>
              <li style="margin-bottom:8px;"><a href="services.html#emergency"
                  style="color:var(--navy);font-size:.85rem;font-weight:600;"><i class="fa-solid fa-chevron-right"
                    style="color:var(--blue);font-size:.65rem;margin-right:6px;"></i>Emergency Service</a></li>
              <li style="margin-bottom:8px;"><a href="services.html#heater"
                  style="color:var(--navy);font-size:.85rem;font-weight:600;"><i class="fa-solid fa-chevron-right"
                    style="color:var(--blue);font-size:.65rem;margin-right:6px;"></i>Water Heater</a></li>
              <li><a href="services.html#sewer" style="color:var(--navy);font-size:.85rem;font-weight:600;"><i
                    class="fa-solid fa-chevron-right"
                    style="color:var(--blue);font-size:.65rem;margin-right:6px;"></i>Sewer Line</a></li>
            </ul>
            <a href="contact.html" class="btn btn-primary btn-block" style="margin-top:16px;font-size:.85rem;">Get Free
              Quote</a>
          </div>

          <!-- Area info -->
          <div class="sidebar-card" style="background:var(--off);border:none;">
            <div class="sidebar-title"><i class="fa-solid fa-map-location-dot" style="color:var(--blue);"></i>Serving NY
            </div>
            <p style="font-size:.82rem;color:var(--text2);line-height:1.65;">Franklin Square · Elmont · Valley Stream ·
              Lynbrook · Freeport · Baldwin · Hempstead · Mineola · Rockville Centre · and more.</p>
            <a href="contact.html#service-area" style="font-size:.82rem;font-weight:700;color:var(--blue);">See full
              service area →</a>
          </div>
        </aside>
      </div>
    </div>
  </section>

  <!-- NEWSLETTER -->
  <section class="section bg-off">
    <div class="container">
      <div class="cta-box reveal">
        <div
          style="position:relative;z-index:2;display:flex;align-items:center;justify-content:space-between;gap:40px;flex-wrap:wrap;">
          <div>
            <div class="section-label"
              style="background:rgba(255,255,255,.1);color:rgba(255,255,255,.85);border-color:rgba(255,255,255,.15);"><i
                class="fa-solid fa-envelope"></i>Newsletter</div>
            <h2 class="text-white mt-3" style="font-size:clamp(1.6rem,3vw,2.5rem);">Get Monthly <span
                class="text-amber">Plumbing Tips</span></h2>
            <p style="color:rgba(255,255,255,.5);margin-top:8px;max-width:360px;">Seasonal advice, maintenance
              reminders, and exclusive savings for NY homeowners — delivered once a month. No spam.</p>
          </div>
          <form style="display:flex;gap:0;min-width:300px;max-width:400px;flex:1;" aria-label="Newsletter signup">
            <input type="email" placeholder="Your email address" required aria-label="Email address"
              style="flex:1;padding:13px 18px;border:1.5px solid rgba(255,255,255,.15);border-right:none;border-radius:var(--r-md) 0 0 var(--r-md);background:rgba(255,255,255,.08);color:var(--white);font-family:'Outfit',sans-serif;font-size:.92rem;outline:none;" />
            <button class="btn btn-amber" type="submit"
              style="border-radius:0 var(--r-md) var(--r-md) 0;white-space:nowrap;">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->

  <?php include '../components/footer.php'; ?>
</body>
</html>
