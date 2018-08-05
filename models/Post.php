<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $author
 * @property string $title
 * @property string $body
 * @property string $created_at
 * @property string $updated_at
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['author', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'title' => 'Title',
            'body' => 'Body',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getWriter()
    {
        return $this->hasOne(Author::className(), ['id' => 'author']);
    }

    public function fields() 
    {
        return [
            'id',
            'author' => function(Post $model) {
                return $model->writer->name;
            },
            'title',
            'body',
            'created_at' => function(Post $model) {
                $dtime = new \DateTime($model->created_at);
                return $dtime->format('d/m/Y H:i');
            }
        ];
    }
}
