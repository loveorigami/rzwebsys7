<?php
namespace common\db;

use \creocoder\behaviors\NestedSetQuery;

/**
 * Class TActiveQuery
 * Системный ActiveQuery. Предоставляет системные scopes. Содержит поведения для реализации древовидных структур
 * @package common\db
 * @author Churkin Anton <webadmin87@gmail.com>
 */

class TActiveQuery extends ActiveQuery {

    /**
     * @inheritdoc
     */

    public function behaviors() {
        return [
            [
                'class' => NestedSetQuery::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     * @return \common\db\ActiveQuery
     */
    public static function find()
    {
        return Yii::createObject(\common\db\TActiveQuery::className(), [get_called_class()]);
    }

}
