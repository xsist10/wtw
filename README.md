# WhatTheWhat PHP clone

[![Build Status](https://travis-ci.org/xsist10/wtw.png?branch=master)](https://travis-ci.org/xsist10/wtw)

A PHP clone of [WhatTheWhat](https://github.com/dhellmann/whatthewhat).


## Install

Via Composer

``` json
{
    "require": {
        "xsist10/wtw": "~1.0"
    }
}
```


## Usage

``` bash
$ ./wtw.phar script.php
```

Change the search engine
``` bash
$ ./wtw.phar script.php --search=StackOverflow
$ ./wtw.phar script.php --search=DuckDuckGo
```

Catch strict messages
``` bash
$ ./wtw.phar script.php -s
```

Catch warnings
``` bash
$ ./wtw.phar script.php -w
```

Catch deprecated notices
``` bash
$ ./wtw.phar script.php -d
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
