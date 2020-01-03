<?php
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class User extends ActiveRecord
{
    public $repass;
    public $loginname;
    public $rememberMe = true;
    public static function tableName()
    {
        return "{{%user}}";
    }

    public function rules()
    {
        return [
            ['loginname', 'required', 'message' => '登录用户名不能为空', 'on' => ['login']],
            ['openid', 'required', 'message' => 'openid不能为空', 'on' => ['qqreg']],
            ['username', 'required', 'message' => '用户名不能为空', 'on' => ['reg', 'regbymail', 'qqreg']],
            ['openid', 'unique', 'message' => 'openid已经被注册', 'on' => ['qqreg']],
            ['username', 'unique', 'message' => '用户已经被注册', 'on' => ['reg', 'regbymail', 'qqreg']],
            ['useremail', 'required', 'message' => '电子邮件不能为空', 'on' => ['reg', 'regbymail']],
            ['useremail', 'email', 'message' => '电子邮件格式不正确', 'on' => ['reg', 'regbymail']],
            ['useremail', 'unique', 'message' => '电子邮件已被注册', 'on' => ['reg', 'regbymail']],
            //['userpass', 'required', 'message' => '用户密码不能为空', 'on' => ['reg', 'login', 'regbymail', 'qqreg']],
            //['repass', 'required', 'message' => '确认密码不能为空', 'on' => ['reg', 'qqreg']],
            //['repass', 'compare', 'compareAttribute' => 'userpass', 'message' => '两次密码输入不一致', 'on' => ['reg', 'qqreg']],
            ['userpass', 'validatePass', 'on' => ['login']],
            ['truename', 'safe'],//'message' => '真实姓名不能为空', 'on' => ['reg', 'regbymail', 'qqreg']],
            ['age', 'safe'], //'message' => '年龄不能为空', 'on' => ['reg', 'regbymail', 'qqreg']],
            ['sex', 'safe'], //'message' => '性别不能为空', 'on' => ['reg', 'regbymail', 'qqreg']],
            ['birthday', 'safe'], //'message' => '用户名不能为空', 'on' => ['reg', 'regbymail', 'qqreg']],
            ['nickname', 'safe'], //'message' => '用户名不能为空', 'on' => ['reg', 'regbymail', 'qqreg']],
            ['company', 'safe'],// 'message' => '用户名不能为空', 'on' => ['reg', 'regbymail', 'qqreg']],


        ];
    }

    public function validatePass()
    {
        if (!$this->hasErrors()) {
            $loginname = "username";
            if (preg_match('/@/', $this->loginname)) {
                $loginname = "useremail";
            }
            $data = self::find()->where($loginname.' = :loginname and userpass = :pass', [':loginname' => $this->loginname, ':pass' => md5($this->userpass)])->one();
            if (is_null($data)) {
                $this->addError("userpass", "用户名或者密码错误");
            }
        }
    }

    public function attributeLabels()
    {
        return [
            'username' => '用户名',
            'userpass' => '用户密码',
            'repass' => '确认密码',
            'useremail' => '电子邮箱',
            'loginname' => '用户名/电子邮箱',
            'truename' => '真实姓名',
            'age' => '年龄',
            'sex' => '性别',
            'birthday' => '出生日期',
            'nickname' => '昵称',
            'company' => '公司/企业',
        ];
    }

    public function reg($data, $scenario = 'reg')
    {
        $this->scenario = $scenario;
        if ($this->load($data) && $this->validate()) {
            $this->createtime = time();
            $this->userpass = md5($this->userpass);
            if ($this->save(false)) {
                return true;
            }
            return false;
        }
        return false;
    }

    // public function getProfile()
    // {
    //     return $this->hasOne(Profile::className(), ['userid' => 'userid']);
    // }

    public function login($data)
    {
        $this->scenario = "login";
        if ($this->load($data) && $this->validate()) {
            //做点有意义的事
            $lifetime = $this->rememberMe ? 24*3600 : 0;
            $session = Yii::$app->session;
            session_set_cookie_params($lifetime);
            $session['loginname'] = $this->loginname;
            $session['isLogin'] = 1;
            return (bool)$session['isLogin'];
        }
        return false;
    }
}
