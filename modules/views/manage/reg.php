<?php
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
?>
    <link rel="stylesheet" href="assets/admin/css/compiled/new-user.css" type="text/css" media="screen" />
    <!-- main container -->
    <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
             <div class="row">
<div class="col-lg-12 p-r-0 title-margin-left">
    <div class="page-header">
        <div id="pad-wrapper" class="new-user">
            <div class="row">
                <h3>添加管理员</h3>
            </div>
            <div class="row-fluid form-wrapper">
                <!-- left column -->
                <div class="span9 with-sidebar">
                   

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="basic-form">
                
                                  
                            <?php
                            if (Yii::$app->session->hasFlash('info')) {
                                echo Yii::$app->session->getFlash('info');
                            }
                            $form = ActiveForm::begin([
                                'fieldConfig' => [
                                    'template' => '<div class="form-group">{label}{input}</div>{error}',
                                ],
                                'options' => [
                                    'class' => 'new_user_form inline-input',
                                ],
                            ]);
                            echo $form->field($model, 'adminuser')->textInput(['class' => 'form-control']);
                            echo $form->field($model, 'adminemail')->textInput(['class' => 'form-control']);
                            echo $form->field($model, 'adminpass')->passwordInput(['class' => 'form-control']);
                            echo $form->field($model, 'repass')->passwordInput(['class' => 'form-control']);
                            ?>
                            <?php echo Html::submitButton('添加', ['class' => 'btn btn-primary m-b-10 m-l-5']); ?>
                            <?php echo Html::resetButton('取消', ['class' => 'btn btn-primary m-b-10 m-l-5']); ?>
                            <?php ActiveForm::end(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- end main container -->