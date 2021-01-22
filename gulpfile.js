const gulp = require("gulp");
const rename = require("gulp-rename");
const sass = require("gulp-sass");
const autoprefixer = require("gulp-autoprefixer");
const uglify = require("gulp-uglify");
const babel = require("gulp-babel");
const concat = require("gulp-concat");

gulp.task("styles", () => {
	return gulp
		.src("./assets/scss/index.+(sass|scss|css)")
		.pipe(sass({ outputStyle: "compressed" }))
		.pipe(concat("styles.css"))
		.pipe(
			autoprefixer({
				overrideBrowserslist: ["last 4 versions", "ie >= 9"],
			}),
		)
		.pipe(
			rename({
				suffix: ".min",
			}),
		)
		.pipe(gulp.dest("./assets/css"));
});

gulp.task("scripts", () => {
	return gulp
		.src(["./assets/js/main/**/*.js", "./assets/js/libs/jquery-3.5.1.min.js","./assets/js/libs/owl.carousel.min.js",])
		// .pipe(
		// 	babel({
		// 		presets: ["@babel/preset-env"],
		// 	}),
		// )
		.pipe(concat("scripts.js"))
		// .pipe(uglify())
		.pipe(
			rename({
				suffix: ".min",
			}),
		)
		.pipe(gulp.dest("./assets/js"));
});

gulp.task("watch", () => {
	gulp.watch("./assets/scss/**/*.*", gulp.parallel("styles"));
	gulp.watch("./assets/js/main/**/*.js", gulp.parallel("scripts"));
	gulp.watch("./assets/js/libs/*.js", gulp.parallel("scripts"));
});

gulp.task("default", gulp.parallel("styles", "scripts", "watch"));
