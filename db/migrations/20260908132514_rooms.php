<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Rooms extends AbstractMigration
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
        $this->table('rooms')
            ->addColumn('room_number', 'integer', ['limit' => 3])
            ->addColumn('room_type', 'enum', ['values' => ['standard', 'deluxe', 'executive', 'presidential']])
            ->addColumn('floor', 'string', ['limit' => 50])
            ->addColumn('price', 'decimal', ['precision' => 11, 'scale' => 2])
            ->addColumn('capacity', 'integer', ['limit' => 2])
            ->addColumn('description', 'text')
            ->addColumn('amenities', 'text')
            ->addColumn('status', 'enum', ['values' => ['available', 'reserved', 'cleaning', 'occupied', 'maintenance']])
            ->create();
    }
}
