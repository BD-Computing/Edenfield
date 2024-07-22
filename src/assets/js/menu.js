(function ($) {
	'use strict';


  const menuButton =  $('#menuButton')
  // || document.getElementById('menuButton')

  // console.log(menuButton);

  $('#menuButton').bind('click', function() {
    alert('User clicked on "foo."');
  });
})(window.jQuery);
