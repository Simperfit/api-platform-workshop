<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ApiResource(attributes={
 *     "filters"={"book.search"},
 *     "normalization_context"={"groups"={"book_default_out"}},
 *     "denormalization_context"={"groups"={"book_default_in"}}
 *     },
 *     collectionOperations={
 *      "post"={"method"="POST"},
 *      "list"={
 *       "method"="GET",
 *       "normalization_context"={"groups"={"book_collection_out"}}
 *   }
 *     },
 *      itemOperations={
 *      "put"={"method"="PUT"},
 *     })
 *
 * @ORM\Entity
 */
class Book
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({"book_collection_out"})
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Groups({"book_default_out", "book_default_in", "book_collection_out"})
     * @Assert\Type(type="string")
     *
     * @var string
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Review", mappedBy="book", cascade={"persist"})
     * @Groups({"book_item_out", "book_item_in", "book_collection_in", "book_collection_out"})
     * @var Collection
     */
    private $reviews;

    /**
     * Book constructor.
     *
     */
    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return Collection|Review[]
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    /**
     * @param Review[] $reviews
     */
    public function setReviews(array $reviews)
    {
        $this->reviews = $reviews;
    }
}
