<?php

/**
 * This is the model class for table "jenis_layanan".
 *
 * The followings are the available columns in table 'jenis_layanan':
 * @property string $kd_layanan
 * @property string $jenis_layanan
 * @property integer $tarif_layanan
 */
class JenisLayanan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jenis_layanan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_layanan, jenis_layanan, tarif_layanan', 'required'),
			array('tarif_layanan', 'numerical', 'integerOnly'=>true),
			array('kd_layanan', 'length', 'max'=>5),
			array('jenis_layanan', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kd_layanan, jenis_layanan, tarif_layanan', 'safe', 'on'=>'search'),
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
                            'jenis_layanan' => array(self::BELONGS_TO,'jenis_layanan','kd_layanan')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kd_layanan' => 'Kd Layanan',
			'jenis_layanan' => 'Jenis Layanan',
			'tarif_layanan' => 'Tarif Layanan',
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

		$criteria->compare('kd_layanan',$this->kd_layanan,true);
		$criteria->compare('jenis_layanan',$this->jenis_layanan,true);
		$criteria->compare('tarif_layanan',$this->tarif_layanan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JenisLayanan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
