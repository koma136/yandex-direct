<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetNegativeKeywordSharedSetsResponse extends GetResponseGeneral
{

//    Can be omit.
//    protected $NegativeKeywordSharedSets = null;

    /**
     * Creates a new instance of GetNegativeKeywordSharedSetsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets NegativeKeywordSharedSets.
     *
     * @return NegativeKeywordSharedSetGetItem[]|null
     */
    public function getNegativeKeywordSharedSets()
    {
        return isset($this->NegativeKeywordSharedSets) ? $this->NegativeKeywordSharedSets : null;
    }

    /**
     * Sets NegativeKeywordSharedSets.
     *
     * @param NegativeKeywordSharedSetGetItem[]|null $value
     * @return $this
     */
    public function setNegativeKeywordSharedSets(array $value = null)
    {
        $this->NegativeKeywordSharedSets = $value;

        return $this;
    }


}

