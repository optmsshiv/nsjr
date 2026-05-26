/* MY DRAIN DR — main.js */
(function(){
  'use strict';
  document.addEventListener('DOMContentLoaded',function(){
    // Navbar scroll
    var nav=document.querySelector('.navbar');
    if(nav){window.addEventListener('scroll',function(){nav.classList.toggle('scrolled',window.scrollY>20)},{passive:true})}

    // Mobile menu
    var ham=document.getElementById('hamburger');
    var mob=document.getElementById('mobileMenu');
    if(ham&&mob){
      ham.addEventListener('click',function(){
        var open=mob.classList.toggle('open');
        ham.classList.toggle('open',open);
        ham.setAttribute('aria-expanded',open);
        document.body.style.overflow=open?'hidden':'';
      });
      mob.querySelectorAll('a').forEach(function(a){
        a.addEventListener('click',function(){
          mob.classList.remove('open');ham.classList.remove('open');
          ham.setAttribute('aria-expanded','false');document.body.style.overflow='';
        });
      });
    }

    // ── Dropdown hover-intent (fixes gap + flicker issue) ──
    document.querySelectorAll('.has-dropdown').forEach(function(item){
      var closeTimer;

      function openDrop(){
        clearTimeout(closeTimer);
        // Close any other open dropdowns first
        document.querySelectorAll('.has-dropdown.drop-open').forEach(function(other){
          if(other!==item) other.classList.remove('drop-open');
        });
        item.classList.add('drop-open');
      }

      function schedulClose(){
        clearTimeout(closeTimer);
        closeTimer=setTimeout(function(){ item.classList.remove('drop-open'); },150);
      }

      item.addEventListener('mouseenter', openDrop);
      item.addEventListener('mouseleave', schedulClose);

      var drop=item.querySelector('.dropdown');
      if(drop){
        drop.addEventListener('mouseenter', function(){ clearTimeout(closeTimer); });
        drop.addEventListener('mouseleave', schedulClose);
      }

      // Keyboard accessibility: Enter/Space on trigger toggles dropdown
      var trigger=item.querySelector('.nav-link');
      if(trigger){
        trigger.addEventListener('keydown',function(e){
          if(e.key==='Enter'||e.key===' '){
            e.preventDefault();
            item.classList.toggle('drop-open');
          }
          if(e.key==='Escape') item.classList.remove('drop-open');
        });
      }
    });

    // Close dropdown on outside click
    document.addEventListener('click',function(e){
      if(!e.target.closest('.has-dropdown')){
        document.querySelectorAll('.has-dropdown.drop-open').forEach(function(i){ i.classList.remove('drop-open'); });
      }
    });

    // Active link
    var page=location.pathname.split('/').pop()||'index.html';
    document.querySelectorAll('.nav-link[href]').forEach(function(l){
      var href=l.getAttribute('href').split('/').pop().split('#')[0];
      if(href===page||(page===''&&href==='index.html'))l.classList.add('active');
    });

    // ── Clean index.html from URL (home page shows domain only) ──
    if(window.location.pathname.match(/\/index\.html$/)){
      var clean=window.location.pathname.replace(/\/index\.html$/,'/')+window.location.search+window.location.hash;
      window.history.replaceState(null,'',clean);
    }

    // Scroll reveal
    var revEls=document.querySelectorAll('.reveal');
    if(revEls.length){
      var revObs=new IntersectionObserver(function(entries){
        entries.forEach(function(e){
          if(!e.isIntersecting)return;
          var siblings=[].slice.call(e.target.parentElement.querySelectorAll('.reveal:not(.in)'));
          var idx=siblings.indexOf(e.target);
          setTimeout(function(){e.target.classList.add('in')},Math.min(idx,5)*90);
          revObs.unobserve(e.target);
        });
      },{threshold:0.1,rootMargin:'0px 0px -40px 0px'});
      revEls.forEach(function(el){revObs.observe(el)});
    }

    // Counters
    document.querySelectorAll('[data-count]').forEach(function(el){
      var obs=new IntersectionObserver(function(entries){
        entries.forEach(function(e){
          if(!e.isIntersecting)return;
          obs.unobserve(el);
          var target=parseFloat(el.dataset.count);
          var suffix=el.dataset.suffix||'';
          var start=performance.now();
          var dur=1600;
          (function frame(now){
            var p=Math.min((now-start)/dur,1);
            var ease=1-Math.pow(1-p,3);
            el.textContent=Math.floor(target*ease).toLocaleString()+suffix;
            if(p<1)requestAnimationFrame(frame);
            else el.textContent=target.toLocaleString()+suffix;
          })(start);
        });
      },{threshold:0.6});
      obs.observe(el);
    });

    // FAQ
    document.querySelectorAll('.faq-btn').forEach(function(btn){
      btn.addEventListener('click',function(){
        var item=btn.closest('.faq-item');
        var isOpen=item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(function(i){i.classList.remove('open')});
        if(!isOpen)item.classList.add('open');
      });
    });

    // Back to top
    var btt=document.getElementById('backTop');
    if(btt){
      window.addEventListener('scroll',function(){btt.classList.toggle('show',window.scrollY>500)},{passive:true});
      btt.addEventListener('click',function(){window.scrollTo({top:0,behavior:'smooth'})});
    }
  });
})();
