/* global module, require */

module.exports = function(grunt) {

    grunt.rootFolder = './';
    grunt.cssFolder = './static/css';
    grunt.jsFolder = './static/js';

    var tasks = {
        "concat" : {}
    };

    //compile scss files to css
    tasks = require('./grunt/sass.js')(grunt, tasks);

    //concatinate css files to style.css
    tasks = require('./grunt/concat-css.js')(grunt, tasks);

    //minify css
    tasks = require('./grunt/cssmin.js')(grunt, tasks);

    //run js lint

    tasks = require('./grunt/jshint.js')(grunt, tasks);

    //concat js

    tasks = require('./grunt/concat-js.js')(grunt, tasks);

    //minify js

    tasks = require ('./grunt/jsmin.js')(grunt, tasks);

    //delete old files

    tasks = require('./grunt/clean.js')(grunt, tasks);

    //default

    grunt.registerTask('default', ['sass', 'jshint', 'concat', 'cssmin', 'uglify', 'clean']);

    //watch

    tasks = require ('./grunt/watch.js')(grunt, tasks);

    grunt.initConfig(tasks);
}