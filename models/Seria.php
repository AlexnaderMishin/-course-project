<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seria".
 *
 * @property int $id
 * @property string $name
 * @property int $season
 * @property int $number_seria
 */
class Seria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'season', 'number_seria'], 'required'],
            [['season', 'number_seria'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'season' => 'Season',
            'number_seria' => 'Number Seria',
        ];
    }
}
