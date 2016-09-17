<?php

//include_once 'autharization.php';

class Genarator_menu {

    function generateMenu($items) {


        $html = "<nav>";
        foreach ($items as $item) {

            //   
            if (isset($_SESSION['user_id'])) {

                $s = new autharization();
                if (!isset($item['name']) || $s->auth_drow($_SESSION['user_id'], $item['name'])) {

                    $html .= "<li><a href='{$item['url']}'>{$item['text']}</a></li>";
                }
            } else {
                if (!isset($item['name'])) {

                    $html .= "<li><a href='{$item['url']}'>{$item['text']}</a></li>";
                }
            }
        }

        $html .= "</nav>";
        return $html;
    }

}

?>
