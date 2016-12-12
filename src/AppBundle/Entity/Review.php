<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 *
 * @ApiResource(attributes={
 *     "normalization_context"={"groups"={"review_default_out"}},
 *     "denormalization_context"={"groups"={"review_default_in"}},
 *     })
 *
 */
class Review
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({"review_default_out"})
     *
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     * @Groups({"review_default_out", "review_default_in"})
     * @Assert\Type(type="string")
     *
     * @var string
     */
    private $contents;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"review_default_out", "review_default_in"})
     *
     * @var boolean
     */
    private $published;

    /**
     * @ORM\ManyToOne(targetEntity="Book", inversedBy="reviews")
     * @ORM\JoinColumn(name="book_id", referencedColumnName="id")
     * @Groups({"review_default_in"})
     *
     * @var Book
     */
    private $book;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getContents(): string
    {
        return $this->contents;
    }

    /**
     * @return Book
     */
    public function getBook(): Book
    {
        return $this->book;
    }

    /**
     * @return bool
     */
    public function isPublished() : bool
    {
        return $this->published;
    }

    /**
     * @param bool $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * @param Book $book
     */
    public function setBook(Book $book)
    {
        $this->book = $book;
    }

    /**
     * @param string $contents
     */
    public function setContents(string $contents)
    {
        $this->contents = $contents;
    }

}
