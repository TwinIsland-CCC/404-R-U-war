<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/8
 *  Russia-Ukraine war weapons display
 */
namespace frontend\controllers;

use frontend\models\WeaponCountry;
use frontend\models\WeaponCountrySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WeaponCountryController implements the CRUD actions for WeaponCountry model.
 */
class WeaponCountryController extends Controller
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
     * Lists all WeaponCountry models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new WeaponCountrySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WeaponCountry model.
     * @param int $countryid Countryid
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($countryid)
    {
        return $this->render('view', [
            'model' => $this->findModel($countryid),
        ]);
    }

    /**
     * Creates a new WeaponCountry model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new WeaponCountry();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'countryid' => $model->countryid]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing WeaponCountry model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $countryid Countryid
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($countryid)
    {
        $model = $this->findModel($countryid);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'countryid' => $model->countryid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing WeaponCountry model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $countryid Countryid
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($countryid)
    {
        $this->findModel($countryid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WeaponCountry model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $countryid Countryid
     * @return WeaponCountry the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($countryid)
    {
        if (($model = WeaponCountry::findOne(['countryid' => $countryid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
