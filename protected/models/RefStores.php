<?php

/**
 * This is the model class for table "ref_stores".
 *
 * The followings are the available columns in table 'ref_stores':
 * @property integer $id
 * @property string $ref
 * @property integer $removal_mark
 * @property string $name
 * @property integer $store_imagesmall_id
 * @property integer $store_imagebig_id
 * @property string $store_address
 * @property string $store_phone
 * @property string $store_site_address
 * @property integer $price_unvisible
 */
class RefStores extends CActiveRecord {

  public $store_imagesmall_id_path;
  public $store_imagebig_id_path;
  /**
   * Returns the static model of the specified AR class.
   * @param string $className active record class name.
   * @return RefStores the static model class
   */
  public static function model($className = __CLASS__) {
    return parent::model($className);
  }

  /**
   * @return string the associated database table name
   */
  public function tableName() {
    return 'ref_stores';
  }

  /**
   * @return array validation rules for model attributes.
   */
  public function rules() {
    // NOTE: you should only define rules for those attributes that
    // will receive user inputs.
    return array(
        array('name, store_address, store_phone, store_site_address', 'required'),
        array('removal_mark, store_imagesmall_id, store_imagebig_id, price_unvisible', 'numerical', 'integerOnly' => true),
        array('store_phone', 'length', 'max' => 40),
        array('name, store_site_address', 'length', 'max' => 200),
        array('store_address', 'length', 'max' => 100),
        // The following rule is used by search().
        // Please remove those attributes that should not be searched.
        array('id, ref, removal_mark, name, store_imagesmall_id, store_imagebig_id, store_address, store_phone, store_site_address, price_unvisible', 'safe', 'on' => 'search'),
        array('store_imagesmall_id_path, store_imagebig_id_path', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true),
        array('image, store_imagesmall_id_path, store_imagebig_id_path', 'safe'),
    );
  }

  /**
   * @return array relational rules.
   */
  public function relations() {
    // NOTE: you may need to adjust the relation name and the related
    // class name for the relations automatically generated below.
    return array(
    );
  }

  /**
   * @return array customized attribute labels (name=>label)
   */
  public function attributeLabels() {
    return array(
        'id' => 'ID',
        'ref' => Yii::t('shop', 'Reference'),
        'removal_mark' => Yii::t('shop', 'Removal mark'),
        'name' => Yii::t('shop', 'Name'),
        'store_imagesmall_id' => 'Store Imagesmall',
        'store_imagebig_id' => 'Store Imagebig',
        'store_address' => Yii::t('shop', 'Address'),
        'store_phone' => Yii::t('shop', 'Phone'),
        'store_site_address' => Yii::t('shop', 'Site'),
        'price_unvisible' => Yii::t('shop', 'Price unvisible'),
    );
  }

  /**
   * Retrieves a list of models based on the current search/filter conditions.
   * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
   */
  public function search() {
    // Warning: Please modify the following code to remove attributes that
    // should not be searched.

    $criteria = new CDbCriteria;

    $criteria->compare('id', $this->id);
    $criteria->compare('ref', $this->ref, true);
    $criteria->compare('removal_mark', $this->removal_mark);
    $criteria->compare('name', $this->name, true);
    $criteria->compare('store_imagesmall_id', $this->store_imagesmall_id);
    $criteria->compare('store_imagebig_id', $this->store_imagebig_id);
    $criteria->compare('store_address', $this->store_address, true);
    $criteria->compare('store_phone', $this->store_phone, true);
    $criteria->compare('store_site_address', $this->store_site_address, true);
    $criteria->compare('price_unvisible', $this->price_unvisible);

    return new CActiveDataProvider($this, array(
                'criteria' => $criteria,
            ));
  }

  public function beforeSave() {
    if (!isset($this->ref)) {
      $connection = Yii::app()->db;
      $sql = "select replace(UUID(),'-','')";
      $command = $connection->createCommand($sql);
      $this->ref = '006-' . $command->queryScalar();
    }

    if ($file = CUploadedFile::getInstance($this, 'store_imagesmall_id_path')) {
      //Yii::log('store_imagesmall_id_path');
      $imageFile = new MyImage($file->tempName);
      $imageFile->resizeImage(1, array('wmax' => 320, 'hmax' => 140));

      $modelImage = new RefImages;
      $modelImage->image = $imageFile->getImageData();

      if ($modelImage->save()) {
        $this->store_imagesmall_id = $modelImage->id;
      }
    }

    if ($file = CUploadedFile::getInstance($this, 'store_imagebig_id_path')) {
      //Yii::log('store_imagebig_id_path');
      $imageFile = new MyImage($file->tempName);
      $imageFile->resizeImage(1, array('wmax' => 600, 'hmax' => 450));

      $modelImage = new RefImages;
      $modelImage->image = $imageFile->getImageData();

      if ($modelImage->save()) {
        $this->store_imagebig_id = $modelImage->id;
      }
    }
    
    return parent::beforeSave();
  }

}