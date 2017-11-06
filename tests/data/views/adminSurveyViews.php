<?php
/**
 * This contains a list of survey-related admin views that we can loop for testing
 * // TODO not complete views list
 */

return [
    // NB the import_id is needed only for the first item OR if you need to change the survey you want to work with
    'surveySummary' =>['route'=>'survey/sa/view/surveyid/{SID}','import_id'=>'454287'],


    // Survey main menu
    'surveyGeneralSettings' =>['route'=>'survey/sa/rendersidemenulink/subaction/generalsettings/surveyid/{SID}'],
    'surveyTexts' =>['route'=>'survey/sa/rendersidemenulink/subaction/surveytexts/surveyid/{SID}'],
    'surveyTemplateOptionsUpdate' =>['route'=>'templateoptions/sa/updatesurvey/surveyid/{SID}/gsid/1'],
    'surveyPresentationOptions' =>['route'=>'survey/sa/rendersidemenulink/subaction/presentation/surveyid/{SID}'],

    // FIXME these FAIL !!
    //'surveyParticipantsIndex' =>['route'=>'tokens/sa/index/surveyid/{SID}'],
    //'surveyPublicationOptions' =>['route'=>'rendersidemenulink/subaction/publication/surveyid/{SID}'],
    // 'surveyResources' =>['route'=>'survey/sa/rendersidemenulink/subaction/resources/surveyid/{SID}'],

    'surveyPermissions' =>['route'=>'surveypermission/sa/view/surveyid/{SID}'],
    'surveyParticipantTokenOptions' =>['route'=>'survey/sa/rendersidemenulink/subaction/tokens/surveyid/{SID}'],
    'surveyQuotas' =>['route'=>'quotas/sa/index/surveyid/{SID}'],
    'surveyAssessments' =>['route'=>'assessments/sa/index/surveyid/{SID}'],
    'surveyNotificationOptions' =>['route'=>'survey/sa/rendersidemenulink/subaction/notification/surveyid/{SID}'],
    'surveyEmailTemplates' =>['route'=>'emailtemplates/sa/index/surveyid/{SID}'],
    'surveyPanelIntegration' =>['route'=>'survey/sa/rendersidemenulink/subaction/panelintegration/surveyid/{SID}'],
    'surveyPlugins' =>['route'=>'survey/sa/rendersidemenulink/subaction/plugins/surveyid/{SID}'],



    // going deeper -------------------------------------
    // --------------------------------------------------

    'surveyLogicFile' =>['route'=>'expressions/sa/survey_logic_file/sid/{SID}'],
    // FIXME these FAIL !!
    //'surveyResponsesIndex' =>['route'=>'responses/sa/index/surveyid/{SID}'],
    //'surveyResponsesBrowse' =>['route'=>'responses/sa/browse/surveyid/{SID}'],
    'dataEntryView' =>['route'=>'dataentry/sa/view/surveyid/{SID}'],
    'statisticsIndex' =>['route'=>'statistics/sa/index/surveyid/{SID}'],
    'exportResults' =>['route'=>'export/sa/exportresults/sid/{SID}'],
    'exportSpss' =>['route'=>'export/sa/exportspss/sid/{SID}'],







];