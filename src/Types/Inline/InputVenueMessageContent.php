<?php
/**
 * Created by PhpStorm.
 * User: iGusev
 * Date: 14/04/16
 * Time: 15:45
 */

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

class InputVenueMessageContent extends BaseType implements TypeInterface
{
    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $requiredParams = ['latitude', 'longitude', 'title', 'address'];

    /**
     * {@inheritdoc}
     *
     * @var array
     */
    static protected $map = [
        'latitude' => true,
        'longitude' => true,
        'title' => true,
        'address' => true,
        'foursquare_id' => true
    ];

    /**
     * Latitude of the venue in degrees
     *
     * @var float
     */
    protected $latitude;

    /**
     * Longitude of the venue in degrees
     *
     * @var float
     */
    protected $longitude;

    /**
     * Name of the venue
     *
     * @var string
     */
    protected $title;

    /**
     * Address of the venue
     *
     * @var string
     */
    protected $address;

    /**
     * Optional. Foursquare identifier of the venue, if known
     *
     * @var string
     */
    protected $foursquareId;

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getFoursquareId()
    {
        return $this->foursquareId;
    }

    /**
     * @param string $foursquareId
     */
    public function setFoursquareId($foursquareId)
    {
        $this->foursquareId = $foursquareId;
    }
}
