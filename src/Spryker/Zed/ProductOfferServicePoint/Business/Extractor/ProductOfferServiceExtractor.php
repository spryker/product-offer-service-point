<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductOfferServicePoint\Business\Extractor;

use Generated\Shared\Transfer\ProductOfferServiceCollectionTransfer;

class ProductOfferServiceExtractor implements ProductOfferServiceExtractorInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductOfferServiceCollectionTransfer $productOfferServiceCollectionTransfer
     *
     * @return list<string>
     */
    public function extractServiceUuidsFromProductOfferServiceCollectionTransfer(
        ProductOfferServiceCollectionTransfer $productOfferServiceCollectionTransfer
    ): array {
        $serviceUuids = [];

        foreach ($productOfferServiceCollectionTransfer->getProductOfferServices() as $productOfferServiceTransfer) {
            $serviceUuids[] = $productOfferServiceTransfer->getServiceUuidOrFail();
        }

        return $serviceUuids;
    }
}