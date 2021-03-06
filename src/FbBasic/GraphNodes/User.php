<?php
/**
 * Created by IntelliJ IDEA.
 * User: Besitzer
 * Date: 12.09.2016
 * Time: 08:00
 */

namespace FbBasic\GraphNodes;

use Facebook\GraphNodes\GraphUser;

class User extends GraphUser implements GraphInterface
{
    protected static $graphObjectFields = [
        "id",
        "picture",
        "name"
    ];

    /**
     * @var array Maps object key names to Graph object types.
     */
    protected static $graphObjectMap = [
        'picture' => '\FbBasic\GraphNodes\Picture',
    ];

    /**
     * @var array Maps object key names to Graph object types.
     */
    protected static $graphObjectEdgesMap = [
    ];

    /**
     * Getter for $graphObjectFields.
     *
     * @return array
     */
    public static function getObjectFields()
    {
        return static::$graphObjectFields;
    }
    /**
     * Getter for $graphObjectEdgesMap.
     *
     * @return array
     */
    public static function getObjectEdges()
    {
        return static::$graphObjectEdgesMap;
    }

}