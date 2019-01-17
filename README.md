# File Fetcher Cache

[![Build Status](https://travis-ci.org/JeroenDeDauw/file-fetcher-cache.svg?branch=master)](https://travis-ci.org/JeroenDeDauw/file-fetcher-cache)

Provides simple caching [decorators](https://en.wikipedia.org/wiki/Decorator_pattern)
for [FileFetcher](https://github.com/JeroenDeDauw/FileFetcher) implementations.

## Usage

TODO

## Installation

To use the File Fetcher Cache library in your project, simply add a dependency on jeroen/file-fetcher-cache
to your project's `composer.json` file. Here is a minimal example of a `composer.json`
file that just defines a dependency on File Fetcher Cache 1.x:

```json
{
    "require": {
        "jeroen/file-fetcher-cache": "~1.0"
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
