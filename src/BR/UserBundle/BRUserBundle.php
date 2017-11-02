<?php

namespace BR\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BRUserBundle extends Bundle
{
	public function getParent()
  	{
    	return 'FOSUserBundle';
  	}
}
