<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JobRepository")
 */
class Job
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     *
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     *
     * @ORM\Column(type="integer")
     */
    private $category;

    /**
     *
     * @ORM\Column(type="string")
     */
    private $slug;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getSlug(){
        return $this->slug;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function setSlug($slug){
        $this->slug = $slug;
    }


}
