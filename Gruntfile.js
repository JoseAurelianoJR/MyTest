module.exports = function(grunt) {

  grunt.loadNpmTasks('grunt-composer');

  grunt.initConfig({
  	bower: {
  		install: {
    		options: {
	        	cleanTargetDir: true,
	        	cleanBowerDir: true,
	        	install: true,
	        	copy: true
	       	}
	    }
	},
	composer : {
        options : {
            usePhp: true,
            phpArgs: {
                someArg: 'custom'
            },
            flags: ['arg'],
            cwd: 'vendor',
            composerLocation: '/usr/local/bin/composer'
        },
        some_target: {
        },
        install: {}
    }
  });

  grunt.registerTask('default', ['bower', 'composer:install:no-dev']);
  
  grunt.loadNpmTasks('grunt-bower-task');

  

};
