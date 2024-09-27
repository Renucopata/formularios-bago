<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ImsProducto]].
 *
 * @see ImsProducto
 */
class ImsProductoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ImsProducto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ImsProducto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
