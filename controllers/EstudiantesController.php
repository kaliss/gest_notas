<?php

namespace app\controllers;

use Yii;
use app\models\Estudiantes;
use app\models\EstudiantesSearch;
use app\models\InformacionFamiliar;
use app\models\InformacionFamiliarSearch;
use app\models\InformacionSeminarista;
use app\models\InformacionSeminaristaSearch;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EstudiantesController implements the CRUD actions for Estudiantes model.
 */
class EstudiantesController extends Controller
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
     * Lists all Estudiantes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModelEst = new EstudiantesSearch();
        $dataProviderEst = $searchModelEst->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModelEst' => $searchModelEst,
            'dataProviderEst' => $dataProviderEst,
        ]);
    }

    /**
     * Displays a single Estudiantes model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'modelEst' => $this->findModelEst($id),
            'modelFam' => $this->findModelFam($id),
            'modelSem' => $this->findModelSem($id),
        ]);
    }

    /**
     * Creates a new Estudiantes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $modelEst = new Estudiantes();
        $modelFam = new InformacionFamiliar();
        $modelSem = new InformacionSeminarista();

        if ($modelEst->load(Yii::$app->request->post()) && $modelEst->save()) {
            $modelFam->id_est = $modelEst->id_est;
            if ($modelFam->load(Yii::$app->request->post()) && $modelFam->save()) {
                $modelSem->id_est = $modelEst->id_est;
                if ($modelSem->load(Yii::$app->request->post()) && $modelSem->save()) {
                    return $this->redirect(['view', 'id' => $modelEst->id_est]);
                } else{
                    $this->deleteFam($modelFam->id_est);
                    $this->deleteEst($modelEst->id_est);
                    return $this->render('create', [
                        'modelEst' => $modelEst,
                        'modelFam' => $modelFam,
                        'modelSem' => $modelSem,
                    ]);
                }
            } else{
                $this->deleteEst($modelEst->id_est);
                return $this->render('create', [
                    'modelEst' => $modelEst,
                    'modelFam' => $modelFam,
                    'modelSem' => $modelSem,
                ]);
            }
        } else {
            return $this->render('create', [
                'modelEst' => $modelEst,
                'modelFam' => $modelFam,
                'modelSem' => $modelSem,
            ]);
        }
    }

    /**
     * Updates an existing Estudiantes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $modelEst = $this->findModelEst($id);
        $modelFam = $this->findModelFam($id);
        $modelSem = $this->findModelSem($id);

        if ($modelEst->load(Yii::$app->request->post()) && $modelFam->load(Yii::$app->request->post()) && $modelSem->load(Yii::$app->request->post()) &&
            $modelEst->save() && $modelFam->save() && $modelSem->save() ) {
            return $this->redirect(['view', 'id' => $modelEst->id_est]);
        } else {
            return $this->render('update', [
                'modelEst' => $modelEst,
                'modelFam' => $modelFam,
                'modelSem' => $modelSem,
            ]);
        }
    }

    /**
     * Deletes an existing Estudiantes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModelFam($id)->delete();
        $this->findModelSem($id)->delete();
        $this->findModelEst($id)->delete();

        return $this->redirect(['index']);
    }
    protected function deleteEst($id)
    {
        $this->findModelEst($id)->delete();
    }
    protected function deleteFam($id)
    {
        $this->findModelFam($id)->delete();
    }

    /**
     * Finds the Estudiantes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Estudiantes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModelEst($id)
    {
        if (($modelEst = Estudiantes::findOne($id)) !== null) {
            return $modelEst;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function findModelFam($id)
    {
        if (($modelFam = InformacionFamiliar::findOne($id)) !== null) {
            return $modelFam;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function findModelSem($id)
    {
        if (($modelSem = InformacionSeminarista::findOne($id)) !== null) {
            return $modelSem;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
