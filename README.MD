Packaged Cilex, a clean version of Cilex with isolated code
===========================================================

[Cilex][1] is a simple command line application framework to develop simple tools based on [Symfony2][1] components. However, creating an application with Cilex requires to add your source code at the same level as the package source code, which is not really desirable when dealing with code updates. This version is embedding Cilex as a dependency in order to fully isolate your own code.

## Installation

1. Download composer: `curl -s https://getcomposer.org/installer | php`
2. Create a new project based on this one `composer.phar create-project pingu1/packaged-cilex test`

## Usage

- Put your code in the `src/command/` folder
- Add additional directories as needed (`src/model/`, `src/helper/`, `src/library/` ...)
- Add your scripts to the `cilex` entry point
```php
$app->command(new \app\command\YourNamespaceHere());
```
- Run the script
```sh
./cilex hello
./cilex hello -h
./cilex hello renaud
./cilex hello renaud -y
./cilex hello renaud --yell
```

## Help and docs
This repository is just a wrapper of the Cilex project, for additional question regarding how to use Cilex, please check the [Cilex project][1]

[1]: https://github.com/Cilex/Cilex
[2]: http://symfony.com
