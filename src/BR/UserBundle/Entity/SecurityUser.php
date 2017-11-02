<?php

namespace BR\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * SecurityUser
 *
 * @ORM\Table(name="security_user")
 * @ORM\Entity(repositoryClass="BR\UserBundle\Repository\SecurityUserRepository")
 */
class SecurityUser extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        $this->setRoles(array('ROLE_USER'));
    }
}
