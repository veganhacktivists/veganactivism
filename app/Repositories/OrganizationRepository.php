<?php

namespace App\Repositories;

use App\Domain\StaticOrganization;

class OrganizationRepository
{
    private $mockOrganizations = [
      ['id' => 123],
      ['id' => 124],
      ['id' => 125],
      ['id' => 126],
    ];

    public function all()
    {
        return collect($this->mockOrganizations)
            ->map(function ($org) {
                return new StaticOrganization(
                    $org['id'],
                    'https://veganactivism.org/banners/anonymous-for-the-voiceless.jpg',
                    'org number '.$org['id'],
                    'lorem ipsum '.$org['id'],
                    'org-title-'.$org['id'],
                    'http://example.com/'.$org['id']
                );
            });
    }
}
