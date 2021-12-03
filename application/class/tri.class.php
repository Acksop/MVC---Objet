<?php
/**
 * Created by PhpStorm by usage of https://php.net.
 * User: Emmanuel ROY
 * Date: 05/03/2019
 * Time: 16:08
 */
class Tri{

    public static function cmp($a,$b){
        if( $a == $b ){
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }
    
}
