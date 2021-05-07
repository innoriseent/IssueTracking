<?php


namespace Codeex\IssueTracking\Services;


use App\Lib\CodeexInsider;
use App\Models\User;
use Codeex\RoleAssignment\Models\Msp;
use Codeex\RoleAssignment\Models\Resource;
use Codeex\RoleAssignment\Models\Role;
use Codeex\RoleAssignment\Models\RoleResourcesAccess;
use Codeex\RoleAssignment\Models\UserResourcesAccess;

class Insider extends CodeexInsider
{

    public function runSeeds()
    {
    }
}
