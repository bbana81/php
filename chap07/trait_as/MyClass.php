<?php
require_once("../trait_insteadof/TaroTool.php");
require_once("../trait_insteadof/HanaTool.php");

class MyClass
{
    use TaroTool, HanaTool{
        TaroTool::hello as taroHello;
        HanaTool::hello as hanaHello;
        HanaTool::hello insteadof TaroTool;
    }
}