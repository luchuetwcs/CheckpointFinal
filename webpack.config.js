let Encore = require('@symfony/webpack-encore');

Encore
    .enableSassLoader()
    .setOutputPath('web/build/')
    .setPublicPath('/web')

    .addEntry('app', './assets/js/app.js')
    .addEntry('style', './assets/scss/style.scss')

    .cleanupOutputBeforeBuild()
    .enableBuildNotifications();

module.exports = Encore.getWebpackConfig();