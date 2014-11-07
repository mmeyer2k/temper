temper
======
[![Build Status](https://travis-ci.org/dopecode/temper.png)](https://travis-ci.org/dopecode/temper)
Fast and intuitive temp file creation.

```php
# Import the Temper namespace
use Dopecode\Temper;

# Create a temp file instance
$temp = new Temper('content to store in temp file');

# Return path to temp file (outputs something like "/tmp/[random file name]")
echo $temp->path();

# Delete the temp file when you are done with it
$temp->destroy();
```

Thats all there is to it.
