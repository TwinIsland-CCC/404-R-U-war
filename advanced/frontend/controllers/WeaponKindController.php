<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/8
 *  Russia-Ukraine war weapons display
 */
namespace frontend\controllers;

use frontend\models\WeaponKind;
use frontend\models\WeaponKindSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WeaponKindController implements the CRUD actions for WeaponKind model.
 */
class WeaponKindController extends Controller
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
     * Lists all WeaponKind models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new WeaponKindSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WeaponKind model.
     * @param int $kind_id Kind ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kind_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($kind_id),
        ]);
    }

    /**
     * Creates a new WeaponKind model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new WeaponKind();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kind_id' => $model->kind_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing WeaponKind model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $kind_id Kind ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kind_id)
    {
        $model = $this->findModel($kind_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kind_id' => $model->kind_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing WeaponKind model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $kind_id Kind ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kind_id)
    {
        $this->findModel($kind_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WeaponKind model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $kind_id Kind ID
     * @return WeaponKind the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kind_id)
    {
        if (($model = WeaponKind::findOne(['kind_id' => $kind_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
