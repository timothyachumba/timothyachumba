var $ = require('jquery')
window.jQuery = $;
window.$ = $;

var tilt = require('tilt.js');

$(function() {

  var $project = $('.project');
  var $body = $('body');

  $project.tilt({
    glare: true,
    maxGlare: 0.2,
    perspective: 1000,
    maxTilt: 8,
    scale: 1.03,
    speed: 4000
  })

  $('a').click(function(evt) {
    evt.preventDefault();
    var nextPage = this.getAttribute("href");

    $body.addClass('animated fadeOut');
    $body.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
      window.location = nextPage;
    });
  });

});
