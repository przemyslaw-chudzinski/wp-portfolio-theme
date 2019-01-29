const {task, series, parallel} = require('gulp');
require('./dev-scripts/sass');
require('./dev-scripts/javascript');
// require('./dev-scripts/templates');
// require('./dev-scripts/server');
require('./dev-scripts/images');

function buildDev(cb) {
    cb = cb || function () {};
    parallel('js:dev', 'sass:dev', 'images:copy')();
    parallel('js:watch', 'sass:watch', 'images:watch')();
    // series('server:run')();
    cb();
}
function buildProd(cb) {
    cb = cb || function () {};
    parallel('js:prod', 'sass:prod', 'images:copy')();
    cb();
}

task('project:run', series(buildDev));
task('project:build', series(buildProd));
