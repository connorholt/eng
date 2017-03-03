<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Dictionary]].
 *
 * @see Dictionary
 */
class DictionaryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Dictionary[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Dictionary|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
