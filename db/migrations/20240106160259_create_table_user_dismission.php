<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableUserDismission extends AbstractMigration
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
        $sql = 'CREATE TABLE `user_dismission` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `reason_id` int DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;';

        $this->execute($sql);
    }

    public function down()
    {

    }
}
