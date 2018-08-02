<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;

class PostController extends ActiveController
{
	public $modelClass = 'app\models\Post';

	//removendo ações da API
	// public function actions() 
	// {
		
	// 	$actions = parent::actions();

	// 	unset($actions['delete'],$actions['create']);

	// 	return $actions;
	// }
}
