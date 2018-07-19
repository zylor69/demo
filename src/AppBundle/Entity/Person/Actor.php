<?php

namespace AppBundle\Entity\Person;

use AppBundle\Entity\Person;
use Doctrine\ORM\Mapping as ORM;

/**
 * Actor
 *
 * @ORM\Entity()
 */
class Actor extends Person
{

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Media\Movie", mappedBy="actors")
     */
    private $movies;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Media\TvShow", mappedBy="actors")
     */
    private $tvShows;

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Actor
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Actor
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->movies = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tvShows = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add movie
     *
     * @param \AppBundle\Entity\Media\Movie $movie
     *
     * @return Actor
     */
    public function addMovie(\AppBundle\Entity\Media\Movie $movie)
    {
        $this->movies[] = $movie;

        return $this;
    }

    /**
     * Remove movie
     *
     * @param \AppBundle\Entity\Media\Movie $movie
     */
    public function removeMovie(\AppBundle\Entity\Media\Movie $movie)
    {
        $this->movies->removeElement($movie);
    }

    /**
     * Get movies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMovies()
    {
        return $this->movies;
    }

    /**
     * Add tvShow
     *
     * @param \AppBundle\Entity\Media\TvShow $tvShow
     *
     * @return Actor
     */
    public function addTvShow(\AppBundle\Entity\Media\TvShow $tvShow)
    {
        $this->tvShows[] = $tvShow;

        return $this;
    }

    /**
     * Remove tvShow
     *
     * @param \AppBundle\Entity\Media\TvShow $tvShow
     */
    public function removeTvShow(\AppBundle\Entity\Media\TvShow $tvShow)
    {
        $this->tvShows->removeElement($tvShow);
    }

    /**
     * Get tvShows
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTvShows()
    {
        return $this->tvShows;
    }
}
