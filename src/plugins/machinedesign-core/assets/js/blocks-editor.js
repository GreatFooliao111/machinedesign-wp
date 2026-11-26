(function (blocks, element, serverSideRender) {
  var el = element.createElement;
  var SSR = serverSideRender;
  var list = [
    ['machinedesign/trumpf-hero', 'ماشین دیزاین: هیرو معماری TRUMPF'],
    ['machinedesign/bento-pillars', 'ماشین دیزاین: موزاییک ۶ ستون خدمات'],
    ['machinedesign/metrics-strip', 'ماشین دیزاین: نوار شاخص‌های کلیدی'],
    ['machinedesign/industries-horizon', 'ماشین دیزاین: راهکارها و صنایع هدف'],
    ['machinedesign/delta-kinematics-lab', 'ماشین دیزاین: آزمایشگاه سه‌بعدی ربات دلتا'],
    ['machinedesign/projects-grid', 'ماشین دیزاین: گرید پروژه‌های اجرایی'],
    ['machinedesign/team-quartet', 'ماشین دیزاین: ۴ عضو اصلی تیم مهندسی'],
    ['machinedesign/rfq-desk', 'ماشین دیزاین: میز استعلام فنی و NDA']
  ];
  list.forEach(function (item) {
    blocks.registerBlockType(item[0], {
      title: item[1],
      icon: 'admin-generic',
      category: 'design',
      edit: function () { return el(SSR, { block: item[0] }); },
      save: function () { return null; }
    });
  });
})(window.wp.blocks, window.wp.element, window.wp.serverSideRender);
