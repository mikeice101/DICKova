<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableMessages extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $sql = 'CREATE TABLE `user` (
  `id` int NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) NOT NULL,
  `data_of_birth` date NOT NULL,
  `created_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;';

        $this->execute($sql);
    }

    public function down()
    {

    }
}
