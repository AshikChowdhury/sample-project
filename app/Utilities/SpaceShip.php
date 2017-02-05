<?php

namespace app\Utilities;

use App\Utilities\Contracts\RocketShipContract;

class SpaceShip implements RocketShipContract
{

    public function blastOff()
    {

        return 'to the moon';

    }

}