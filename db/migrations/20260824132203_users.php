<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Users extends AbstractMigration
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
    public function change(): void
    {
        $this->table('users')
            ->addColumn('first_name', 'string', ['limit' => 255])
            ->addColumn('last_name', 'string', ['limit' => 255])
            ->addColumn('email', 'string', ['limit' => 1000])
            ->addColumn('password', 'string', ['limit' => 255])
            ->addColumn('user_type', 'enum', ['values' => ['admin', 'staff']])
            ->addIndex('email', ['unique' => true])
            ->addTimestamps()
            ->create();
    }
}
