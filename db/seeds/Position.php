<?php


use Phinx\Seed\AbstractSeed;

class Position extends AbstractSeed
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
        $sql = "INSERT INTO `position` (`id`, `name`, `description`, `salary`, `created_at`, `updated_at`, `is_active`) VALUES
(3, 'Программист', 'Программист', 65000, '2023-07-31 17:55:12', '2023-07-31 17:55:12', 1),
(4, 'Бухгалтер', 'Бухгалтер', 45000, '2023-07-17 17:55:12', '2023-07-17 17:55:12', 1),
(5, 'Экономист', 'Экономист', 55000, '2023-07-31 17:55:12', '2023-07-31 17:55:12', 1),
(6, 'Переводчик', 'Переводчик', 35000, '2023-07-17 17:55:12', '2023-07-17 17:55:12', 1),
(7, 'Юрист', 'Юрист\r\n', 40000, '2023-07-31 17:55:12', '2023-07-31 17:55:12', 1),
(8, 'Системный администратор', 'Системный администратор', 60000, '2023-07-17 17:55:12', '2023-07-17 17:55:12', 1);";

        $this->execute($sql);
    }
}
