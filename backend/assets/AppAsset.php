<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public function init() {
        parent::init();
        // resetting BootstrapAsset to not load own css files
//        \Yii::$app->assetManager->bundles['yii\web\JqueryAsset'] = [
//            'js'=>[]
//        ];
        \Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapPluginAsset'] = [
            'js'=>[]
        ];
        \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
            'css' => []
        ];
    }

    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/st_admin';
    public $css = [
        'css/bootstrap/bootstrap.css',
        'css/plugins/calendar/calendar.css',
        '//fonts.googleapis.com/css?family=Raleway:400,500,600,700,300',
        'css/app/app.v1.css',
    ];
    
    public $js = [
//        'js/jquery/jquery-1.9.1.min.js',
        'js/plugins/underscore/underscore-min.js',
        'js/bootstrap/bootstrap.min.js',
        'js/globalize/globalize.min.js',
        'js/plugins/nicescroll/jquery.nicescroll.min.js',
        'js/plugins/DevExpressChartJS/dx.chartjs.js',
        'js/plugins/DevExpressChartJS/world.js',
        'js/plugins/DevExpressChartJS/demo-charts.js',
        'js/plugins/DevExpressChartJS/demo-vectorMap.js',
        'js/plugins/sparkline/jquery.sparkline.min.js',
        'js/plugins/sparkline/jquery.sparkline.demo.js',
        '//ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js',
        'js/angular/todo.js',
        'js/plugins/calendar/calendar.js',
        'js/plugins/calendar/calendar-conf.js',
        'js/app/custom.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

}
