<?php
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRM客户管理系统</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/admin/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/admin/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/admin/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/css/lib/helper.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>CRM客户管理系统</span></a>
                        </div>
                        <div class="login-form">
                            
                            <?php $form = ActiveForm::begin([
                            'fieldConfig' => [
                            'template' => '{input}{error}', 

                                ]

                            ]); ?>
                            
                                <?php echo $form->field($model, 'adminuser')->textInput([
                                    "class" => "form-control", 
                                    "placeholder" => "管理员账号",
                                    'template' => '<div class = "form-group">{input}<label for="form-group">管理员账号</label></div>'
                                ]); ?>
                                <?php echo $form->field($model, 'adminpass')->passwordInput([
                                    "class" => "form-control", 
                                    "placeholder" => "管理员密码",
                                    'template' => '<div class = "form-group">{input}<label for="form-group">管理员密码</label></div>'
                                ]); ?>
                                <?php echo $form->field($model, 'rememberMe')->checkbox([
    
                                    'template' => '<div class = "checkbox">{input}<label for="checkbox">记住我</label></div>'

                                ]); ?>
                                <?php echo Html::submitButton('登录', [
                                    "class" => "btn btn-primary btn-flat m-b-30 m-t-30"
                                ]); ?>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>