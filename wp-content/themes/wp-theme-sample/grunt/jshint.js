/*global module*/

module.exports = function(grunt, tasks) {
    grunt.loadNpmTasks('grunt-contrib-jshint');

    //the config for a specific task
    tasks.jshint = {
        //the files that we want to check
        dist: {
            src: [
                    grunt.jsFolder + '/*.js', //include
                    grunt.jsFolder + '/!*.min.js' //exclude
            ]
        }
    };

    return tasks;
};