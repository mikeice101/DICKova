<?php


use Phinx\Seed\AbstractSeed;

class UserPosition extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $sql = "INSERT INTO `user_position` (`id`, `user_id`, `department_id`, `position_id`, `created_at`, `update_at`) VALUES
(1, 10, 4, 6, '2023-08-31 17:55:12', '2023-09-01 17:43:32'),
(2, 8, 5, 3, '2023-09-30 17:55:12', '2023-09-30 17:55:12'),
(3, 4, 7, 8, '2023-06-30 17:55:12', '2023-06-30 17:55:12'),
(4, 6, 8, 5, '2023-06-17 17:55:12', '2023-06-17 17:55:12'),
(5, 5, 6, 4, '2023-08-31 17:55:12', '2023-08-31 17:55:12'),
(6, 3, 9, 7, '2023-10-31 17:55:12', '2023-10-31 17:55:12'),
(7, 1, 4, 6, '2023-12-01 14:46:25', '2023-12-01 14:46:25'),
(8, 9, 6, 4, '2023-12-01 14:46:25', '2023-12-01 14:46:25'),
(9, 2, 5, 3, '2023-10-01 14:46:25', '2023-10-01 14:46:25'),
(10, 7, 9, 7, '2023-10-01 14:46:25', '2023-10-01 14:46:25');";

        $this->execute($sql);
    }
}
