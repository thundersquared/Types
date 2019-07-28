<?php declare(strict_types=1);

namespace MadmagesTelegram\Types\Type;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;

/**
 * https://core.telegram.org/bots/api#webhookinfo
 *
 * Contains information about the current status of a webhook. 
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted. 
 *
 * @ExclusionPolicy("none")
 * @AccessType("public_method")
 */
class WebhookInfo extends AbstractType
{
    /**
     * Webhook URL, may be empty if webhook is not set up
     *
     * @var string
     * @SerializedName("url")
     * @Accessor(getter="getUrl",setter="seturl")
     * @Type("string")
     */
    protected $url;

    /**
     * True, if a custom certificate was provided for webhook certificate checks
     *
     * @var bool
     * @SerializedName("has_custom_certificate")
     * @Accessor(getter="getHasCustomCertificate",setter="sethasCustomCertificate")
     * @Type("bool")
     */
    protected $hasCustomCertificate;

    /**
     * Number of updates awaiting delivery
     *
     * @var int
     * @SerializedName("pending_update_count")
     * @Accessor(getter="getPendingUpdateCount",setter="setpendingUpdateCount")
     * @Type("int")
     */
    protected $pendingUpdateCount;

    /**
     * Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
     *
     * @var int|null
     * @SkipWhenEmpty
     * @SerializedName("last_error_date")
     * @Accessor(getter="getLastErrorDate",setter="setlastErrorDate")
     * @Type("int")
     */
    protected $lastErrorDate;

    /**
     * Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     *
     * @var string|null
     * @SkipWhenEmpty
     * @SerializedName("last_error_message")
     * @Accessor(getter="getLastErrorMessage",setter="setlastErrorMessage")
     * @Type("string")
     */
    protected $lastErrorMessage;

    /**
     * Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     *
     * @var int|null
     * @SkipWhenEmpty
     * @SerializedName("max_connections")
     * @Accessor(getter="getMaxConnections",setter="setmaxConnections")
     * @Type("int")
     */
    protected $maxConnections;

    /**
     * Optional. A list of update types the bot is subscribed to. Defaults to all update types
     *
     * @var string[]|null
     * @SkipWhenEmpty
     * @SerializedName("allowed_updates")
     * @Accessor(getter="getAllowedUpdates",setter="setallowedUpdates")
     * @Type("array<string>")
     */
    protected $allowedUpdates;


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
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param bool $hasCustomCertificate
     * @return static
     */
    public function setHasCustomCertificate(bool $hasCustomCertificate): self
    {
        $this->hasCustomCertificate = $hasCustomCertificate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasCustomCertificate(): bool
    {
        return $this->hasCustomCertificate;
    }

    /**
     * @param int $pendingUpdateCount
     * @return static
     */
    public function setPendingUpdateCount(int $pendingUpdateCount): self
    {
        $this->pendingUpdateCount = $pendingUpdateCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getPendingUpdateCount(): int
    {
        return $this->pendingUpdateCount;
    }

    /**
     * @param int $lastErrorDate
     * @return static
     */
    public function setLastErrorDate(int $lastErrorDate): self
    {
        $this->lastErrorDate = $lastErrorDate;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getLastErrorDate(): ?int
    {
        return $this->lastErrorDate;
    }

    /**
     * @param string $lastErrorMessage
     * @return static
     */
    public function setLastErrorMessage(string $lastErrorMessage): self
    {
        $this->lastErrorMessage = $lastErrorMessage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastErrorMessage(): ?string
    {
        return $this->lastErrorMessage;
    }

    /**
     * @param int $maxConnections
     * @return static
     */
    public function setMaxConnections(int $maxConnections): self
    {
        $this->maxConnections = $maxConnections;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxConnections(): ?int
    {
        return $this->maxConnections;
    }

    /**
     * @param string[] $allowedUpdates
     * @return static
     */
    public function setAllowedUpdates(array $allowedUpdates): self
    {
        $this->allowedUpdates = $allowedUpdates;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAllowedUpdates(): ?array
    {
        return $this->allowedUpdates;
    }

}