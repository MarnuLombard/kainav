/*
 * Setup options for grunt to work with.
 */
module.exports = function(grunt) {
  // Project configuration.
  grunt.initConfig({
    meta: {
      banner: '/*! Copyright (c) <%= grunt.template.today("yyyy") %> Simon Elvery */'
    },
    min: {
      main: {
        src: [
			'<banner>',
			'javascript/src/main.js'
		],
        dest: 'js/main.js'
      }
    },
    watch: {
      files: ['src/js/*'],
      tasks: 'min'
    },
	lint: {
		src: ['src/js/main.js']
	},
    uglify: {}
  });
};
