<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users_tests_history".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $lang
 * @property integer $count_answer
 * @property integer $count_correct_answer
 * @property integer $count_incorrect_answer
 * @property string $created_at
 * @property string $updated_at
 */
class UserTestHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users_tests_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'lang', 'count_answer', 'count_correct_answer', 'count_incorrect_answer'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Id записи в истории о тесте'),
            'user_id' => Yii::t('app', 'Id пользователя который проходил тест'),
            'lang' => Yii::t('app', 'Язык основых слов в тесте'),
            'count_answer' => Yii::t('app', 'Кол-во ответов которые дал пользователь'),
            'count_correct_answer' => Yii::t('app', 'Кол-во верных ответов'),
            'count_incorrect_answer' => Yii::t('app', 'Кол-во не верных ответов'),
            'created_at' => Yii::t('app', 'ремя добавления'),
            'updated_at' => Yii::t('app', 'Время обновления'),
        ];
    }

    /**
     * @inheritdoc
     * @return UserTestHistoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserTestHistoryQuery(get_called_class());
    }
}
