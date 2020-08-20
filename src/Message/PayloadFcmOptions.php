<?php

namespace LaravelFCM\Message;

use Illuminate\Contracts\Support\Arrayable;

/**
 * Class PayloadNotification.
 */
class PayloadFcmOptions implements Arrayable
{
    /**
     * @internal
     *
     * @var null|string
     */
    protected $analytics_label;


    /**
     * PayloadFcmOptions constructor.
     *
     * @param PayloadFcmOptionsBuilder $builder
     */
    public function __construct(PayloadFcmOptionsBuilder $builder)
    {
        $this->analytics_label = $builder->getAnalyticsLabel();
    }

    /**
     * convert PayloadFcmOptions to array.
     *
     * @return array
     */
    public function toArray()
    {
        $fcmOptions = [
            'analytics_label' => $this->analytics_label,
        ];

        // remove null values
        $fcmOptions = array_filter($fcmOptions, function($value) {
            return $value !== null;
        });
        
        return $fcmOptions;
    }
}
