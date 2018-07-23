// Permet utilisation de Webpack
var Encore = require('@symfony/webpack-encore');

Encore
    // Chemin de sortie des fichiers
    .setOutputPath('web/build/')

    .setPublicPath('/web')

    // Les entrées des fichiers
    .addEntry('app', './assets/js/app.js')
    .addEntry('main', './assets/scss/main.scss')

    // Supprime les précédents fichiers générés par Webpack avant de builder
    .cleanupOutputBeforeBuild()

    // Active les notifictions systèmes de Webpack lors du build
    .enableBuildNotifications()

    .enableSassLoader()

    // Autorise utilisation $ Jquery
    .autoProvidejQuery()

    // Création entrée partagée 'jquery_jqueryUi.js'
    .createSharedEntry('jquery_jqueryUi', ['jquery', 'jquery-ui']);


module.exports = Encore.getWebpackConfig();