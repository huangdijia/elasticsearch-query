<?php

declare(strict_types=1);
/**
 * This file is part of elasticsearch-query.
 *
 * @link     https://github.com/huangdijia/elasticsearch-query
 * @document https://github.com/huangdijia/elasticsearch-query/blob/main/README.md
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
