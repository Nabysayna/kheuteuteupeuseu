<?php

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


$app->group('/utils-adminpdv',function(){
    $this->post('/getdetailonepointsuivisentool',App\Controllers\UtilsPlatformController::class .':getdetailonepointsuivisentool');
    $this->post('/initajoutdeposit',App\Controllers\UtilsPlatformController::class .':initajoutdeposit');
    $this->post('/demndedeposit',App\Controllers\UtilsPlatformController::class .':demndedeposit');
});

$app->group('/util',function(){
    $this->post('/region',App\Controllers\UtilsPlatformController::class .':region');
    $this->post('/zone',App\Controllers\UtilsPlatformController::class .':zone');
    $this->post('/souszonebyzonebyregion',App\Controllers\UtilsPlatformController::class .':souszonebyzonebyregion');
});

$app->group('/admindpv-sen',function(){
    $this->post('/nombredereclamationpdvvente',App\Controllers\AdminpdvPlatformController::class .':nombredereclamationpdvvente');
    $this->post('/historiquereclamation',App\Controllers\AdminpdvPlatformController::class .':historiquereclamation');

    $this->post('/listuserpdv',App\Controllers\AdminpdvPlatformController::class .':listuserpdv');
    $this->post('/modifypdv',App\Controllers\AdminpdvPlatformController::class .':modifypdv');
    $this->post('/deconnectpdv',App\Controllers\AdminpdvPlatformController::class .':deconnectpdv');
    $this->post('/autoriservoirdepot',App\Controllers\AdminpdvPlatformController::class .':autoriservoirdepot');

    $this->post('/bilandeposit',App\Controllers\AdminpdvPlatformController::class .':bilandeposit');
    $this->post('/demandeRetrait',App\Controllers\AdminpdvPlatformController::class .':demandeRetrait');
    $this->post('/validerDemandeDepot',App\Controllers\AdminpdvPlatformController::class .':validerDemandeDepot');

    $this->post('/creerProfilCaissier',App\Controllers\AdminpdvPlatformController::class .':creerProfilCaissier');

});

$app->group('/crm-sen',function(){
    $this->post('/validerDemandeDepot',App\Controllers\CrmPlatformController::class .':validerDemandeDepot');
});

$app->group('/admindpv-sup',function(){
    $this->post('/detailperformancepdv',App\Controllers\AdminpdvPlatformController::class .':detailperformancepdv');

    $this->post('/performancepdv',App\Controllers\AdminpdvPlatformController::class .':performancepdv');
    $this->post('/notifications',App\Controllers\AdminpdvPlatformController::class .':notifications');

});
