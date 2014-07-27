<?php

use common\widgets\admin\Grid;

/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
* @var app\modules\news\models\News $searchModel
*/

echo Grid::widget([
    'dataProvider' => $dataProvider,
    'model' => $searchModel,
]);

?>