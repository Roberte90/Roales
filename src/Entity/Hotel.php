<?php

namespace App\Entity;

use App\Repository\HotelRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HotelRepository::class)]
class Hotel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $location_id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'float')]
    private $latitude;

    #[ORM\Column(type: 'float')]
    private $longitude;

    #[ORM\Column(type: 'integer')]
    private $num_reviews;

    #[ORM\Column(type: 'string', length: 255)]
    private $photo_small_url;

    #[ORM\Column(type: 'string', length: 255)]
    private $photo_thumbnail_url;

    #[ORM\Column(type: 'string', length: 255)]
    private $photo_original_url;

    #[ORM\Column(type: 'string', length: 255)]
    private $photo_large_url;

    #[ORM\Column(type: 'string', length: 255)]
    private $photo_medium_url;

    #[ORM\Column(type: 'float', nullable: true)]
    private $price_level;

    #[ORM\Column(type: 'float')]
    private $price;

    #[ORM\Column(type: 'float', nullable: true)]
    private $hotel_class;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocationId(): ?int
    {
        return $this->location_id;
    }

    public function setLocationId(int $location_id): self
    {
        $this->location_id = $location_id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getNumReviews(): ?int
    {
        return $this->num_reviews;
    }

    public function setNumReviews(int $num_reviews): self
    {
        $this->num_reviews = $num_reviews;

        return $this;
    }

    public function getPhotoSmallUrl(): ?string
    {
        return $this->photo_small_url;
    }

    public function setPhotoSmallUrl(string $photo_small_url): self
    {
        $this->photo_small_url = $photo_small_url;

        return $this;
    }

    public function getPhotoThumbnailUrl(): ?string
    {
        return $this->photo_thumbnail_url;
    }

    public function setPhotoThumbnailUrl(string $photo_thumbnail_url): self
    {
        $this->photo_thumbnail_url = $photo_thumbnail_url;

        return $this;
    }

    public function getPhotoOriginalUrl(): ?string
    {
        return $this->photo_original_url;
    }

    public function setPhotoOriginalUrl(string $photo_original_url): self
    {
        $this->photo_original_url = $photo_original_url;

        return $this;
    }

    public function getPhotoLargeUrl(): ?string
    {
        return $this->photo_large_url;
    }

    public function setPhotoLargeUrl(string $photo_large_url): self
    {
        $this->photo_large_url = $photo_large_url;

        return $this;
    }

    public function getPhotoMediumUrl(): ?string
    {
        return $this->photo_medium_url;
    }

    public function setPhotoMediumUrl(string $photo_medium_url): self
    {
        $this->photo_medium_url = $photo_medium_url;

        return $this;
    }

    public function getPriceLevel(): ?float
    {
        return $this->price_level;
    }

    public function setPriceLevel(?float $price_level): self
    {
        $this->price_level = $price_level;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getHotelClass(): ?float
    {
        return $this->hotel_class;
    }

    public function setHotelClass(?float $hotel_class): self
    {
        $this->hotel_class = $hotel_class;

        return $this;
    }
}
