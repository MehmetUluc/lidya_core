<?php

namespace LidyaPos\ACL\Repositories\Caches;

use LidyaPos\ACL\Repositories\Interfaces\RoleInterface;
use LidyaPos\Support\Repositories\Caches\CacheAbstractDecorator;

class RoleCacheDecorator extends CacheAbstractDecorator implements RoleInterface
{
    /**
     * {@inheritDoc}
     */
    public function createSlug($name, $id)
    {
        return $this->flushCacheAndUpdateData(__FUNCTION__, func_get_args());
    }
}
