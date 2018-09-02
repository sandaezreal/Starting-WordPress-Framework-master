var Module = (function() {

  // Menu Selected States
  var _navSelectedState = function() {
    $(".menu a").each(function() {
      var $this = $(this);
      if ($this.attr('href') === window.location.pathname + window.location.search || $this.attr('href') === window.location.href) {
        $this.addClass('selected').parents('li').addClass('selected');
      }
    });
  };

  // Desktop Menu
  var _navFramework = function() {
    // Menu Selector
    var $menu = $(".menu");
    // Initialize Menu Plugin
    $menu.find("> ul").dropdown_menu({
      site_class: 'root',
      drawer_toggle_class: 'drawer-toggle',
      drawer_overlay_class: 'content-overlay',
      sub_indicator_class: 'menu-arrow',
      hover_class: 'drop-open',
      sub_indicators: true,
      touch_double_click: true,
      mobile_main_link_clickable: true,
      open_delay: 150,
      close_delay: 100
    });
  }; // end nav framework

  // Slide Toggle
  var _slideToggle = function() {
    var $slideContainer = $(".slide-toggle-container"),
      $slideToggle = $slideContainer.find(".slide-toggle");

    $slideToggle.click(function(e) {
      e.preventDefault();
      var $this = $(this);
      $this.toggleClass("active");
      $this.parents(".slide-toggle-container").find(".slide-content").slideToggle();
    });
  }; // end slide toggle

  // Responsive Tabs
  var _tabs = function() {
    $('.resp-tabs--horizontal').easyResponsiveTabs({
      type: 'horizontal',
      tabidentify: 'resp-tabs-group', // The tab groups identifier
    });

    $('.resp-tabs--vertical').easyResponsiveTabs({
      type: 'vertical',
      tabidentify: 'resp-tabs-group' // The tab groups identifier
    });
  }; // end tabs

  // Mail Spam
  var _mails = function() {
    // re configures mail links
    $('a[href^="mailto:"]').each(function() {
      var mail = $(this).attr('href').replace('mailto:', ''),
        replaced = mail.replace('/at/', '@');
      $(this).attr('href', 'mailto:' + replaced);
      if ($(this).text() === mail) {
        $(this).text(replaced);
      }
    });
  }; // end mail tweak

  // Initalize Private Methods
  var init = function() {
    _navSelectedState();
    _navFramework();
    _slideToggle();
    _tabs();
    _mails();
  };

  // Self Invoke Init Function Any Other Public Methods
  return {
    init: init
  };

})();

// Run Init Public Method When Dom is Ready
$(function() {
  Module.init();
});