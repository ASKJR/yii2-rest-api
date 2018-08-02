<?php

use yii\db\Migration;

/**
 * Class m180802_025419_create_posts
 */
class m180802_025419_create_posts extends Migration
{
   
    public function up()
    {
        $this->createTable('posts',[
            'id' => $this->primaryKey(),
            'author' => $this->string(),
            'title' => $this->string(),
            'body' => $this->text(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()
        ]);
    }

    public function down()
    {
       $this->dropTable('posts');
    }
    
}
