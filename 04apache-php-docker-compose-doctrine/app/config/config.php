<?php
use App\Services\Doctrine;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return [
    Doctrine::class => \DI\create(Doctrine::class)
        ->constructor(\DI\get('db.connectionOptions')),
    Environment::class => function () {
        $loader = new FilesystemLoader(__DIR__ . "/../src/Views");
        $twig = new Environment($loader, [
            "debug" => true
        ]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());
        return $twig;
    },
    'db.connectionOptions' => [
        "driver"        =>      getenv("DB_DRIVER"),
        "host"          =>      getenv("DB_HOST"),
        "user"          =>      getenv("DB_USER"),
        "password"      =>      getenv("DB_PASSWORD"),
        "port"          =>      getenv("DB_PORT"),
        "dbname"        =>      getenv("DB_NAME")
    ]
];
