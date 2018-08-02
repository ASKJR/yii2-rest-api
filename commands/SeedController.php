<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use app\models\Post;
/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SeedController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex($message = 'hello world')
    {
        $faker = \Faker\Factory::create();

       

        for ( $i = 1; $i <= 100; $i++ ) {
            $post = new Post();
            $post->setIsNewRecord(true);
            $post->author = $faker->name;
            $post->title = $faker->sentence(6,true);
            $post->body = $faker->realText(500);
            $post->save();
        }
    }
}
