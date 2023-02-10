<?php

namespace frontend\controllers;

use app\Models\TimeInfo;
use app\Models\TimeInfoSearch;
use frontend\models\RuNewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TimeInfoController implements the CRUD actions for TimeInfo model.
 */
class TimeInfoController extends Controller
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
     * Lists all TimeInfo models.
     *
     * @return string
     */
    public function actionIndex()
    {
       // $this->layout=null;
       /* $searchModel = new TimeInfoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);*/
       // $this->layout="main";
        $searchModel = new TimeInfoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->renderPartial('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Finds the TimeInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $date Date
     * @return TimeInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($date)
    {
        if (($model = TimeInfo::findOne(['date' => $date])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
