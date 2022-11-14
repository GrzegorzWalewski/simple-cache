# The simplest cache You can imagine
I needed simple cache mechanism for my other project, so I made this simple as f*ck module.

# How to install

You need to run `composer require grzojda/simple-cache`

# How to use

```
<?php

declare(strict_types=1);

include __DIR__.'/../vendor/autoload.php';
use Grzojda\SimpleCache\SimpleCache;

$cache = new SimpleCache('filename.json');
// Check if element cached (return cached value if is set)
$cached = $cache->checkKey('key');

// Set new element's value
$cache->saveValue('key', 'value');
```

# To be implemented

1. Cache clearing
2. Adjust for multi-dimentional elements
3. Allow caching other types of elements/values
