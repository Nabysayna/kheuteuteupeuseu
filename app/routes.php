<?php

$app->group('/utils-crm',function(){
    $this->post('/region',App\Controllers\UtilsPlatformController::class .':region');
    $this->post('/zone',App\Controllers\UtilsPlatformController::class .':zone');
    $this->post('/souszonebyzonebyregion',App\Controllers\UtilsPlatformController::class .':souszonebyzonebyregion');
});


$app->group('/utils-sen',function(){

    $this->post('/getdetailonepointsuivisentool',App\Controllers\UtilsPlatformController::class .':getdetailonepointsuivisentool');

    $this->post('/initajoutdeposit',App\Controllers\UtilsPlatformController::class .':initajoutdeposit');

    $this->post('/demndedeposit',App\Controllers\UtilsPlatformController::class .':demndedeposit');

    $this->post('/consulterLanceurDalerte',App\Controllers\UtilsPlatformController::class .':consulterLanceurDalerte');

    $this->post('/isDepotCheckAuthorized',App\Controllers\UtilsPlatformController::class .':isDepotCheckAuthorized');

    $this->post('/checkCaution',App\Controllers\UtilsPlatformController::class .':checkCaution');

    $this->post('/inputfiledemndedeposit',App\Controllers\UtilsPlatformController::class .':inputfiledemndedeposit');

});


$app->group('/gestionreporting-sen',function(){

    $this->post('/reportingdate',App\Controllers\GestionreportingPlatformController::class .':reportingdate');

    $this->post('/reimpression',App\Controllers\GestionreportingPlatformController::class .':reimpression');

    $this->post('/gestionreporting',App\Controllers\GestionreportingPlatformController::class .':gestionreporting');

    $this->post('/servicepoint',App\Controllers\GestionreportingPlatformController::class .':servicepoint');

    $this->post('/ajoutdepense',App\Controllers\GestionreportingPlatformController::class .':ajoutdepense');

    $this->post('/reclamation',App\Controllers\GestionreportingPlatformController::class .':reclamation');

    $this->post('/vente',App\Controllers\GestionreportingPlatformController::class .':vente');

});


