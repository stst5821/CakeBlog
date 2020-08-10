<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table
        ->addColumn('username','string',[
            'default' => null,
            'limit' => 50,
            'null' => false
        ])
        // 記事の概要
        ->addColumn('password','string', [
            'default' => null,
            'limit' => 255,
            'null' => false
        ])
        // データの登録日。投稿したときに自動で日付を入れてくれる。
        ->addColumn('created','datetime')
        // データの変更日。変更した時に自動で日付を入れてくれる。
        ->addColumn('modified', 'datetime')
        ->create();
    }
}