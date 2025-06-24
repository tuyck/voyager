<?php

namespace Tuyck\Voyager\Events;

use Illuminate\Queue\SerializesModels;
use Tuyck\Voyager\Models\Setting;

class SettingUpdated
{
    use SerializesModels;

    public $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }
}
