'use strict';
module.exports = function(grunt) {

  // load all grunt tasks matching the `grunt-*` pattern
  require('load-grunt-tasks')(grunt);

  grunt.initConfig({

    // watch for changes and trigger sass, concat, uglify and livereload
    watch: {
      sass: {
        files: ['../src/scss/**/*', '../src/scss/*'],
        tasks: ['sass']
      },
      js: {
        files: [
          '../src/Gruntfile.js',
          '../src/js/*',
          '../src/js/**/*'
        ],
        tasks: ['concat', 'uglify']
      },
      livereload: {
        options: { livereload: true },
        files: ['../dist/*', '../dist/**/*', '../dist/***/**/*']
      }
    },

    // sass and scss
    sass: {
      dist: {
        options: {
          sourcemap: true,
          style: 'compressed',
          precision: '2',
          compass: true,
          cache: '../src/delete/'
        },
        files: {
          '../dist/css/style.css':'scss/style.scss',
          '../dist/css/no-mq.css':'scss/no-mq.scss'
        }
      }
    },

    // concat files
    concat: {
      ie: {
        files: {
          '../dist/js/ie.min.js': [
            '../src/js/ie/*'
          ]
        }
      }
    },

    // uglify to concat, minify, and make source maps
    uglify: {
      script: {
        files: {
          '../dist/js/script.min.js': [
            '../src/js/vendor/*',
            '../src/js/plugins/*'
          ]
        }
      },
      app: {
        files: {
          '../dist/js/app.min.js': [
            '../src/js/app.js'
          ]
        }
      }
    }

  });


// register task
grunt.registerTask('default', ['watch']);

};
