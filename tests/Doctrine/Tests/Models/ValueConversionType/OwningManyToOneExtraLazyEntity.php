<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\ValueConversionType;

use Doctrine\ORM\Annotation as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="vct_owning_manytoone_extralazy")
 */
class OwningManyToOneExtraLazyEntity
{
    /**
     * @ORM\Column(type="rot13")
     * @ORM\Id
     */
    public $id2;

    /**
     * @ORM\ManyToOne(targetEntity=InversedOneToManyExtraLazyEntity::class, inversedBy="associatedEntities")
     * @ORM\JoinColumn(name="associated_id", referencedColumnName="id1")
     */
    public $associatedEntity;
}
