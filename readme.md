##BlockCSRF

*block web site from csrf attack*

###Install
> via composer

```
{
	"require": {
		"block/block-csrf": "dev-master"
	}
}
```

###How

- create instance

$blockCSRF = Block\BlockCSRF::instance();

- generate token

$blockCSRF->generate();

- check token

//@return true OR false

$blockCSRF->check($token);

###TODO

Test

###License

GPLv3

