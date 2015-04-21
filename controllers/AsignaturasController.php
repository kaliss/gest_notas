<?php

namespace app\controllers;

use Yii;
use app\models\Asignaturas;
use app\models\AsignaturasSearch;
use app\models\PlanDeEstudio;
use app\models\PlanDeEstudioSearch;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AsignaturasController implements the CRUD actions for Asignaturas model.
 */
class AsignaturasController extends Controller
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
     * Lists all Asignaturas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModelAsig = new AsignaturasSearch();
        $dataProviderAsig = $searchModelAsig->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModelAsig' => $searchModelAsig,
            'dataProviderAsig' => $dataProviderAsig,
        ]);
    }

    /**
     * Displays a single Asignaturas model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'modelAsig' => $this->findModelAsig($id),
            'modelPlan' => $this->findModelPlan($id),
        ]);
    }

    /**
     * Creates a new Asignaturas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $modelAsig = new Asignaturas();
        $modelPlan = new PlanDeEstudio();

        if ($modelAsig->load(Yii::$app->request->post()) && $modelAsig->save() ) {
            $modelPlan->id_asig = $modelAsig->id_asig;
            if ($modelPlan->load(Yii::$app->request->post()) && $modelPlan->save() ) {
                return $this->redirect(['view', 'id' => $modelAsig->id_asig]);
            }
            else{
                $this->deleteAsig($modelAsig->id_asig);
                return $this->render('create', [
                    'modelAsig' => $modelAsig,
                    'modelPlan' => $modelPlan,
                ]);
            }
        } else {
            return $this->render('create', [
                'modelAsig' => $modelAsig,
                'modelPlan' => $modelPlan,
            ]);
        }
    }

    /**
     * Updates an existing Asignaturas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $modelAsig = $this->findModelAsig($id);
        $modelPlan = $this->findModelPlan($id);

        if ($modelAsig->load(Yii::$app->request->post()) && $modelPlan->load(Yii::$app->request->post()) && $modelAsig->save() && $modelPlan->save()) {
            return $this->redirect(['view', 'id' => $modelAsig->id_asig]);
        } else {
            return $this->render('update', [
                'modelAsig' => $modelAsig,
                'modelPlan' => $modelPlan,
            ]);
        }
    }

    /**
     * Deletes an existing Asignaturas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModelPlan($id)->delete();

        $this->findModelAsig($id)->delete();

        return $this->redirect(['index']);
    }
    protected function deleteAsig($id)
    {
        $this->findModelAsig($id)->delete();
    }
    /**
     * Finds the Asignaturas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Asignaturas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelAsig($id)
    {
        if (($modelAsig = Asignaturas::findOne($id)) !== null) {
            return $modelAsig;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function findModelPlan($id)
    {
        if (($modelPlan = PlanDeEstudio::findOne($id)) !== null) {
            return $modelPlan;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
