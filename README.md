# WhatTheWhat PHP clone

[![Build Status](https://travis-ci.org/xsist10/wtw.png?branch=master)](https://travis-ci.org/xsist10/wtw)

A PHP clone of [WhatTheWhat](https://github.com/dhellmann/whatthewhat).


# Flavours

## Inline

This script loads the WhatTheWhat checker inline with your code so you can set levels on what kind of errors you're looking for.
This can cause problems with code conflicts or autoloading issues.

## Dump

This script takes the standard error of the script and checks that. No chance of code conflicts but does not have the refined control of the inline version.

# Getting Started

## Install

Via Composer

``` json
{
    "require": {
        "xsist10/wtw": "~1.0"
    }
}
```

Direct Download

``` bash
wget https://github.com/xsist10/wtw/raw/master/wtw.phar
wget https://github.com/xsist10/wtw/raw/master/wtw-inline.phar
```

## Usage

``` bash
$ ./wtw.phar script.php
$ ./wtw-inline.phar script.php
```

Change the search engine
``` bash
$ ./wtw.phar script.php --search=StackOverflow
$ ./wtw.phar script.php --search=DuckDuckGo

$ ./wtw-inline.phar script.php --search=StackOverflow
$ ./wtw-inline.phar script.php --search=DuckDuckGo
```

Catch strict messages
``` bash
$ ./wtw-inline.phar script.php -s
```

Catch warnings
``` bash
$ ./wtw-inline.phar script.php -w
```

Catch deprecated notices
``` bash
$ ./wtw-inline.phar script.php -d
```


## Testing

``` bash
$ phpunit
```


## Contributing

Please see [CONTRIBUTING](https://github.com/xsist10/wtw/blob/master/CONTRIBUTING.md) for details.


## Credits

- [Thomas Shone](https://github.com/xsist10)


## License

The MIT License (MIT). Please see [License File](https://github.com/xsist10/wtw/blob/master/LICENSE) for more information.
