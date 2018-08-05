<?php

use yii\db\Migration;

/**
 * Class m180805_215927_alter_table_posts_change_author_column_type
 */
class m180805_215927_alter_table_posts_change_author_column_type extends Migration
{
    public function up()
    {
        $this->alterColumn('posts','author','integer');
    }

    public function down()
    {
         $this->alterColumn('posts','author','string'); 
    }
}
