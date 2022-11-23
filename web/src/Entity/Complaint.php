<?php

namespace App\Entity;

use App\Repository\ComplaintRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ComplaintRepository::class)
 */
class Complaint
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;
//TODO КОГДА ОПРЕДЕЛИШЬСЯ НУЖНО ЛИ ПРИВЯЗЫВАТЬ ЮЗЕРА К ЖАЛОБЕ РАССКОМЕНТИШЬ (КОНЕЧНО НУЖНО) НО УВЫ У ТЕБЯ В ФОРМЕ ВСЕ ЧЕРЕЗ ЖОПУ !!!!!!!!!!
//    /**
//     * @ORM\Column(type="integer")
//     */
//    private $user_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $topic;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $description;

    public function getId(): ?int
    {
        return $this->id;
    }

//    public function getUserId(): ?int
//    {
//        return $this->user_id;
//    }

//    public function setUserId(int $user_id): self
//    {
//        $this->user_id = $user_id;
//
//        return $this;
//    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTopic(): ?string
    {
        return $this->topic;
    }

    public function setTopic(string $topic): self
    {
        $this->topic = $topic;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
