import resolve from '@rollup/plugin-node-resolve';
import commonjs from '@rollup/plugin-commonjs';

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
    ],
};
