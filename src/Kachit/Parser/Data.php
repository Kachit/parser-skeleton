<?php
/**
 * Class Data
 * @package Kachit\Parser
 * @author Kachit
 */
namespace Kachit\Parser;

class Data implements DataInterface
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * Data constructor.
     * @param array $data
     */
    public function __construct($data = [])
    {
        $this->setData($data);
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return DataInterface
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->data);
    }
}