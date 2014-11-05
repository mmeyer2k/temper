<?php

namespace Dopecode\Temper;

class Temper
{

    private $path = null;

    /**
     * Create a temp file with given content.
     * 
     * @param string      $content
     * @param string|null $path
     * @param string|null $prefix
     */
    public function __construct($content, $path = null, $prefix = null)
    {
        $this->path = tempnam($path, $prefix);
        $handle = fopen($this->path, 'w');
        fwrite($handle, $content);
        fclose($handle);
    }

    /**
     * Delete the temp file.
     * 
     * @return boolean
     */
    public function destroy()
    {
        return unlink($this->path);
    }

    /**
     * Return the file system path of the temp file.
     * 
     * @return string
     */
    public function path()
    {
        return $this->path;
    }

}
