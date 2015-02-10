var gulp = require('gulp');
var phpspec = require('gulp-phpspec');
var run = require('gulp-run');
var notify = require('gulp-notify');
//var shell = require('gulp-shell');

gulp.task('test', function(){
	gulp.src('spec/**/*.php')
		//.pipe(phpspec( '', { clear: true, notify: true } )
		//.pipe(shell('clear')) // run command clear everytime we run the file
		.pipe(phpspec('',{clear:true, 'verbose': 'vv',notify:true}))
		.on('error', notify.onError({
			title:'¡Oh no!',
			message: 'Your tests have failed, Eduardo!'
		}))
		.pipe(notify({
			title: "Success",
			message:'All tests executed successfully!'
		}))
	;
});

gulp.task('watch',function(){
	gulp.watch(['spec/**/*.php', 'src/**/*.php'],['test']);
});

/*gulp.task('clear', shell.task([
  'clear',
]));*/

gulp.task('default', ['test', 'watch']);