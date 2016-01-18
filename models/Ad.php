<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ads".
 *
 * @property integer $id
 * @property string $seller_name
 * @property integer $allow_mails
 * @property string $phone
 * @property string $title
 * @property string $description
 * @property string $price
 * @property integer $location_id
 * @property integer $category_id
 * @property integer $organization_form_id
 * @property string $email
 */
class Ad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seller_name', 'allow_mails', 'title', 'description', 'price', 'location_id', 'category_id', 'organization_form_id', 'email'], 'required'],
//            [['title', 'description', 'price'], 'required'],
            [['location_id', 'category_id', 'organization_form_id'], 'integer'],
            [['allow_mails'], 'boolean'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['seller_name'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 12],
            [['title', 'email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'seller_name' => 'Seller Name',
            'allow_mails' => 'Allow Mails',
            'phone' => 'Phone',
            'title' => 'Title',
            'description' => 'Description',
            'price' => 'Price',
            'location_id' => 'Location ID',
            'category_id' => 'Category ID',
            'organization_form_id' => 'Organization Form ID',
            'email' => 'Email',
        ];
    }
}
