  <link rel="stylesheet" href="assets/admin/css/compiled/user-list.css" type="text/css" media="screen" />
    <!-- main container -->
    <div class="content-wrap">
    <div class="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
              <div class="page-title">
                <h2>管理员列表</h2>
              </div>
            </div>
          </div>
          <!-- /# column -->
          <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
              <div class="page-title">
                <ol class="breadcrumb">
                  <li class="btn-flat success pull-right">
                    <a href="<?php echo yii\helpers\Url::to(['manage/reg']) ?>"><button class="btn btn-primary m-b-10 m-l-5"><span>&#43;</span> 添加管理员</button></a>
                  </li>
                  <li class="btn-flat success pull-right">
                    <a href="<?php echo yii\helpers\Url::to(['manage/changepass']) ?>"><button class="btn btn-primary m-b-10 m-l-5"> 修改密码</button></a>
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
                                    <span class="line"></span>管理员ID
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>管理员账号
                                </th>
                                <th class="span2 sortable">
                                    <span class="line"></span>管理员邮箱
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>最后登录时间
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>最后登录IP
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>添加时间
                                </th>
                                <th class="span3 sortable">
                                    <span class="line"></span>操作
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                        <?php foreach($managers as $manager): ?>
                        <tr class="first">
                            <td>
                                <?php echo $manager->adminid; ?>
                            </td>
                            <td>
                               <?php echo $manager->adminuser; ?>
                            </td>
                            <td>
                               <?php echo $manager->adminemail; ?>
                            </td>
                            <td>
                               <?php echo date('Y-m-d H:i:s', $manager->logintime); ?>
                            </td>
                            <td>
                                <?php echo long2ip($manager->loginip); ?>
                            </td>
                            <td>
                                <?php echo date("Y-m-d H:i:s", $manager->createtime); ?>
                            </td>
                            <td class="align-right">
                            <?php if ($manager->adminid != 1): ?>
                            <a href="<?php echo yii\helpers\Url::to(['manage/del', 'adminid' => $manager->adminid]); ?>">删除</a>
                        	<?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php
                     	if (Yii::$app->session->hasFlash('info')) {
                            echo Yii::$app->session->getFlash('info');
                        }
                    ?>
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
