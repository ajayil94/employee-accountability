<?php

namespace app\modules\employee\controllers;

use Yii;
use app\modules\employee\models\EmployeeMaster;
use app\modules\employee\models\EmployeeMasterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * EmployeeMasterController implements the CRUD actions for EmployeeMaster model.
 */
class EmployeeMasterController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all EmployeeMaster models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new EmployeeMasterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EmployeeMaster model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new EmployeeMaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {

        $model = new EmployeeMaster();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->profile_image = UploadedFile::getInstance($model, 'profile_image');

            $imageName = $model->first_name . rand(1, 4000) . '.' . $model->profile_image->extension;

            $image_path = 'uploads/emp/' . $imageName;

            $model->profile_image->saveAs($image_path);

            $model->profile_image = $image_path;

            $model->save();

            return $this->redirect(['index']);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing EmployeeMaster model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
$model = new EmployeeMaster();
        $model = $this->findModel($id);

        $current_image = $model->profile_image;

        if ($model->load(Yii::$app->request->post())) {

            $project = $model->first_name;

            $model->profile_image = UploadedFile::getInstance($model, 'profile_image');


            if (!empty($model->profile_image) && $model->profile_image->size !== 0) {


                $model->profile_image->saveAs('uploads/emp/' . $project . '.' . $model->profile_image->extension);

                $model->profile_image = 'uploads/emp/' . $project . '.' . $model->profile_image->extension;
            } else
                $model->profile_image = $current_image;

            $model->save();

            Yii::$app->getSession()->setFlash('success', 'Data updated Successfully!');

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EmployeeMaster model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EmployeeMaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return EmployeeMaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = EmployeeMaster::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
