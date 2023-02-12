<?php

/**   
* Team: 404NotFound   
* Coding by Que MingKai 2012411   
*          2023/2/12
* Russian-Ukraine War weapons's producer country number query class
*/

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[CountryNum]].
 *
 * @see CountryNum
 */
class CountryNumQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CountryNum[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CountryNum|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
