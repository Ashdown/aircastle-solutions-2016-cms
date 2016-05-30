/*global module*/

module.exports = function(grunt, tasks) {
    grunt.loadNpmTasks('grunt-contrib-clean');

    tasks.clean = {
        build: {
            src: [
                grunt.cssFolder + "/*.css.map",
                grunt.cssFolder + "/*.css",
                grunt.jsFolder + '/concat.js'
            ]
        }
    };

    return tasks;
};