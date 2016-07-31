<?php

/**
 * This is the model class for table "list_class".
 *
 * The followings are the available columns in table 'list_class':
 * @property integer $id
 * @property string $name
 * @property integer $id_homeroom_teacher
 * @property integer $id_year
 * @property integer $id_gruop
 */
class ListClass extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'list_class';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, id_homeroom_teacher, id_year, id_gruop', 'required'),
			array('id_homeroom_teacher, id_year, id_gruop', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>5000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, id_homeroom_teacher, id_year, id_gruop', 'safe', 'on'=>'search'),
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
		    'list_teacher'=>array(
		        self::BELONGS_TO,
		        'ListTeacher',
                'id_class'
            ),
            'list_gruop_class'=>array(
                self::BELONGS_TO,
                'ListGruopClass',
                'id_gruop'
            ),
            'year'=>array(
                self::BELONGS_TO,
                'Year',
                'id_year'
            )
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Số thứ tự',
			'name' => 'Tên lớp',
			'id_homeroom_teacher' => 'Giáo viên chủ nghiệm',
			'id_year' => 'Khóa học',
			'id_gruop' => 'Khối',
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
		$criteria->compare('id_homeroom_teacher',$this->id_homeroom_teacher);
		$criteria->compare('id_year',$this->id_year);
		$criteria->compare('id_gruop',$this->id_gruop);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ListClass the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function getHomeroomTeacher()
    {
        $teacher=ListTeacher::model()->findByPk($this->id_homeroom_teacher);
        if(isset($teacher))
        {
            return $teacher->name;
        }
        else
            return 'Unknown';
    }
    public function getYear()
    {
        $year=Year::model()->findByPk($this->id_year);
        if(isset($year))
        {
            return $year->name;
        }
        else
            return 'Unknown';
    }
    public function getGroupClass()
    {
        $gruop=ListGruopClass::model()->findByPk($this->id_gruop);
        if(isset($gruop))
        {
            return $gruop->name;
        }
        else
            return 'Unknown';
    }
    public function testStatusYear()
    {
        $year=ListGruopClass::model()->findByPk($this->id_gruop);
        if(isset($year))
        {
            if($year->status==1)
            {
                return true;
            }
            else
                return false;
        }
    }
}
