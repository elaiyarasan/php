<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\IpMessaging\V2\Service;

use Twilio\Options;
use Twilio\Values;

abstract class ChannelOptions {
    /**
     * @param string $friendlyName A human-readable name for the Channel.
     * @param string $uniqueName A unique, addressable name for the Channel.
     * @param string $attributes An optional metadata field you can use to store
     *                           any data you wish.
     * @param string $type The visibility of the channel - public or private.
     * @param \DateTime $dateCreated The optional ISO8601 time specifying the
     *                               datetime the Channel should be set as being
     *                               created.
     * @param \DateTime $dateUpdated The optional ISO8601 time specifying the
     *                               datetime the Channel should be set as having
     *                               been last updated.
     * @param string $createdBy Optional field to specify the Identity of the User
     *                          that created the Channel.
     * @return CreateChannelOptions Options builder
     */
    public static function create($friendlyName = Values::NONE, $uniqueName = Values::NONE, $attributes = Values::NONE, $type = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE, $createdBy = Values::NONE) {
        return new CreateChannelOptions($friendlyName, $uniqueName, $attributes, $type, $dateCreated, $dateUpdated, $createdBy);
    }

    /**
     * @param string $type The type
     * @return ReadChannelOptions Options builder
     */
    public static function read($type = Values::NONE) {
        return new ReadChannelOptions($type);
    }

    /**
     * @param string $friendlyName A human-readable name for the Channel.
     * @param string $uniqueName A unique, addressable name for the Channel.
     * @param string $attributes An optional metadata field you can use to store
     *                           any data you wish.
     * @param \DateTime $dateCreated The optional ISO8601 time specifying the
     *                               datetime the Channel should be set as being
     *                               created.
     * @param \DateTime $dateUpdated The optional ISO8601 time specifying the
     *                               datetime the Channel should be set as having
     *                               been last updated.
     * @param string $createdBy Optional field to specify the Identity of the User
     *                          that created the Channel.
     * @return UpdateChannelOptions Options builder
     */
    public static function update($friendlyName = Values::NONE, $uniqueName = Values::NONE, $attributes = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE, $createdBy = Values::NONE) {
        return new UpdateChannelOptions($friendlyName, $uniqueName, $attributes, $dateCreated, $dateUpdated, $createdBy);
    }
}

class CreateChannelOptions extends Options {
    /**
     * @param string $friendlyName A human-readable name for the Channel.
     * @param string $uniqueName A unique, addressable name for the Channel.
     * @param string $attributes An optional metadata field you can use to store
     *                           any data you wish.
     * @param string $type The visibility of the channel - public or private.
     * @param \DateTime $dateCreated The optional ISO8601 time specifying the
     *                               datetime the Channel should be set as being
     *                               created.
     * @param \DateTime $dateUpdated The optional ISO8601 time specifying the
     *                               datetime the Channel should be set as having
     *                               been last updated.
     * @param string $createdBy Optional field to specify the Identity of the User
     *                          that created the Channel.
     */
    public function __construct($friendlyName = Values::NONE, $uniqueName = Values::NONE, $attributes = Values::NONE, $type = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE, $createdBy = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['attributes'] = $attributes;
        $this->options['type'] = $type;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['createdBy'] = $createdBy;
    }

