<?php declare(strict_types=1);

namespace MadmagesTelegram\Types\Type;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;

/**
 * https://core.telegram.org/bots/api#passportelementerrortranslationfiles
 *
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the 
 * document translation change. 
 *
 * @ExclusionPolicy("none")
 * @AccessType("public_method")
 */
class PassportElementErrorTranslationFiles extends AbstractPassportElementError
{
    /**
     * Error source, must be translation_files
     *
     * @var string
     * @SerializedName("source")
     * @Accessor(getter="getSource",setter="setsource")
     * @Type("string")
     */
    protected $source;

    /**
     * Type of element of the user&#039;s Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
     *
     * @var string
     * @SerializedName("type")
     * @Accessor(getter="getType",setter="settype")
     * @Type("string")
     */
    protected $type;

    /**
     * List of base64-encoded file hashes
     *
     * @var string[]
     * @SerializedName("file_hashes")
     * @Accessor(getter="getFileHashes",setter="setfileHashes")
     * @Type("array<string>")
     */
    protected $fileHashes;

    /**
     * Error message
     *
     * @var string
     * @SerializedName("message")
     * @Accessor(getter="getMessage",setter="setmessage")
     * @Type("string")
     */
    protected $message;


    /**
     * @param string $source
     * @return static
     */
    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

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
     * @param string[] $fileHashes
     * @return static
     */
    public function setFileHashes(array $fileHashes): self
    {
        $this->fileHashes = $fileHashes;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getFileHashes(): array
    {
        return $this->fileHashes;
    }

    /**
     * @param string $message
     * @return static
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

}