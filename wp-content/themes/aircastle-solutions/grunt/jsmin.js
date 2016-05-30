/*global module*/

module.exports = function(grunt, tasks) {
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // The configuration for a specific task.
    tasks.uglify = {

        dist: {
            files: {
                "javascript.js": [grunt.jsFolder + '/concat.js']

            }
        }
    };

    return tasks;
};