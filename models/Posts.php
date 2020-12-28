<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $id_category
 * @property string $image
 * @property string $timestamp
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'id_category', 'image', 'timestamp'], 'required'],
            [['description'], 'string'],
            [['id_category'], 'integer'],
            [['timestamp'], 'safe'],
            [['name', 'image'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'id_category' => 'Id Category',
            'image' => 'Image',
            'timestamp' => 'Timestamp',
        ];
    }
}
