/*global module*/

module.exports = function (grunt, tasks) {
    // Load our node module required for this task.
    grunt.loadNpmTasks('grunt-contrib-watch');

    // The configuration for a specific task.
    tasks.watch = {
        // The files that we want to check.
        watch: {
            files: [
                    grunt.cssFolder + '/*.scss',
                    grunt.cssFolder + '/*/*.scss',
                    grunt.jsFolder + '/*.js',
                    '!' + grunt.jsFolder + '/concat.js',
                    grunt.jsFolder + '/*/*.js'

            ],
            tasks: ['default']

        }
    };

    return tasks;
};