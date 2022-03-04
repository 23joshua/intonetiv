const { src, dest, watch, series } = require('gulp')
const sass = require('gulp-sass')(require('sass'))

function buildStyles() {
  return src('sass/**/*.sass')
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(dest('assets/css/'))
}

function watchTask() {
  watch(['sass/**/*.sass'], buildStyles)
}

exports.default = series(buildStyles, watchTask)