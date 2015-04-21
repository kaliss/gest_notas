<?php

namespace app\controllers;

use Yii;
use app\models\Prerrequisitos;
use app\models\PrerrequisitosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PrerrequisitosController implements the CRUD actions for Prerrequisitos model.
 */
class PrerrequisitosController extends Controller
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
     * Lists all Prerrequisitos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PrerrequisitosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Prerrequisitos model.
     * @param integer $id_asig
     * @param integer $prerrequisito
     * @return mixed
     */
    public function actionView($id_asig, $prerrequisito)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_asig, $prerrequisito),
        ]);
    }

    /**
     * Creates a new Prerrequisitos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Prerrequisitos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_asig' => $model->id_asig, 'prerrequisito' => $model->prerrequisito]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Prerrequisitos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_asig
     * @param integer $prerrequisito
     * @return mixed
     */
    public function actionUpdate($id_asig, $prerrequisito)
    {
        $model = $this->findModel($id_asig, $prerrequisito);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_asig' => $model->id_asig, 'prerrequisito' => $model->prerrequisito]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Prerrequisitos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_asig
     * @param integer $prerrequisito
     * @return mixed
     */
    public function actionDelete($id_asig, $prerrequisito)
    {
        $this->findModel($id_asig, $prerrequisito)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Prerrequisitos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_asig
     * @param integer $prerrequisito
     * @return Prerrequisitos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_asig, $prerrequisito)
    {
        if (($model = Prerrequisitos::findOne(['id_asig' => $id_asig, 'prerrequisito' => $prerrequisito])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
