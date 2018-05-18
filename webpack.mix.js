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


mix.browserSync(
  "http://laravuepackage.test/css-for-backend-02-card-plain-tailwinds"
);
*/
/* //Advanced Vue Controlled component
mix.js('resources/assets/js/controlled-component.js', 'public/js/controlled-component.js')
  .sass("resources/assets/sass/app.scss", "public/css")
    .options({
      processCssUrls: false,
      postCss: [tailwindcss("./tailwind.js")]
    });
*/
/* //Advanced Vue Wrapping Pikaday 
mix.js('resources/assets/js/wrapping-pikaday.js', 'public/js/wrapping-pikaday.js')
  .sass("resources/assets/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
/* //Advanced Vue Encapsulating External behavior
mix.js('resources/assets/js/encapsulating-external-behavior.js', 'public/js/encapsulating-external-behavior.js')
  .sass("resources/assets/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
//Advanced Vue Encapsulating External behavior Background scrolling
/*mix.js('resources/assets/js/encapsulating-external-behavior-background-scroll.js', 'public/js/encapsulating-external-behavior-background-scroll.js')
  .sass("resources/assets/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
});
*/
//Advanced Vue Encapsulating External Portal
/*mix.js('resources/assets/js/encapsulating-external-behavior-portal.js', 'public/js/encapsulating-external-behavior-portal.js')
  .sass("resources/assets/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
});
*/
//Advanced Vue Inject Content Using Slot
/*
mix.js('resources/assets/js/inject-content-using-slot.js', 'public/js/inject-content-using-slot.js')
  .sass("resources/assets/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
//Advanced Vue Extending Components Using Composition
/*mix.js('resources/assets/js/extending-components-using-composition.js', 'public/js/extending-components-using-composition.js')
  .sass("resources/assets/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
  */
//Advanced Vue passing-data-up-using-scoped-slot.blade
/*mix.js('resources/assets/js/passing-data-up-using-scoped-slot.js', 'public/js/passing-data-up-using-scoped-slot.js')
  .sass("resources/assets/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
//Advanced Vue render funciton 101
/*mix.js('resources/assets/js/render-function-101.js', 'public/js/render-function-101.js')
  .sass("resources/assets/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
//Advanced Vue render funciton and components
/*mix.js('resources/assets/js/render-function-and-components.js', 'public/js/render-function-and-components.js')
  .sass("resources/assets/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
//Advanced Vue render funciton and children
/*
mix.js('resources/assets/js/render-function-and-children.js', 'public/js/render-function-and-children.js')
  .sass("resources/assets/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
//Advanced Vue render funciton and slot
/*
mix.js('resources/assets/js/render-function-and-slot.js', 'public/js/render-function-and-slot.js')
  .sass("resources/assets/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/

//Advanced Vue render funciton and components
/*mix.js('resources/assets/js/encapsulating-external-behavior-portal-loading-content.js',
 'public/js/encapsulating-external-behavior-portal-loading-content.js')
  .sass("resources/assets/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
//**Rebute Resolute */

mix.sass("resources/assets/sass/resolute.scss", "public/css/resolute.css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  }).browserSync("http://laravuepackage.test/rebuild-resolute");

