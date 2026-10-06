<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatebookingTable extends AbstractMigration
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
        $table = $this->table('bookings');
        $table->addColumn('guests', 'string', ['limit'=> 255])
        ->addColumn('room_id', 'integer', ['limit' => 11])
        ->addColumn('checkin', 'datetime')
        ->addColumn('checkout', 'datetime')
        ->addColumn('amount', 'decimal', ['precision' => 11, 'scale' => 2])
        ->addColumn('payment', 'decimal', ['precision' => 11, 'scale' => 2])
        ->addColumn('status', 'enum', ['values' => ['pending', 'confirmed', 'checked_in', 'checked_out', 'cancelled']])
        ->addColumn('actions', 'string', ['limit' => 255])
        ->addColumn('additional_note', 'string', ['limit' => 1000])
        ->addColumn('transaction_id', 'string', ['limit' => 255])
        ->addColumn('customers_email', 'string', ['limit' => 1000])
        ->addColumn('customers_name', 'string', ['limit' => 1000])
        ->addTimestamps()
        ->create();



    }
}
