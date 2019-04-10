<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "album".
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $price
 * @property string $artist
 * @property string $category
 */
class Album extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'album';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'image', 'price', 'artist', 'category'], 'required'],
            [['price'], 'number'],
            [['name', 'image', 'artist'], 'string', 'max' => 255],
            [['category'], 'string', 'max' => 64],
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
            'image' => 'Image',
            'price' => 'Price',
            'artist' => 'Artist',
            'category' => 'Category',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AlbumQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AlbumQuery(get_called_class());
    }
}
