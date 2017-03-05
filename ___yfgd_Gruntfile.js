module.exports = function(grunt) {

  // Project configuration.
  
  var libass = "assets";
  var imglobal = libass + "/img";
  var cssglobal = libass + "/css";
  var jsglobal = libass + "/js";
  var jsglobalibs = libass + "/js/libs"; 

  require('load-grunt-tasks')(grunt);
  
  grunt.initConfig({
	  
    pkg: grunt.file.readJSON("package.json"),
      
	/*Spritesmith-----------------------------------------------*/
    
	 
	 /*Grunt Watch-----------------------------------------------*/
  	watch: {
  		options: {
  		  livereload: true,
  		},
  		html: {
  		  files: ["assets/**/*", "*.php", "*.html"],
  		  options: {
                  livereload: true
              }
  		}
  	},
	 
	 /*ImageMin----------------------------------------------------*/ 
	 
	 //----------------------------------End imagemin
	 
	 /*JSHINT-------------------------------------------------------*/

   /*COMPASS-------------------------------------------------------*/
   
   compass: {                  // Task
      dev: {                    // Another target
        options: {
          config: 'config.rb'
        }
      }
   },
	 
	 


	 /*-BABEL-REACTJS-ENGINE--- ------------------------------------*/


  	babel: {
        options: {
          plugins: ['transform-react-jsx'],
          presets: ['es2015', 'react']
        },
        jsx: {
          files: [{
            expand: true,
            cwd: 'assets/jsx/', // Custom folder
            src: ['*.jsx'],
            dest: 'assets/js/jsx-compiled/', // Custom folder
            ext: '.js'
          }]
        }
    }

  	
  });/*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
  
  Grunt initconfig end
  
  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
  
  


  // Load the plugins that provides each specified task.
  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.loadNpmTasks("grunt-babel");
  // and register for each the Default task(s).
  grunt.registerTask('default', ['babel']);
  
  //Leave this for the end
  
 

  
  

};