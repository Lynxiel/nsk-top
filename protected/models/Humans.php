<?php

/**
 * This is the model class for table "humans".
 *
 * The followings are the available columns in table 'humans':
 * @property integer $user_id
 * @property string $fio
 * @property integer $gender
 * @property string $birthdate
 * @property string $nick
 * @property string $slug
 * @property string $about
 * @property integer $comment_count
 * @property integer $attachment_id
 *
 * The followings are the available model relations:
 * @property Comments[] $comments
 * @property Users $user
 * @property Attacments $attachment
 */
class Humans extends Users
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'humans';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, fio, gender, birthdate, nick, slug, about, comment_count, attachment_id', 'required'),
			array('user_id, gender, comment_count, attachment_id', 'numerical', 'integerOnly'=>true),
			array('fio', 'length', 'max'=>255),
			array('nick, slug', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, fio, gender, birthdate, nick, slug, about, comment_count, attachment_id', 'safe', 'on'=>'search'),
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
			'comments' => array(self::HAS_MANY, 'Comments', 'human_id'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
			'attachment' => array(self::BELONGS_TO, 'Attacments', 'attachment_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'fio' => 'Fio',
			'gender' => 'Gender',
			'birthdate' => 'Birthdate',
			'nick' => 'Nick',
			'slug' => 'Slug',
			'about' => 'About',
			'comment_count' => 'Comment Count',
			'attachment_id' => 'Attachment',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('fio',$this->fio,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('nick',$this->nick,true);
		$criteria->compare('slug',$this->slug,true);
		$criteria->compare('about',$this->about,true);
		$criteria->compare('comment_count',$this->comment_count);
		$criteria->compare('attachment_id',$this->attachment_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Humans the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
