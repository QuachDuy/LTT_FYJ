<?php
class CommonHelper extends HtmlHelper
{
// Hàm tạo menu
    /**
     * @return string
     */
    function create_menu()
    {
        $menu = "<ul>";
        $menu .= "<li>" . $this->link("menu1", array(
                "controller" => "admins",
                "action" => "view",
                1)) . "</li>";
        $menu .= "<li>" . $this->link("menu2", array(
                "controller" => "admins",
                "action" => "view",
                2)) . "</li>";
        $menu .= "<li>" . $this->link("menu3", array(
                "controller" => "admins",
                "action" => "view",
                3)) . "</li>";
        $menu .= "</ul>";
        return $menu;
    }

//Hàm tạo các thành phần cho header và footer
    function general()
    {
        $data = array(
            "header" => "banner",
            "footer" => "footer",
        );
        return $data;
    }
}
?>