<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;

class AuthorController extends ActiveController
{
	public $modelClass = 'app\models\Author';

	//removendo ações da API
	// public function actions() 
	// {
		
	// 	$actions = parent::actions();

	// 	unset($actions['delete'],$actions['create']);

	// 	return $actions;
	// }
}
