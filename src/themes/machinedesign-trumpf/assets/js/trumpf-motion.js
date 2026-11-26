(function () {
  'use strict';

  // 1. Scroll-triggered architectural reveals (IntersectionObserver)
  var reveals = document.querySelectorAll('.md-reveal');
  if ('IntersectionObserver' in window && reveals.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    reveals.forEach(function (el) { io.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add('is-visible'); });
  }

  // 2. RFQ AJAX Submission bound to machinedesign-rfq-manager
  document.querySelectorAll('[data-rfq-form]').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var statusEl = form.querySelector('.md-tr-rfq-status');
      var btn = form.querySelector('button[type="submit"]');
      if (typeof md_vars === 'undefined') return;
      var fd = new FormData(form);
      fd.append('action', 'machinedesign_rfq_submit');
      fd.append('nonce', md_vars.nonce);
      fd.append('source_url', window.location.href);
      if (btn) btn.disabled = true;
      fetch(md_vars.ajax_url, { method: 'POST', body: fd })
        .then(function (r) { return r.json(); })
        .then(function (res) {
          if (statusEl) {
            statusEl.style.marginTop = '10px';
            statusEl.style.fontWeight = '700';
            statusEl.style.color = res.success ? '#0033CC' : '#B91C1C';
            statusEl.textContent = (res.data && res.data.message) ? res.data.message : (res.success ? 'درخواست شما با موفقیت ثبت شد.' : 'خطا در ارسال درخواست.');
          }
          if (res.success) form.reset();
        })
        .catch(function () {
          if (statusEl) statusEl.textContent = 'خطا در ارتباط با سرور. لطفاً دوباره تلاش کنید.';
        })
        .finally(function () { if (btn) btn.disabled = false; });
    });
  });

  // 3. Project / Industry client-side filter tabs
  document.querySelectorAll('[data-filter-group]').forEach(function (group) {
    var btns = group.querySelectorAll('[data-filter]');
    var targetSel = group.getAttribute('data-filter-group');
    var items = document.querySelectorAll(targetSel + ' [data-cats]');
    btns.forEach(function (b) {
      b.addEventListener('click', function () {
        btns.forEach(function (x) { x.classList.remove('is-active'); });
        b.classList.add('is-active');
        var val = b.getAttribute('data-filter');
        items.forEach(function (it) {
          var cats = (it.getAttribute('data-cats') || '').split(',');
          it.style.display = (val === 'all' || cats.indexOf(val) !== -1) ? '' : 'none';
        });
      });
    });
  });
})();
