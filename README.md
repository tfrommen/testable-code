# How (Not) to Write Testable Code

This repository contains example code for the according talk at WordCamp Nuremberg, 2016.

## Unit Test Examples

The first part of the talk is about unit testing. After a short summary, you can see several unit test examples. This repository includes the complete and fully documented versions of the presented [PHP unit tests](php/0-unit-test-examples) as well as the respective [JavaScript unit tests](js/0-unit-test-examples).

### Requirements

The PHP unit tests require PHP 5.4+, and [PHPUnit](https://phpunit.de/), [Mockery](https://github.com/padraic/mockery), [Brain Monkey](https://github.com/Brain-WP/BrainMonkey) and [WP_Mock](https://github.com/10up/wp_mock). If you have [Composer](https://getcomposer.org/) installed, just execute `$ composer install`, and you're good to go.

The JavaScript unit tests require [tape](https://github.com/substack/tape) and [Sinon.JS](http://sinonjs.org/). With [npm](https://www.npmjs.com/) installed, `$ npm install` gets you started already.

## Bad Practices

The second and main part of the talk then is about code examples that are either hard to test, or not testable at all. As with the unit test examples, this repository also includes the bad practice [PHP code](php/1-bad-practices/src) and [JavaScript code](js/1-bad-practices/src) examples.

Since only presenting _bad_ (i.e., hard-to-test) code doesn't do any good, this repository also includes improved versions of the code. For each of the code examples, you can find an according [pull request](pulls). By means of the diff view, you can easily compare the original and the improved code.

Feel free to [fork the repository](fork), and work on possible tests, if you like.

## Changelog

[Changelog](CHANGELOG.md).
