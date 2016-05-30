/*global module*/

module.exports = function(grunt, tasks) {
    // Load our node module required for this task.
    grunt.loadNpmTasks('grunt-contrib-concat');

    tasks.concat.css = {

        // Where to output our concatenated file to.
        dest: grunt.cssFolder + '/concat.css',

        // The files that we want to concatenate.
        src: [
                grunt.cssFolder + '*.css', // Include
                '!' + grunt.cssFolder + '*.min.css' // Exclude
        ]
    };

    return tasks;
};