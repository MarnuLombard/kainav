/*
 * Setup options for grunt to work with.
 */
module.exports = function(grunt) {
	// Project configuration.
	grunt.initConfig({
		uglify: {
			production: {
				options: {
					preserveComments: 'some',
					banner: '/*! Copyright (c) <%= grunt.template.today("yyyy") %> Simon Elvery */'
				},
				files: {
					'js/main.js': ['src/js/main.js']
				}
			}
		},
		compass: {
			production: {
				options: {
					sassDir: 'src/scss',
					cssDir: 'css',
					environment: 'production'
				}
			}
		},
		watch: {
			scripts: {
				files: ['src/**/*.js'],
				tasks: 'uglify'
			},
			styles: {
				files: ['src/**/*.scss'],
				tasks: 'compass'
			}
		}
	});
	
	// Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-watch');

};
