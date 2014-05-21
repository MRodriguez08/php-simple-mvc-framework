<?php

namespace framework;

use framework\util\RegExpUtil;

Class Template {
    /*
     * @the registry
     * @access private
     */

    private $registry;

    /*
     * @Variables array
     * @access private
     */
    private $vars = array();

    /**
     *
     * @constructor
     *
     * @access public
     *
     * @return void
     *
     */
    function __construct($registry) {
        $this->registry = $registry;
    }

    /**
     *
     * @set undefined vars
     *
     * @param string $index
     *
     * @param mixed $value
     *
     * @return void
     *
     */
    public function __set($index, $value) {
        $this->vars[$index] = $value;
    }

    function show($view) {

        $viewsPath = join(DIRECTORY_SEPARATOR, array(__APP_PATH, "views"));
        $view = $viewsPath . DIRECTORY_SEPARATOR . join(DIRECTORY_SEPARATOR, explode(":", $view)) . ".php";
        if (file_exists($view) == false) {
            throw new \Exception("ERROR10 > View {$view} not found");
        }

        $str = file_get_contents($view);
        $masterPage = RegExpUtil::getTextBetweenTags($str, "master-page");

        if ($masterPage !== null) {
            $masterPage = join(DIRECTORY_SEPARATOR , array($viewsPath , "master" , $masterPage . ".php"));
            if (file_exists($masterPage) == false) {
                throw new \Exception("ERROR09 > Master page {$masterPage} not found");
            }
            $this->registry->template->partialView = $view;
            $view = $masterPage;
        }

        /* Load variables to render in view */
        foreach ($this->vars as $key => $value) {
            $$key = $value;
        }

        include ($view);
    }

}
