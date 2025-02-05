<?php declare(strict_types=1);

namespace MadmagesTelegram\Types\Type;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;

/**
 * https://core.telegram.org/bots/api#inlinekeyboardbutton
 *
 * This object represents one button of an inline keyboard. You must use exactly one of the optional 
 * fields. 
 *
 * @ExclusionPolicy("none")
 * @AccessType("public_method")
 */
class InlineKeyboardButton extends AbstractType
{

    /**
     * Returns raw names of properties of this type
     *
     * @return string[]
     */
    public static function _getPropertyNames(): array
    {
        return [
            'text',
            'url',
            'login_url',
            'callback_data',
            'switch_inline_query',
            'switch_inline_query_current_chat',
            'callback_game',
            'pay',
        ];
    }

    /**
     * Returns associative array of raw data
     *
     * @return array
     */
    public function _getData(): array
    {
        $result = [
            'text' => $this->getText(),
            'url' => $this->getUrl(),
            'login_url' => $this->getLoginUrl(),
            'callback_data' => $this->getCallbackData(),
            'switch_inline_query' => $this->getSwitchInlineQuery(),
            'switch_inline_query_current_chat' => $this->getSwitchInlineQueryCurrentChat(),
            'callback_game' => $this->getCallbackGame(),
            'pay' => $this->getPay(),
        ];

        return parent::normalizeData($result);
    }

    /**
     * Label text on the button 
     *
     * @var string
     * @SerializedName("text")
     * @Accessor(getter="getText",setter="setText")
     * @Type("string")
     */
    protected $text;

    /**
     * Optional. HTTP or tg:// url to be opened when button is pressed 
     *
     * @var string|null
     * @SkipWhenEmpty
     * @SerializedName("url")
     * @Accessor(getter="getUrl",setter="setUrl")
     * @Type("string")
     */
    protected $url;

    /**
     * Optional. An HTTP URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login 
     * Widget. 
     *
     * @var LoginUrl|null
     * @SkipWhenEmpty
     * @SerializedName("login_url")
     * @Accessor(getter="getLoginUrl",setter="setLoginUrl")
     * @Type("MadmagesTelegram\Types\Type\LoginUrl")
     */
    protected $loginUrl;

    /**
     * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes 
     *
     * @var string|null
     * @SkipWhenEmpty
     * @SerializedName("callback_data")
     * @Accessor(getter="getCallbackData",setter="setCallbackData")
     * @Type("string")
     */
    protected $callbackData;

    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the 
     * bot's username and the specified inline query in the input field. Can be empty, in which case just the bot's username will be 
     * inserted.Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a private chat with 
     * it. Especially useful when combined with switch_pm… actions – in this case the user will be automatically returned 
     * to the chat they switched from, skipping the chat selection screen. 
     *
     * @var string|null
     * @SkipWhenEmpty
     * @SerializedName("switch_inline_query")
     * @Accessor(getter="getSwitchInlineQuery",setter="setSwitchInlineQuery")
     * @Type("string")
     */
    protected $switchInlineQuery;

    /**
     * Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current 
     * chat's input field. Can be empty, in which case only the bot's username will be inserted.This offers a quick way for the user 
     * to open your bot in inline mode in the same chat – good for selecting something from multiple options. 
     *
     * @var string|null
     * @SkipWhenEmpty
     * @SerializedName("switch_inline_query_current_chat")
     * @Accessor(getter="getSwitchInlineQueryCurrentChat",setter="setSwitchInlineQueryCurrentChat")
     * @Type("string")
     */
    protected $switchInlineQueryCurrentChat;

    /**
     * Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button 
     * must always be the first button in the first row. 
     *
     * @var array|null
     * @SkipWhenEmpty
     * @SerializedName("callback_game")
     * @Accessor(getter="getCallbackGame",setter="setCallbackGame")
     * @Type("array")
     */
    protected $callbackGame;

    /**
     * Optional. Specify True, to send a Pay button.NOTE: This type of button must always be the first button in the first 
     * row. 
     *
     * @var bool|null
     * @SkipWhenEmpty
     * @SerializedName("pay")
     * @Accessor(getter="getPay",setter="setPay")
     * @Type("bool")
     */
    protected $pay;


    /**
     * @param string $text
     * @return static
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $url
     * @return static
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param LoginUrl $loginUrl
     * @return static
     */
    public function setLoginUrl(LoginUrl $loginUrl): self
    {
        $this->loginUrl = $loginUrl;

        return $this;
    }

    /**
     * @return LoginUrl|null
     */
    public function getLoginUrl(): ?LoginUrl
    {
        return $this->loginUrl;
    }

    /**
     * @param string $callbackData
     * @return static
     */
    public function setCallbackData(string $callbackData): self
    {
        $this->callbackData = $callbackData;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCallbackData(): ?string
    {
        return $this->callbackData;
    }

    /**
     * @param string $switchInlineQuery
     * @return static
     */
    public function setSwitchInlineQuery(string $switchInlineQuery): self
    {
        $this->switchInlineQuery = $switchInlineQuery;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSwitchInlineQuery(): ?string
    {
        return $this->switchInlineQuery;
    }

    /**
     * @param string $switchInlineQueryCurrentChat
     * @return static
     */
    public function setSwitchInlineQueryCurrentChat(string $switchInlineQueryCurrentChat): self
    {
        $this->switchInlineQueryCurrentChat = $switchInlineQueryCurrentChat;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSwitchInlineQueryCurrentChat(): ?string
    {
        return $this->switchInlineQueryCurrentChat;
    }

    /**
     * @param array $callbackGame
     * @return static
     */
    public function setCallbackGame(array $callbackGame): self
    {
        $this->callbackGame = $callbackGame;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getCallbackGame(): ?array
    {
        return $this->callbackGame;
    }

    /**
     * @param bool $pay
     * @return static
     */
    public function setPay(bool $pay): self
    {
        $this->pay = $pay;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPay(): ?bool
    {
        return $this->pay;
    }

}