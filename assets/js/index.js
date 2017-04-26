var $ = require('./libs/jquery')
window.jQuery = $;
window.$ = $;

var tilt = require('tilt.js');

$( document ).ready(function() {

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

});
