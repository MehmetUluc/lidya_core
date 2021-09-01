<?php

namespace LidyaPos\Dashboard\Repositories\Caches;

use LidyaPos\Dashboard\Repositories\Interfaces\DashboardWidgetSettingInterface;
use LidyaPos\Support\Repositories\Caches\CacheAbstractDecorator;

class DashboardWidgetSettingCacheDecorator extends CacheAbstractDecorator implements DashboardWidgetSettingInterface
{
    /**
     * {@inheritDoc}
     */
    public function getListWidget()
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
