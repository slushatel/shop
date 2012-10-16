<?php

/**
 * This is the model class for table "ref_users".
 *
 * The followings are the available columns in table 'ref_users':
 * @property integer $id
 * @property string $ref
 * @property integer $removal_mark
 * @property string $name
 * @property string $login
 * @property string $password
 * @property string $salt
 */
class RefUsers extends CActiveRecord
{
    public $password2;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RefUsers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ref_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('removal_mark, name', 'required'),
			//array('ref, removal_mark, name', 'required'),
			array('removal_mark', 'numerical', 'integerOnly'=>true),
			//array('ref', 'length', 'max'=>40),
			array('name, login', 'length', 'max'=>50),
			array('password', 'length', 'max'=>32),
			//array('salt', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			//array('id, ref, removal_mark, name, login, password, salt', 'safe', 'on'=>'search'),
			array('id, removal_mark, name, login, password', 'safe', 'on'=>'search'),
                    
                        array('password2', 'safe'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			//'ref' => 'Ref',
			'removal_mark' => 'Пометка удаления',
			'name' => 'Имя',
			'login' => 'Логин',
			'password' => 'Пароль',
			//'salt' => 'Salt',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		//$criteria->compare('ref',$this->ref,true);
		$criteria->compare('removal_mark',$this->removal_mark);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		//$criteria->compare('salt',$this->salt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
    protected function beforeValidate()
    {
        if (empty($this->salt))
        {
            $this->salt = $this->makeSalt();
        }
         if (empty($this->password))
        {
            $this->password = md5(md5($this->password2) . $this->salt);
        }
        return parent::beforeValidate();
    }
 
    private function makeSalt()
    {
        $n = 3;
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz.,*_-=+';
        $counter = strlen($pattern) - 1;
        for ($i = 0; $i < $n; $i++) {
            $key .= $pattern{rand(0, $counter)};
        }
        return $key;
    }
}