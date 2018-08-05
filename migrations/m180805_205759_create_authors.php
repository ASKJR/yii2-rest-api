<?php

use yii\db\Migration;

/**
 * Class m180805_205759_create_authors
 */
class m180805_205759_create_authors extends Migration
{

    public function up()
    {
        $this->createTable('authors',[
            'id' => $this->primaryKey(),
            'name' => $this->string()
        ]);
    }

    public function down()
    {
        $this->dropTable('authors');
    }
    
}
