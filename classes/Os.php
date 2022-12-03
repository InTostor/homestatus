<?php
Class OS{

    static function getOs(){
        return PHP_OS;
    }

    static function getPing($host){
        if (self::getOs()=="Linux"){
            exec("ping -c 1 -W 1 -4 $host | grep -o -E \"=.{0,6} ms\"",$out);
            $out = implode('',$out);
            if ($out==""){
                return -1;
            }else{
                return str_replace('=','',$out);
            }

        }
    }



}




?>