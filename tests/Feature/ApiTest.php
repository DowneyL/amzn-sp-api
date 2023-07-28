<?php

namespace SellingPartnerApi\Tests\Feature;

use SellingPartnerApi\ApiException;
use SellingPartnerApi\Model\Sellers\Marketplace;
use SellingPartnerApi\Model\Sellers\MarketplaceParticipation;
use SellingPartnerApi\Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * @return array
     * @throws ApiException
     */
    public function getMarketplaceIds()
    {
        $this->initSellingPartner();
        $res = $this->sp->sellersApi()->getMarketplaceParticipations();
        $ids = [];
        foreach ($res->getPayload() as $marketplaceParticipation) {
            $ids[] = $marketplaceParticipation->getMarketplace()->getId();
        }

        return $ids;
    }

    /**
     * @throws ApiException
     */
    public function testGetMarketplaceIds()
    {
        $this->initSellingPartner();
        $res = $this->sp->sellersApi()->getMarketplaceParticipations();
        foreach ($res->getPayload() as $marketplaceParticipation) {
            $this->assertInstanceOf(MarketplaceParticipation::class, $marketplaceParticipation);
            $this->assertInstanceOf(Marketplace::class, $marketplaceParticipation->getMarketplace());
            $this->assertNotEmpty($marketplaceParticipation->getMarketplace()->getId());
        }
    }
}