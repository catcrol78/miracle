<?php
/**
 * Author: Alex Kroll
 * Created: 15.03.13 17:58
 */
class Slide
{
    protected $image;
    protected $description;

    function __construct(SimpleXMLElement $slideXML)
    {
        $this->image = (string) $slideXML["image"];
        $this->description = (string) $slideXML;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImage()
    {
        return $this->image;
    }


}
