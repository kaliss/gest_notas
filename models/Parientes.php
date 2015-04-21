<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parientes".
 *
 * @property integer $id_pariente
 * @property integer $id_est
 * @property string $nombre_pariente
 * @property integer $id_parentezco
 * @property integer $id_profesion
 *
 * @property Estudiantes $idEst
 * @property Parentezco $idParentezco
 * @property Profesiones $idProfesion
 */
class Parientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_est', 'nombre_pariente', 'id_parentezco', 'id_profesion'], 'required'],
            [['id_est', 'id_parentezco', 'id_profesion'], 'integer'],
            [['nombre_pariente'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pariente' => 'Id Pariente',
            'id_est' => 'Id Est',
            'nombre_pariente' => 'Nombre Pariente',
            'id_parentezco' => 'Id Parentezco',
            'id_profesion' => 'Id Profesion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEst()
    {
        return $this->hasOne(Estudiantes::className(), ['id_est' => 'id_est']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdParentezco()
    {
        return $this->hasOne(Parentezco::className(), ['id_parentezco' => 'id_parentezco']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProfesion()
    {
        return $this->hasOne(Profesiones::className(), ['id_profesion' => 'id_profesion']);
    }
}
