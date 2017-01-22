# How (Not) to Write Testable Code

This repository contains example code for the according talk at WordCamp Nuremberg, 2016.

## Unit Test Examples

The first part of the talk is about unit testing. After a short summary, you can see several unit test examples. This repository includes the complete and fully documented versions of the presented [PHP unit tests](php/0-unit-test-examples) as well as the respective [JavaScript unit tests](js/0-unit-test-examples).

### Running the Tests

You want to run the tests yourself? Here's how:

#### JavaScript

In order to run the JavaScript tests, you have to install the required [npm](https://www.npmjs.com/) packages first.

Using [Yarn](https://www.npmjs.com/package/yarn):

```shell
$ yarn && yarn run test
```

Using [npm](https://www.npmjs.com/package/npm):

```shell
$ npm i && npm run test
```

#### PHP

In order to run the PHP tests, you have to install the required [Composer](https://getcomposer.org/) packages first.

```shell
$ composer install && vendor/bin/phpunit
```

## Bad Practices

The second and main part of the talk then is about code examples that are either hard to test, or not testable at all. As with the unit test examples, this repository also includes the bad practice [PHP code](php/1-bad-practices/src) and [JavaScript code](js/1-bad-practices/src) examples.

Since only presenting _bad_ (i.e., hard-to-test) code doesn't do any good, this repository also includes improved versions of the code. For each of the code examples, you can find an according [pull request](https://github.com/tfrommen/testable-code/pulls). By means of the diff view, you can easily compare the original and the improved code.

Feel free to [fork this repository](https://github.com/tfrommen/testable-code/fork), and work on possible tests, if you like.

## Changelog

[Changelog](CHANGELOG.md).

## License

Copyright (c) 2016 Thorsten Frommen

This code is licensed under the [MIT License](LICENSE).
