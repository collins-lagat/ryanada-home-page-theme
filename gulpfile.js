const gulp = require("gulp");
const sass = require("gulp-dart-sass");
const postcss = require("gulp-postcss");
const rename = require("gulp-rename");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const uglify = require("gulp-uglify");
const del = require("del");
const browserSync = require("browser-sync").create();
const webpack = require("webpack-stream");

const cfg = require("./gulpconfig.json");
const paths = cfg.paths;

gulp.task("js:clean", () => {
  return del(paths.js + "/*.min.js");
});

gulp.task("js:esnext", () => {
  return gulp
    .src(paths.esnext + "/main.js")
    .pipe(
      webpack({
        mode: "production",
        optimization: {
          minimize: false,
        },
        output: {
          filename: "main.js",
        },
        module: {
          rules: [
            {
              test: /\.js$/,
              exclude: /node_modules/,
              use: {
                loader: "babel-loader",
                options: {
                  presets: ["@babel/preset-env"],
                  plugins: ["@babel/plugin-transform-runtime"],
                },
              },
            },
          ],
        },
      })
    )
    .pipe(gulp.dest(paths.js));
});

gulp.task("js:compress", function () {
  return gulp
    .src(paths.js + "/main.js")
    .pipe(uglify())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest(paths.js));
});

gulp.task("css:clean", () => {
  return del(paths.css + "/*.min.css");
});

gulp.task("css:sass", function () {
  var plugins = [autoprefixer()];
  return gulp
    .src(paths.sass + "/theme.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss(plugins))
    .pipe(gulp.dest(paths.css));
});

gulp.task("css:compress", function () {
  var plugins = [cssnano()];
  return gulp
    .src(paths.css + "/theme.css")
    .pipe(postcss(plugins))
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest(paths.css));
});

gulp.task("clean-dist", () => {
  return del(paths.dist);
});

gulp.task("watch", function () {
  gulp.watch(
    [paths.sass + "/**/*.scss", paths.sass + "/*.scss"],
    gulp.series("css:sass", "css:compress")
  );
  gulp.watch(
    [paths.esnext + "/**/*.js", paths.esnext + "/*.js"],
    gulp.series("js:esnext", "js:compress")
  );
});

gulp.task("browser-sync", function () {
  browserSync.init(cfg.browserSyncOptions);
});

gulp.task(
  "build",
  gulp.series(
    "clean-dist",
    "css:sass",
    "css:compress",
    "js:esnext",
    "js:compress"
  )
);
