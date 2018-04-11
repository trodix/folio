<?php

namespace AppBundle\Entity;

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

//    /** 
//      * created Time/Date 
//      * 
//      * @var \DateTime 
//      * 
//      * @ORM\Column(name="created_at", type="datetime", nullable=false) 
//      */
//     protected $createdAt;

//     public function __construct()
//     {
//         parent::__construct();
//     }

    // /** 
    //  * Set createdAt 
    //  * 
    //  * @ORM\PrePersist 
    //  */  
    // public function setCreatedAt()  
    // {  
    //     $this->createdAt = new \DateTime();   
    // }  
  
    // /** 
    //  * Get createdAt 
    //  * 
    //  * @return \DateTime 
    //  */  
    // public function getCreatedAt()  
    // {  
    //     return $this->createdAt;  
    // }  
}
