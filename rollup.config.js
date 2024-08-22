import resolve from '@rollup/plugin-node-resolve';
import commonjs from '@rollup/plugin-commonjs';
import terser from '@rollup/plugin-terser'; // Importing the Terser plugin

export default {
    input: 'src/scripts/script.js',
    output: {
        file: 'dist/scripts/script.js',
        format: 'iife', // or 'umd' depending on your needs
        name: 'MyBundle',
    },
    plugins: [
        resolve(), // Resolves node_modules for imports
        commonjs(), // Converts CommonJS modules to ES6
        terser(), // Minifies the output
    ],
};
