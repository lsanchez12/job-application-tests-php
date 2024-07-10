<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'ooptimo';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1>ooptimo tests</h1>
	            <p>Resuelve los siguientes ejercicios y mandanos un enlace a tu repositorio o un zip con el proyecto a <a href="mailto:asunyer@ooptimo.com">asunyer@ooptimo.com</a>.</p>
	            
	            <ul>
		            <li><a href="<?=Url::to(['site/test1'])?>">Test 1 — Consumir API</a></li>
	            </ul>

	            <p>Si tienes cualquier duda o problema puedes enviar un email con tus preguntas a <a href="mailto:asunyer@ooptimo.com">asunyer@ooptimo.com</a> e intentaremos ayudarte lo antes posible.</p>
            </div>
        </div>
    </div>
</div>
