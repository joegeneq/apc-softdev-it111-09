<?php

namespace frontend\controllers;

use Yii;
use app\models\Subjects;
use app\modeSubjectsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubjectsController implements the CRUD actions for Subjects model.
 */
class SubjectsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Subjects models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new modeSubjectsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Subjects model.
     * @param integer $id
     * @param integer $grades_id
     * @param integer $adviser_id
     * @param integer $student_id
     * @return mixed
     */
    public function actionView($id, $grades_id, $adviser_id, $student_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $grades_id, $adviser_id, $student_id),
        ]);
    }

    /**
     * Creates a new Subjects model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Subjects();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'grades_id' => $model->grades_id, 'adviser_id' => $model->adviser_id, 'student_id' => $model->student_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Subjects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $grades_id
     * @param integer $adviser_id
     * @param integer $student_id
     * @return mixed
     */
    public function actionUpdate($id, $grades_id, $adviser_id, $student_id)
    {
        $model = $this->findModel($id, $grades_id, $adviser_id, $student_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'grades_id' => $model->grades_id, 'adviser_id' => $model->adviser_id, 'student_id' => $model->student_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Subjects model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $grades_id
     * @param integer $adviser_id
     * @param integer $student_id
     * @return mixed
     */
    public function actionDelete($id, $grades_id, $adviser_id, $student_id)
    {
        $this->findModel($id, $grades_id, $adviser_id, $student_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Subjects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $grades_id
     * @param integer $adviser_id
     * @param integer $student_id
     * @return Subjects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $grades_id, $adviser_id, $student_id)
    {
        if (($model = Subjects::findOne(['id' => $id, 'grades_id' => $grades_id, 'adviser_id' => $adviser_id, 'student_id' => $student_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
