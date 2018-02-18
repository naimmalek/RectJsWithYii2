<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_master".
 *
 * @property int $id
 * @property string $name
 * @property string $is_active
 * @property string $is_deleted
 * @property int $created_by
 * @property string $created_date
 * @property int $updated_by
 * @property string $updated_date
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','price'], 'required'],
            [['is_active', 'is_deleted'], 'string'],
            [['created_by', 'updated_by','price'], 'integer'],
            [['created_date','description', 'updated_date'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price'=>'Price',
            'description'=>'Description',
            'is_active' => 'Is Active',
            'is_deleted' => 'Is Deleted',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'updated_by' => 'Updated By',
            'updated_date' => 'Updated Date',
        ];
    }
}
