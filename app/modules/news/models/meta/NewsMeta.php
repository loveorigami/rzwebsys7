<?php

namespace app\modules\news\models\meta;

use Yii;
use common\db\MetaFields;

/**
 * Class NewsMeta
 * Мета описание модели новостей
 * @package app\modules\news\models\meta
 * @author Churkin Anton <webadmin87@gmail.com>
 */

class NewsMeta extends MetaFields {

    /**
     * @inheritdoc
     */

    protected function config()
    {
        return [


            "title" => [
                "definition" => [
                    "class" => \common\db\fields\TextField::className(),
                    "title" => Yii::t('news/app', 'Title'),
                    "isRequired" => true,
                    "editInGrid"=>true,
                ],
                "params" => [$this->owner, "title"]
            ],

            "code" => [
                "definition" => [
                    "class" => \common\db\fields\CodeField::className(),
                    "title" => Yii::t('news/app', 'Code'),
                    "isRequired" => true,
                ],
                "params" => [$this->owner, "code"]
            ],

            "date" => [
                "definition" => [
                    "class" => \common\db\fields\DateField::className(),
                    "title" => Yii::t('news/app', 'Date'),
                    "isRequired" => false,
                    "editInGrid"=>true,
                ],
                "params" => [$this->owner, "date"]
            ],

            "image" => [
                "definition" => [
                    "class" => \common\db\fields\Html5ImageField::className(),
                    "title" => Yii::t('news/app', 'Image'),
                    "isRequired" => false,
                ],
                "params" => [$this->owner, "image"]
            ],

            "annotation" => [
                "definition" => [
                    "class" => \common\db\fields\TextAreaField::className(),
                    "title" => Yii::t('news/app', 'Annotation'),
                    "isRequired" => false,
                ],
                "params" => [$this->owner, "annotation"]
            ],

            "text" => [
                "definition" => [
                    "class" => \common\db\fields\HtmlField::className(),
                    "title" => Yii::t('news/app', 'Text'),
                    "isRequired" => false,
                ],
                "params" => [$this->owner, "text"]
            ],



        ];
    }


}