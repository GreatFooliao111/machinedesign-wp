/**
 * MachineDesign.ir — Axima Industrial Flagship Interactive Engine
 * Version: 5.5.0
 * 
 * Features:
 * - Responsive sticky navigation
 * - SEO-friendly dynamic KPI counters
 * - Interactive Portfolio details modal with pre-selecting RFQ bridge
 * - Robust RFQ dispatch with technical file upload and Persian phone normalization
 * - Accessible mobile navigation drawer
 */
(() => {
  'use strict';

  document.addEventListener('DOMContentLoaded', () => {
    // ------------------------------------------------------------------------
    // 1. Sticky Navigation Bar
    // ------------------------------------------------------------------------
    const navbar = document.querySelector('.navbar-main');
    if (navbar) {
      window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
      }, { passive: true });
    }

    // ------------------------------------------------------------------------
    // 2. SEO-Friendly Animated Metric Counters
    // ------------------------------------------------------------------------
    const counters = document.querySelectorAll('.counter-val');
    let countersStarted = false;

    function runCounters() {
      counters.forEach(counter => {
        const targetAttr = counter.getAttribute('data-target');
        if (!targetAttr) return;

        const target = parseInt(targetAttr, 10);
        if (isNaN(target)) return;

        const prefix = counter.getAttribute('data-prefix') || '';
        const suffix = counter.getAttribute('data-suffix') || '';
        const duration = 1600; // ms
        const startTime = performance.now();

        function update(currentTime) {
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);
          // Ease out cubic
          const easeProgress = 1 - Math.pow(1 - progress, 3);
          const currentVal = Math.floor(easeProgress * target);

          counter.textContent = prefix + currentVal.toLocaleString('fa-IR') + suffix;

          if (progress < 1) {
            requestAnimationFrame(update);
          } else {
            counter.textContent = prefix + target.toLocaleString('fa-IR') + suffix;
          }
        }
        requestAnimationFrame(update);
      });
    }

    if (counters.length > 0) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting && !countersStarted) {
            countersStarted = true;
            runCounters();
          }
        });
      }, { threshold: 0.3 });

      const metricsSection = document.querySelector('.about-metrics-strip');
      if (metricsSection) observer.observe(metricsSection);
    }

    // ------------------------------------------------------------------------
    // 3. Projects Filter Bar
    // ------------------------------------------------------------------------
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filter = btn.getAttribute('data-filter');

        projectCards.forEach(card => {
          const category = card.getAttribute('data-category');
          if (filter === 'all' || category === filter) {
            card.style.display = 'flex';
            setTimeout(() => { card.style.opacity = '1'; card.style.transform = 'scale(1)'; }, 10);
          } else {
            card.style.opacity = '0';
            card.style.transform = 'scale(0.96)';
            setTimeout(() => { card.style.display = 'none'; }, 250);
          }
        });
      });
    });

    // ------------------------------------------------------------------------
    // 4. Portfolio Details Modal & RFQ Bridge
    // ------------------------------------------------------------------------
    const projectsData = {
      "1": {
        title: "طراحی خط بسته‌بندی پیوسته پیلوپک (Flow Pack)",
        category: "صنایع بسته‌بندی",
        code: "PROJ-PKG-01 // SPEED: 120 PPM",
        img: "https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800&q=80",
        desc: "طراحی کامل خط بسته‌بندی پیلوپک افقی با سیستم فیدر اتوماتیک، مکانیزم برش دورانی سنکرون با سروودرایورهای Beckhoff و کنترل دقیق دما در دوخت سلفون. ساختار کامپکت و منطبق بر استاندارد بهداشتی صنایع غذایی.",
        standard: "DIN EN 415-4 / ASME Y14.5",
        industry: "صنایع غذایی، دارویی و بهداشتی",
        kpi: "سرعت ۱۲۰ بسته در دقیقه | کاهش ۳۰٪ ضایعات سلفون | پایداری دمای دوخت در ۲۲۰°C",
        service: "SRV-01"
      },
      "2": {
        title: "کانوایر چندمسیره و میز سورتینگ اتوماتیک",
        category: "خطوط انتقال",
        code: "PROJ-CONV-02 // STAINLESS 316L",
        img: "https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?auto=format&fit=crop&w=800&q=80",
        desc: "طراحی و ساخت خط کانوایرهای مدولار تمام استنلس استیل ۳۱۶ برای محیط‌های داروسازی با رعایت کامل استانداردهای بهداشتی EHEDG و سیستم شستشوی درجا (CIP) بدون تجمع آلودگی.",
        standard: "DIN EN 1672-2 / EHEDG Clean-in-Place",
        industry: "صنایع داروسازی، بیوتکنولوژی و لبنی",
        kpi: "شستشوی مداوم CIP بدون رسوب | آلودگی صوتی کمتر از ۶۵ دسی‌بل | راندمان مداوم ۲۴/۷",
        service: "SRV-01"
      },
      "3": {
        title: "مهندسی معکوس و بازطراحی گیربکس صنعتی اکسترودر",
        category: "مهندسی معکوس",
        code: "PROJ-REV-03 // TORQUE: 18,000 Nm",
        img: "https://images.unsplash.com/photo-1581092162384-8987c1d64718?auto=format&fit=crop&w=800&q=80",
        desc: "اسکن سه‌بعدی نوری ابر نقاط، اصلاح پروفیل دندانه‌های هلیکال در Ansys، تحلیل خستگی چرخ‌دنده‌ها طبق ISO 6336 و بومی‌سازی متریال با فولاد 17CrNiMo6 سمانتاسیون سخت‌کاری‌شده.",
        standard: "ISO 6336 / DIN 3962 / AGMA 2001",
        industry: "صنایع پلیمر، پتروشیمی و لوله‌سازی سنگین",
        kpi: "تحمل گشتاور ۱۸,۰۰۰ نیوتن‌متر | صفر لقی دندانه (Zero-Backlash) | صرفه‌جویی ۶۰٪ ارزی",
        service: "SRV-01"
      },
      "4": {
        title: "ممیزی و تست تحویل خط تزریق در نینگبو چین (FAT)",
        category: "بازرسی خرید خارجی",
        code: "PROJ-FAT-04 // NINGBO AUDIT",
        img: "https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0?auto=format&fit=crop&w=800&q=80",
        desc: "ممیزی حضوری سازنده در نینگبو چین، کالیبراسیون فشار و دبی هیدرولیک، اعتبارسنجی قطعات الکتریکال و تست عملکرد مداوم ۷۲ ساعته کارخانه‌ای با قالب واقعی پیش از تسویه حساب نهایی.",
        standard: "ISO 12100 / CE Machinery Directive / FAT Protocol",
        industry: "تولید قطعات پلیمری خودرو و تجهیزات پزشکی",
        kpi: "کشف ۵ مغایرت بحرانی قبل از کانتینربندی | پیشگیری از ۲۰۰,۰۰۰ دلار خسارت خریدار",
        service: "SRV-06"
      },
      "5": {
        title: "سنتز مکانیزم دستگاه کارتونر و جعبه‌چسبان اتوماتیک",
        category: "صنایع بسته‌بندی",
        code: "PROJ-CAM-05 // 4-BAR LINKAGE",
        img: "https://images.unsplash.com/photo-1581092795360-fd1ca04f0952?auto=format&fit=crop&w=800&q=80",
        desc: "سنتز سینماتیکی و ساخت مکانیزم بادامک ۴ میله‌ای برای باز کردن و چسباندن کارتن‌های دارویی با کمترین استهلاک مکانیکی و قابلیت تنظیم سریع فرمت جعبه بدون نیاز به ابزار.",
        standard: "VDI 2221 / ASME Y14.5 / DIN EN 415",
        industry: "صنایع دارویی، آرایشی و غذایی",
        kpi: "راندمان ۹۹.۲٪ بازکردن کارتن | کاهش زمان تعویض سایز جعبه به زیر ۱۵ دقیقه",
        service: "SRV-01"
      },
      "6": {
        title: "شبیه‌سازی دینامیکی و ساخت فیدر ویبراتوری",
        category: "خطوط انتقال",
        code: "PROJ-VIB-06 // RESONANCE TUNED",
        img: "https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80",
        desc: "شبیه‌سازی مودال فرکانس طبیعی در Ansys FEA، ساخت لاینرهای ضدسایش پلی‌یورتان و کالیبراسیون زاویه جهش قطعات برای خطوط مونتاژ با دقت بالا و ارتعاش ایزوله از فونداسیون.",
        standard: "ISO 10816 / ISO 20816 / Ansys Modal",
        industry: "اتوماسیون مونتاژ الکترونیک و قطعات دقیق خودرویی",
        kpi: "نویز صوتی کمتر از ۷۰ دسی‌بل | دقت موقعیت‌دهی ۰.۰۵ میلی‌متر | صفر لرزش سازه خط",
        service: "SRV-02"
      }
    };

    const modalBackdrop = document.getElementById('project-modal-backdrop');
    const modalCloseBtn = document.getElementById('project-modal-close');
    const modalDismissBtn = document.getElementById('modal-dismiss-btn');
    const modalRfqActionBtn = document.getElementById('modal-rfq-action-btn');

    let currentSelectedService = 'SRV-01';
    let currentSelectedTitle = '';

    function openProjectModal(projectId) {
      const data = projectsData[projectId];
      if (!data || !modalBackdrop) return;

      currentSelectedService = data.service;
      currentSelectedTitle = data.title;

      const imgEl = document.getElementById('modal-project-img');
      const catEl = document.getElementById('modal-project-category');
      const codeEl = document.getElementById('modal-project-code');
      const titleEl = document.getElementById('modal-project-title');
      const descEl = document.getElementById('modal-project-desc');
      const stdEl = document.getElementById('modal-project-standard');
      const indEl = document.getElementById('modal-project-industry');
      const kpiEl = document.getElementById('modal-project-kpi-full');

      if (imgEl) { imgEl.src = data.img; imgEl.alt = data.title; }
      if (catEl) catEl.textContent = data.category;
      if (codeEl) codeEl.textContent = data.code;
      if (titleEl) titleEl.textContent = data.title;
      if (descEl) descEl.textContent = data.desc;
      if (stdEl) stdEl.textContent = data.standard;
      if (indEl) indEl.textContent = data.industry;
      if (kpiEl) kpiEl.textContent = data.kpi;

      modalBackdrop.classList.add('active');
      modalBackdrop.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';

      if (modalCloseBtn) modalCloseBtn.focus();
    }

    function closeProjectModal() {
      if (!modalBackdrop) return;
      modalBackdrop.classList.remove('active');
      modalBackdrop.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }

    projectCards.forEach(card => {
      const projId = card.getAttribute('data-project-id');
      if (!projId) return;

      card.addEventListener('click', () => openProjectModal(projId));
      card.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          openProjectModal(projId);
        }
      });
    });

    if (modalCloseBtn) modalCloseBtn.addEventListener('click', closeProjectModal);
    if (modalDismissBtn) modalDismissBtn.addEventListener('click', closeProjectModal);

    if (modalBackdrop) {
      modalBackdrop.addEventListener('click', (e) => {
        if (e.target === modalBackdrop) closeProjectModal();
      });
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && modalBackdrop && modalBackdrop.classList.contains('active')) {
        closeProjectModal();
      }
    });

    // Bridge from Modal to RFQ Form with Pre-Selection
    if (modalRfqActionBtn) {
      modalRfqActionBtn.addEventListener('click', () => {
        closeProjectModal();

        const rfqSection = document.getElementById('rfq-section');
        const serviceSelect = document.getElementById('rfq-service');
        const detailsTextarea = document.getElementById('rfq-details');

        if (serviceSelect && currentSelectedService) {
          serviceSelect.value = currentSelectedService;
        }

        if (detailsTextarea && currentSelectedTitle) {
          const currentVal = detailsTextarea.value.trim();
          const autoMsg = 'درخواست مشاوره فنی مشابه برای پروژه: ' + currentSelectedTitle;
          if (!currentVal.includes(currentSelectedTitle)) {
            detailsTextarea.value = currentVal ? (currentVal + '\n' + autoMsg) : autoMsg;
          }
        }

        if (rfqSection) {
          rfqSection.scrollIntoView({ behavior: 'smooth' });
          setTimeout(() => {
            const nameInput = document.getElementById('rfq-name');
            if (nameInput) nameInput.focus();
          }, 600);
        }
      });
    }

    // ------------------------------------------------------------------------
    // 5. Enhanced Technical RFQ Dispatch & File Upload
    // ------------------------------------------------------------------------
    const rfqForm = document.getElementById('axima-rfq-form');
    const rfqSubmitBtn = document.getElementById('axima-rfq-submit');
    const rfqNotice = document.getElementById('axima-rfq-notice');
    const rfqFileInput = document.getElementById('rfq-file');
    const rfqFileTrigger = document.getElementById('rfq-file-trigger');
    const rfqFileName = document.getElementById('rfq-file-name');

    // File Trigger Bridge
    if (rfqFileTrigger && rfqFileInput) {
      rfqFileTrigger.addEventListener('click', () => rfqFileInput.click());
    }

    if (rfqFileInput && rfqFileName) {
      rfqFileInput.addEventListener('change', () => {
        if (rfqFileInput.files && rfqFileInput.files[0]) {
          const file = rfqFileInput.files[0];
          // Check size (10MB)
          if (file.size > 10 * 1024 * 1024) {
            rfqFileName.textContent = 'خطا: حجم فایل بیش از ۱۰ مگابایت است.';
            rfqFileName.style.color = '#ef4444';
            rfqFileInput.value = '';
            return;
          }
          rfqFileName.textContent = 'فایل ضمیمه شد: ' + file.name + ' (' + (file.size / (1024 * 1024)).toFixed(2) + ' MB)';
          rfqFileName.classList.add('has-file');
          rfqFileName.style.color = 'var(--color-accent)';
        } else {
          rfqFileName.textContent = 'فرمت‌های مجاز: PDF, DWG, STEP, STP, JPG, PNG';
          rfqFileName.classList.remove('has-file');
          rfqFileName.style.color = 'var(--text-muted)';
        }
      });
    }

    // Helper: Normalize Persian & Arabic numbers to English ASCII digits
    function normalizePhoneDigits(phoneStr) {
      if (!phoneStr) return '';
      const persianDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
      const arabicDigits  = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
      let result = phoneStr.trim();
      for (let i = 0; i < 10; i++) {
        result = result.replaceAll(persianDigits[i], String(i)).replaceAll(arabicDigits[i], String(i));
      }
      return result.replace(/[^0-9+]/g, '');
    }

    // Helper: Validate Iranian Mobile or Landline Phone Number
    function isValidIranPhone(phone) {
      if (!phone) return false;
      // Remove +98 or 0098 prefix
      let clean = phone.replace(/^(\+98|0098)/, '0');
      if (!clean.startsWith('0')) clean = '0' + clean;

      // Iranian Mobile: 09XXXXXXXXX (11 digits)
      const mobileRegex = /^09\d{9}$/;
      // Iranian Landline: 0XX XXXXXXXX (11 digits with area code)
      const landlineRegex = /^0[1-8]\d{9}$/;

      return mobileRegex.test(clean) || landlineRegex.test(clean);
    }

    if (rfqForm) {
      rfqForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const nameInput = document.getElementById('rfq-name');
        const phoneInput = document.getElementById('rfq-phone');
        const serviceInput = document.getElementById('rfq-service');
        const detailsInput = document.getElementById('rfq-details');

        const name = nameInput ? nameInput.value.trim() : '';
        const rawPhone = phoneInput ? phoneInput.value.trim() : '';
        const service = serviceInput ? serviceInput.value.trim() : '';
        const details = detailsInput ? detailsInput.value.trim() : '';

        const normalizedPhone = normalizePhoneDigits(rawPhone);

        // Validation notice helper
        function showNotice(msg, isError) {
          if (!rfqNotice) return;
          rfqNotice.style.display = 'block';
          if (isError) {
            rfqNotice.style.color = '#ef4444';
            rfqNotice.style.background = 'rgba(239, 68, 68, 0.12)';
            rfqNotice.style.border = '1px solid rgba(239, 68, 68, 0.35)';
            rfqNotice.innerHTML = '<strong>خطا:</strong> ' + msg;
          } else {
            rfqNotice.style.color = '#8ce70c';
            rfqNotice.style.background = 'rgba(140, 231, 12, 0.1)';
            rfqNotice.style.border = '1px solid rgba(140, 231, 12, 0.35)';
            rfqNotice.innerHTML = msg;
          }
        }

        // Validate Phone Number
        if (!normalizedPhone || !isValidIranPhone(normalizedPhone)) {
          showNotice('لطفاً یک شماره تماس معتبر (موبایل با پیش‌شماره ۰۹ یا تلفن ثابت همراه با پیش‌شماره شهر) وارد فرمایید.', true);
          if (phoneInput) phoneInput.focus();
          return;
        }

        if (rfqSubmitBtn) {
          rfqSubmitBtn.innerHTML = '<span>در حال پردازش و ثبت امن استعلام...</span>';
          rfqSubmitBtn.style.opacity = '0.7';
          rfqSubmitBtn.disabled = true;
        }

        const formData = new FormData();
        formData.append('action', 'machinedesign_rfq_submit');
        formData.append('rfq_name', name);
        formData.append('rfq_phone', normalizedPhone);
        formData.append('rfq_service_type', service);
        formData.append('rfq_desc', details);
        formData.append('source_pillar', 'front-page');
        formData.append('source_url', window.location.href);

        // Attach technical file if present
        if (rfqFileInput && rfqFileInput.files && rfqFileInput.files[0]) {
          formData.append('rfq_file', rfqFileInput.files[0]);
        }

        // Backward compatibility payload
        formData.append('service', service);
        formData.append('phone', normalizedPhone + ' | نام: ' + name + ' | شرح: ' + details);

        const ajaxUrl = (typeof md_vars !== 'undefined' && md_vars.ajax_url) ? md_vars.ajax_url : '/machinedesign/wp-admin/admin-ajax.php';

        fetch(ajaxUrl, {
          method: 'POST',
          body: formData
        })
        .then(r => r.json())
        .then(data => {
          if (rfqSubmitBtn) {
            rfqSubmitBtn.style.opacity = '1';
            rfqSubmitBtn.disabled = false;
            rfqSubmitBtn.innerHTML = '<span>ارسال امن استعلام و رزرو جلسه فنی</span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>';
          }

          if (data && data.success) {
            const tracking = (data.data && data.data.tracking_code) ? data.data.tracking_code : (data.data?.tracking || 'MD-RFQ-2026');
            const fileMsg = data.data?.has_file ? ' <span style="display:block; margin-top:4px; color:#8ce70c;">فایل فنی شما نیز تحت پروتکل امن NDA ضمیمه گردید.</span>' : '';
            showNotice('درخواست استعلام شما با موفقیت ثبت شد. کد رهگیری تله‌متری: <strong class="mono" style="color:#ffffff;">' + tracking + '</strong>' + fileMsg + '<br>کارشناس ارشد دفتر فنی ظرف حداکثر ۲۴ ساعت کاری جهت هماهنگی جلسه و تبادل اسناد NDA با شما تماس می‌گیرد.', false);
            rfqForm.reset();
            if (rfqFileName) {
              rfqFileName.textContent = 'فرمت‌های مجاز: PDF, DWG, STEP, STP, JPG, PNG';
              rfqFileName.classList.remove('has-file');
              rfqFileName.style.color = 'var(--text-muted)';
            }
          } else {
            const errorMsg = data?.data?.message || 'متأسفانه در ثبت اطلاعات خطایی رخ داد. لطفاً مجدداً تلاش فرمایید.';
            showNotice(errorMsg, true);
          }
        })
        .catch(() => {
          if (rfqSubmitBtn) {
            rfqSubmitBtn.style.opacity = '1';
            rfqSubmitBtn.disabled = false;
            rfqSubmitBtn.innerHTML = '<span>ارسال امن استعلام و رزرو جلسه فنی</span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>';
          }
          showNotice('خطا در برقراری ارتباط با سرور. لطفاً اتصال اینترنت را بررسی فرمایید یا مستقیماً تماس بگیرید.', true);
        });
      });
    }

    // ------------------------------------------------------------------------
    // 6. Mobile Navigation Drawer
    // ------------------------------------------------------------------------
    const mobileBtn = document.getElementById('axima-mobile-btn');
    const mobileDrawer = document.getElementById('mobile-drawer');
    const mobileOverlay = document.getElementById('mobile-drawer-overlay');
    const drawerClose = document.getElementById('drawer-close-btn');

    function openNav() {
      if (!mobileDrawer || !mobileOverlay) return;
      mobileDrawer.classList.add('active');
      mobileOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
    function closeNav() {
      if (!mobileDrawer || !mobileOverlay) return;
      mobileDrawer.classList.remove('active');
      mobileOverlay.classList.remove('active');
      document.body.style.overflow = '';
    }

    if (mobileBtn) mobileBtn.addEventListener('click', openNav);
    if (drawerClose) drawerClose.addEventListener('click', closeNav);
    if (mobileOverlay) mobileOverlay.addEventListener('click', closeNav);

    document.querySelectorAll('.drawer-nav-link').forEach(link => {
      link.addEventListener('click', closeNav);
    });

    // ------------------------------------------------------------------------
    // 7. Global Phone Number Digits Normalization (Fa/Ar to En)
    // ------------------------------------------------------------------------
    document.addEventListener('input', function(e) {
      const target = e.target;
      if (!target || target.tagName !== 'INPUT') return;

      const isPhoneField = target.type === 'tel' ||
        (target.name && /phone|mobile/i.test(target.name)) ||
        (target.id && /phone|mobile/i.test(target.id));

      if (!isPhoneField) return;

      const val = target.value;
      if (!val) return;

      if (/[\u0660-\u0669\u06F0-\u06F9]/.test(val)) {
        const start = target.selectionStart;
        const end = target.selectionEnd;

        const fa = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        const ar = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        let normalized = val;
        for (let i = 0; i < 10; i++) {
          normalized = normalized.split(fa[i]).join(i.toString());
          normalized = normalized.split(ar[i]).join(i.toString());
        }

        target.value = normalized;
        if (start !== null && end !== null) {
          target.setSelectionRange(start, end);
        }
      }
    });

  });
})();
