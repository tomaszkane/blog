<?php

declare(strict_types=1);

use PHPForge\Html\A;
use PHPForge\Html\P;
use PHPForge\Html\Div;
use yii\web\View;
use Yii2\Asset\BootstrapPluginAsset;

/**
 * @var ActiveForm $form
 * @var SeoForm $formModel
 * @var int $tabInput
 * @var View $this
 */
BootstrapPluginAsset::register($this);
?>
<?=
    P::widget()
        ->class('mt-3')
        ->content(
            A::widget()
                ->ariaControls('seo-form')
                ->ariaExpanded('false')
                ->attributes(['data-bs-toggle' => 'collapse'])
                ->content(Yii::t('yii.blog', 'Seo texts'))
                ->dataAttributes(['bs-toggle' => 'collapse'])
                ->href('#seo-form')
                ->role('button')
                ->render(),
        )
?>
<?= Div::widget()->class('collapse')->id('seo-form')->begin() ?>
    <?= $form->field($formModel, 'h1')->textInput(['tabindex' => $tabInput++]) ?>
    <?= $form->field($formModel, 'title')->textInput(['tabindex' => $tabInput++]) ?>
    <?= $form->field($formModel, 'keywords')->textInput(['tabindex' => $tabInput++]) ?>
    <?= $form->field($formModel, 'description')->textArea(['style' => 'height: 120px', 'tabindex' => $tabInput++]) ?>
<?= Div::end();
