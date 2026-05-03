<?php
/**
 * Author: Alex Kroll
 * Created: 20.02.13 16:38
 */
class MenuItem
{
    protected $reference;
    protected $title;

    function __construct(SimpleXMLElement $itemXML)
    {
        $this->reference = (string) $itemXML['ref'];
        $this->title = (string) $itemXML;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function getTitle()
    {
        return $this->title;
    }


}
