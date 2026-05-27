<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="theme-color" content="#0b1d35" />
  <title>Contact &amp; Free Quote | NSJR Inc. Plumbing — Lynbrook, NY</title>
  <meta name="description" content="Contact NSJR Inc. Plumbing for plumbing services in Lynbrook, NY. Get a free quote, call our 24/7 emergency line, or fill out our online form. Fast response guaranteed." />
  <meta name="robots" content="index,follow" />
  <link rel="canonical" href="https://www.nsjrplumbingli.com/pages/contact" />
  <?php include '../components/head.php'; ?>
  <style>
    @media(max-width:768px) {
      .contact-two-col { grid-template-columns:1fr !important; gap:36px !important; }
    }
  </style>
</head>
<body>
  <?php include '../components/navbar.php'; ?>

  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="hero-dots" aria-hidden="true"></div>
    <div class="container page-hero-inner">
      <nav class="breadcrumb"><a href="/">Home</a><i
          class="fa-solid fa-chevron-right"></i><span>Contact</span></nav>
      <div class="section-label"><i class="fa-solid fa-phone-flip"></i>Get In Touch</div>
      <h1>Let's Fix Your <span style="color:var(--amber);">Plumbing</span> Problem</h1>
      <p class="lead mt-3">Call, text, or fill out the form — we respond during business hours.
        Emergency? We pick up 24/7.</p>
      <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:24px;">
        <a href="tel:+1 516-887-9687"
          style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:var(--r-pill);padding:9px 18px;color:var(--white);font-family:'Outfit',sans-serif;font-size:.85rem;font-weight:600;"><i
            class="fa-solid fa-phone" style="color:var(--amber);"></i>+1 516-887-9687</a>
        <a href="mailto:info@nsjrplumbingli.com"
          style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:var(--r-pill);padding:9px 18px;color:var(--white);font-family:'Outfit',sans-serif;font-size:.85rem;font-weight:600;"><i
            class="fa-solid fa-envelope" style="color:var(--sky);"></i>info@nsjrplumbingli.com</a>
        <span
          style="display:inline-flex;align-items:center;gap:8px;background:rgba(245,166,35,.15);border:1px solid rgba(245,166,35,.3);border-radius:var(--r-pill);padding:9px 18px;color:var(--amber);font-family:'Outfit',sans-serif;font-size:.85rem;font-weight:600;"><i
            class="fa-solid fa-clock"></i>24/7 Emergency Line Open</span>
      </div>
    </div>
  </section>

  <!-- CONTACT INFO CARDS -->
  <div style="background:var(--white);border-bottom:1px solid var(--gray2);padding:36px 0;">
    <div class="container">
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:24px;">
        <div class="reveal" style="display:flex;align-items:flex-start;gap:14px;">
          <div
            style="width:44px;height:44px;background:var(--sky-lt);border-radius:var(--r-md);display:flex;align-items:center;justify-content:center;color:var(--blue);font-size:1.1rem;flex-shrink:0;">
            <i class="fa-solid fa-phone"></i></div>
          <div>
            <div style="font-weight:700;color:var(--navy);font-size:.92rem;margin-bottom:2px;">Phone</div><a
              href="tel:+1516-887-9687" style="color:var(--blue);font-size:.88rem;font-weight:600;">+1516-887-9687</a>
            <div style="font-size:.75rem;color:var(--gray3);">Office · Emergency: 24/7</div>
          </div>
        </div>
        <div class="reveal" style="display:flex;align-items:flex-start;gap:14px;">
          <div
            style="width:44px;height:44px;background:var(--sky-lt);border-radius:var(--r-md);display:flex;align-items:center;justify-content:center;color:var(--blue);font-size:1.1rem;flex-shrink:0;">
            <i class="fa-solid fa-envelope"></i></div>
          <div>
            <div style="font-weight:700;color:var(--navy);font-size:.92rem;margin-bottom:2px;">Email</div><a
              href="mailto:info@nsjrplumbingli.com"
              style="color:var(--blue);font-size:.82rem;font-weight:600;">info@nsjrplumbingli.com</a>
            <div style="font-size:.75rem;color:var(--gray3);"></div>
          </div>
        </div>
        
        <div class="reveal" style="display:flex;align-items:flex-start;gap:14px;">
          <div
            style="width:44px;height:44px;background:var(--sky-lt);border-radius:var(--r-md);display:flex;align-items:center;justify-content:center;color:var(--blue);font-size:1.1rem;flex-shrink:0;">
            <i class="fa-solid fa-clock"></i></div>
          <div>
            <div style="font-weight:700;color:var(--navy);font-size:.92rem;margin-bottom:2px;">Hours</div>
            <div style="font-size:.88rem;color:var(--text2);">Mon–Sat: 7am–8pm</div>
            <div style="font-size:.75rem;color:var(--amber);font-weight:600;">Emergency: 24/7/365</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FORM + FAQ -->
  <section id="quote-form" class="section" style="scroll-margin-top:var(--nav-h);">
    <div class="container">
      <div style="display:grid;grid-template-columns:1.1fr 1fr;gap:56px;align-items:start;" class="contact-two-col">

        <!-- Quote Form -->
        <div class="reveal">
          <div class="section-label"><i class="fa-solid fa-clipboard-list"></i>Free Estimate</div>
          <h2 style="margin-bottom:8px;">Get Your <span class="text-sky">Free Quote</span></h2>
          <p style="color:var(--text2);margin-bottom:32px;">Fill out this form and we'll call you back
            with a free, no-obligation estimate.</p>
          <form id="quoteForm" novalidate style="display:flex;flex-direction:column;gap:20px;">
            <div class="form-row">
              <div class="form-group"><label for="fname">First Name *</label><input class="form-control" id="fname"
                  type="text" placeholder="John" required autocomplete="given-name" /></div>
              <div class="form-group"><label for="lname">Last Name *</label><input class="form-control" id="lname"
                  type="text" placeholder="Smith" required autocomplete="family-name" /></div>
            </div>
            <div class="form-row">
              <div class="form-group"><label for="cphone">Phone Number *</label><input class="form-control" id="cphone"
                  type="tel" placeholder="(516) 000-0000" required autocomplete="tel" /></div>
              <div class="form-group"><label for="cemail">Email Address <span
                    style="font-size:.74rem;color:var(--gray3);">(confirmation)</span></label><input
                  class="form-control" id="cemail" type="email" placeholder="john@email.com" autocomplete="email" />
              </div>
            </div>
            <div class="form-group">
              <label for="cservice">Service Needed *</label>
              <select class="form-control" id="cservice" required>
                <option value="">Choose a service…</option>
                <option>Drain Cleaning</option>
                <option>Pipe Repair / Replacement</option>
                <option>Emergency Plumbing</option>
                <option>Water Heater Service</option>
                <option>Sewer Line Service</option>
                <option>Toilet / Fixture Repair</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="curgency">How Soon Do You Need Service?</label>
              <select class="form-control" id="curgency">
                <option>At my convenience</option>
                <option>This week</option>
                <option>Today if possible</option>
                <option>Emergency — right now</option>
              </select>
            </div>
            <div class="form-group"><label for="caddress">Property Address</label><input class="form-control"
                id="caddress" type="text" placeholder="Street address, City, NY" autocomplete="street-address" /></div>
            <div class="form-group"><label for="cmessage">Describe the Problem</label><textarea class="form-control"
                id="cmessage" rows="4"
                placeholder="Tell us what's happening — more detail helps, but a sentence is fine too…"></textarea>
            </div>
            <div id="quoteFormMsg"
              style="display:none;border-radius:10px;padding:14px 16px;font-size:.88rem;font-weight:600;"></div>
            <button type="submit" class="btn btn-primary btn-lg btn-block" id="quoteSubmitBtn">Get My Free Quote <i
                class="fa-solid fa-arrow-right"></i></button>
            <p style="font-size:.75rem;color:var(--gray3);text-align:center;"><i class="fa-solid fa-lock"></i> Your info
              is private. We never sell or share your details.</p>
          </form>
          <script>
            (function () {
              var form = document.getElementById('quoteForm'), btn = document.getElementById('quoteSubmitBtn'), msg = document.getElementById('quoteFormMsg');
              form.addEventListener('submit', function (e) {
                e.preventDefault(); if (!form.checkValidity()) { form.reportValidity(); return; }
                btn.disabled = true; btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending…'; msg.style.display = 'none';
                var email = document.getElementById('cemail').value;
                fetch('/api/inquiry.php', {
                  method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify({
                    source: 'contact_quote',
                    first_name: document.getElementById('fname').value, last_name: document.getElementById('lname').value,
                    phone: document.getElementById('cphone').value, email: email,
                    service: document.getElementById('cservice').value, urgency: document.getElementById('curgency').value,
                    address: document.getElementById('caddress').value, message: document.getElementById('cmessage').value
                  })
                })
                  .then(function (r) { return r.json(); })
                  .then(function (d) {
                    if (d.ok) {
                      msg.style.cssText = 'display:block;background:#f0fdf4;color:#166534;border:1px solid #bbf7d0;border-radius:10px;padding:14px 16px;font-size:.88rem;font-weight:600;';
                      msg.innerHTML = '<i class="fa-solid fa-circle-check"></i> ' + d.message + (email ? ' A confirmation has been sent to your email.' : '');
                      form.reset(); btn.innerHTML = '<i class="fa-solid fa-circle-check"></i> Sent!'; btn.style.background = '#1a9e5e';
                      setTimeout(function () { btn.innerHTML = 'Get My Free Quote <i class="fa-solid fa-arrow-right"></i>'; btn.disabled = false; btn.style.background = ''; }, 6000);
                    } else {
                      msg.style.cssText = 'display:block;background:#fff5f4;color:#9b1c1c;border:1px solid #fecaca;border-radius:10px;padding:14px 16px;font-size:.88rem;font-weight:600;';
                      msg.innerHTML = '<i class="fa-solid fa-circle-exclamation"></i> ' + (d.message || 'Something went wrong.');
                      btn.disabled = false; btn.innerHTML = 'Get My Free Quote <i class="fa-solid fa-arrow-right"></i>';
                    }
                  })
                  .catch(function () {
                    msg.style.cssText = 'display:block;background:#fff5f4;color:#9b1c1c;border:1px solid #fecaca;border-radius:10px;padding:14px 16px;font-size:.88rem;font-weight:600;';
                    msg.innerHTML = '<i class="fa-solid fa-circle-exclamation"></i> Connection error. Call <a href="tel:+1516-887-9687" style="color:#9b1c1c;">+1516-887-9687</a>';
                    btn.disabled = false; btn.innerHTML = 'Get My Free Quote <i class="fa-solid fa-arrow-right"></i>';
                  });
              });
            })();
          </script>
        </div>

        <!-- Right Column -->
        <div>
          <!-- Quick Message -->
          <div class="card reveal" style="background:var(--navy);border:none;padding:32px;margin-bottom:28px;">
            <h3 style="color:var(--white);font-size:1.2rem;margin-bottom:6px;">Send a Quick Message</h3>
            <p style="color:rgba(255,255,255,.5);font-size:.88rem;margin-bottom:20px;">For emergencies, calling is
              always the fastest option.</p>
            <form id="contactForm" style="display:flex;flex-direction:column;gap:14px;">
              <input class="form-control" id="qmName" type="text" placeholder="Your name" required
                style="background:rgba(255,255,255,.07);border-color:rgba(255,255,255,.12);color:var(--white);" />
              <input class="form-control" id="qmEmail" type="email" placeholder="Email address"
                style="background:rgba(255,255,255,.07);border-color:rgba(255,255,255,.12);color:var(--white);" />
              <input class="form-control" id="qmPhone" type="tel" placeholder="Phone number"
                style="background:rgba(255,255,255,.07);border-color:rgba(255,255,255,.12);color:var(--white);" />
              <textarea class="form-control" id="qmMsg" rows="3" placeholder="What can we help with?"
                style="background:rgba(255,255,255,.07);border-color:rgba(255,255,255,.12);color:var(--white);"></textarea>
              <div id="quickFormMsg"
                style="display:none;border-radius:8px;padding:10px 13px;font-size:.82rem;font-weight:600;"></div>
              <button type="submit" class="btn btn-amber btn-block" id="quickSubmitBtn">Send Message <i
                  class="fa-solid fa-paper-plane"></i></button>
            </form>
            <script>
              (function () {
                var form = document.getElementById('contactForm'), btn = document.getElementById('quickSubmitBtn'), msg = document.getElementById('quickFormMsg');
                form.addEventListener('submit', function (e) {
                  e.preventDefault();
                  var name = document.getElementById('qmName').value.trim();
                  var email = document.getElementById('qmEmail').value.trim();
                  var phone = document.getElementById('qmPhone').value.trim();
                  var message = document.getElementById('qmMsg').value.trim();
                  if (!name) { alert('Please enter your name.'); return; }
                  if (!phone && !email) { alert('Please enter a phone number or email.'); return; }
                  btn.disabled = true; btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending…'; msg.style.display = 'none';
                  var nameParts = name.split(' ');
                  fetch('/api/inquiry.php', { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify({ source: 'contact_quick', first_name: nameParts[0], last_name: nameParts.slice(1).join(' '), email: email, phone: phone, message: message }) })
                    .then(function (r) { return r.json(); })
                    .then(function (d) {
                      if (d.ok) { msg.style.cssText = 'display:block;background:rgba(26,158,94,.2);color:#a7f3d0;border:1px solid rgba(26,158,94,.3);border-radius:8px;padding:10px 13px;font-size:.82rem;font-weight:600;'; msg.innerHTML = '<i class="fa-solid fa-circle-check"></i> Message sent! We\'ll be in touch soon.'; form.reset(); btn.innerHTML = '<i class="fa-solid fa-circle-check"></i> Sent!'; setTimeout(function () { btn.innerHTML = 'Send Message <i class="fa-solid fa-paper-plane"></i>'; btn.disabled = false; }, 5000); }
                      else { msg.style.cssText = 'display:block;background:rgba(217,41,28,.2);color:#fca5a5;border:1px solid rgba(217,41,28,.3);border-radius:8px;padding:10px 13px;font-size:.82rem;font-weight:600;'; msg.innerHTML = '<i class="fa-solid fa-circle-exclamation"></i> ' + (d.message || 'Error. Please call us.'); btn.disabled = false; btn.innerHTML = 'Send Message <i class="fa-solid fa-paper-plane"></i>'; }
                    })
                    .catch(function () { msg.style.cssText = 'display:block;background:rgba(217,41,28,.2);color:#fca5a5;border:1px solid rgba(217,41,28,.3);border-radius:8px;padding:10px 13px;font-size:.82rem;font-weight:600;'; msg.innerHTML = '<i class="fa-solid fa-circle-exclamation"></i> Error. Call <a href="tel:+1516-887-9687" style="color:#fca5a5;">+1516-887-9687</a>'; btn.disabled = false; btn.innerHTML = 'Send Message <i class="fa-solid fa-paper-plane"></i>'; });
                });
              })();
            </script>
          </div>

          <!-- Hours Table -->
          <div class="card reveal" style="padding:28px;margin-bottom:28px;">
            <h4 style="margin-bottom:16px;display:flex;align-items:center;gap:8px;"><i class="fa-solid fa-clock"
                style="color:var(--sky);"></i>Business Hours</h4>
            <table style="width:100%;border-collapse:collapse;font-size:.88rem;">
              <tbody>
                <tr style="border-bottom:1px solid var(--gray2);">
                  <td style="padding:8px 0;color:var(--navy);font-weight:600;">Monday</td>
                  <td style="padding:8px 0;color:var(--text2);text-align:right;">24 Hrs</td>
                </tr>
                <tr style="border-bottom:1px solid var(--gray2);">
                  <td style="padding:8px 0;color:var(--navy);font-weight:600;">Tuesday</td>
                  <td style="padding:8px 0;color:var(--text2);text-align:right;">24 Hrs</td>
                </tr>
                <tr style="border-bottom:1px solid var(--gray2);">
                  <td style="padding:8px 0;color:var(--navy);font-weight:600;">Wednesday</td>
                  <td style="padding:8px 0;color:var(--text2);text-align:right;">24 Hrs</td>
                </tr>
                <tr style="border-bottom:1px solid var(--gray2);">
                  <td style="padding:8px 0;color:var(--navy);font-weight:600;">Thursday</td>
                  <td style="padding:8px 0;color:var(--text2);text-align:right;">24 Hrs</td>
                </tr>
                <tr style="border-bottom:1px solid var(--gray2);">
                  <td style="padding:8px 0;color:var(--navy);font-weight:600;">Friday</td>
                  <td style="padding:8px 0;color:var(--text2);text-align:right;">24 Hrs</td>
                </tr>
                <tr style="border-bottom:1px solid var(--gray2);">
                  <td style="padding:8px 0;color:var(--navy);font-weight:600;">Saturday</td>
                  <td style="padding:8px 0;color:var(--text2);text-align:right;">24 Hrs</td>
                </tr>
                <tr>
                  <td style="padding:8px 0;color:var(--navy);font-weight:600;">Emergency Line</td>
                  <td style="padding:8px 0;text-align:right;"><span style="color:var(--amber);font-weight:700;">24 / 7
                    </span></td>
                </tr>
              </tbody>
            </table>
            <p style="font-size:.78rem;color:var(--gray3);margin-top:12px;"><i class="fa-solid fa-info-circle"></i> No
              extra charges for evening, weekend, or holiday calls.</p>
          </div>

          <!-- FAQ -->
          <div class="reveal">
            <h3 style="margin-bottom:20px;font-size:1.3rem;">Common <span class="text-sky">Questions</span></h3>
            <div class="faq-item">
              <button class="faq-btn">Do you charge extra for nights &amp; weekends?<span class="faq-toggle"><i
                    class="fa-solid fa-plus"></i></span></button>
              <div class="faq-body">No — our pricing is the same at all hours. No overtime surcharges, ever. The price
                you're quoted is the price you pay, whether it's 2am on Christmas or 10am Tuesday.</div>
            </div>
            <div class="faq-item">
              <button class="faq-btn">How fast can you respond to an emergency?<span class="faq-toggle"><i
                    class="fa-solid fa-plus"></i></span></button>
              <div class="faq-body">We guarantee arrival within 60 minutes for all emergency calls in NYC. In most
                cases, our technician arrives faster than that.</div>
            </div>
            <div class="faq-item">
              <button class="faq-btn">Do I need to be home during service?<span class="faq-toggle"><i
                    class="fa-solid fa-plus"></i></span></button>
              <div class="faq-body">Yes, an adult (18+) must be present during the service visit. We'll send a text with
                a 30-minute arrival notice so you can plan accordingly.</div>
            </div>
            <div class="faq-item">
              <button class="faq-btn">What payment methods do you accept?<span class="faq-toggle"><i
                    class="fa-solid fa-plus"></i></span></button>
              <div class="faq-body">We accept all major credit cards, debit cards, and cash. Financing options are
                available for larger jobs. Payment is due upon completion of work.</div>
            </div>
            <div class="faq-item">
              <button class="faq-btn">Is your work guaranteed?<span class="faq-toggle"><i
                    class="fa-solid fa-plus"></i></span></button>
              <div class="faq-body">Yes. All labor is backed by a 1-year warranty. If anything we repair fails within 12
                months due to our workmanship, we'll return and fix it at no additional charge.</div>
            </div>
            <div class="faq-item">
              <button class="faq-btn">Do you serve my neighborhood?<span class="faq-toggle"><i
                    class="fa-solid fa-plus"></i></span></button>
              <div class="faq-body">We serve all of NYC including Franklin Square, Elmont, Valley Stream, Lynbrook,
                Malverne, Freeport, Baldwin, Massapequa, Bellmore, East Rockaway, Rockville Centre, West Hempstead,
                Mineola, Hempstead, Uniondale, Cambria Heights, and surrounding areas. If you're in NYC, call us.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICE AREA -->
  <section id="service-area" class="section bg-off" style="scroll-margin-top:var(--nav-h);">
    <div class="container">
      <div class="text-center mb-7 reveal">
        <div class="section-label"><i class="fa-solid fa-map-location-dot"></i>Service Area</div>
        <h2>Area We <span class="text-sky">Serve</span></h2>
        <p class="lead mt-3" style="max-width:520px;margin-left:auto;margin-right:auto;">We're a mobile team — our
          fully-stocked service vehicles come directly to your home or business. No office visits needed.</p>
      </div>
      <div class="reveal"
        style="background:linear-gradient(135deg,var(--navy),var(--navy2));border-radius:var(--r-xl);padding:clamp(32px,5vw,56px);">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:28px;flex-wrap:wrap;">
          <i class="fa-solid fa-location-dot" style="color:var(--amber);font-size:1.3rem;"></i>
          <span style="font-family:'Nunito',sans-serif;font-weight:700;color:var(--white);font-size:1.1rem;">Communities
            We Cover</span>
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
          Not sure if we cover your area? Call us at <a href="tel:+1516-887-9687"
            style="color:rgba(255,255,255,.6);">+1516-887-9687</a> — we probably do.</p>
      </div>
    </div>
  </section>

  <!-- FOOTER -->

  <?php include '../components/footer.php'; ?>
</body>
</html>