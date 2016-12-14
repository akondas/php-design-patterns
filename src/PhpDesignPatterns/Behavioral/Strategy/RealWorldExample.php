<?php

// Doctrine 2 ID generator strategy

class EntityPersister
{

    /**
     * @var IdGenerator
     */
    private $idGenerator;

    /**
     * @param IdGenerator $idGenerator
     */
    public function __construct(IdGenerator $idGenerator)
    {
        $this->idGenerator = $idGenerator;
    }


    public function executeInserts()
    {
        /* ... */
        $generatedId = $this->idGenerator->generate($this->em, $entity);
        /* ... */
    }

}


interface IdGenerator
{
    /**
     * @param EntityManager $em
     * @param $entity
     * @return mixed
     */
    public function generate(EntityManager $em, $entity);
}

class UuidGenerator implements IdGenerator
{
    public function generate(EntityManager $em, $entity)
    {
        // generate UUID
    }
}

class SequenceGenerator implements IdGenerator
{
    public function generate(EntityManager $em, $entity)
    {
        // generate next sequence value
    }
}

class IdentityGenerator implements IdGenerator
{
    public function generate(EntityManager $em, $entity)
    {
        // get value from auto-increment column
    }
}
