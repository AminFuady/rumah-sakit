<?php

/**
 * This is the model class for table "dokter".
 *
 * The followings are the available columns in table 'dokter':
 * @property string $kd_dokter
 * @property string $nama_dokter
 * @property string $jenis_kelamin
 * @property string $telepon
 * @property string $alamat
 * @property string $spesialis
 */
class Dokter extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dokter';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_dokter, nama_dokter, jenis_kelamin, telepon, alamat, spesialis', 'required'),
			array('kd_dokter', 'length', 'max'=>6),
			array('nama_dokter, alamat, spesialis', 'length', 'max'=>50),
			array('jenis_kelamin', 'length', 'max'=>5),
			array('telepon', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kd_dokter, nama_dokter, jenis_kelamin, telepon, alamat, spesialis', 'safe', 'on'=>'search'),
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
                        'dokters' => array(self::BELONGS_TO,'kd_dokter','nama_dokter')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kd_dokter' => 'Kd Dokter',
			'nama_dokter' => 'Nama Dokter',
			'jenis_kelamin' => 'Jenis Kelamin',
			'telepon' => 'Telepon',
			'alamat' => 'Alamat',
			'spesialis' => 'Spesialis',
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

		$criteria->compare('kd_dokter',$this->kd_dokter,true);
		$criteria->compare('nama_dokter',$this->nama_dokter,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('spesialis',$this->spesialis,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dokter the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
