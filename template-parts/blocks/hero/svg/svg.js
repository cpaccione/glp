//var templateUrl = '<?php bloginfo(\'template_directory\'); ?>';
let templateUrl = object_name.templateUrl;

lottie.loadAnimation({
container: document.getElementById('svg-animate'), // the dom element that will contain the animation
renderer: 'svg',
loop: true,
autoplay: true,
path: templateUrl + '/template-parts/blocks/hero/svg/data.json' // the path to the animation json
});
