# Helper Url 


composer.json лоакльное подключение: 
        {
                "name": "splaa/testblog",
                "minimum-stability": "dev",
                "repositories": [
                    {
                        "type": "path",
                        "url": "e:/sites/composer-packages/splx/helperurl"
                    }
                ],
                "require": {
                    "splx/helperurl": "1.0"
                }
            }

example index.php

        <?php
        require_once 'vendor/autoload.php';
        function Debug($obj){
            echo '<pre>';
            print_r($obj);
            echo '</pre>';
        }
        ?>

        <!DOTYPE html>
        <html lang='ru'>
        <head>
            <meta charset='utf-8'>
            <title>Первая страница!</title>
        </head>
        <body>


        <h1>Hello.</h1>
        <?php
            $url = new splx\helperurl\HelperURL;
            Debug($url->getCurPageURL());
        ?>
        </body>
        </html>