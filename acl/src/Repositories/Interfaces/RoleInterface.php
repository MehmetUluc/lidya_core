<?php

namespace LidyaPos\ACL\Repositories\Interfaces;

use LidyaPos\Support\Repositories\Interfaces\RepositoryInterface;

interface RoleInterface extends RepositoryInterface
{
    /**
     * @param string $name
     * @param int|null $id
     * @return string
     */
    public function createSlug($name, $id);
}
