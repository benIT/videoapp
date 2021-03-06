<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Video.
 */
class Video
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    private $videoFile;

    private $videoName;

    private $updatedAt;

    private $tags;

    private $creator;

    const STATUS_VIDEO_DRAFT = 0; //no video file yet

    const STATUS_VIDEO_UPLOADED = 1; //video has been uploaded

    const STATUS_VIDEO_ENCODING = 2; //video is being encoded by encoder

    const STATUS_VIDEO_ENCODED = 3; //video is encoded and ready to be served

    /**
     * @return ArrayCollection
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param ArrayCollection $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    public function addTag($tag)
    {
        $this->tags->add($tag);
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Video
     */
    public function setName($name)
    {
        $this->title = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->title;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Video
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * @param mixed $videoFile
     */
    public function setVideoFile($videoFile)
    {
        $this->videoFile = $videoFile;
    }

    /**
     * @return mixed
     */
    public function getVideoName()
    {
        return $this->videoName;
    }

    /**
     * @param mixed $videoName
     */
    public function setVideoName($videoName)
    {
        $this->videoName = $videoName;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function __construct()
    {
        $this->tags = new ArrayCollection();
        $this->setUpdatedAt(new \DateTime());
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param mixed $creator
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
    }
}
