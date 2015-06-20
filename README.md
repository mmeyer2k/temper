temper
======
[![Build Status](https://travis-ci.org/mmeyer2k/temper.png)](https://travis-ci.org/mmeyer2k/temper)

Fast and intuitive temp file creation.

```php
# Create a temp file instance
$temp = new \Temper\Temper('content to store in temp file');

# Return path to temp file (outputs something like "/tmp/[random file name]")
echo $temp->path();

# Return the temp file size in bytes
$size = $temp->size();

# Delete the temp file when you are done with it
$temp->destroy();
```

Thats all there is to it.
