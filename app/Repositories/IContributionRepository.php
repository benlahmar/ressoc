<?php
namespace App\Repositories;

use App\Models\Contribution;

 interface IContributionRepository
{
    public function save(Contribution $crt);
}