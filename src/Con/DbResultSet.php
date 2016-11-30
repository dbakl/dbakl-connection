<?php
    /**
     * Created by PhpStorm.
     * User: matthes
     * Date: 28.11.16
     * Time: 16:22
     */

    namespace DbAkl\Con;


    class DbResultSet
    {


        public function addResolver (string $asAlias, callable $fn) {

        }

        public function with (string $alias, string $className) : self {

        }

        public function map(array $map = []) : self {
            return $this;
        }

        public function none (callable $fn) {

        }

        public function each (callable $fn) {

        }

        public function one($object = null) : array {

        }

        public function first ($object = null) : array {

        }


        public function count() {

        }



        public function cast(\stdClass $object) {

        }



        public function error (callable $fn) {

        }




    }