var Encore = require('@symfony/webpack-encore');

Encore

// Là où les fichiers sont générés
    .setOutputPath('web/build/')
    // racine du projet
    .setPublicPath('../')
    // Les ressources liées dans les fichiers générés (comme l'URL des polices dans les fichiers CSS, les glyphicons) sont relatives.
    .setManifestKeyPrefix('build/')



    .addEntry('login', './assets/scss/login.scss')
    .addEntry('dashboard', './assets/scss/dashboard.scss')


    // Transfert des css dans build/css (il faudra ajuster les liens pour dashboard.css et supprimer celui ci-dessus.
    .addEntry('css/main', './assets/scss/main.scss')
    .addEntry('css/accueil', './assets/scss/accueil.scss')



    // Transfert des images dans build/images.
    .addEntry('images/logo', './assets/images/logo.png')



    .addEntry('js/app', './assets/js/app.js')


    // Transfet les modules jquery et jQuery UI dans 'jquery_jqueryUi.js' fichier.
    .createSharedEntry('jquery_jqueryUi', ['jquery', 'jquery-ui'])


    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()


    .enableSassLoader(function(sassOptions) {}, {
        resolveUrlLoader: false
    })

    .autoProvidejQuery();


module.exports = Encore.getWebpackConfig();
