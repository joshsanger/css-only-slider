module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat : {
            basic : {
                src : [
                    '_assets/css/src/mixins.less',
                    '_assets/css/src/reset.less',
                    '_assets/css/src/global.less',
                    '_assets/css/src/material-icons.less',
                    '_assets/css/src/*.less'
                ],
                dest : './_assets/css/staging.less'
            }
        },
        less: {
            options: {
                compress: true,
                banner : '@charset "UTF-8";'
            },
            build: {
                src: '_assets/css/staging.less',
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