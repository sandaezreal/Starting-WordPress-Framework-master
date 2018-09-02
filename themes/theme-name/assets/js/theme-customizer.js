(function($) {
  "use strict";

  // Example Updating Phone Text
  wp.customize('company_settings_phone', function(value) {
    value.bind(function(to) {
      $('.tc-phone').text(to);
    });
  });

})(jQuery);