<?php
/** 
* Team: 404NotFound 
* Coding by Luo Xinke 2013622 
*           2023/2/7 
* Russian-Ukraine War Weapons manufacturing companies
*/ 


namespace frontend\models;

/**
 * This is the ActiveQuery class for [[WeaponsCompany3]].
 *
 * @see WeaponsCompany3
 */
class WeaponsCompany3Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return WeaponsCompany3[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return WeaponsCompany3|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
