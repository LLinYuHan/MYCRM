   <link rel="stylesheet" href="assets/admin/css/compiled/user-list.css" type="text/css" media="screen" />
    <!-- main container -->
    <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h2>客户列表</h2>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="btn-flat success pull-right">
                    <a href="<?php echo yii\helpers\Url::to(['user/reg']) ?>"><button class="btn btn-primary m-b-10 m-l-5"><span>&#43;</span> 添加新用户</button></a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /# column -->
        </div>

                <!-- Users table -->
     <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-title">
             <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="span3 sortable">
                                    <span class="line"></span>用户名
                                </th>
                                 <th class="span3 sortable">
                                    <span class="line"></span>电子邮箱
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>真实姓名
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>昵称
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>性别
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>年龄
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>生日
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>操作
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                        <?php foreach($users as $user): ?>
                        <tr class="first">
                            <td>
                                <?php if (empty($user->profile->avatar)): ?>
                                    <img src="<?php echo Yii::$app->params['defaultValue']['avatar']; ?>" class="img-circle avatar hidden-phone" />
                                <?php else: ?>
                                    <img src="assets/uploads/avatar/<?php echo $user->profile->avatar; ?>" class="img-circle avatar hidden-phone" />
                                <?php endif; ?>
                                <a href="#" class="name"><?php echo $user->username; ?></a>
                            </td>   
                            <td>
                                <?php echo isset($user->useremail) ? $user->useremail : '未填写'; ?>
                            </td>

                            <td>
                                <?php echo isset($user->truename) ? $user->truename : '未填写'; ?>
                            </td>
                            <td>
                                <?php echo $user->nickname!=NULL ? $user->nickname : '未填写'; ?>
                            </td>
                            <td>
                                <?php echo $user->sex!=NULL ? $user->sex : '未填写'; ?>
                            </td>
                            <td>
                                <?php echo isset($user->age) ? $user->age : '未填写'; ?>
                            </td>
                            <td>
                                <?php echo isset($user->birthday) ? $user->birthday : '未填写'; ?>
                            </td>
                            <td class="align-right">
                            <a href="<?php echo yii\helpers\Url::to(['user/del', 'userid' => $user->userid]); ?>">删除</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

                <div class="pagination pull-right">
                    <?php echo yii\widgets\LinkPager::widget([
                        'pagination' => $pager,
                        'prevPageLabel' => '&#8249;',
                        'nextPageLabel' => '&#8250;',
                    ]); ?>
                </div>
                <!-- end users table -->
            </div>
        </div>
    </div>
    <!-- end main container -->