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


$app->group('/util',function(){
    $this->post('/region',App\Controllers\UtilsPlatformController::class .':region');
    $this->post('/zone',App\Controllers\UtilsPlatformController::class .':zone');
    $this->post('/souszonebyzonebyregion',App\Controllers\UtilsPlatformController::class .':souszonebyzonebyregion');
});


$app->group('/utils-adminpdv',function(){
    $this->post('/getdetailonepointsuivisentool',App\Controllers\UtilsPlatformController::class .':getdetailonepointsuivisentool');
    $this->post('/initajoutdeposit',App\Controllers\UtilsPlatformController::class .':initajoutdeposit');
    $this->post('/demndedeposit',App\Controllers\UtilsPlatformController::class .':demndedeposit');
});


$app->group('/auth-sen',function(){

    $this->post('/authentification',App\Controllers\AuthPlatformController::class .':authentification');

    $this->post('/authentificationPhaseTwo',App\Controllers\AuthPlatformController::class .':authentificationPhaseTwo');

    $this->post('/inscription',App\Controllers\AuthPlatformController::class .':inscription');

    $this->post('/modifpwdinit',App\Controllers\AuthPlatformController::class .':modifpwdinit');

    $this->post('/deconnexion',App\Controllers\AuthPlatformController::class .':deconnexion');

    $this->post('/creerProfilCaissier',App\Controllers\AuthPlatformController::class .':creerProfilCaissier');

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

});


$app->group('/adminmultidpv-sen',function(){

    $this->post('/bilandeposit',App\Controllers\AdminmultipdvPlatformController::class .':bilandeposit');

    $this->post('/depositinitialconsommeparservice',App\Controllers\AdminmultipdvPlatformController::class .':depositinitialconsommeparservice');

    $this->post('/historiquereclamation',App\Controllers\AdminmultipdvPlatformController::class .':historiquereclamation');

    $this->post('/demanderetraitfond',App\Controllers\AdminmultipdvPlatformController::class .':demanderetraitfond');

    $this->post('/validerretrait',App\Controllers\AdminmultipdvPlatformController::class .':validerretrait');

    $this->post('/listmajcautions',App\Controllers\AdminmultipdvPlatformController::class .':listmajcautions');

    $this->post('/modifymajcaution',App\Controllers\AdminmultipdvPlatformController::class .':modifymajcaution');

    $this->post('/nombredereclamationagentpdvvente',App\Controllers\AdminmultipdvPlatformController::class .':nombredereclamationagentpdvvente');

    $this->post('/activiteservices',App\Controllers\AdminmultipdvPlatformController::class .':activiteservices');

    $this->post('/performancesadminclasserbydate',App\Controllers\AdminmultipdvPlatformController::class .':performancesadminclasserbydate');

    $this->post('/performancesadminclasserbylotbydate',App\Controllers\AdminmultipdvPlatformController::class .':performancesadminclasserbylotbydate');

    $this->post('/detailperformancesadminclasserbydate',App\Controllers\AdminmultipdvPlatformController::class .':detailperformancesadminclasserbydate');

    $this->post('/listmap',App\Controllers\AdminmultipdvPlatformController::class .':listmap');

    $this->post('/listcreditmanager',App\Controllers\AdminmultipdvPlatformController::class .':listcreditmanager');

    $this->post('/ajoutcreditmanager',App\Controllers\AdminmultipdvPlatformController::class .':ajoutcreditmanager');

});


$app->group('/crm-sen',function(){

    $this->post('/validerDemandeDepot',App\Controllers\CrmPlatformController::class .':validerDemandeDepot');

    $this->post('/getEtatDemandeDepot',App\Controllers\CrmPlatformController::class .':getEtatDemandeDepot');

    $this->post('/portefeuille',App\Controllers\CrmPlatformController::class .':portefeuille');

    $this->post('/relance',App\Controllers\CrmPlatformController::class .':relance');

    $this->post('/promotion',App\Controllers\CrmPlatformController::class .':promotion');

    $this->post('/sendSms',App\Controllers\CrmPlatformController::class .':sendSms');

    $this->post('/prospection',App\Controllers\CrmPlatformController::class .':prospection');

    $this->post('/suivicommande',App\Controllers\CrmPlatformController::class .':suivicommande');

    $this->post('/servicepoint',App\Controllers\CrmPlatformController::class .':servicepoint');

});


$app->group('/comptabilite-adminpdv',function(){

    $this->post('/userexploitation',App\Controllers\ComptabilitePlatformController::class .':userexploitation');

    $this->post('/exploitation',App\Controllers\ComptabilitePlatformController::class .':exploitation');

    $this->post('/exploitationaveccommission',App\Controllers\ComptabilitePlatformController::class .':exploitationaveccommission');

    $this->post('/listevente',App\Controllers\ComptabilitePlatformController::class .':listevente');

    $this->post('/listecharge',App\Controllers\ComptabilitePlatformController::class .':listecharge');

    $this->post('/ajoutcharge',App\Controllers\ComptabilitePlatformController::class .':ajoutcharge');

    $this->post('/supprimerservice',App\Controllers\ComptabilitePlatformController::class .':supprimerservice');

    $this->post('/modifierservice',App\Controllers\ComptabilitePlatformController::class .':modifierservice');

    $this->post('/ajoutservice',App\Controllers\ComptabilitePlatformController::class .':ajoutservice');

    $this->post('/approvisionner',App\Controllers\ComptabilitePlatformController::class .':approvisionner');

    $this->post('/listecaisse',App\Controllers\ComptabilitePlatformController::class .':listecaisse');

    $this->post('/listeservice',App\Controllers\ComptabilitePlatformController::class .':listeservice');

    $this->post('/etatcaisse',App\Controllers\ComptabilitePlatformController::class .':etatcaisse');

    $this->post('/validerapprovisionn',App\Controllers\ComptabilitePlatformController::class .':validerapprovisionn');

    $this->post('/listerevenu',App\Controllers\ComptabilitePlatformController::class .':listerevenu');

    $this->post('/listerevenutransfert',App\Controllers\ComptabilitePlatformController::class .':listerevenutransfert');

});


$app->group('/admindpv-sup',function(){
    $this->post('/detailperformancepdv',App\Controllers\AdminpdvPlatformController::class .':detailperformancepdv');

    $this->post('/performancepdv',App\Controllers\AdminpdvPlatformController::class .':performancepdv');
    $this->post('/notifications',App\Controllers\AdminpdvPlatformController::class .':notifications');

});
