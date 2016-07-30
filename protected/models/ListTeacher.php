<?php

/**
 * This is the model class for table "list_teacher".
 *
 * The followings are the available columns in table 'list_teacher':
 * @property integer $id
 * @property string $name
 * @property integer $nation
 * @property string $image
 * @property string $birthday
 * @property integer $pefessional_gruop
 * @property integer $subject
 */
class ListTeacher extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'list_teacher';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, nation, image, birthday, pefessional_gruop, subject', 'required'),
			array('nation, pefessional_gruop, subject', 'numerical', 'integerOnly'=>true),
			array('name, image', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, nation, image, birthday, pefessional_gruop, subject', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'nation' => 'Nation',
			'image' => 'Image',
			'birthday' => 'Birthday',
			'pefessional_gruop' => 'Pefessional Gruop',
			'subject' => 'Subject',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('nation',$this->nation);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('pefessional_gruop',$this->pefessional_gruop);
		$criteria->compare('subject',$this->subject);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ListTeacher the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
