<?php
/**
 * Author: Alex Kroll
 * Created: 20.02.13 14:09
 */
class StandardPage extends PageBase
{
    public function process(Smarty $smarty)
    {
        $smarty->assign('title', (string) $this->title);
        $smarty->assign('mainMenu', $this->menuItems);
        $smarty->assign('slides', $this->slides);
        $smarty->assign($this->vars);

        $body = '';
        if (!empty($this->body)) {
            $body = file_get_contents(DATA_DIR . 'pages/' . (string) $this->body);
        }
        $smarty->assign('body', $body);

        $smarty->display('standard/page.tpl');
    }
}
