<?php
require 'vendor/autoload.php';
require 'bmiService.php';

$app = new \Slim\Slim();

$app->get('/bmi/height/:height/weight/:weight', function($height, $weight) use ( $app ) {
    $bmiIndexResult = number_format(BMIService::getBmiIndex($weight, $height), 2);
    $bmiDescriptionResult = BMIService::getBmiDescription($bmiIndexResult);
    $result = array('bmiIndex'=>$bmiIndexResult,'description'=>$bmiDescriptionResult);
    
    $app->response()->header('Content-Type','application/json');
    echo json_encode($result);
});

$app->run();
?>