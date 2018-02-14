<?php
//$app->get('/', App\Controllers\HomeController::class .':accueil');
$app->group('/webservice', function () {
    $this->post('/checkNumber', App\Controllers\TntPlatformController::class .':checkNumber');
    $this->post('/abonner', App\Controllers\TntPlatformController::class .':abonner');
    $this->post('/listabonnement', App\Controllers\TntPlatformController::class .':listabonnement');
    $this->post('/ventedecodeur', App\Controllers\TntPlatformController::class .':ventedecodeur');
    $this->post('/listeventedecodeur', App\Controllers\TntPlatformController::class .':listeventedecodeur');
    $this->post('/listeventecarte', App\Controllers\TntPlatformController::class .':listeventecarte');
});
$app->group('/orangemoney',function(){
    $this->post('/depot',App\Controllers\OrangemoneyPlatformController::class .':depot');
    $this->post('/reponse',App\Controllers\OrangemoneyPlatformController::class .':reponse');
});
$app->group('/postcash',function(){
    $this->post('/rechargementespece',App\Controllers\PostcashPlatformController::class .':rechargementespece');
    $this->post('/achatjula',App\Controllers\PostcashPlatformController::class .':achatjula');
    $this->post('/detailfacturesenelec',App\Controllers\PostcashPlatformController::class .':detailfacturesenelec');
    $this->post('/reglementsenelec',App\Controllers\PostcashPlatformController::class .':reglementsenelec');
    $this->post('/achatcodewoyofal',App\Controllers\PostcashPlatformController::class .':achatcodewoyofal');
    $this->post('/oolusolar',App\Controllers\PostcashPlatformController::class .':oolusolar');

});
$app->group('/gestion',function(){
    $this->post('/reportingdate',App\Controllers\GestionPlatformController::class .':reportingdate');
    $this->post('/gestionreporting',App\Controllers\GestionPlatformController::class .':gestionreporting');
});
$app->group('/ecom',function(){
    $this->post('/listeArticles',App\Controllers\EcomPlatformController::class .':listeArticles');
    $this->post('/ajouterarticle',App\Controllers\EcomPlatformController::class .':ajouterarticle');

});
$app->group('/wizall',function(){
    $this->post('/recuperefacturesde',App\Controllers\WizallPlatformController::class .':recuperefacturesde');


});

