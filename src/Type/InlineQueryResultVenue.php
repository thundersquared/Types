<?php declare(strict_types=1);

namespace MadmagesTelegram\Types\Type;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;

/**
 * https://core.telegram.org/bots/api#inlinequeryresultvenue
 *
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use 
 * input_message_content to send a message with the specified content instead of the venue. 
 *
 * @ExclusionPolicy("none")
 * @AccessType("public_method")
 */
class InlineQueryResultVenue extends AbstractInlineQueryResult
{
    /**
     * Type of the result, must be venue
     *
     * @var string
     * @SerializedName("type")
     * @Accessor(getter="getType",setter="settype")
     * @Type("string")
     */
    protected $type;

    /**
     * Unique identifier for this result, 1-64 Bytes
     *
     * @var string
     * @SerializedName("id")
     * @Accessor(getter="getId",setter="setid")
     * @Type("string")
     */
    protected $id;

    /**
     * Latitude of the venue location in degrees
     *
     * @var float
     * @SerializedName("latitude")
     * @Accessor(getter="getLatitude",setter="setlatitude")
     * @Type("float")
     */
    protected $latitude;

    /**
     * Longitude of the venue location in degrees
     *
     * @var float
     * @SerializedName("longitude")
     * @Accessor(getter="getLongitude",setter="setlongitude")
     * @Type("float")
     */
    protected $longitude;

    /**
     * Title of the venue
     *
     * @var string
     * @SerializedName("title")
     * @Accessor(getter="getTitle",setter="settitle")
     * @Type("string")
     */
    protected $title;

    /**
     * Address of the venue
     *
     * @var string
     * @SerializedName("address")
     * @Accessor(getter="getAddress",setter="setaddress")
     * @Type("string")
     */
    protected $address;

    /**
     * Optional. Foursquare identifier of the venue if known
     *
     * @var string|null
     * @SkipWhenEmpty
     * @SerializedName("foursquare_id")
     * @Accessor(getter="getFoursquareId",setter="setfoursquareId")
     * @Type("string")
     */
    protected $foursquareId;

    /**
     * Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     *
     * @var string|null
     * @SkipWhenEmpty
     * @SerializedName("foursquare_type")
     * @Accessor(getter="getFoursquareType",setter="setfoursquareType")
     * @Type("string")
     */
    protected $foursquareType;

    /**
     * Optional. Inline keyboard attached to the message
     *
     * @var InlineKeyboardMarkup|null
     * @SkipWhenEmpty
     * @SerializedName("reply_markup")
     * @Accessor(getter="getReplyMarkup",setter="setreplyMarkup")
     * @Type("MadmagesTelegram\Types\Type\InlineKeyboardMarkup")
     */
    protected $replyMarkup;

    /**
     * Optional. Content of the message to be sent instead of the venue
     *
     * @var AbstractInputMessageContent|null
     * @SkipWhenEmpty
     * @SerializedName("input_message_content")
     * @Accessor(getter="getInputMessageContent",setter="setinputMessageContent")
     * @Type("MadmagesTelegram\Types\Type\AbstractInputMessageContent")
     */
    protected $inputMessageContent;

    /**
     * Optional. Url of the thumbnail for the result
     *
     * @var string|null
     * @SkipWhenEmpty
     * @SerializedName("thumb_url")
     * @Accessor(getter="getThumbUrl",setter="setthumbUrl")
     * @Type("string")
     */
    protected $thumbUrl;

    /**
     * Optional. Thumbnail width
     *
     * @var int|null
     * @SkipWhenEmpty
     * @SerializedName("thumb_width")
     * @Accessor(getter="getThumbWidth",setter="setthumbWidth")
     * @Type("int")
     */
    protected $thumbWidth;

    /**
     * Optional. Thumbnail height
     *
     * @var int|null
     * @SkipWhenEmpty
     * @SerializedName("thumb_height")
     * @Accessor(getter="getThumbHeight",setter="setthumbHeight")
     * @Type("int")
     */
    protected $thumbHeight;


    /**
     * @param string $type
     * @return static
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $id
     * @return static
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param float $latitude
     * @return static
     */
    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $longitude
     * @return static
     */
    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param string $title
     * @return static
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $address
     * @return static
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $foursquareId
     * @return static
     */
    public function setFoursquareId(string $foursquareId): self
    {
        $this->foursquareId = $foursquareId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFoursquareId(): ?string
    {
        return $this->foursquareId;
    }

    /**
     * @param string $foursquareType
     * @return static
     */
    public function setFoursquareType(string $foursquareType): self
    {
        $this->foursquareType = $foursquareType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFoursquareType(): ?string
    {
        return $this->foursquareType;
    }

    /**
     * @param InlineKeyboardMarkup $replyMarkup
     * @return static
     */
    public function setReplyMarkup(InlineKeyboardMarkup $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }

    /**
     * @param AbstractInputMessageContent $inputMessageContent
     * @return static
     */
    public function setInputMessageContent(AbstractInputMessageContent $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    /**
     * @return AbstractInputMessageContent|null
     */
    public function getInputMessageContent(): ?AbstractInputMessageContent
    {
        return $this->inputMessageContent;
    }

    /**
     * @param string $thumbUrl
     * @return static
     */
    public function setThumbUrl(string $thumbUrl): self
    {
        $this->thumbUrl = $thumbUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getThumbUrl(): ?string
    {
        return $this->thumbUrl;
    }

    /**
     * @param int $thumbWidth
     * @return static
     */
    public function setThumbWidth(int $thumbWidth): self
    {
        $this->thumbWidth = $thumbWidth;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getThumbWidth(): ?int
    {
        return $this->thumbWidth;
    }

    /**
     * @param int $thumbHeight
     * @return static
     */
    public function setThumbHeight(int $thumbHeight): self
    {
        $this->thumbHeight = $thumbHeight;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getThumbHeight(): ?int
    {
        return $this->thumbHeight;
    }

}