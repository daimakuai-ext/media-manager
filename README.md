daimakuai-ext/media-manager
===============================

Media manager for `local` disk.
[![StyleCI](https://styleci.io/repos/111429511/shield?branch=master)](https://styleci.io/repos/111429511)

## Screenshot

![wx20170809-170104](https://user-images.githubusercontent.com/1479100/29113762-99886c32-7d24-11e7-922d-5981a5849c7a.png)

## Installation

```
$ composer require daimakuai-ext/media-manager -vvv

$ php artisan admin:import media-manager
```

Add a disk config in `config/admin.php`:

```php

    'extensions' => [

        'media-manager' => [
            'disk' => 'public'
        ],
    ],

```


Open `http://localhost/admin/media`.

License
------------
Licensed under [The MIT License (MIT)](LICENSE).
