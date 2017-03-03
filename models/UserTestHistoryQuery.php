<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[UserTestHistory]].
 *
 * @see UserTestHistory
 */
class UserTestHistoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return UserTestHistory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UserTestHistory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
