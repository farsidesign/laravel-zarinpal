# laravel-zarinpal
Zarinpal Transaction Library for Laravel

##installation

```php
"require": {
    ...
    "farsidesign/laravel-zarinpal" : "dev-master",
    ...
},
```

Add provider to providers list in "config/app.php":

```php
'providers' => [
    ...
    Farsidesign\Laravel\ZarinpalServiceProvider::class,
    ...
]
```

##usage

##request

```php
use Farsidesign\Zarinpal;

$zarinpal = new Zarinpal('XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX');

$result = $zarinpal->request("http://example.com/verify.php", 1000, 'Description');

if(isset($result['Authority'])) {
    return $zarinpal->redirect($result['Authority']);
}
```

##verify
```php
use Farsidesign\Zarinpal;

$zarinpal = new Zarinpal('XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX');

return $zarinpal->verify(Status, 1000, Authority);
//'Status'(index) going to be 'success', 'error' or 'canceled'
```
