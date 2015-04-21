<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matriculas".
 *
 * @property integer $id_matricula
 * @property string $cod_matricula
 * @property integer $id_facultad
 * @property integer $curso
 * @property integer $semestre
 * @property string $fecha_matricula
 *
 * @property AvanceDePlan[] $avanceDePlans
 * @property Facultades $idFacultad
 */
class Matriculas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'matriculas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cod_matricula', 'id_facultad', 'curso', 'semestre', 'fecha_matricula'], 'required'],
            [['id_facultad', 'curso', 'semestre'], 'integer'],
            [['fecha_matricula'], 'safe'],
            [['cod_matricula'], 'string', 'max' => 50],
            [['cod_matricula'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_matricula' => 'Id Matricula',
            'cod_matricula' => 'Código de  Matricula',
            'id_facultad' => 'Facultad',
            'curso' => 'Curso',
            'semestre' => 'Semestre',
            'fecha_matricula' => 'Fecha Matricula',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAvanceDePlans()
    {
        return $this->hasMany(AvanceDePlan::className(), ['id_matricula' => 'id_matricula']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdFacultad()
    {
        return $this->hasOne(Facultades::className(), ['id_facultad' => 'id_facultad']);
    }
}
