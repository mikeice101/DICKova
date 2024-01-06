<?php


use Phinx\Seed\AbstractSeed;

class Department extends AbstractSeed
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
        $sql = "INSERT INTO `department` (`id`, `leader_id`, `name`, `description`, `created_ad`, `update_at`) VALUES
(4, 6, 'Отдел перевода', 'Отдел перевода', '2023-07-31 17:43:32', '2023-08-01 17:43:32'),
(5, 3, 'Отдел разработки', 'Отдел разработки', '2023-07-31 17:43:32', '2023-07-31 17:43:32'),
(6, 4, 'Бухгалтерия', 'Бухгалтерия', '2023-07-31 17:43:32', '2023-08-01 17:43:32'),
(7, 8, 'Отдел системного администрирования', 'Отдел системного администрирования', '2023-07-31 17:43:32', '2023-08-01 17:43:32'),
(8, 5, 'Планово-экономический отдел', 'Планово-экономический отдел', '2023-07-31 17:43:32', '2023-08-01 17:43:32'),
(9, 7, 'Юридический отдел', 'Юридический отдел', '2023-07-31 17:43:32', '2023-08-01 17:43:32');";

        $this->execute($sql);
    }
}
