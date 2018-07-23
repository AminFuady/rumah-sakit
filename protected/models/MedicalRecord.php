<?php

/**
 * This is the model class for table "medical_record".
 *
 * The followings are the available columns in table 'medical_record':
 * @property string $nomor_urut
 * @property string $tanggal_masuk
 * @property string $keluhan
 * @property string $kd_pasien
 * @property string $alamat
 * @property integer $tarif_kamar
 * @property integer $tarif_layanan
 * @property string $kd_dokter
 * @property string $kd_layanan
 */
class MedicalRecord extends CActiveRecord
{
        
          
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'medical_record';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomor_urut, tanggal_masuk, keluhan, kd_pasien, alamat, tarif_kamar, tarif_layanan, kd_dokter, kd_layanan', 'required'),
			array('tarif_kamar, tarif_layanan', 'numerical', 'integerOnly'=>true),
			array('nomor_urut, kd_layanan', 'length', 'max'=>5),
			array('kd_pasien, kd_dokter', 'length', 'max'=>6),
			array('alamat', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nomor_urut, tanggal_masuk, keluhan, kd_pasien, alamat, tarif_kamar, tarif_layanan, kd_dokter, kd_layanan', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
	    return array(
                    'dokters' => array(self::HAS_MANY,'kd_dokter','nama_dokter'),    
                    'pasiens' => array(self::HAS_MANY,'kd_pasien','nama_pasien'),
                    'pasiens' => array(self::HAS_MANY,'kd_pasien','alamat'),    
                        
                );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nomor_urut' => 'Nomor Urut',
			'tanggal_masuk' => 'Tanggal Masuk',
			'keluhan' => 'Keluhan',
			'kd_pasien' => 'Kd Pasien',
			'alamat' => 'Alamat',
			'tarif_layanan' => 'Tarif Layanan',
                        'tarif kamar' => 'Tarif Kamar',
			'kd_dokter' => 'Kd Dokter',
			'kd_layanan' => 'Kd Layanan',
                        'kd_kamar' => 'Kd Kamar'
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

		$criteria->compare('nomor_urut',$this->nomor_urut,true);
		$criteria->compare('tanggal_masuk',$this->tanggal_masuk,true);
		$criteria->compare('keluhan',$this->keluhan,true);
		$criteria->compare('kd_pasien',$this->kd_pasien,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tarif_kamar',$this->tarif_kamar);
		$criteria->compare('tarif_layanan',$this->tarif_layanan);
		$criteria->compare('kd_dokter',$this->kd_dokter,true);
		$criteria->compare('kd_layanan',$this->kd_layanan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MedicalRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
