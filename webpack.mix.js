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
mix.js('resources/js/app.js', 'public/js');
*/

// mix.js('resources/js/controlled-component.js', 'public/js/controlled-component.js');

// mix.sass("resources/sass/app.scss", "public/css").options({
//   processCssUrls: false,
//   postCss: [tailwindcss("./tailwind.js")]
// });

/*
* section 1 
*/
/*
mix
  .sass("resources/sass/design/app.scss", "public/css/design")
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
  .sass("resources/sass/design/card.scss", "public/css/design/card.css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  })
  .browserSync("http://laravuepackage.test/css-for-backend-02-card");


mix.browserSync(
  "http://laravuepackage.test/css-for-backend-02-card-plain-tailwinds"
);
*/
//Advanced Vue Controlled component
/* mix.js('resources/js/controlled-component.js', 'public/js/controlled-component.js')
  .sass("resources/sass/app.scss", "public/css")
    .options({
      processCssUrls: false,
      postCss: [tailwindcss("./tailwind.js")]
    });
 */

//Advanced Vue Wrapping Pikaday 
// mix.js('resources/js/wrapping-pikaday.js', 'public/js/wrapping-pikaday.js')
//   .sass("resources/sass/app.scss", "public/css")
//   .options({
//     processCssUrls: false,
//     postCss: [tailwindcss("./tailwind.js")]
//   }); 


/* //Advanced Vue Encapsulating External behavior
mix.js('resources/js/encapsulating-external-behavior.js', 'public/js/encapsulating-external-behavior.js')
.sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
 */
/* //Advanced Vue Encapsulating External behavior Background scrolling
mix.js('resources/js/encapsulating-external-behavior-background-scroll.js', 'public/js/encapsulating-external-behavior-background-scroll.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
});
 */
//Advanced Vue Encapsulating External Portal
/*mix.js('resources/js/encapsulating-external-behavior-portal.js', 'public/js/encapsulating-external-behavior-portal.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
});
*/
//Advanced Vue Inject Content Using Slot
/*
mix.js('resources/js/inject-content-using-slot.js', 'public/js/inject-content-using-slot.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
//Advanced Vue Extending Components Using Composition
/*mix.js('resources/js/extending-components-using-composition.js', 'public/js/extending-components-using-composition.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
  */
//Advanced Vue passing-data-up-using-scoped-slot.blade
/*mix.js('resources/js/passing-data-up-using-scoped-slot.js', 'public/js/passing-data-up-using-scoped-slot.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
//Advanced Vue render funciton 101
/*mix.js('resources/js/render-function-101.js', 'public/js/render-function-101.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
//Advanced Vue render funciton and components
/*mix.js('resources/js/render-function-and-components.js', 'public/js/render-function-and-components.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
//Advanced Vue render funciton and children
/*
mix.js('resources/js/render-function-and-children.js', 'public/js/render-function-and-children.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
//Advanced Vue render funciton and slot
/*
mix.js('resources/js/render-function-and-slot.js', 'public/js/render-function-and-slot.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/

//Advanced Vue render funciton and components
/*mix.js('resources/js/encapsulating-external-behavior-portal-loading-content.js',
 'public/js/encapsulating-external-behavior-portal-loading-content.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/
//Advanced Vue render funciton and components
/*mix.js('resources/js/data-provider-components.js',
 'public/js/data-provider-components.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  });
*/

// Advanced Vue Getting Started with Renderless UI Components
/* 
mix.js('resources/js/getting-started-with-renderless-ui-components.js',
  'public/js/getting-started-with-renderless-ui-components.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
});
 */

// Advanced Vue Wrapping Renderless Components
/* mix.js('resources/js/wrapping-renderless-components.js',
  'public/js/wrapping-renderless-components.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
}); */

// Advanced Vue Elements Queryies as a Data Provider Component
/*  mix.js('resources/js/element-queries-as-adata-provider-component.js',
  'public/js/element-queries-as-adata-provider-component.js')
  .sass("resources/sass/app.scss", "public/css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
}); 
  */

 
 // Advanced Vue Elements Compound Components  With Provide Inject
/*  mix.js('resources/js/building-compound-components-with-provide-inject.js',
   'public/js/building-compound-components-with-provide-inject.js')
   .sass("resources/sass/app.scss", "public/css")
   .options({
     processCssUrls: false,
     postCss: [tailwindcss("./tailwind.js")]
 });  */

 // Advanced Vue Elements Building a Compound Sortable List Component
 /* mix.js('resources/js/building-a-compound-sortable-list-component.js',
    'public/js/building-a-compound-sortable-list-component.js')
    .sass("resources/sass/app.scss", "public/css")
    .options({
      processCssUrls: false,
      postCss: [tailwindcss("./tailwind.js")]
  }); */  
// Advanced Vue Elements Building a Select
/* mix.js('resources/js/building-a-search-select.js',
      'public/js/building-a-search-select.js')
      .sass("resources/sass/app.scss", "public/css")
      .options({
        processCssUrls: false,
        postCss: [tailwindcss("./tailwind.js")]
    });  */




/***Laracasts  */
/* mix.js('resources/js/laracasts-contact-support-modal.js',
'public/js/laracasts-contact-support-modal.js')
      .sass("resources/sass/app.scss", "public/css")
      .options({
        processCssUrls: false,
        postCss: [tailwindcss("./tailwind.js")]
    }); 
 */
