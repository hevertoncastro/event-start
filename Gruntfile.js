module.exports = function (grunt) {

  grunt.initConfig({

    // Tasks que o Grunt deve executar
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          'css/main.css': '_css/main.scss',
          'css/normalize.css': '_css/normalize.scss'
        }
      },
      min: {
        options: {
          style: 'compressed'
        },
        files: {
          'css/main.min.css': ['css/main.css', 'css/normalize.css']
        }
      }
    }, // sass

    uglify: {
      options: {
        mangle: false,
        compressed: false
      },

      target: {
        files: {
          'js/main.min.js': ['_js/main.js']
        }
      }
    }, // uglify

    watch: {
      dist: {
        options: {
          livereload: true
        },
    		files: [
    			'_js/**/*',
    			'_css/**/*',
          '*.html',
          '*.php'
    		],
    		tasks: ['sass', 'uglify']
        //tasks: [ 'sass' ]
    	}
    }, // watch

  });

  // Plugins do Grunt
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Tarefas que serão executadas
  grunt.registerTask( 'default', [ 'sass', 'uglify' ] );

  // Tarefa para Watch
  grunt.registerTask('w', ['watch']);
  grunt.registerTask('h', ['htmlmin']);

};