<?php
/**
 * Created by PhpStorm.
 * User: albo-vieira
 * Date: 23/06/16
 * Time: 21:59
 */

namespace albov\JsonObject\Contract;


interface JsonContract
{

    /**
     * Create a new Json object empty
     *
     * Eg: create($param1,$param2,$param3)
     *
     * @return $this
     */
    public function create();

    /**
     * Create a Json Object from  an array with data
     *
     * @param array $data
     * @return $this
     */
    public function createFromArray(array $data);

    /** Retrieves a json from object
     *
     * @return string
     */
    public function render();

    /** Retrieves an array from object
     *
     * @return array
     */
    public function toArray();

}