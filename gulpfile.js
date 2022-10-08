const fs = require('fs');

const gulp = require('gulp');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify-es').default;
const minify = require('gulp-minify');
const concat = require('gulp-concat');


/*
 * declare manifest object test
 * JSlibs contains global vendor resources
 * cssStyles contains global style resources
 * listado de archivos js que se van a empaquetar en un solo js grande
 */

let manifest = {
     
	jsLibs: [
        "./vendor/jquery/jquery-3.3.1.min.js",
        "./vendor/popper/popper.min.js",
        "./vendor/bootstrap/bootstrap.min.js",
        //"./vendor/select2/js/select2.min.js",
        //"./vendor/owl-carrousel/owl.carousel.min.js",
        //"./vendor/mustache/jquery.mustache.js",
        //"./vendor/mustache/mustache.js",
        //"./vendor/count-to/jquery.countTo.js",
        //"./vendor/fancybox/jquery.fancybox.min.js",
        //"./vendor/mega-menu/mega-menu.js",
        "./vendor/waypoints/noframework.waypoints.min.js",
        "./vendor/wow/wow.min.js",
        "./vendor/svg-inject/svg-inject.js",
        "./js/main.js",
        
	],
	cssStyles: [
		"./scss/global-main.scss",
	]
};


/*
 * Build MAIN task ('make-libs', 'make-styles')
 */
gulp.task('build-all', ['make-libs', 'make-styles', 'make-view-styles'], function(){
	console.log('Build jobs done!');
});

/*
 * Watch MAIN task >> do ['build-all']
 */
gulp.task('watch-all-then-build-all', [], () => {
	// watch changes in manifest.libs > execute task [make-libs]
	gulp.watch(manifest.jsLibs, ['make-libs']);

    // watch changes in ALL scss files > execute task [make-styles]
    gulp.watch('./scss/**/*.scss', ['make-styles']);

	// watch changes on specific css files > execute task [make-styles]
    // gulp.watch(manifest.cssStyles, ['make-styles']);
    
    // watch changes in ALL view scss files > execute task [make-view-styles]
    gulp.watch('./views/**/*.scss', ['make-view-styles']);
});


//gulp.task('watch-css-then-make-styles', [], () => {
    // watch changes in ALL scss files > execute task [make-styles]
   // gulp.watch('./scss/**/*.scss', ['make-styles']);

    // watch changes on specific css files > execute task [make-styles]
    // gulp.watch(manifest.cssStyles, ['make-styles']);
//});


/*
 * STYLES TASK > create CSS bundle
 */
gulp.task('make-styles', function() {
	console.log('packing css bundle');
	gulp.src('./scss/global-main.scss')
	.pipe( sourcemaps.init())
	.pipe( sass().on('error', sass.logError) )
	// .pipe( autoprefixer({
    //     overrideBrowsersList: [
	// 		'last 2 versions'
	// 	]
	// }))
	.pipe( cleanCSS( { compatibility: 'ie8' } ) )
	.pipe( rename('lib-bundle.min.css') )
    .pipe( sourcemaps.write('./'))
	.pipe( gulp.dest('./dist/') )
});

/*
 * VIEW SPECIFIC STYLES TASK > compile each scss in place and minify
 */
gulp.task('make-view-styles', function() {
    console.log('packing view SCSS');
    gulp.src('./views/**/*.scss', { base: "./" })
        .pipe( sourcemaps.init())
        .pipe( sass().on('error', sass.logError) )
        // .pipe( autoprefixer({
        //     overrideBrowsersList: [
        //         'last 2 versions'
        //     ]
        // }))
        .pipe( cleanCSS( { compatibility: 'ie8' } ) )
        .pipe( rename({ suffix: '.min' }) )
        .pipe( sourcemaps.write('./'))
        .pipe(gulp.dest("."));
});



/*
 * LIBS TASK > create JS bundle
 */
gulp.task('make-libs', () => {
    console.log('packing js bundle');
    return gulp.src(manifest.jsLibs)
        .pipe(sourcemaps.init())
        .pipe( concat('lib-bundle.js') )
        .pipe( uglify() )
        .pipe( rename('lib-bundle.min.js') )
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./dist/'))
});




