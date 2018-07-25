<?php

/**
 * This is the model class for table "kamar".
 *
 * The followings are the available columns in table 'kamar':
 * @property string $kd_kamar
 * @property string $jenis_kamar
 * @property integer $tarif_permalam
 * @property string $fasilitas
 */
class Kamar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kamar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_kamar, jenis_kamar, tarif_permalam, fasilitas', 'required'),
			array('tarif_permalam', 'numerical', 'integerOnly'=>true),
			array('kd_kamar', 'length', 'max'=>5),
			array('jenis_kamar', 'length', 'max'=>50),
			array('fasilitas', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kd_kamar, jenis_kamar, tarif_permalam, fasilitas', 'safe', 'on'=>'search'),
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
                           'kamar' => array(self::BELONGS_TO,'kamar','kd_kamar')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kd_kamar' => 'Kd Kamar',
			'jenis_kamar' => 'Jenis Kamar',
			'tarif_permalam' => 'Tarif Permalam',
			'fasilitas' => 'Fasilitas',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('kd_kamar',$this->kd_kamar,true);
		$criteria->compare('jenis_kamar',$this->jenis_kamar,true);
		$criteria->compare('tarif_permalam',$this->tarif_permalam);
		$criteria->compare('fasilitas',$this->fasilitas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kamar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
