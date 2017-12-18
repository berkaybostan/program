<?php

namespace kouosl\program\models;

use Yii;

/**
 * This is the model class for table "program".
 *
 * @property integer $id
 * @property string $dersadi
 * @property string $derssaati
 * @property string $gun
 * @property string $sinif
 * @property string $ogretimgorevlisi
 */
class Program extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'program';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dersadi', 'derssaati', 'gun', 'sinif', 'ogretimgorevlisi'], 'required'],
            [['dersadi'], 'string', 'max' => 50],
            [['derssaati'], 'string', 'max' => 5],
            [['gun'], 'string', 'max' => 10],
            [['sinif'], 'string', 'max' => 20],
            [['ogretimgorevlisi'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dersadi' => 'Dersadi',
            'derssaati' => 'Derssaati',
            'gun' => 'Gun',
            'sinif' => 'Sinif',
            'ogretimgorevlisi' => 'Ogretimgorevlisi',
        ];
    }
}
