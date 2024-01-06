<?php


use Phinx\Seed\AbstractSeed;

class DismissionReason extends AbstractSeed
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
        $sql = "INSERT INTO `dismission_reason` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Увольнение по инициативе работодателя', 'Увольнение по инициативе работодателя', '2023-07-31 17:55:12', '2023-07-31 17:55:12'),
(2, 'Увольнение по инициативе работника', 'Увольнение по инициативе работника', '2023-07-31 17:55:12', '2023-07-31 17:55:12');";

        $this->execute($sql);
    }
}
