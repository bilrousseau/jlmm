<?php

namespace BRMainBundle\Service;

use BRMainBundle\Entity\Matos;
use BR\UserBundle\Entity\SecurityUser;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class InitMatosService {

	private $tokenStorage;

	public function __construct(TokenStorageInterface $tokenStorage) 
	{
        $this->tokenStorage = $tokenStorage;
	}

	public function setCurrentUser()
	{
		$matos = new Matos();
		$user = $this->tokenStorage->getToken()->getUser();
		if ($user instanceof SecurityUser) {
			$matos->setClickNb(1);
			$matos->setPublicationDate(new \DateTime());
			$matos->setUser($user);
			// echo "<pre>";
			// print_r($matos);
			// echo "</pre>";	
			// die();
			return $matos;
		} else {
			return null;
		}
	}
}