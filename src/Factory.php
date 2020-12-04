<?php

declare(strict_types=1);
/**
 * This file is part of search-service.
 *
 * @link     https://code.addcn.com/8591/services/search
 * @document https://code.addcn.com/8591/services/search/blob/master/README.md
 * @contact  hdj@addcn.com
 */
namespace Huangdijia\ElasticsearchQuery;

class Factory
{
    /**
     * Create builder.
     * @return Builder
     */
    public function create(?string $index = '')
    {
        return new Builder($index);
    }
}
