<?php

namespace LaravelFCM\Message;

/**
 * Class PayloadFcmOptionsBuilder.
 *
 * Official google documentation :
 *
 * @link http://firebase.google.com/docs/cloud-messaging
 */
class PayloadFcmOptionsBuilder
{
    /**
     * @internal
     *
     * @var null|string
     */
    protected $analytics_label;

    /**
     * Title must be present on android notification and ios (watch) notification.
     *
     * @param string $title
     */
    public function __construct($analytics_label = null)
    {
        $this->analytics_label = $analytics_label;
    }

    /**
     * Indicates notification analytics label.
     *
     * @param string $analytics_label
     *
     * @return PayloadFcmOptionsBuilder current instance of the builder
     */
    public function setAnalyticsLabel($analytics_label)
    {
        $this->analytics_label = $analytics_label;

        return $this;
    }

    /**
     * GetAnalyticsLabel.
     *
     * @return null|string
     */
    public function getAnalyticsLabel()
    {
        return $this->analytics_label;
    }

    /**
     * Build an PayloadFcmOptions.
     *
     * @return PayloadFcmOptions
     */
    public function build()
    {
        return new PayloadFcmOptions($this);
    }
}
