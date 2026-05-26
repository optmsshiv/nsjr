<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="theme-color" content="#0b1d35" />
  <title>About Us | NSJR Inc. — Same-Day Plumbing Experts in Lynbrook &amp; Nassau County</title>
  <meta name="description" content="Learn about NSJR Inc. — same-day plumbing experts based in Lynbrook, NY. Serving Nassau County communities with 30+ years of experience. Call 516-887-9687." />
  <meta name="robots" content="index,follow" />
  <link rel="canonical" href="https://www.mydraindr.com/pages/about.php" />
  <?php include '../components/head.php'; ?>
  <style>
    /* About page extras */
    .timeline {
      display: flex;
      flex-direction: column;
      gap: 0;
      margin-top: 36px;
    }

    .tl-item {
      display: flex;
      gap: 20px;
      align-items: flex-start;
      padding-bottom: 28px;
      border-left: 2px solid var(--sky-lt);
      padding-left: 24px;
      margin-left: 10px;
      position: relative;
    }

    .tl-item:last-child {
      border-left: 2px solid transparent;
      padding-bottom: 0;
    }

    .tl-dot {
      position: absolute;
      left: -9px;
      top: 2px;
      width: 16px;
      height: 16px;
      border-radius: 50%;
      background: var(--blue);
      border: 3px solid var(--white);
      box-shadow: 0 0 0 2px var(--blue);
      flex-shrink: 0;
    }

    .tl-dot--amber {
      background: var(--amber);
      box-shadow: 0 0 0 2px var(--amber);
    }

    .tl-year {
      font-weight: 800;
      color: var(--navy);
      font-family: 'Nunito', sans-serif;
      min-width: 40px;
    }

    .tl-desc {
      font-size: .88rem;
      color: var(--text2);
      line-height: 1.6;
    }

    .value-card {
      background: var(--white);
      border: 1.5px solid var(--gray2);
      border-radius: var(--r-lg);
      padding: 32px;
      transition: transform .2s, box-shadow .2s;
    }

    .value-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 32px rgba(11, 29, 53, .08);
    }

    .value-icon {
      width: 56px;
      height: 56px;
      border-radius: var(--r-md);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.4rem;
      margin-bottom: 16px;
    }

    .team-card {
      background: var(--white);
      border: 1.5px solid var(--gray2);
      border-radius: var(--r-lg);
      padding: 28px;
      text-align: center;
      transition: transform .2s, box-shadow .2s;
    }

    .team-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 32px rgba(11, 29, 53, .08);
    }

    .team-avatar {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--white);
      font-family: 'Outfit', sans-serif;
      font-size: 1.4rem;
      font-weight: 700;
      margin: 0 auto 16px;
    }

    .cert-card {
      background: rgba(255, 255, 255, .06);
      border: 1px solid rgba(255, 255, 255, .1);
      border-radius: var(--r-lg);
      padding: 28px;
      text-align: center;
      transition: transform .2s;
    }

    .cert-card:hover {
      transform: translateY(-3px);
    }

    .promise-strip {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      margin-top: 32px;
    }

    .promise-item {
      display: flex;
      align-items: center;
      gap: 10px;
      background: var(--sky-lt);
      border-radius: var(--r-pill);
      padding: 8px 18px;
  </style>
</head>
<body>
  <?php include '../components/navbar.php'; ?>

  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="hero-dots" aria-hidden="true"></div>
    <div class="container page-hero-inner">
      <nav class="breadcrumb"><a href="../index.html">Home</a><i class="fa-solid fa-chevron-right"></i><span>About
          Us</span></nav>
      <div class="section-label"><i class="fa-solid fa-users"></i>Our Story</div>
      <h1>Built on <span style="color:var(--amber);">Trust.</span><br>Driven by Results.</h1>
      <p class="lead mt-3">When you need a plumber, it’s usually urgent — a leak, a backup, no hot water, or a project
        that can’t afford mistakes. NSJR Inc. answers the phone, shows up on time, and makes the entire process fast and
        stress-free.</p>
      <div class="promise-strip">
        <div class="promise-item"><i class="fa-solid fa-shield-halved" style="color:var(--blue);"></i>Licensed &amp;
          Insured</div>
        <div class="promise-item"><i class="fa-solid fa-clock" style="color:var(--blue);"></i>24/7 Emergency Line</div>
        <div class="promise-item"><i class="fa-solid fa-tag" style="color:var(--blue);"></i>Upfront Pricing</div>
        <div class="promise-item"><i class="fa-solid fa-medal" style="color:var(--blue);"></i>1-Year Warranty
        <span><span style="color:var(--blue);">*</span> for new services only</span></div>
      </div>
    </div>
  </section>

  <!-- STATS BAR -->
  <div style="background:var(--white);border-bottom:1px solid var(--gray2);padding:36px 0;">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(170px,1fr));gap:24px;text-align:center;">
        <div class="reveal">
          <div style="font-family:'Space Mono',monospace;font-size:2.4rem;font-weight:700;color:var(--navy);">4.9<span
              style="color:var(--amber);font-size:1.8rem;">★</span></div>
          <div style="font-size:.75rem;letter-spacing:.1em;text-transform:uppercase;color:var(--gray3);margin-top:6px;">
            Average Rating</div>
        </div>
        
        
        <div class="reveal">
          <div style="font-family:'Space Mono',monospace;font-size:2.4rem;font-weight:700;color:var(--navy);">24/7</div>
          <div style="font-size:.75rem;letter-spacing:.1em;text-transform:uppercase;color:var(--gray3);margin-top:6px;">
            Emergency Response</div>
        </div>
      </div>
    </div>
  </div>

  <!-- OUR STORY -->
  <section class="section">
    <div class="container">
      <div class="grid-2" style="gap:64px;">
        <div class="reveal">
          <div class="section-label"><i class="fa-solid fa-book-open"></i>How It Started</div>
          <h2>Proudly Based in <span class="text-sky">Lynbrook</span></h2>
          <p class="mt-4 mb-4">NSJR Inc. is rooted in Lynbrook and proudly serves the same Nassau County communities we
            live in every day. We’re not a call center or a franchise — we’re your local plumber, and we treat every job
            like it’s in our own neighborhood.</p>
          <p class="mb-4">With <strong>30+ years of combined plumbing experience</strong> and 5 years in business, we’ve
            built our reputation around one simple promise: we answer the phone, show up when we say we will, and make
            the entire process fast and stress-free.</p>
          <p>We serve Lynbrook, Malverne, Valley Stream, Franklin Square, New Hyde Park, West Hempstead, East Rockaway,
            Oceanside, Baldwin, Massapequa, Mineola, Rockville Centre, Elmont, Uniondale, and all surrounding Nassau
            County communities.</p>
          <!-- TIMELINE
        <div class="timeline">
          <div class="tl-item">
            <div class="tl-dot"></div>
            <div><span class="tl-year">Day 1</span> <span class="tl-desc">— One truck, one mission: give every customer a fair price and a job done right</span></div>
          </div>
          <div class="tl-item">
            <div class="tl-dot"></div>
            <div><span class="tl-year">Growing</span> <span class="tl-desc">— Word spread fast. Neighbor told neighbor. Our fleet expanded to cover all of NY</span></div>
          </div>
          <div class="tl-item">
            <div class="tl-dot"></div>
            <div><span class="tl-year">24/7</span> <span class="tl-desc">— Launched round-the-clock emergency service with no overtime charges — ever</span></div>
          </div>
          <div class="tl-item">
            <div class="tl-dot tl-dot--amber"></div>
            <div><span class="tl-year">Today</span> <span class="tl-desc">— NY most-reviewed local plumbing team, still community-owned and operated</span></div>
          </div>
        </div>-->
        </div>
        <div class="reveal">
          <div
            style="background:linear-gradient(135deg,var(--navy),var(--navy2));border-radius:var(--r-xl);padding:40px;color:var(--white);">
            <div
              style="width:80px;height:80px;border-radius:50%;background:linear-gradient(135deg,var(--blue),var(--sky));display:flex;align-items:center;justify-content:center;font-size:2rem;margin-bottom:24px;">
              <i class="fa-solid fa-phone"></i></div>
            <h3 style="color:var(--white);font-size:1.4rem;">Why Customers Call NSJR Inc.</h3>
            <p
              style="color:rgba(255,255,255,.65);font-size:.92rem;line-height:1.75;margin:16px 0 24px;font-style:italic;border-left:3px solid var(--amber);padding-left:16px;">
              Most people don’t shop around for plumbers — they need help right now. No waiting days for a callback. No
              confusion. Just fast, dependable service when you need it most.</p>
            <div style="display:flex;flex-wrap:wrap;gap:10px;margin-bottom:28px;">
              <span class="badge badge-sky"><i class="fa-solid fa-certificate"></i>Licensed Plumbers</span>
              <span class="badge badge-amber"><i class="fa-solid fa-shield-halved"></i>Fully Insured</span>
              <span class="badge badge-green"><i class="fa-solid fa-award"></i>Top Rated Local</span>
            </div>
            <div style="display:flex;flex-direction:column;gap:14px;">
              <div style="display:flex;align-items:center;gap:12px;">
                <div
                  style="width:36px;height:36px;background:rgba(255,255,255,.08);border-radius:var(--r-md);display:flex;align-items:center;justify-content:center;">
                  <i class="fa-solid fa-check" style="color:var(--green);"></i></div><span
                  style="font-size:.88rem;color:rgba(255,255,255,.75);">We answer calls and texts quickly</span>
              </div>
              <div style="display:flex;align-items:center;gap:12px;">
                <div
                  style="width:36px;height:36px;background:rgba(255,255,255,.08);border-radius:var(--r-md);display:flex;align-items:center;justify-content:center;">
                  <i class="fa-solid fa-check" style="color:var(--green);"></i></div><span
                  style="font-size:.88rem;color:rgba(255,255,255,.75);">Same-day and emergency service available</span>
              </div>
              <div style="display:flex;align-items:center;gap:12px;">
                <div
                  style="width:36px;height:36px;background:rgba(255,255,255,.08);border-radius:var(--r-md);display:flex;align-items:center;justify-content:center;">
                  <i class="fa-solid fa-check" style="color:var(--green);"></i></div><span
                  style="font-size:.88rem;color:rgba(255,255,255,.75);">We show up on time and ready to work</span>
              </div>
              <div style="display:flex;align-items:center;gap:12px;">
                <div
                  style="width:36px;height:36px;background:rgba(255,255,255,.08);border-radius:var(--r-md);display:flex;align-items:center;justify-content:center;">
                  <i class="fa-solid fa-check" style="color:var(--green);"></i></div><span
                  style="font-size:.88rem;color:rgba(255,255,255,.75);">We fix the problem right the first time</span>
              </div>
              <div style="display:flex;align-items:center;gap:12px;">
                <div
                  style="width:36px;height:36px;background:rgba(255,255,255,.08);border-radius:var(--r-md);display:flex;align-items:center;justify-content:center;">
                  <i class="fa-solid fa-check" style="color:var(--green);"></i></div><span
                  style="font-size:.88rem;color:rgba(255,255,255,.75);">Clear, honest, and straightforward
                  service</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- SERVICES OVERVIEW -->
  <section class="section">
    <div class="container">
      <div class="text-center mb-7 reveal">
        <div class="section-label"><i class="fa-solid fa-wrench"></i>What We Do</div>
        <h2>Complete Plumbing Services <span class="text-sky">Done Right</span></h2>
        <p class="lead mt-3" style="max-width:560px;margin:16px auto 0;">Whether it’s urgent or planned, NSJR Inc. has
          the experience to handle it.</p>
      </div>
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:24px;">
        <div class="value-card reveal">
          <div class="value-icon" style="background:rgba(220,38,38,.08);"><i class="fa-solid fa-bolt"
              style="color:#dc2626;"></i></div>
          <h3 style="font-size:1.05rem;margin-bottom:10px;">Emergency &amp; Repair</h3>
          <ul style="font-size:.86rem;color:var(--text2);line-height:2;list-style:none;padding:0;margin:0;">
            <li><i class="fa-solid fa-check-circle" style="color:var(--green);margin-right:7px;"></i>Emergency plumbing
              (same-day)</li>
            <li><i class="fa-solid fa-check-circle" style="color:var(--green);margin-right:7px;"></i>Sewer backups &amp;
              drain cleaning</li>
            <li><i class="fa-solid fa-check-circle" style="color:var(--green);margin-right:7px;"></i>Leaking pipes &amp;
              water mains</li>
            <li><i class="fa-solid fa-check-circle" style="color:var(--green);margin-right:7px;"></i>Running toilets,
              faucets &amp; fixtures</li>
          </ul>
        </div>
        <div class="value-card reveal">
          <div class="value-icon" style="background:rgba(245,166,35,.1);"><i class="fa-solid fa-fire-flame-curved"
              style="color:var(--amber);"></i></div>
          <h3 style="font-size:1.05rem;margin-bottom:10px;">Gas, Heating &amp; Compliance</h3>
          <ul style="font-size:.86rem;color:var(--text2);line-height:2;list-style:none;padding:0;margin:0;">
            <li><i class="fa-solid fa-check-circle" style="color:var(--green);margin-right:7px;"></i>Gas pressure
              testing &amp; certificates</li>
            <li><i class="fa-solid fa-check-circle" style="color:var(--green);margin-right:7px;"></i>Gas meter
              restoration</li>
            <li><i class="fa-solid fa-check-circle" style="color:var(--green);margin-right:7px;"></i>Plumbing violations
              corrected</li>
            <li><i class="fa-solid fa-check-circle" style="color:var(--green);margin-right:7px;"></i>Boiler &amp;
              heating system installations</li>
          </ul>
        </div>
        <div class="value-card reveal">
          <div class="value-icon" style="background:var(--sky-lt);"><i class="fa-solid fa-shower"
              style="color:var(--blue);"></i></div>
          <h3 style="font-size:1.05rem;margin-bottom:10px;">Installations &amp; Upgrades</h3>
          <ul style="font-size:.86rem;color:var(--text2);line-height:2;list-style:none;padding:0;margin:0;">
            <li><i class="fa-solid fa-check-circle" style="color:var(--green);margin-right:7px;"></i>Water heater
              installations</li>
            <li><i class="fa-solid fa-check-circle" style="color:var(--green);margin-right:7px;"></i>Repiping services
            </li>
            <li><i class="fa-solid fa-check-circle" style="color:var(--green);margin-right:7px;"></i>Fixture
              installations</li>
          </ul>
        </div>
        <div class="value-card reveal">
          <div class="value-icon" style="background:rgba(109,40,217,.08);"><i class="fa-solid fa-building"
              style="color:#7c3aed;"></i></div>
          <h3 style="font-size:1.05rem;margin-bottom:10px;">Construction &amp; Commercial</h3>
          <ul style="font-size:.86rem;color:var(--text2);line-height:2;list-style:none;padding:0;margin:0;">
            <li><i class="fa-solid fa-check-circle" style="color:var(--green);margin-right:7px;"></i>New construction
              plumbing</li>
            <li><i class="fa-solid fa-check-circle" style="color:var(--green);margin-right:7px;"></i>Residential &amp;
              commercial service</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- VALUES -->
  <section class="section bg-off">
    <div class="container">
      <div class="text-center mb-7 reveal">
        <div class="section-label"><i class="fa-solid fa-heart"></i>What We Stand For</div>
        <h2>Our Core <span class="text-sky">Values</span></h2>
        <p class="lead mt-3" style="max-width:520px;margin:16px auto 0;">These aren't slogans — they're the standards
          every Trailblazer technician is held to on every job.</p>
      </div>
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(250px,1fr));gap:24px;">
        <div class="value-card reveal">
          <div class="value-icon" style="background:var(--sky-lt);"><i class="fa-solid fa-handshake"
              style="color:var(--blue);"></i></div>
          <h3 style="font-size:1.1rem;margin-bottom:8px;">Honesty First</h3>
          <p style="font-size:.88rem;color:var(--text2);line-height:1.7;">We tell you exactly what the problem is and
            what it costs — before we touch a single tool. No upselling, no surprises, no hidden fees.</p>
        </div>
        <div class="value-card reveal">
          <div class="value-icon" style="background:rgba(245,166,35,.1);"><i class="fa-solid fa-bolt"
              style="color:var(--amber);"></i></div>
          <h3 style="font-size:1.1rem;margin-bottom:8px;">Speed Matters</h3>
          <p style="font-size:.88rem;color:var(--text2);line-height:1.7;">Water damage multiplies by the hour. We move
            fast, communicate clearly, and solve the problem on the first visit whenever possible.</p>
        </div>
        <div class="value-card reveal">
          <div class="value-icon" style="background:rgba(26,158,94,.1);"><i class="fa-solid fa-medal"
              style="color:var(--green);"></i></div>
          <h3 style="font-size:1.1rem;margin-bottom:8px;">Quality Work</h3>
          <p style="font-size:.88rem;color:var(--text2);line-height:1.7;">Every repair is done to code with quality
            materials. We don't cut corners — and our 1-year warranty backs that promise completely.</p>
        </div>
        <div class="value-card reveal">
          <div class="value-icon" style="background:rgba(109,40,217,.08);"><i class="fa-solid fa-people-group"
              style="color:#7c3aed;"></i></div>
          <h3 style="font-size:1.1rem;margin-bottom:8px;">Community First</h3>
          <p style="font-size:.88rem;color:var(--text2);line-height:1.7;">We're NY locals. We hire locally, support
            local causes, and treat every neighbor's home with the same care as our own.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TEAM 
