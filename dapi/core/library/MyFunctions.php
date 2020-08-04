<?php

use \Phalcon\Mvc\User\Component,
    \Phalcon\Mvc\View;

class MyFunctions extends Component{


    /*
     * sends email after register
     * 
     * @param string $to
     * @param string $subject
     * @param string $message
     *
     */
    
    public function getUniqueNumbersFromString($str){
        $str=@explode(",",$str);
        sort($str);
        $str=@implode(",",array_unique(array_filter($str)));
        return $str;
    }
    public function getUniqueCacheKeyId($fun,$params)
    {
            $CacheKeyId=$fun;
            foreach($params as $p)
            {
                $p=str_replace(" ","_",$p);
                $p=str_replace(",","_",$p);
                $p=str_replace("-","_",$p);
                $p=str_replace('"',"DQ",$p);
                $p=str_replace("'","SQ",$p);
                $p=str_replace("-","HYP",$p);
                $CacheKeyId.="_".$p;

            }
            return $CacheKeyId;
    }
}
