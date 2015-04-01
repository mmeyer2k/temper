temper
======
[![Build Status](https://travis-ci.org/mmeyer2k/temper.png)](https://travis-ci.org/mmeyer2k/temper)
Fast and intuitive temp file creation.

```php
# Import the Temper namespace
use Dopecode\Temper;

# Create a temp file instance
$temp = new Temper('content to store in temp file');

# Return path to temp file (outputs something like "/tmp/[random file name]")
echo $temp->path();

# Return the temp file size in bytes
$size = $temp->size();

# Delete the temp file when you are done with it (optional)
$temp->destroy();
```

Thats all there is to it. Any temp files that were not removed manually will be unlinked on script shutdown.
