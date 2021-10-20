<?php

namespace App\Http\Requests;

use App\Exceptions\ExceptionList;
use App\Repositories\AbstractRepository;

abstract class AbstractListRequest extends AbstractRequest
{
    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'limit.*' => ExceptionList::INVALID_LIMIT,
            'skip.*' => ExceptionList::INVALID_SKIP,
            'orderBy.*' => ExceptionList::INVALID_SORT,
        ];
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->get('limit', AbstractRepository::DEFAULT_RECORDS_NUMBER);
    }

    /**
     * @return int
     */
    public function getSkip(): int
    {
        return $this->get('skip', 0);
    }

    /**
     * @return array
     */
    public function getOrderBy(): array
    {
        return $this->get('orderBy');
    }

    /**
     * @return array
     */
    public function getFilters(): array
    {
        return $this->get('filters');
    }
}
