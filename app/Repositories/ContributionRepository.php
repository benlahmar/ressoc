<?php
namespace App\Repositories;

use App\Models\Consultation;
use App\Models\Contribution;

 class ContributionRepository implements IContributionRepository
{
    public function save(Contribution $c)
    {  
        $cc=Consultation::find(1) ;
        $cc->contributions()->save($c);
        return $c;
    }
}

