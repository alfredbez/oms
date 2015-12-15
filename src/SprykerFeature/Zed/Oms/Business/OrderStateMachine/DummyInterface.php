<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Zed\Oms\Business\OrderStateMachine;

interface DummyInterface
{

    /**
     * @param string $processName
     *
     * @return mixed
     */
    public function prepareItems($processName);

    /**
     * @param string $processName
     *
     * @return array
     */
    public function getOrderItems($processName);

}
