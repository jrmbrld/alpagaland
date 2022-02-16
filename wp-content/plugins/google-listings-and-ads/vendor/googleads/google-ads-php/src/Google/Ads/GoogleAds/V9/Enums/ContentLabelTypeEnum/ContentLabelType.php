<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/content_label_type.proto

namespace Google\Ads\GoogleAds\V9\Enums\ContentLabelTypeEnum;

use UnexpectedValueException;

/**
 * Enum listing the content label types supported by ContentLabel criterion.
 *
 * Protobuf type <code>google.ads.googleads.v9.enums.ContentLabelTypeEnum.ContentLabelType</code>
 */
class ContentLabelType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Sexually suggestive content.
     *
     * Generated from protobuf enum <code>SEXUALLY_SUGGESTIVE = 2;</code>
     */
    const SEXUALLY_SUGGESTIVE = 2;
    /**
     * Below the fold placement.
     *
     * Generated from protobuf enum <code>BELOW_THE_FOLD = 3;</code>
     */
    const BELOW_THE_FOLD = 3;
    /**
     * Parked domain.
     *
     * Generated from protobuf enum <code>PARKED_DOMAIN = 4;</code>
     */
    const PARKED_DOMAIN = 4;
    /**
     * Juvenile, gross & bizarre content.
     *
     * Generated from protobuf enum <code>JUVENILE = 6;</code>
     */
    const JUVENILE = 6;
    /**
     * Profanity & rough language.
     *
     * Generated from protobuf enum <code>PROFANITY = 7;</code>
     */
    const PROFANITY = 7;
    /**
     * Death & tragedy.
     *
     * Generated from protobuf enum <code>TRAGEDY = 8;</code>
     */
    const TRAGEDY = 8;
    /**
     * Video.
     *
     * Generated from protobuf enum <code>VIDEO = 9;</code>
     */
    const VIDEO = 9;
    /**
     * Content rating: G.
     *
     * Generated from protobuf enum <code>VIDEO_RATING_DV_G = 10;</code>
     */
    const VIDEO_RATING_DV_G = 10;
    /**
     * Content rating: PG.
     *
     * Generated from protobuf enum <code>VIDEO_RATING_DV_PG = 11;</code>
     */
    const VIDEO_RATING_DV_PG = 11;
    /**
     * Content rating: T.
     *
     * Generated from protobuf enum <code>VIDEO_RATING_DV_T = 12;</code>
     */
    const VIDEO_RATING_DV_T = 12;
    /**
     * Content rating: MA.
     *
     * Generated from protobuf enum <code>VIDEO_RATING_DV_MA = 13;</code>
     */
    const VIDEO_RATING_DV_MA = 13;
    /**
     * Content rating: not yet rated.
     *
     * Generated from protobuf enum <code>VIDEO_NOT_YET_RATED = 14;</code>
     */
    const VIDEO_NOT_YET_RATED = 14;
    /**
     * Embedded video.
     *
     * Generated from protobuf enum <code>EMBEDDED_VIDEO = 15;</code>
     */
    const EMBEDDED_VIDEO = 15;
    /**
     * Live streaming video.
     *
     * Generated from protobuf enum <code>LIVE_STREAMING_VIDEO = 16;</code>
     */
    const LIVE_STREAMING_VIDEO = 16;
    /**
     * Sensitive social issues.
     *
     * Generated from protobuf enum <code>SOCIAL_ISSUES = 17;</code>
     */
    const SOCIAL_ISSUES = 17;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::SEXUALLY_SUGGESTIVE => 'SEXUALLY_SUGGESTIVE',
        self::BELOW_THE_FOLD => 'BELOW_THE_FOLD',
        self::PARKED_DOMAIN => 'PARKED_DOMAIN',
        self::JUVENILE => 'JUVENILE',
        self::PROFANITY => 'PROFANITY',
        self::TRAGEDY => 'TRAGEDY',
        self::VIDEO => 'VIDEO',
        self::VIDEO_RATING_DV_G => 'VIDEO_RATING_DV_G',
        self::VIDEO_RATING_DV_PG => 'VIDEO_RATING_DV_PG',
        self::VIDEO_RATING_DV_T => 'VIDEO_RATING_DV_T',
        self::VIDEO_RATING_DV_MA => 'VIDEO_RATING_DV_MA',
        self::VIDEO_NOT_YET_RATED => 'VIDEO_NOT_YET_RATED',
        self::EMBEDDED_VIDEO => 'EMBEDDED_VIDEO',
        self::LIVE_STREAMING_VIDEO => 'LIVE_STREAMING_VIDEO',
        self::SOCIAL_ISSUES => 'SOCIAL_ISSUES',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ContentLabelType::class, \Google\Ads\GoogleAds\V9\Enums\ContentLabelTypeEnum_ContentLabelType::class);

