module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat : {
            basic : {
                src : [
                    'development/css/src/mixins.less',
                    'development/css/src/reset.less',
                    'development/css/src/global.less',
                    'development/css/src/material-icons.less',
                    'development/css/src/*.less'
                ],
                dest : 'development/css/staging.less'
            }
        },
        less: {
            options: {
                compress: true,
                banner : '@charset "UTF-8";'
            },
            build: {
                src: 'development/css/staging.less',
                dest: '_assets/css/master.min.css'
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-less');

    // Default task(s).
    grunt.registerTask('default', ['concat', 'less']);
    grunt.registerTask('buildCss', ['concat', 'less']);
};