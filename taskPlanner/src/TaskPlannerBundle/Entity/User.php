<?php

namespace TaskPlannerBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }




    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="user")
     */
    private $task;

    /**
     * @ORM\OneToMany(targetEntity="Category", mappedBy="user")
     */
    private $category;


}
