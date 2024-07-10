<?php

namespace app\controllers;

use yii\web\Controller;
use yii\httpclient\Client;

class SiteController extends Controller{
    /**
     * {@inheritdoc}
     */
    public function actions(){
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex(){
        return $this->render('index');
    }
	
	/**
	 * Displays test 1.
	 *
	 * @return string
	 */
	public function actionTest1(){
        $client = new Client();
        $response = $client->createRequest()->setMethod('GET')->setUrl('https://jsonplaceholder.typicode.com/posts')->send();
        if ($response->isOk){
            $posts = $response->data;
            return $this->render('test1', ['posts' => $posts]);
        }
		return $this->render('test1');
	}
}
