<?php
/**
 * Author: Alex Kroll
 * Created: 20.02.13 16:31
 */
abstract class PageBase
{
    protected $menuItems = array();
    protected $slides = array();
    protected $vars = array();
    protected $title = "";
    protected $body;
    //protected $pageXML;

    public function init(SimpleXMLElement $contentXML, SimpleXMLElement $pageXML)
    {
        //$this->pageXML = $pageXML;
        $this->loadMenu($contentXML, (string) $pageXML['menu']);
        $this->loadVars($contentXML, $pageXML);
        //$this->loadSlideShow($contentXML, (string) $pageXML->slideshow);
    }

    public function hasSlides()
    {
        return !empty($this->slides);
    }

    public abstract function process(Smarty $smarty);

    protected function loadVars(SimpleXMLElement $contentXML, SimpleXMLElement $pageXML)
    {
        foreach ($pageXML->children() as $varXML) {
            $name = $varXML->getName();
            $value = (string) $varXML;

            if ($name == "slideshow") {
                $this->loadSlideShow($contentXML, $value);
            }
            elseif ($name == "title") {
                $this->title = $value;
            }
            elseif ($name == "body") {
                $this->body = $value;
            }
            else {
                $this->vars[$name] = $value;
            }
        }
    }

    protected function loadMenu(SimpleXMLElement $contentXML, $menuId)
    {
        $menusXML = $contentXML->menus;

        if (empty($menuId)) {
            $menuId = $menusXML['default'];
        }
        foreach($menusXML->menu as $menuXML) {
            if ((string) $menuXML['id'] == $menuId) {

                foreach($menuXML->item as $menuItem) {
                    $this->menuItems[] = new MenuItem($menuItem);
                }

            }
        }
    }

    protected function loadSlideShow(SimpleXMLElement $contentXML, $slideShowId)
    {
        $slideShows = $contentXML->slideShows;

        if (!empty($slideShowId) && !empty($slideShows)) {

            foreach($slideShows->slideShow as $slideShow) {
                if ((string) $slideShow['id'] == $slideShowId) {

                    foreach($slideShow->slide as $slide) {
                        $this->slides[] = new Slide($slide);
                    }
                }
            }
        }
    }
}
