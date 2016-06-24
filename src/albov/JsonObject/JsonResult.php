<?php
/**
 * Created by PhpStorm.
 * User: albo-vieira
 * Date: 23/06/16
 * Time: 21:59
 */

namespace albov\JsonObject;



class JsonResult extends Json
{

    const STATUS_DEFAULT = '';
    const STATUS_SUCCESS = 'success';
    const STATUS_WARNING = 'warning';
    const STATUS_ERROR = 'error';
    const STATUS_INFO = 'info';

    public function __construct()
    {
        parent::__construct([
            'status',
            'message',
            'url',
            'data',
            'error'
        ]);
    }

}