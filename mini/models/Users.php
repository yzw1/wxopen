<?php

namespace mini\models;

use Yii;

/**
 * This is the model class for table "{{%mini_users}}".
 *
 * @property int $UserId
 * @property string $MiniName 小程序的名字
 * @property string $AppId
 * @property string $AppSecret
 * @property string $ReTime
 * @property string $UpTime
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%mini_users}}';
    }

    public function scenarios()
    {
        return [
            'create' => ['MiniName', 'AppId', 'AppSecret'],
            'update' => ['title', 'content'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ReTime', 'UpTime'], 'safe'],
            [['MiniName', 'AppId'], 'string', 'max' => 30,'on'=>['create']],
            [['AppSecret'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'UserId' => 'UserID',
            'MiniName' => 'MiniName',
            'AppId' => 'AppID',
            'AppSecret' => 'AppSecret',
            'ReTime' => 'ReTime',
            'UpTime' => 'UpTime',
        ];
    }

    /**
     * @param $data
     * @return mixed
     * 注册小程序账号
     * 优化之处写个公共方法进行注册 稍后写
     */
    public function reMini($data)
    {
        $this->scenario = 'create';
        if ($this->load($data,'') && $this->save()) {
            return $this->attributes['UserId'];
         }
        return false;

    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     *
     */
    public function select()
    {
        return self::find()->asArray()->all();
    }

    public function deletes($ids)
    {
        return self::findOne($ids)->delete();
    }
}
