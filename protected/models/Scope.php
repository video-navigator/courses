<?php

/**
 * This is the model class for table "scope".
 *
 * The followings are the available columns in table 'scope':
 * @property integer $id
 * @property string $title
 */
class Scope extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'scope';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'numerical', 'integerOnly'=>true),
            array('alias', 'length', 'max'=>50),
			array('title', 'length', 'max'=>50),
            array('picture', 'length', 'max'=>100),
            array('thumb', 'length', 'max'=>100),
            array('ico', 'length', 'max'=>100),            
            array('created', 'length', 'max'=>20),
            array('updated', 'length', 'max'=>20),
            array('active', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, alias, created, updated, active, picture, thumb, ico', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
            'alias' => 'Alias',
            'created' => 'Created',
            'updated' => 'Updated',
            'active' => 'Active',
            'picture' => 'Picture',
            'thumb' => 'Thumb',
            'ico' => 'Ico',            
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
		$criteria->compare('title',$this->title,true);
        $criteria->compare('alias',$this->alias,true);
        $criteria->compare('created',$this->created,true);
        $criteria->compare('updated',$this->updated,true);
        $criteria->compare('active',$this->active,true);
        $criteria->compare('picture',$this->title,true);
        $criteria->compare('thumb',$this->title,true);
        $criteria->compare('ico',$this->title,true);        
        
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Scope the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    

    protected function beforeSave()
    {
        if (empty($this->created)){
          $this->created = date('Y-m-d H:i:s');
        }
        $this->updated = date('Y-m-d H:i:s');
        
        return parent::beforeSave();
    }
    
    public static function getForDropDown(){
        $allModels = Scope::model()->findAll();
        
        $items = array();
        foreach ($allModels as $model){
            $items[$model->id] = $model->title;
        }
        reset($items);
        return $items;
    }


}
