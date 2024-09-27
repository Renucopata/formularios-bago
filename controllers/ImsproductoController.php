<?php

namespace app\controllers;

use app\models\ImsProducto;
use app\models\ImsProductoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ImsproductoController implements the CRUD actions for ImsProducto model.
 */
class ImsproductoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all ImsProducto models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ImsProductoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ImsProducto model.
     * @param int $CODIMS Codims
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($CODIMS)
    {
        return $this->render('view', [
            'model' => $this->findModel($CODIMS),
        ]);
    }

    /**
     * Creates a new ImsProducto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ImsProducto();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'CODIMS' => $model->CODIMS]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ImsProducto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $CODIMS Codims
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($CODIMS)
    {
        $model = $this->findModel($CODIMS);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CODIMS' => $model->CODIMS]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ImsProducto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $CODIMS Codims
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($CODIMS)
    {
        $this->findModel($CODIMS)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ImsProducto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $CODIMS Codims
     * @return ImsProducto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CODIMS)
    {
        if (($model = ImsProducto::findOne(['CODIMS' => $CODIMS])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
