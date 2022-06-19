const mix = require("laravel-mix");
mix.browserSync("https://localhost:8000");

mix.sass("resources/sass/home/app.scss", "public/css/home/app.min.css");
mix.combine(
    [
        "public/js/home/util.min.js",
        "public/js/home/bootstrap.min.js",
        "public/js/home/isotope.min.js",
        "public/js/home/typed.min.js",
        "public/js/home/owl-carousel.js",
        "public/js/home/lightbox.js",
        "public/js/home/tabs.js",
        "public/js/home/video.js",
        "public/js/home/slick-slider.js",
        "resources/js/home/main.js",
        "public/js/home/custom.js",
    ],
    "public/js/home/app.min.js"
);

mix.js("resources/js/home/cms.js", "public/js/home/cms.min.js");
// mix.js("resources/js/admin/cms.js", "public/js/admin/cms.min.js");
// mix.js("resources/js/admin/common.js", "public/js/admin/common.min.js");
// mix.sass("resources/sass/admin/app.scss", "public/css/admin/app.min.css");
