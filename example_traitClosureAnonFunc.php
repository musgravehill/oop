<?php

trait Helper {

    abstract protected function getHelperPath();

    public function __call($method, $args) {
        $helperPath = $this->getHelperPath();

        $helperFullPath = realpath($helperPath . '/' . ucfirst($method) . '.php');
        if ($helperFullPath) {
            $helperInclude = include $helperFullPath;
            if ($helperInclude instanceof \Closure) {
                return call_user_func_array($helperInclude, $args);
            } else {
                throw new Exception("Helper '$method' not found in file '$helperPath'");
            }
        }
        throw new Exception("Helper '$method' not found for '" . __CLASS__ . "'");
    }

}

class View {

    use Helper;

    protected function getHelperPath() {
        return dirname(__FILE__) . '/Helper/';
    }

}

// file View/Helper/Ahref.php
return
        function ($text, $href, array $attributes = []) {
            /** @var View $this */
            $attrs = [];

            foreach ($attributes as $attr => $value) {
                $attrs[] = $attr . '="' . $value . '"';
            }

            return '<a href="' . $href . '" ' . join(' ', $attrs) . '>' . __($text) . '</a>';
        };



/////////////////////

$view = new View();
$link = $view->ahref("Homepage", "/", ["class" => "default"]);
echo $link; // <a href="/" class="default">Homepage</a>


        