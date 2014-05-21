<?php

    namespace framework\persistence\dao;
    
    interface Dao {

        public function findByPrimaryKey($entity, $id);

        public function save($entity);

        public function delete($entity);

        public function findAllByEntity($entity);
        
    }
