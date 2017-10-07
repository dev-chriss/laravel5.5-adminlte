<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{
    /**
      * Get user role name
      *
      * $return string
      */
    public static function getRolename($roleid)
    {
        return config('variables.role')[$roleid];
    }

}
