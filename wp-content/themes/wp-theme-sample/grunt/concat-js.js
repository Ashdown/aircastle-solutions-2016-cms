/*global module*/

module.exports = function(grunt, tasks) {
    grunt.loadNpmTasks('grunt-contrib-concat');

    tasks.concat.js = {

        dest: grunt.jsFolder + '/concat.js',

        src: [
                grunt.jsFolder + '*.js', // Include
                grunt.jsFolder + '/*/*.js',
                '!' + grunt.jsFolder + '*.min.js' // Exclude
        ]
    };

    return tasks;
};