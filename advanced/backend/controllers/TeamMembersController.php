<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/10
 *  Russia-Ukraine backend
 */
namespace backend\controllers;

use backend\models\TeamMembers;
use backend\models\TeamMembersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TeamMembersController implements the CRUD actions for TeamMembers model.
 */
class TeamMembersController extends Controller
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
     * Lists all TeamMembers models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TeamMembersSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TeamMembers model.
     * @param int $Student_id Student ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Student_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Student_id),
        ]);
    }

    /**
     * Creates a new TeamMembers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TeamMembers();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Student_id' => $model->Student_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TeamMembers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Student_id Student ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Student_id)
    {
        $model = $this->findModel($Student_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Student_id' => $model->Student_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TeamMembers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Student_id Student ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Student_id)
    {
        $this->findModel($Student_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TeamMembers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Student_id Student ID
     * @return TeamMembers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Student_id)
    {
        if (($model = TeamMembers::findOne(['Student_id' => $Student_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
