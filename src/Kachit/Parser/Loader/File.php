<?php
/**
 * Class Http
 * @package Kachit\Parser\Loader
 * @author Kachit
 */
namespace Kachit\Parser\Loader;

use Kachit\Parser\LoaderAbstract;

class File extends LoaderAbstract
{
    /**
     * @param string $path
     * @param array $params
     * @return string
     */
    public function load($path, array $params = [])
    {
        return file_get_contents($path);
    }
}