<section class="section">
  <div class="container">
    <div class="text-center mb-7 reveal">
      <div class="section-label"><i class="fa-solid fa-helmet-safety"></i>Meet the Team</div>
      <h2>The People Behind <span class="text-sky">Every Fix</span></h2>
      <p class="lead mt-3">Every technician is background-checked, licensed, and trained to Trailblazer Plumbing standards.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:24px;">
      <div class="team-card reveal">
        <div class="team-avatar" style="background:linear-gradient(135deg,var(--blue),var(--sky));">MJ</div>
        <h4 style="font-size:1.05rem;margin-bottom:4px;">Marcus Johnson</h4>
        <p style="color:var(--sky);font-size:.82rem;font-weight:600;margin-bottom:10px;">Founder &amp; Master Plumber</p>
        <p style="font-size:.82rem;color:var(--text2);line-height:1.6;">26 years in the trade. Specializes in commercial repiping and complex diagnostics across NY.</p>
        <div style="margin-top:14px;"><span class="badge badge-sky" style="font-size:.7rem;"><i class="fa-solid fa-certificate"></i>Master License</span></div>
      </div>
      <div class="team-card reveal">
        <div class="team-avatar" style="background:linear-gradient(135deg,#1a8a5a,#2ddb8c);">TR</div>
        <h4 style="font-size:1.05rem;margin-bottom:4px;">Tony Ramirez</h4>
        <p style="color:var(--sky);font-size:.82rem;font-weight:600;margin-bottom:10px;">Senior Field Technician</p>
        <p style="font-size:.82rem;color:var(--text2);line-height:1.6;">14 years experience. Sewer camera and trenchless repair specialist serving all Nassau communities.</p>
        <div style="margin-top:14px;"><span class="badge badge-green" style="font-size:.7rem;"><i class="fa-solid fa-certificate"></i>Journeyman Plumber</span></div>
      </div>
      <div class="team-card reveal">
        <div class="team-avatar" style="background:linear-gradient(135deg,#5a1a8a,#a02ddb);">KC</div>
        <h4 style="font-size:1.05rem;margin-bottom:4px;">Karen Chen</h4>
        <p style="color:var(--sky);font-size:.82rem;font-weight:600;margin-bottom:10px;">Operations Manager</p>
        <p style="font-size:.82rem;color:var(--text2);line-height:1.6;">Keeps dispatch, scheduling, and our fully-stocked service vehicles running perfectly and on time.</p>
        <div style="margin-top:14px;"><span class="badge badge-sky" style="font-size:.7rem;"><i class="fa-solid fa-gear"></i>Operations Lead</span></div>
      </div>
      <div class="team-card reveal">
        <div class="team-avatar" style="background:linear-gradient(135deg,#8a5a1a,#dba42d);">DW</div>
        <h4 style="font-size:1.05rem;margin-bottom:4px;">DeShawn Wright</h4>
        <p style="color:var(--sky);font-size:.82rem;font-weight:600;margin-bottom:10px;">Water Heater Specialist</p>
        <p style="font-size:.82rem;color:var(--text2);line-height:1.6;">Tankless systems expert. Certified Navien and Rinnai installer with 10+ years of experience.</p>
        <div style="margin-top:14px;"><span class="badge badge-amber" style="font-size:.7rem;"><i class="fa-solid fa-fire"></i>Tankless Certified</span></div>
      </div>
    </div>
  </div>
