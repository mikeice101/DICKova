<?php


use Phinx\Seed\AbstractSeed;

class UserDismission extends AbstractSeed
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
        $sql = "INSERT INTO `user_dismission` (`id`, `user_id`, `reason_id`, `is_active`, `created_at`, `update_at`) VALUES
(2, 10, 1, 1, '2023-10-31 17:55:12', '2023-10-31 17:55:12'),
(3, 5, 2, 1, '2023-10-31 17:55:12', '2023-10-31 17:55:12'),
(4, 7, 2, 1, '2023-10-31 17:55:12', '2023-10-31 17:55:12'),
(5, 2, 2, 1, '2023-10-31 17:55:12', '2023-10-31 17:55:12');";

        $this->execute($sql);
    }
}
