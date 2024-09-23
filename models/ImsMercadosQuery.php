<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ImsMercados]].
 *
 * @see ImsMercados
 */
class ImsMercadosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ImsMercados[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ImsMercados|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
