 $oldImage = $model->profile_image;

        if ($model->load(Yii::$app->request->post())) {

            $imagefile = UploadedFile::getInstance($model, 'profile_image');

            if ($imagefile) {
                
                unlink($model->profile_image); 

                $fileName = $model->first_name . rand(1, 4000) . '.' . $imagefile->extension;
                
                $imagefile->saveAs(Yii::getAlias('@app') . '/' . $fileName);

                $model->profile_image = $fileName;
                
                $model->save();
            } 
            else
                {
                
                $model->profile_image = $oldImage;
                
                $model->save(false);
            }