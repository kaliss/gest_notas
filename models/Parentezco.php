<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parentezco".
 *
 * @property integer $id_parentezco
 * @property string $nombre_parentezco
 *
 * @property Parientes[] $parientes
 */
class Parentezco extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parentezco';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_parentezco'], 'required'],
            [['nombre_parentezco'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_parentezco' => 'Id Parentezco',
            'nombre_parentezco' => 'Parentezco',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParientes()
    {
        return $this->hasMany(Parientes::className(), ['id_parentezco' => 'id_parentezco']);
    }
}