/* 
 mix.js('resources/js/laracasts-faqs.js',
 'public/js/laracasts-faqs.js')
       .sass("resources/sass/laracasts.scss", "public/css/laracasts.css")
       .options({
         processCssUrls: false,
         postCss: [tailwindcss("./tailwind.js")]
     }); 
*/
    
/*    mix.js('resources/js/laracasts-fix-on-top.js',
    'public/js/laracasts-fix-on-top.js')
          .sass("resources/sass/laracasts.scss", "public/css/laracasts.css")
          .options({
            processCssUrls: false,
            postCss: [tailwindcss("./tailwind.js")]
        });  */
   
/* mix.js('resources/js/signup-banner.js',
  'public/js/laracasts-signup-banner.js')
  .sass("resources/sass/laracasts-signup.scss", "public/css/laracasts-signup.css")
  .options({
      processCssUrls: false,
      postCss: [tailwindcss("./tailwind.js")]
  });
*/

/* mix.sass("resources/sass/responsive-demo.scss", "public/css/responsive-demo.css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  }).browserSync("http://laravuepackage.test/laracasts/responsive-demo");
*/

/* mix.sass("resources/sass/responsive-demo-2.scss", "public/css/responsive-demo-2.css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  }).browserSync("http://laravuepackage.test/laracasts/responsive-demo-2");
 */

/*
mix.js('resources/js/tooltips.js','public/js/laracasts-tooltips.js')
    .sass("resources/sass/tooltips.scss", "public/css/tooltips.css")
    .options({
      processCssUrls: false,
      postCss: [tailwindcss("./tailwind.js")]
    });//.browserSync("http://laravuepackage.test/laracasts/tooltips");
*/


/* mix.js('resources/js/render-function.js', 'public/js/render-function.js'); */
//.browserSync("http://laravuepackage.test/laracasts/tooltips");


/* 
mix.sass("resources/sass/price-selection.scss", "public/css/price-selection.css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  }).browserSync("http://laravuepackage.test/laracasts/price-selection");
*/

//**Rebuild Resolute */
/*  
mix.sass("resources/sass/resolute.scss", "public/css/resolute.css")
.options({
  processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  }).browserSync("http://laravuepackage.test/rebuild-resolute");
*/
/* mix.sass("resources/sass/pusher-checkout.scss", "public/css/pusher-checkout.css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  }).browserSync("http://laravue.test/rebuild-pusher-checkout");
 */
//  mix.sass("resources/sass/rebuild-youtube.scss", "public/css/rebuild-youtube.css")
//   .options({
//     processCssUrls: false,
//     postCss: [tailwindcss("./tailwind.js")]
//    }).browserSync("http://laravue.test/rebuild-youtube");

// mix.sass("resources/sass/rebuild-twitter.scss", "public/css/rebuild-twitter.css")
//   .options({
//     processCssUrls: false,
//     postCss: [tailwindcss("./tailwind.js")]
//    }).browserSync("http://laravue.test/rebuild-twitter");
 

// mix.sass("resources/sass/rebuild-netlify.scss", "public/css/rebuild-netlify.css")
//   .options({
//     processCssUrls: false,
//     postCss: [tailwindcss("./tailwind.js")]
//   }).browserSync("http://laravuepackage.test/rebuild-netlify");
/* 
mix.js('resources/js/custom-radio-button.js', 'public/js/custom-radio-button.js')
  .sass("resources/sass/custom-radio-button.scss", "public/css/custom-radio-button.css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.js")]
  }).browserSync("http://laravuepackage.test/custom-radio-button"); 
*/

// mix.sass("resources/sass/rebuild-lyften.scss", "public/css/rebuild-lyften.css")
//   .options({
//     processCssUrls: false,
//     postCss: [tailwindcss("./tailwind.js")]
//   }).browserSync("http://laravue.test/rebuild-lyften");

// mix.js('resources/js/rebuild-transistor.js', 'public/js/rebuild-transistor.js')
//   .sass("resources/sass/rebuild-transistor.scss", "public/css/rebuild-transistor.css")
//   .options({
//     processCssUrls: false,
//     postCss: [tailwindcss("./tailwind.js")] 
//   }).browserSync("http://laravuepackage.test/rebuild-transistor");

// mix.sass("resources/sass/rebuild-course-landing.scss", "public/css/rebuild-course-landing.css")
//   .options({
//     processCssUrls: false,
//     postCss: [tailwindcss("./tailwind.config.js")]
//   }).browserSync("http://laravuepackage.test/rebuild-course-landing");


// mix.js('resources/js/context-menu.js', 'public/js/context-menu.js')
//    .sass("resources/sass/context-menu.scss", "public/css/context-menu.css")
//   .options({
//     processCssUrls: false,
//     postCss: [tailwindcss("./tailwind.config.js")]
//   }).browserSync("http://laravuepackage.test/laracasts/context-menu");


// mix.js('resources/js/smooth-scroll.js', 'public/js/smooth-scroll.js')
//    .sass("resources/sass/smooth-scroll.scss", "public/css/smooth-scroll.css")
//   .options({
//     processCssUrls: false,
//     postCss: [tailwindcss("./tailwind.config.js")]
//   }).browserSync("http://laravue.test/laracasts/smooth-scroll");

mix.js('resources/js/meetup.js', 'public/js/meetup.js')
.sass("resources/sass/design/rebuild-meetup.scss", "public/css/rebuild-meetup.css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.config.js")]
  }).browserSync("http://laravuepackage.test/rebuild-meetup");