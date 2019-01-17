# PHP Library Template

[![Build Status](https://travis-ci.org/JeroenDeDauw/new-php-library.svg?branch=master)](https://travis-ci.org/JeroenDeDauw/new-php-library)

Provides simple caching [decorators](https://en.wikipedia.org/wiki/Decorator_pattern)
for [FileFetcher](https://github.com/JeroenDeDauw/FileFetcher) implementations.

## Usage

TODO

## Installation

To use the UPDATE_NAME library in your project, simply add a dependency on UPDATE/NAME
to your project's `composer.json` file. Here is a minimal example of a `composer.json`
file that just defines a dependency on UPDATE_NAME 1.x:

```json
{
    "require": {
        "UPDATE/NAME": "~1.0"
    }
}
```

## Development

Start by installing the project dependencies by executing

    composer update

You can run the tests by executing

    make test
    
You can run the style checks by executing

    make cs
    
To run all CI checks, execute

    make ci
    
You can also invoke PHPUnit directly to pass it arguments, as follows

    vendor/bin/phpunit --filter SomeClassNameOrFilter