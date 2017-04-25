var $ = require('./libs/jquery')
window.jQuery = $;
window.$ = $;

require('./libs/tilt');
var Masonry = require('masonry-layout');

$( document ).ready(function() {

  var isDesktop = $(window).width() >= 960;

  if (isDesktop) {

    var projects = document.querySelector('.projects');
    var $project = $('.project');

    $project.tilt({
      glare: true,
      maxGlare: 0.2,
      perspective: 1000,
      maxTilt: 8,
      scale: 1.03,
      reset: true,
      speed: 4000
    })

    var msnry= new Masonry(projects, {
      itemSelector: '.project',
      columnWidth: '.grid-sizer',
      gutter: '.gutter-sizer',
      percentPosition: true
    });

  }

});
