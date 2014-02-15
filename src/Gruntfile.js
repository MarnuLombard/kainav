'use strict';
module.exports = function(grunt) {

  // load all grunt tasks matching the `grunt-*` pattern
  require('load-grunt-tasks')(grunt);

  grunt.initConfig({

    //define vars
    var src = '../user/themes/kainav/assets',

    // watch for changes and trigger sass, concat, uglify and livereload
    watch: {

      icons: {
        files: ['icons/*.svg'],
        tasks: ['webfont']
      },
      sass: {
        files: ['scss/**/*', 'scss/*'],
        tasks: ['sass']
      },
      js: {
        files: [
          'Gruntfile.js',
          'js/*',
          'js/**/*'
        ],
        tasks: ['concat', 'uglify']
      },
      livereload: {
        options: { livereload: true },
        files: [
          '<%= dist %>/css/*',
          '<%= dist %>/js/*',
          '<%= dist %>/*.php',
          '<%= dist %>/includes/**/*.php'
        ]
      }
    },

    // To generate the icon fonts from the files in my ./src/icons/ directory
    webfont: {
      icons: {
        src: "icons/*.svg",
        dest: "<%= dist %>/fonts",
        options: {
          hashes: false,
          htmlDemo: false,
          stylesheet: "scss"
        }
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
          require: 'sass-globbing',
          cache: 'delete/'
        },
        files: {
           // The default stylesheet
          '<%= dist %>/css/style.css':'scss/style.scss',
           // For browsers not supporting @media
          '<%= dist %>/css/no-mq.css':'scss/no-mq.scss',
           // For the /projects directory -- running Anchor
          '<%= dist %>/projects/themes/kainav/css/style.css':'scss/anchor-style.scss'

        }
      }
    },

    // concat files
    concat: {
      ie: {
        files: {
          '<%= dist %>/js/ie.min.js': [
            'js/ie/*'
          ]
        }
      }
    },

    // uglify to concat, minify, and make source maps
    uglify: {
      script: {
        files: {
          '<%= dist %>/js/script.min.js': [
            'js/vendor/*',
            'js/plugins/*'
          ]
        }
      },
      app: {
        files: {
          '<%= dist %>/js/app.min.js': [
            'js/app.js'
          ]
        }
      },
      map : {
        files: {
          '<%= dist %>/js/map.min.js': [
            'js/map.js'
          ]
        }
      }
    }

  });


// register task
grunt.registerTask('default', ['watch']);

};
