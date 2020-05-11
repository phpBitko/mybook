<?php

namespace App\EntityListener;

use App\Entity\Conference;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * Class ConferenceEntityListener
 * @package App\EntityListener
 */
class ConferenceEntityListener
{
    /** @var  SluggerInterface */
    private $slugger;

    /**
     * ConferenceEntityListener constructor.
     *
     * @param SluggerInterface $slugger
     */
    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    /**
     * @param Conference         $conference
     * @param LifecycleEventArgs $eventArgs
     */
    public function prePersist(Conference $conference, LifecycleEventArgs $eventArgs)
    {
        $conference->computeSlug($this->slugger);
    }

    /**
     * @param Conference         $conference
     * @param LifecycleEventArgs $eventArgs
     */
    public function preUpdate(Conference $conference, LifecycleEventArgs $eventArgs)
    {
        $conference->computeSlug($this->slugger);
    }
}
