##BlockCSRF

*protect your web site from csrf attack*

###Install
> via composer

```
{
	"require": {
		"block/block-csrf": "0.1.*"
	}
}
```

###How

```php
// create instance
$blockCSRF = \Block\BlockCSRF::getInstance();

// generate token
$blockCSRF->generate();

// check token
/*
 * @return true OR false
 */
$blockCSRF->check($token);

```

###Test



###License

GPLv3

