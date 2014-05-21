<?php
    
    namespace framework\persistence\dao;
    
    use framework\persistence\dao\Dao;
    
    class DaoImpl implements Dao {

        protected $entityManager;

        public function __construct($em) {
            $this->entityManager = $em;
        }

        public function findByPrimaryKey($entity, $id) {
            return $this->entityManager->find($entity, $id);
        }

        public function save($entity) {
            $this->entityManager->persist($entity);
            $this->entityManager->flush();
        }

        public function delete($entity) {
            $this->entityManager->remove($entity);
            $this->entityManager->flush();
        }

        public function findAllByEntity($entity) {
            $query = $this->entityManager->createQuery("SELECT e FROM ". $entity . " e");
            return $query->getResult();
        }

    }

