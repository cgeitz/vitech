module.exports = function(grunt) {

    // Loads all grunt plugins from package.json
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON("package.json"),

        /**
         * Task responsiblle for detecting file changes and rerunning tasks.
         * @type {Object}
         */
        watch: {
            options: {
                livereload: true
            },
            compass: {
                // Watch all SCSS and Icons files, ignore bootstrap
                files: ["src/**/*.scss", "**/*.php", "assets/img/icon/**/*.png", "!src/scss/bootstrap/**.scss", "src/**/*.js" ],
                tasks: ["compass:dist",'concat', 'uglify:dist', 'jshint']
            }
        },

        /**
         * Task For Compiled SCSS with Compass library
         * @type {Object}
         */
        compass: {
            dist: {
                options: {
                    config: "config.rb",
                    sourcemap: true
                }
            }
        },

        concat: {
            dist: {
                src: ['src/js/main.js', 'src/js/main-2.js'],
                dest: 'assets/js/bundle.js'
            }
        },

        uglify: {
            dist: {
                files: {
                      'assets/js/bundle.min.js': ['assets/js/bundle.js']
                }
            }
        },

        jshint: {
            files: ['gruntfile.js', 'src/js/*.js'],
            options: {
                globals: {
                    jQuery: true,
                    console: true,
                    module: true
                }
            }
        },
        


    });

    
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', ['concat', 'uglify', 'jshint', 'compass', 'watch']);

};