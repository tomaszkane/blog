<?php

declare(strict_types=1);

namespace Yii\Blog\UseCase\Seo;

use Yii;
use yii\base\Model;
use Yii\Blog\Framework\Validator\EscapeValidator;

final class SeoForm extends Model
{
    public string|null $h1 = '';
    public string|null $title = '';
    public string|null $keywords = '';
    public string|null $description = '';

    public function rules(): array
    {
        return [
            [['h1', 'title', 'keywords', 'description'], 'trim'],
            [['h1', 'title', 'keywords', 'description'], 'string', 'max' => 255],
            [['h1', 'title', 'keywords', 'description'], EscapeValidator::class],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'h1' => Yii::t('yii.blog', 'Seo H1'),
            'title' => Yii::t('yii.blog', 'Seo Title'),
            'keywords' => Yii::t('yii.blog', 'Seo Keywords'),
            'description' => Yii::t('yii.blog', 'Seo Description'),
        ];
    }
}
