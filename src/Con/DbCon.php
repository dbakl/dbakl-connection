<?php
    /**
     * Created by PhpStorm.
     * User: matthes
     * Date: 28.11.16
     * Time: 16:20
     */

    namespace DbAkl\Con;


    use DbAkl\Core\Entity\EntityManager;
    use DbAkl\FSql\FSql;

    class DbCon
    {


        public function setEntityManager(EntityManager $entityManager) {

        }

        public function getEntityManager() : EntityManager {

        }


        /**
         * Returns only one Result.
         *
         * <examples>
         * $c->load($obj = new Entity(), "00000-00000-00000-00000");
         * $c->load($obj = new Entity(), ["property"=>"value", "property2" => "value2]);
         * $arrayData = $c->load("TableName", ["Restrictions"])
         * $object = $c->load(Entity::class, ["Restrictions"]);
         * </examples>
         *
         * @param $tableOrClass
         * @param mixed $condition
         * @return mixed
         */
        public function load (mixed $tableOrClass, mixed $condition) : mixed {

        }

        public function insert (mixed $entityOrTableName, array $data = null) {

        }

        public function update (mixed $entityOrTableName, array $data = null, array $conditon = null) {

        }

        public function delete (mixed $entityOrTableName, array $condition) {

        }


        public function truncate(mixed $classOrTableName) {

        }


        public function scan (mixed $entityOrTableName, array $condition, array $opts = ["orderBy" => null, "orderType"=> "ASC", "limit" => null, "offset" => null]) : DbResultSet {

        }


        public function query($query) : DbResultSet {

        }

        public function async(array $opts = ["timeout" => 5, "singeQueryTimeout" => 2, "maxConsPerHost" => 5]) : AsyncQueryPool {

        }


        public function transaction (callable $fn) {

        }

    }