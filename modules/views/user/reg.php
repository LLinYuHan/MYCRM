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
                <h3>添加新客户</h3>
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
                            echo $form->field($model, 'username')->textInput(['class' => 'form-control']);
                            echo $form->field($model, 'useremail')->textInput(['class' => 'form-control']);
                            echo $form->field($model, 'truename')->textInput(['class' => 'form-control']);
                            echo $form->field($model, 'age')->textInput(['class' => 'form-control']);
                            echo $form->field($model, 'sex')->textInput(['class' => 'form-control']);
                            echo $form->field($model, 'birthday')->textInput(['class' => 'form-control']);
                            echo $form->field($model, 'nickname')->textInput(['class' => 'form-control']);
                            echo $form->field($model, 'company')->textInput(['class' => 'form-control']);
                            ?>
                            <?php echo Html::submitButton('添加', ['class' => 'btn btn-primary m-b-10 m-l-5']); ?>
                            <?php echo Html::resetButton('取消', ['class' => 'btn btn-primary m-b-10 m-l-5']); ?>
                            <?php ActiveForm::end(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- side right column -->
                <div class="span3 form-sidebar pull-right">
                    <div class="alert alert-info hidden-tablet">
                        <i class="icon-lightbulb pull-left"></i>
                        请在左侧表单当中填入要添加的用户信息,包括用户名,密码,电子邮箱
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- end main container -->
