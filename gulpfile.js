// package vars
const pkg = require("./package.json");

// gulp
const gulp = require("gulp");

// load all plugins in "devDependencies" into the variable $
const $ = require("gulp-load-plugins")({
    pattern: ["*"],
    scope: ["devDependencies"]
});

const onError = (err) => {
    console.log(err);
};

// Default task
gulp.task("default", () => {
    $.livereload.listen();
    gulp.watch([pkg.paths.src.css + "**/*.css"], ["css"]);
    gulp.watch([pkg.paths.src.js + "**/*.js"], ["js"]);
    gulp.watch([pkg.paths.templates + "**/**/*.{html,twig}"], () => {
        gulp.src(pkg.paths.templates)
            .pipe($.plumber({errorHandler: onError}))
            .pipe($.livereload());
    });
});

// Compress CSS
gulp.task('css', () => {
  $.fancyLog("🤜 Building css");
  return gulp.src([pkg.paths.src.css + "**/*.css"])
    .pipe($.cleanCss({debug: true}, (details) => {
      console.log(`${details.name}: ${details.stats.originalSize}`);
      console.log(`${details.name}: ${details.stats.minifiedSize}`);
    }))
    .pipe($.concat("style.min.css"))
    .pipe(gulp.dest(pkg.paths.dist + "css"));
});

// Compress JS
gulp.task('js', () => {
  return gulp.src([pkg.paths.src.js + "**/*.js"])
    .pipe($.concat("scripts.min.js"))
    .pipe(gulp.dest(pkg.paths.dist + "js"));
});

// Inline JS task - minimize the inline Javascript into _inlinejs in the templates path
gulp.task("js-inline", () => {
    $.fancyLog("🤜 Copying inline js");
    return gulp.src(pkg.globs.inlineJs)
        .pipe($.plumber({errorHandler: onError}))
        .pipe($.if(["*.js", "!*.min.js"],
            $.newer({dest: pkg.paths.templates + "_inlinejs", ext: ".min.js"}),
            $.newer({dest: pkg.paths.templates + "_inlinejs"})
        ))
        .pipe($.if(["*.js", "!*.min.js"],
            $.uglify()
        ))
        .pipe($.if(["*.js", "!*.min.js"],
            $.rename({suffix: ".min"})
        ))
        .pipe($.size({gzip: true, showFiles: true}))
        .pipe(gulp.dest(pkg.paths.templates + "_inlinejs"))
        .pipe($.filter("**/*.js"))
        .pipe($.livereload());
});
