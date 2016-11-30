<?php
    /**
     * Created by PhpStorm.
     * User: matthes
     * Date: 30.11.16
     * Time: 13:02
     */

    namespace DbAkl\Test\Con;


    use DbAkl\Con\DbCon;
    use DbAkl\Sql\Sql;

    class DbConTest extends \PHPUnit_Framework_TestCase
    {

        private function getDbCon() : DbCon
        {
            return new DbCon();
        }

        public function testLoadEntity ()
        {
            $c = $this->getDbCon();

            // Load the Entity by Primary key
            $c->load("SomeTable", "00000-00000-00000-00000");

            // Load the Entity by Keys
            $c->load("SomeTable", ["someProperty" => "Eqals", "otherProperty" => "Equals"]);

            $c->load("SomeTable", [["someProperty", "eq", "someValue"], "@orderBy" => "someProp", "@orderRev"]);

            $arrayData = $c->load("SomeTable", []);

            $objectData = $c->load(DbAklTestEntity::class, []);

            $c->load ($obj = new DbAklTestEntity(), ["condition" => "condition"]);
        }

        public function testInsert()
        {
            $c = $this->getDbCon();

            $c->insert ("TableName", ["someCol"=> "someValue", "someOtherCol" => "someValue"]);

            $entity = new DbAklTestEntity();
            $c->insert ($entity);


            $c->insert(DbAklTestEntity::class, ["property"=>"value", "property2"=>"value"]);

        }

        public function testUpdate() {
            $c = $this->getDbCon();
            // Update by primary Key
            $c->update("TableName", ["someCol" => "someVal", "someOhterCol" => "someVal"], "00000-00000-00000-00000");

            $c->update("TableName", ["SomeCol" => "someVal"], ["key1"=>"1234", "key2" => "4356"]);

            $entity = new Entity();
            $c->update($entity);

            $c->update (DbAklTestEntity::class, ["SomeCol" => "someVal"], ["key1"=>"1234", "key2" => "43254"]);
        }

        public function testDelete() {
            $c = $this->getDbCon();
            // Delete by primary Key
            $c->delete("TableName", "00000-00000-00000-00000");

            // Delete by Key
            $c->delete("TableName", ["key1"=>"1234", "key2" => "4356"]);

            $entity = new Entity();
            $c->delete ($entity);

            $c->delete("TableName", []); // Exceptin: Use truncate() to delete whole table (No empty Conditions)
        }


        public function testSelect() {
            $c = $this->getDbCon();

            $c->select();

            $c->select(["SELECT * FROM Somewhere WHERE a=:name AND ", "name" => $name]);

            $c->query (new Sql());
        }

        public function testQuery () {
            $c = $this->getDbCon();

            $c->select(fsql()->from("TableName"));

            $c->select(["SELECT * FROM Somewhere WHERE a=:name AND ", "name" => $name]);

            $c->query (new Sql());
        }

    }
