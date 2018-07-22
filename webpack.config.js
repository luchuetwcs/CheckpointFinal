var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/web')
    .addEntry('accueil', './assets/scss/accueil.scss')
    .addEntry('header', './assets/scss/header.scss')
    .addEntry('app', './assets/js/app.js')
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSassLoader();

module.exports = Encore.getWebpackConfig();