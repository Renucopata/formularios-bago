<?php

namespace app\controllers;

use app\models\ImsMercados;
use app\models\ImsMercadosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ImsmercadosController implements the CRUD actions for ImsMercados model.
 */
class ImsmercadosController extends Controller
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
     * Lists all ImsMercados models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ImsMercadosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ImsMercados model.
     * @param int $CODIGOIMS Codigoims
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($CODIGOIMS)
    {
        return $this->render('view', [
            'model' => $this->findModel($CODIGOIMS),
        ]);
    }

    /**
     * Creates a new ImsMercados model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ImsMercados();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'CODIGOIMS' => $model->CODIGOIMS]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ImsMercados model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $CODIGOIMS Codigoims
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($CODIGOIMS)
    {
        $model = $this->findModel($CODIGOIMS);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CODIGOIMS' => $model->CODIGOIMS]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ImsMercados model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $CODIGOIMS Codigoims
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($CODIGOIMS)
    {
        $this->findModel($CODIGOIMS)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ImsMercados model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $CODIGOIMS Codigoims
     * @return ImsMercados the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CODIGOIMS)
    {
        if (($model = ImsMercados::findOne(['CODIGOIMS' => $CODIGOIMS])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
