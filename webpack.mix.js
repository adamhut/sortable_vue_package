let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
   var tailwindcss = require("tailwindcss");
/*
mix.js('resources/assets/js/app.js', 'public/js');

mix.js('resources/assets/js/controlled-component.js', 'public/js/controlled-component.js');

mix.sass("resources/assets/sass/app.scss", "public/css").options({
  processCssUrls: false,
  postCss: [tailwindcss("./tailwind.js")]
});
*/
/*
* section 1 
*/
/*
mix
  .sass("resources/assets/sass/design/app.scss", "public/css/design")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  })
  .browserSync("http://laravuepackage.test/css-for-backend-01");
*/
/*
* section 2 card 
*/
/*
mix
  .sass("resources/assets/sass/design/card.scss", "public/css/design/card.css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  })
  .browserSync("http://laravuepackage.test/css-for-backend-02-card");

*/
mix.browserSync(
  "http://laravuepackage.test/css-for-backend-02-card-plain-tailwinds"
);
