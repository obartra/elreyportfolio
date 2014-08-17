module.exports = function(grunt) {

	//Load tasks
	grunt.loadNpmTasks('grunt-contrib-requirejs');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-htmlmin');
	grunt.loadNpmTasks('grunt-text-replace');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadTasks('./grunt');

	// Configuration
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		requirejs : {
			compile : {
				options : {
					baseUrl: ".",
					name : "js/main.js",
					mainConfigFile: "js/main.js",
					out: "grunt/tmp/main.js",
					findNestedDependencies: true,
					preserveLicenseComments: false,
					optimize: 'uglify2',
					paths: {
						'angular' : 'empty:'
					},
					inlineText : true
				}
			}
		},
		compass : {
			dist: {
				options: {
					config: './config.rb'
				}
			}
		},
		htmlmin : {
			dist: {
				options: {
					removeComments: true,
					collapseWhitespace: true,
					minifyJS: true,
					minifyCSS: true
				},
				files: {
					'index.html': 'grunt/tmp/index.html',
				}
			}
		},
		clean : ['grunt/tmp', 'img/small.png']
	});

	// Run
	grunt.registerTask('default', ['installdependencies', 'requirejs', 'compass', 'htmlgen', 'clean']);
	grunt.registerTask('fast', ['requirejs', 'compass', 'htmlgen']);
};
