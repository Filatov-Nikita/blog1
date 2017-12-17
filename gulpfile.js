var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');
var less = require('gulp-less');
var gcmq = require('gulp-group-css-media-queries');

var config = {
	src: './resourses/assets',
	css: {
		watch: 'resourses/assets/less/**/*.less',
		src: 'resourses/assets/less/styles.less',
		dest: './public/css/'
	}
};

	
gulp.task('css', function(){
	gulp.src(config.src + config.css.src)
		.pipe(sourcemaps.init())
		.pipe(less())
		.pipe(gcmq())
		/*
		.pipe(autoprefixer({
            browsers: ['> 0.1%'],
            cascade: false
        }))
		.pipe(cleanCSS({
			level: 2
		}))*/
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(config.src + config.css.dest))
});

gulp.task('watch', function(){
	gulp.watch(config.src + config.css.watch, ['css']);
});

