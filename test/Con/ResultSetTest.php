<?php
    /**
     * Created by PhpStorm.
     * User: matthes
     * Date: 30.11.16
     * Time: 17:17
     */

    namespace DbAkl\Test\Con;


    use DbAkl\Con\DbCon;

    class ResultSetTest
    {
        private function getDbCon() : DbCon
        {
            return new DbCon();
        }

        public function testEach () {
            $c = $this->getDbCon();

            $c->query()->with("a", Entity::class)->with("b", Entity::class)
                ->each(function (Entity $a, Entity $b) {

                });
        }

    }