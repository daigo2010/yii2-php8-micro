<?php
    return [
        'id' => 'micro-app',
        'basePath' => dirname(__DIR__),
        // この名前空間からアプリケーションは全てのコントローラを探します
        'controllerNamespace' => 'micro\controllers',
        // 'micro' 名前空間からのクラスのオートロードを可能にするためにエイリアスを設定します
        'aliases' => [
            '@micro' => dirname(__DIR__),
        ],
    ];
