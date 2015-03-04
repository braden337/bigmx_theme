module.exports = function(grunt) {

  grunt.initConfig({

    compass: {
      dist: {
        options: {
          cssDir: 'dist',
          sassDir: 'sass',
          require: ['susy', 'bootstrap-sass'],
        },
      },
    }, //end compass

    autoprefixer: {
      dist: {
        files: {
          'style.css': 'dist/style.css',
        },
      },
    }, //end autoprefixer

    cssmin: {
      target: {
        files: {
          'style.css': ['dist/style.css'], //dist/style.css for the first file
        },
      },
    },

    watch: {

      css: {
        files: ['sass/*.scss'],
        tasks: ['compass', 'autoprefixer'], // ['cssmin']
        options: {
          livereload: true,
        },
      }, //end css

      php: {
        files: ['*.php'],
        tasks: [],
        options: {
          livereload: true,
        },
      }, //end all
    }, // end watch
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('default', ['watch']);
  grunt.registerTask('flow', ['compass', 'autoprefixer']);

};















  //   grunt.initConfig({

  //   compass: {
  //     compile: {
  //       options: {
  //         config: 'compass_config.rb'
  //       }
  //     }
  //   }, //end compass

  //   watch: {
  //     options: {
  //       livereload: true,
  //     },

  //     css: {
  //       files: ['sass/*.scss'],
  //       tasks: ['compass'],
  //     },

  //     all: {
  //       files: ['*.*'],
  //     }
  //   }, // end watch
  // });
