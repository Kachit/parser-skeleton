<?php
/**
 * Class SimpleXML
 * @package Kachit\Parser\Adapter
 * @author Kachit
 */
namespace Kachit\Parser\Adapter;

class SimpleXML extends AdapterAbstract
{
    /**
     * @param string $content
     * @return \SimpleXMLElement
     * @throws \Exception
     */
    public function build($content)
    {
        $xml = simplexml_load_string($content, 'SimpleXMLElement', LIBXML_NOCDATA);
        if (empty($xml)) {
            throw new \Exception('Invalid content');
        }
        return $xml;
    }
}