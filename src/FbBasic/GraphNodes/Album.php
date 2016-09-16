<?php
/**
 * Created by IntelliJ IDEA.
 * User: Besitzer
 * Date: 12.09.2016
 * Time: 08:00
 */

namespace FbBasic\GraphNodes;

use Facebook\GraphNodes\GraphAlbum;

class Album extends GraphAlbum implements GraphInterface
{
    protected static $graphObjectFields = array(
        "id",
        "name",
        "description",
        "cover_photo",
        "event",
        "location",
        "type",
        "place",
        "count",
        "photo_count",
        "video_count"
    );

    /**
     * @var array Maps object key names to Graph object types.
     */
    protected static $graphObjectMap = [
        'from' => '\Facebook\GraphNodes\GraphUser',
        'place' => '\Facebook\GraphNodes\GraphPage',
        'picture' => '\FbBasic\GraphNodes\Picture',
        'photos' => '\FbBasic\GraphNodes\Photo',
        //'cover_photo' => '\FbBasic\GraphNodes\Photo',
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