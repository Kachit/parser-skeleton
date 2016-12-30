<?php
/**
 * Class ParserAbstract
 * @package Kachit\Parser
 * @author Kachit
 */
namespace Kachit\Parser;

use Kachit\Parser\Adapter\AdapterInterface;

abstract class ParserAbstract implements ParserInterface
{
    /**
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * @var DataInterface
     */
    protected $result;

    /**
     * ParserAbstract constructor.
     */
    public function __construct()
    {
        $this->adapter = $this->getAdapter();
        $this->result = new Data();
    }

    /**
     * @param string $content
     * @return DataInterface
     */
    public function parse($content)
    {
        $content = $this->adapter->parse($content);
        $content = $this->parseContent($content);
        return $this->result->setData($content);
    }


    /**
     * @return AdapterInterface
     */
    abstract protected function getAdapter();

    /**
     * @param mixed $content
     * @return mixed
     */
    abstract protected function parseContent($content);
}