$app->group('/uploads-sen',function(){

    $this->post('/inputfiledemndedeposit',App\Controllers\UploadsPlatformController::class .':inputfiledemndedeposit');

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


$app->group('/comptabilite-sen',function(){

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

    $this->post('/listerevenu',App\Controllers\ComptabilitePlatformController::class .':listerevenu');

    $this->post('/listerevenutransfert',App\Controllers\ComptabilitePlatformController::class .':listerevenutransfert');

    $this->post('/etatcaisse',App\Controllers\ComptabilitePlatformController::class .':etatcaisse');

    $this->post('/validerapprovisionn',App\Controllers\ComptabilitePlatformController::class .':validerapprovisionn');

});


$app->group('/demandepret-sen',function(){

    $this->post('/demandepret',App\Controllers\DemandepretPlatformController::class .':demandepret');

    $this->post('/consulterpret',App\Controllers\DemandepretPlatformController::class .':consulterpret');

    $this->post('/envoyerDemandeDepretCofina',App\Controllers\DemandepretPlatformController::class .':envoyerDemandeDepretCofina');

    $this->post('/ajoutdemandepret',App\Controllers\DemandepretPlatformController::class .':ajoutdemandepret');

});


$app->group('/apitnt', function () {

    $this->post('/checkNumber', App\Controllers\TntPlatformController::class .':checkNumber');

    $this->post('/abonner', App\Controllers\TntPlatformController::class .':abonner');

    $this->post('/listabonnement', App\Controllers\TntPlatformController::class .':listabonnement');

    $this->post('/ventedecodeur', App\Controllers\TntPlatformController::class .':ventedecodeur');

    $this->post('/listeventedecodeur', App\Controllers\TntPlatformController::class .':listeventedecodeur');

    $this->post('/listeventecarte', App\Controllers\TntPlatformController::class .':listeventecarte');

});


$app->group('/postcash-sen',function(){

    $this->post('/rechargementespece',App\Controllers\PostcashPlatformController::class .':rechargementespece');

    $this->post('/achatjula',App\Controllers\PostcashPlatformController::class .':achatjula');

    $this->post('/detailfacturesenelec',App\Controllers\PostcashPlatformController::class .':detailfacturesenelec');

    $this->post('/reglementsenelec',App\Controllers\PostcashPlatformController::class .':reglementsenelec');

    $this->post('/achatcodewoyofal',App\Controllers\PostcashPlatformController::class .':achatcodewoyofal');

    $this->post('/oolusolar',App\Controllers\PostcashPlatformController::class .':oolusolar');

});


$app->group('/wizall-sen',function(){

    $this->post('/intouchCashin',App\Controllers\WizallPlatformController::class .':intouchCashin');

    $this->post('/intouchCashout',App\Controllers\WizallPlatformController::class .':intouchCashout');

    $this->post('/intouchPayerFactureSde',App\Controllers\WizallPlatformController::class .':intouchPayerFactureSde');

    $this->post('/intouchRecupereFactureSde',App\Controllers\WizallPlatformController::class .':intouchRecupereFactureSde');

    $this->post('/intouchPayerFactureSenelec',App\Controllers\WizallPlatformController::class .':intouchPayerFactureSenelec');

    $this->post('/intouchRecupereFactureSenelec',App\Controllers\WizallPlatformController::class .':intouchRecupereFactureSenelec');
    
    $this->post('/verifiercodebonachat',App\Controllers\WizallPlatformController::class .':verifiercodebonachat');

});


$app->group('/facturier-sen',function(){

    $this->post('/reglementsde',App\Controllers\FacturierPlatformController::class .':reglementsde');

    $this->post('/detailreglementsde',App\Controllers\FacturierPlatformController::class .':detailreglementsde');

    $this->post('/achatrapido',App\Controllers\FacturierPlatformController::class .':achatrapido');

    $this->post('/achatcodewoyofal',App\Controllers\FacturierPlatformController::class .':achatcodewoyofal');

    $this->post('/detailreglementsenelec',App\Controllers\FacturierPlatformController::class .':detailreglementsenelec');

    $this->post('/reglementsenelec',App\Controllers\FacturierPlatformController::class .':reglementsenelec');

    $this->post('/paiementoolusolar',App\Controllers\FacturierPlatformController::class .':paiementoolusolar');

});


$app->group('/expressocash-sen',function(){

    $this->post('/cashin',App\Controllers\ExpressoPlatformController::class .':cashin');

    $this->post('/cashout',App\Controllers\ExpressoPlatformController::class .':cashout');

    $this->post('/confirmCashout',App\Controllers\ExpressoPlatformController::class .':confirmCashout');

    $this->post('/pinCashoutCheck',App\Controllers\ExpressoPlatformController::class .':pinCashoutCheck');

    $this->post('/pinCashout',App\Controllers\ExpressoPlatformController::class .':pinCashout');

});


$app->group('/ecom-sen',function(){

    $this->post('/listerarticle',App\Controllers\EcomPlatformController::class .':listerarticle');

    $this->post('/ajoutarticle',App\Controllers\EcomPlatformController::class .':ajoutarticle');

    $this->post('/ajoutcommande',App\Controllers\EcomPlatformController::class .':ajoutcommande');

    $this->post('/receptionnerCommandes',App\Controllers\EcomPlatformController::class .':receptionnerCommandes');

    $this->post('/supprimerArticle',App\Controllers\EcomPlatformController::class .':supprimerArticle');

    $this->post('/modifierArticle',App\Controllers\EcomPlatformController::class .':modifierArticle');

    $this->post('/assignerCourse',App\Controllers\EcomPlatformController::class .':assignerCourse');

    $this->post('/prendreCommande',App\Controllers\EcomPlatformController::class .':prendreCommande');

    $this->post('/fournirCommandes',App\Controllers\EcomPlatformController::class .':fournirCommandes');

    $this->post('/listerCategorie',App\Controllers\EcomPlatformController::class .':listerCategorie');

    $this->post('/listercommande',App\Controllers\EcomPlatformController::class .':listercommande');

    $this->post('/listerCoursier',App\Controllers\EcomPlatformController::class .':listerCoursier');

    $this->post('/listervente',App\Controllers\EcomPlatformController::class .':listervente');

});


$app->group('/maps-sen',function(){

    $this->post('/listmaps',App\Controllers\MapsPlatformController::class .':listmaps');

    $this->post('/listmapsdepart',App\Controllers\MapsPlatformController::class .':listmapsdepart');

    $this->post('/listmapspardepart',App\Controllers\MapsPlatformController::class .':listmapspardepart');

});


$app->group('/om-sen',function(){

    $this->post('/requerirControllerOM',App\Controllers\OrangemoneyPlatformController::class .':requerirControllerOM');

    $this->post('/verifierReponseOM',App\Controllers\OrangemoneyPlatformController::class .':verifierReponseOM');

    $this->post('/demanderAnnulationOM',App\Controllers\OrangemoneyPlatformController::class .':demanderAnnulationOM');

    $this->post('/isDepotCheckAuthorized',App\Controllers\OrangemoneyPlatformController::class .':isDepotCheckAuthorized');

    $this->post('/depot',App\Controllers\OrangemoneyPlatformController::class .':depot');

    $this->post('/reponse',App\Controllers\OrangemoneyPlatformController::class .':reponse');

});


$app->group('/tc-sen',function(){

    $this->post('/requerirControllerTC',App\Controllers\TigocashPlatformController::class .':requerirControllerTC');

    $this->post('/verifierReponseTC',App\Controllers\TigocashPlatformController::class .':verifierReponseTC');

    $this->post('/demanderAnnulationTC',App\Controllers\TigocashPlatformController::class .':demanderAnnulationTC');

});


$app->group('/ec-sen',function(){

    $this->post('/cashin',App\Controllers\ExpressocashPlatformController::class .':cashin');

    $this->post('/cashout',App\Controllers\ExpressocashPlatformController::class .':cashout');

    $this->post('/topup',App\Controllers\ExpressocashPlatformController::class .':topup');

    $this->post('/checkbalance',App\Controllers\ExpressocashPlatformController::class .':checkbalance');

});


$app->group('/test',function(){

    $this->get('/index',App\Controllers\TestController::class .':index');

});

