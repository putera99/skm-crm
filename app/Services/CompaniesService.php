<?php

namespace App\Services;

use App\Queries\CompanyQueries;

/**
 * Class CompaniesService
 *
 * Service class for handling operations related to the CompaniesModel.
 */
class CompaniesService
{
    /**
     * Load the list of companies added in the latest month.
     *
     * @return float
     */
    public function loadCompaniesInLatestMonth(): float
    {
        $companiesCount = CompanyQueries::getCompaniesInLatestMonth();
        $allCompanies = CompanyQueries::countAll();
        
        if ($allCompanies == 0 && $companiesCount == 0) {
            return 0;
        }
        
        return ($companiesCount / $allCompanies) * 100;
    }
}
