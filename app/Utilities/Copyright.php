<?php

namespace App\Utilities;

class Copyright
{

    public static function displayNotice()
    {

        $date = date('Y') > 2015 ? date ('Y') : 2015;


        return $date . ' Sample Project All rights Reserved.';


    }

}