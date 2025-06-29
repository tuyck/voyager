<?php

namespace Tuyck\Voyager\Events;

use Illuminate\Queue\SerializesModels;
use Tuyck\Voyager\Models\Menu;

class MenuDisplay
{
    use SerializesModels;

    public $menu;

    public function __construct(Menu $menu)
    {
        $this->menu = $menu;

        // @deprecate
        //
        event('voyager.menu.display', $menu);
    }
}
