<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "dictionary".
 *
 * @property integer $id
 * @property string $word_ru
 * @property string $word_en
 * @property string $created_at
 * @property string $updated_at
 */
class Dictionary extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dictionary';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['word_ru', 'word_en'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Id слова в словаре'),
            'word_ru' => Yii::t('app', 'Слово на русском'),
            'word_en' => Yii::t('app', 'Слово на англ'),
            'created_at' => Yii::t('app', 'Время добавления слова'),
            'updated_at' => Yii::t('app', 'Время обновления слова'),
        ];
    }

    /**
     * @inheritdoc
     * @return DictionaryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DictionaryQuery(get_called_class());
    }
}
