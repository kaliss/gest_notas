<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prerrequisitos".
 *
 * @property integer $id_asig
 * @property integer $prerrequisito
 * @property boolean $tipo_prerrequisito
 *
 * @property Asignaturas $idAsig
 * @property Asignaturas $prerrequisito0
 */
class Prerrequisitos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prerrequisitos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_asig', 'prerrequisito'], 'required'],
            [['id_asig', 'prerrequisito'], 'integer'],
            [['tipo_prerrequisito'], 'boolean']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_asig' => 'Id Asig',
            'prerrequisito' => 'Prerrequisito',
            'tipo_prerrequisito' => 'Tipo Prerrequisito',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAsig()
    {
        return $this->hasOne(Asignaturas::className(), ['id_asig' => 'id_asig']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrerrequisito0()
    {
        return $this->hasOne(Asignaturas::className(), ['id_asig' => 'prerrequisito']);
    }
}
