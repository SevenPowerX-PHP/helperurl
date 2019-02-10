<?php

    namespace splx\helperurl;

    class HelperURL
    {
        /**
         * @return mixed
         */

         public function getCurPageURL()
         {
             $pageURL = 'http';
             if(isset($_SERVER['HTTPS'])){
                 if($_SERVER['HTTPS'] == 'on'){$pageURL .= "s";}
             }
             $pageURL .= '://';
             if ($_SERVER['SERVER_PORT'] != '80') {
                 $pageURL .= $_SERVER['SERVER_NAME'].':' 
                 . $_SERVER['SERVER_PORT'] 
                 . $_SERVER['SCRIPT_FILENAME'] 
                 . $_SERVER['DOCUMENT_ROOT'];
             }else{
	             $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI'] . ':' . $_SERVER['SERVER_PORT'];
             }
             return $pageURL;
         }

    }
?>