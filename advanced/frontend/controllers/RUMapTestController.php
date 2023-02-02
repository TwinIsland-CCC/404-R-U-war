<?php

namespace frontend\controllers;

use frontend\models\RUMapTest;
use frontend\models\RUMapTestSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RUMapTestController implements the CRUD actions for RUMapTest model.
 */
class RUMapTestController extends Controller
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
     * Lists all RUMapTest models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RUMapTestSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RUMapTest model.
     * @param int $m_id M ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($m_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($m_id),
        ]);
    }

    /**
     * Creates a new RUMapTest model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RUMapTest();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'm_id' => $model->m_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RUMapTest model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $m_id M ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($m_id)
    {
        $model = $this->findModel($m_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'm_id' => $model->m_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RUMapTest model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $m_id M ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($m_id)
    {
        $this->findModel($m_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RUMapTest model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $m_id M ID
     * @return RUMapTest the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($m_id)
    {
        if (($model = RUMapTest::findOne(['m_id' => $m_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
