<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TB_ATA".
 *
 * @property string $ATA_PK
 * @property string $TITULO
 * @property string $DATA
 * @property string $HR_INI
 * @property string $HR_FIM
 * @property string $ASSUNTOS
 * @property string $PROXIMOS_PASSOS
 * @property string $LOCAL_FK
 *
 * @property LOCAL $lOCALFK
 */
class ATA extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TB_ATA';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ATA_PK'], 'required'],
            [['ATA_PK', 'LOCAL_FK'], 'number'],
            [['TITULO'], 'string', 'max' => 50],
            [['DATA'], 'string', 'max' => 7],
            [['HR_INI', 'HR_FIM'], 'string', 'max' => 5],
            [['ASSUNTOS', 'PROXIMOS_PASSOS'], 'string', 'max' => 4000],
            [['ATA_PK'], 'unique'],
            [['LOCAL_FK'], 'exist', 'skipOnError' => true, 'targetClass' => LOCAL::className(), 'targetAttribute' => ['LOCAL_FK' => 'LOCAL_PK']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ATA_PK' => 'Ata Pk',
            'TITULO' => 'Titulo',
            'DATA' => 'Data',
            'HR_INI' => 'Hr Ini',
            'HR_FIM' => 'Hr Fim',
            'ASSUNTOS' => 'Assuntos',
            'PROXIMOS_PASSOS' => 'Proximos Passos',
            'LOCAL_FK' => 'Local Fk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLOCALFK()
    {
        return $this->hasOne(LOCAL::className(), ['LOCAL_PK' => 'LOCAL_FK']);
    }
}
