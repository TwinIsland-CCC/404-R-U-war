<?php

namespace frontend\models;

/**
 *  Team: 404NotFound
 *  Coding by Que MingKai 2012411
 *            2023/2/2
 * This is the ActiveQuery class for [[RUMapTest]].
 *
 * @see RUMapTest
 */
class RUMapTestQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return RUMapTest[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return RUMapTest|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
