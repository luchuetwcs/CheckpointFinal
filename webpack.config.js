var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/web')
    .addEntry('app', './assets/js/app.js')
    // will output as web/build/accueil.css
    .addEntry('accueil', './assets/scss/accueil.scss')
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSassLoader()

module.exports = Encore.getWebpackConfig();

