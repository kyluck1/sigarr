<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TB_LOCAL".
 *
 * @property string $LOCAL_PK
 * @property string $HIERARQUIA_FK
 * @property string $USUARIO_FK
 *
 * @property ATA[] $aTAs
 */
class LOCAL extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TB_LOCAL';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LOCAL_PK'], 'required'],
            [['LOCAL_PK', 'HIERARQUIA_FK', 'USUARIO_FK'], 'number'],
            [['LOCAL_PK'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'LOCAL_PK' => 'Local Pk',
            'HIERARQUIA_FK' => 'Hierarquia Fk',
            'USUARIO_FK' => 'Usuario Fk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getATAs()
    {
        return $this->hasMany(ATA::className(), ['LOCAL_FK' => 'LOCAL_PK']);
    }
}
