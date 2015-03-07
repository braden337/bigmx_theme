var autoprefixer = require('autoprefixer-core');


module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    sass: {
      dist: {
        options: {
          style: 'expanded',
          require: 'susy',
          sourcemap: 'none'
        },
        files: {
          'build/style.css': 'sass/style.scss'
        }
      }
    },

    clean: {
      build: {
        src: ["*.css"]
      }
    },

    postcss: {
      options: {
        processors: [
        autoprefixer({ browsers: ['last 2 version'] }).postcss
        ]
      },
      dist: { src: 'build/style.css', dest: 'style.css' }
    },

    // connect: {
    //   server: {
    //     options: {
    //       hostname: '0.0.0.0',
    //       port: 8080,
    //       base: '.',
    //       livereload: true
    //     }
    //   }
    // },

    // exec: {
    //   open_webpage: 'open http://localhost:8080'
    // },

    watch: {

      sass: {
        files: ['sass/style.scss'],
        tasks: ['sass'], // ['autoprefixer']
      },

      postcss: {
        files: ['build/style.css'],
        tasks: ['postcss'],
      },

      livereload: {
        options: {
          livereload: true
        },
        files: [
          '*.php',
          'style.css'
        ]
      },
    } // end watch
  });

  // Load the plugin that provides the "uglify" task.
  //grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  //grunt.loadNpmTasks('grunt-exec');


  // Default task(s).
  grunt.registerTask('default', ['watch']);
  grunt.registerTask('flow', ['sass', 'postcss', 'watch']);

};


