    /**
     * A human-readable name for the Channel. Optional.
     * 
     * @param string $friendlyName A human-readable name for the Channel.
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * A unique, addressable name for the Channel.  Optional.
     * 
     * @param string $uniqueName A unique, addressable name for the Channel.
     * @return $this Fluent Builder
     */
    public function setUniqueName($uniqueName) {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * An optional metadata field you can use to store any data you wish. No processing or validation is done on this field.
     * 
     * @param string $attributes An optional metadata field you can use to store
     *                           any data you wish.
     * @return $this Fluent Builder
     */
    public function setAttributes($attributes) {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * The visibility of the channel - `public` or `private`. Defaults to `public`.
     * 
     * @param string $type The visibility of the channel - public or private.
     * @return $this Fluent Builder
     */
    public function setType($type) {
        $this->options['type'] = $type;
        return $this;
    }

    /**
     * The optional ISO8601 time specifying the datetime the Channel should be set as being created.  Will be set to the current time by the Chat service if not specified.  Note that this should only be used in cases where a a Channel is being recreated from a backup/separate source
     * 
     * @param \DateTime $dateCreated The optional ISO8601 time specifying the
     *                               datetime the Channel should be set as being
     *                               created.
     * @return $this Fluent Builder
     */
    public function setDateCreated($dateCreated) {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The optional ISO8601 time specifying the datetime the Channel should be set as having been last updated.  Will be set to the `null` by the Chat service if not specified.  Note that this should only be used in cases where a Channel is being recreated from a backup/separate source  and where a Message was previously updated.
     * 
     * @param \DateTime $dateUpdated The optional ISO8601 time specifying the
     *                               datetime the Channel should be set as having
     *                               been last updated.
     * @return $this Fluent Builder
     */
    public function setDateUpdated($dateUpdated) {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * Optional field to specify the Identity of the User that created the Channel.  Will be set to "system" if not specified.
     * 
     * @param string $createdBy Optional field to specify the Identity of the User
     *                          that created the Channel.
     * @return $this Fluent Builder
     */
    public function setCreatedBy($createdBy) {
        $this->options['createdBy'] = $createdBy;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.IpMessaging.V2.CreateChannelOptions ' . implode(' ', $options) . ']';
    }
}

class ReadChannelOptions extends Options {
    /**
     * @param string $type The type
     */
    public function __construct($type = Values::NONE) {
        $this->options['type'] = $type;
    }

    /**
     * The type
     * 
     * @param string $type The type
     * @return $this Fluent Builder
     */
    public function setType($type) {
        $this->options['type'] = $type;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.IpMessaging.V2.ReadChannelOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateChannelOptions extends Options {
    /**
     * @param string $friendlyName A human-readable name for the Channel.
     * @param string $uniqueName A unique, addressable name for the Channel.
     * @param string $attributes An optional metadata field you can use to store
     *                           any data you wish.
     * @param \DateTime $dateCreated The optional ISO8601 time specifying the
     *                               datetime the Channel should be set as being
     *                               created.
     * @param \DateTime $dateUpdated The optional ISO8601 time specifying the
     *                               datetime the Channel should be set as having
     *                               been last updated.
     * @param string $createdBy Optional field to specify the Identity of the User
     *                          that created the Channel.
     */
    public function __construct($friendlyName = Values::NONE, $uniqueName = Values::NONE, $attributes = Values::NONE, $dateCreated = Values::NONE, $dateUpdated = Values::NONE, $createdBy = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['attributes'] = $attributes;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['createdBy'] = $createdBy;
    }

    /**
     * A human-readable name for the Channel. Optional.
     * 
     * @param string $friendlyName A human-readable name for the Channel.
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * A unique, addressable name for the Channel.  Optional.
     * 
     * @param string $uniqueName A unique, addressable name for the Channel.
     * @return $this Fluent Builder
     */
    public function setUniqueName($uniqueName) {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * An optional metadata field you can use to store any data you wish. No processing or validation is done on this field.
     * 
     * @param string $attributes An optional metadata field you can use to store
     *                           any data you wish.
     * @return $this Fluent Builder
     */
    public function setAttributes($attributes) {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * The optional ISO8601 time specifying the datetime the Channel should be set as being created.
     * 
     * @param \DateTime $dateCreated The optional ISO8601 time specifying the
     *                               datetime the Channel should be set as being
     *                               created.
     * @return $this Fluent Builder
     */
    public function setDateCreated($dateCreated) {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The optional ISO8601 time specifying the datetime the Channel should be set as having been last updated.
     * 
     * @param \DateTime $dateUpdated The optional ISO8601 time specifying the
     *                               datetime the Channel should be set as having
     *                               been last updated.
     * @return $this Fluent Builder
     */
    public function setDateUpdated($dateUpdated) {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * Optional field to specify the Identity of the User that created the Channel.
     * 
     * @param string $createdBy Optional field to specify the Identity of the User
     *                          that created the Channel.
     * @return $this Fluent Builder
     */
    public function setCreatedBy($createdBy) {
        $this->options['createdBy'] = $createdBy;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.IpMessaging.V2.UpdateChannelOptions ' . implode(' ', $options) . ']';
    }
}