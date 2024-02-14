# Транслит сервис

translit-composer-package предназначен для транслитерации русских букв в латинские и наоборот.

## Требования

PHP >= 7.4

## Установка

```sh
composer require victoria-babikova/translit-composer-package
```
## Использование

```php
<?php

$translit_service = new TranslitService();

echo $translit_service->translit_to_en('привет мир'); // privet-mir

echo $translit_service->translit_to_ru('privet-mir'); // привет, мир
```