</section> -->

  <!-- SERVICE AREA -->
  <section class="section bg-off">
    <div class="container">
      <div class="text-center mb-7 reveal">
        <div class="section-label"><i class="fa-solid fa-map-location-dot"></i>Where We Work</div>
        <h2>Proudly Serving <span class="text-sky">NY</span></h2>
        <p class="lead mt-3" style="max-width:520px;margin-left:auto;margin-right:auto;">We come to you — our mobile
          team serves every corner of NY, NY.</p>
      </div>
      <div class="reveal"
        style="background:linear-gradient(135deg,var(--navy),var(--navy2));border-radius:var(--r-xl);padding:clamp(32px,5vw,48px);">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:24px;flex-wrap:wrap;">
          <i class="fa-solid fa-location-dot" style="color:var(--amber);font-size:1.3rem;"></i>
          <span style="font-family:'Nunito',sans-serif;font-weight:700;color:var(--white);font-size:1.1rem;">Communities
            We Serve</span>
          <span class="badge badge-amber"><i class="fa-solid fa-truck-fast"></i>Fast Response</span>
        </div>
        <div style="display:flex;flex-wrap:wrap;gap:10px;">
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Franklin
            Square</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Elmont</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Valley
            Stream</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Lynbrook</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Malverne</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Freeport</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Baldwin</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Massapequa</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Bellmore</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">East
            Rockaway</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Rockville
            Centre</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">West
            Hempstead</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Mineola</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Hempstead</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Uniondale</span>
          <span
            style="background:rgba(41,147,209,.15);border:1px solid rgba(41,147,209,.3);color:var(--sky);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">Cambria
            Heights</span>
          <span
            style="background:rgba(245,166,35,.1);border:1px solid rgba(245,166,35,.25);color:var(--amber);padding:7px 16px;border-radius:var(--r-pill);font-size:.82rem;font-weight:600;">+
            Surrounding Areas</span>
        </div>
        <p style="color:rgba(255,255,255,.4);font-size:.8rem;margin-top:20px;"><i class="fa-solid fa-info-circle"></i>
          Not sure if we cover your area? Call us at <a href="tel:+15168879687"
            style="color:rgba(255,255,255,.6);">516-887-9687</a> — we probably do.</p>
      </div>
    </div>
  </section>

  <!-- CERTIFICATIONS -->
  <section class="section bg-navy">
    <div class="container text-center">
      <div class="reveal">
        <div class="section-label"
          style="background:rgba(255,255,255,.08);color:rgba(255,255,255,.8);border-color:rgba(255,255,255,.12);"><i
            class="fa-solid fa-shield-halved"></i>Credentials</div>
        <h2 class="text-white mt-3">Licensed, Insured &amp; <span class="text-amber">Certified</span></h2>
        <p style="color:rgba(255,255,255,.5);max-width:480px;margin:16px auto 48px;">Every credential we hold means more
          protection and peace of mind for you.</p>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:20px;">
          <div class="cert-card reveal"><i class="fa-solid fa-scroll"
              style="font-size:2rem;color:var(--amber);margin-bottom:14px;display:block;"></i>
            <div style="font-weight:700;color:var(--white);margin-bottom:4px;font-family:'Nunito',sans-serif;">State
              Licensed</div>
            <div style="font-size:.78rem;color:rgba(255,255,255,.4);">NY Licensed Plumber</div>
          </div>
          <div class="cert-card reveal"><i class="fa-solid fa-shield-halved"
              style="font-size:2rem;color:var(--amber);margin-bottom:14px;display:block;"></i>
            <div style="font-weight:700;color:var(--white);margin-bottom:4px;font-family:'Nunito',sans-serif;">Fully
              Insured</div>
            <div style="font-size:.78rem;color:rgba(255,255,255,.4);">General Liability Coverage</div>
          </div>
          <div class="cert-card reveal"><i class="fa-solid fa-star"
              style="font-size:2rem;color:var(--amber);margin-bottom:14px;display:block;"></i>
            <div style="font-weight:700;color:var(--white);margin-bottom:4px;font-family:'Nunito',sans-serif;">Top Rated
              Local</div>
            <div style="font-size:.78rem;color:rgba(255,255,255,.4);">4.9 ★ Average Rating</div>
          </div>
          
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section">
    <div class="container">
      <div class="cta-box reveal">
        <div
          style="position:relative;z-index:2;display:flex;align-items:center;justify-content:space-between;gap:32px;flex-wrap:wrap;">
          <div>
            <h2 class="text-white" style="font-size:clamp(1.8rem,4vw,3rem);">Ready for <span class="text-amber">Same-Day
                Service?</span></h2>
            <p style="color:rgba(255,255,255,.55);margin-top:10px;">Call or text now — we’re ready for same-day or
              emergency plumbing service.</p>
          </div>
          <div style="display:flex;gap:14px;flex-wrap:wrap;">
            <a href="tel:+15168879687" class="btn btn-amber btn-lg"><i class="fa-solid fa-phone"></i>Office:
              516-887-9687</a>
            <a href="tel:+17188085827" class="btn btn-outline btn-lg"><i
                class="fa-solid fa-mobile-screen"></i>Call/Text: 718-808-5827</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->

  <?php include '../components/footer.php'; ?>
</body>
</html>
