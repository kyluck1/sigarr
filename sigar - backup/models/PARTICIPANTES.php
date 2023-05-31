<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TB_PARTICIPANTES".
 *
 * @property string $PARTICIPANTES_PK
 * @property string $ATA_FK
 * @property string $NOME
 * @property string $SETOR
 * @property string $EMAIL
 */
class PARTICIPANTES extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TB_PARTICIPANTES';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PARTICIPANTES_PK'], 'required'],
            [['PARTICIPANTES_PK', 'ATA_FK'], 'number'],
            [['NOME'], 'string', 'max' => 250],
            [['SETOR'], 'string', 'max' => 20],
            [['EMAIL'], 'string', 'max' => 100],
            [['PARTICIPANTES_PK'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'PARTICIPANTES_PK' => 'Participantes Pk',
            'ATA_FK' => 'Ata Fk',
            'NOME' => 'Nome',
            'SETOR' => 'Setor',
            'EMAIL' => 'Email',
        ];
    }
}
