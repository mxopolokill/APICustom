<?php

namespace App\Entity;

use App\Controller\ScoresController;
use App\Repository\ScoresRepository;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScoresRepository::class)
 *
 * 
 */
class Scores
{
    /**
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("read")
     */
    private $pseudo;

    /**
     * @ORM\Column(type="integer", length=255)
     * @Groups("read")
     */
    private $score;

    /**
     * @ORM\Column(type="integer")
     * @Groups("read")
     */
    private $Timer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

/*    public function toArray()
{
    return [
        'id' => $this->getId(),
        'pseudo' => $this->getPseudo(),
        'score' => $this->getScore(),
    ];
} */

public function getTimer(): ?int
{
    return $this->Timer;
}

public function setTimer(int $Timer): self
{
    $this->Timer = $Timer;

    return $this;
}

}
