<?php

namespace itshkacomua\link\models;

use Yii;

/**
 * This is the model class for table "link".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property int|null $parent_id
 * @property int $created_at
 * @property int $user_id
 */
class Link extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'link';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url', 'created_at', 'user_id'], 'required'],
            [['parent_id', 'created_at', 'user_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'url' => Yii::t('app', 'Url'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }

    public function getParent()
    {
        return $this->hasMany(Link::className(), ['id' => 'parent_id']);
    }

    public function getParentName()
    {
        return (isset($this->parent)) ? $this->parent->name:'Корневая директория';
    }

    /**
     * @return array
     */
    public static function getParentList()
    {
        return array_merge([0 => 'Корневая директория'], \yii\helpers\ArrayHelper::map(self::find()->all(),'id', 'name'));
    }
}
