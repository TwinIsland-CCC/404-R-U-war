<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/8
 *  Russia-Ukraine war weapons display
 */
namespace frontend\controllers;

use frontend\models\WeaponsCompany3;
use frontend\models\WeaponsCompany3Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WeaponsCompany3Controller implements the CRUD actions for WeaponsCompany3 model.
 */
class WeaponsCompany3Controller extends Controller
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
     * Lists all WeaponsCompany3 models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new WeaponsCompany3Search();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WeaponsCompany3 model.
     * @param string $E_name E Name
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($E_name)
    {
        return $this->render('view', [
            'model' => $this->findModel($E_name),
        ]);
    }

    /**
     * Creates a new WeaponsCompany3 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new WeaponsCompany3();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'E_name' => $model->E_name]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing WeaponsCompany3 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $E_name E Name
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($E_name)
    {
        $model = $this->findModel($E_name);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'E_name' => $model->E_name]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing WeaponsCompany3 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $E_name E Name
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($E_name)
    {
        $this->findModel($E_name)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WeaponsCompany3 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $E_name E Name
     * @return WeaponsCompany3 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($E_name)
    {
        if (($model = WeaponsCompany3::findOne(['E_name' => $E_name])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
