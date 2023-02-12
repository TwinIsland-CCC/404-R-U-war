<?php

/**   
* Team: 404NotFound   
* Coding by Que MingKai 2012411   
*          2023/2/12
* Russian-Ukraine War weapons's producer country number controller
*/

namespace frontend\controllers;

use frontend\models\CountryNum;
use frontend\models\CountryNumSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CountryNumController implements the CRUD actions for CountryNum model.
 */
class CountryNumController extends Controller
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
     * Lists all CountryNum models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CountryNumSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CountryNum model.
     * @param int $cid Cid
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($cid)
    {
        return $this->render('view', [
            'model' => $this->findModel($cid),
        ]);
    }

    /**
     * Creates a new CountryNum model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CountryNum();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'cid' => $model->cid]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CountryNum model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $cid Cid
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($cid)
    {
        $model = $this->findModel($cid);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cid' => $model->cid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CountryNum model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $cid Cid
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($cid)
    {
        $this->findModel($cid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CountryNum model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $cid Cid
     * @return CountryNum the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($cid)
    {
        if (($model = CountryNum::findOne(['cid' => $cid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
