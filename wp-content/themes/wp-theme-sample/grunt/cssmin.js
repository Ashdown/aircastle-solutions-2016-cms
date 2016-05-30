/*global module*/

module.exports = function (grunt, tasks) {
// Load our node module required for this task.
    grunt.loadNpmTasks('grunt-contrib-cssmin');

// The configuration for a specific task.
    tasks.cssmin = {
        dist: {
            files: {
                "style.css": [grunt.cssFolder + '/style.css']
            }
        }
    };

    return tasks;
};