<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => '最初の投稿',
                'description' => '最初の投稿の概要',
                'body' => '最初の投稿の内容',
                'published' => '1',
                'created' => '2020-05-02 10:00:00',
                'modified' => '2020-05-02 10:00:00'
            ],[
                'title' => '2の投稿',
                'description' => '2の投稿の概要',
                'body' => '2の投稿の内容',
                'published' => '1',
                'created' => '2020-05-05 10:00:00',
                'modified' => '2020-05-05 10:00:00'
            ],[
                'title' => '3の投稿',
                'description' => '3の投稿の概要',
                'body' => '3の投稿の内容',
                'published' => '1',
                'created' => '2020-05-31 10:00:00',
                'modified' => '2020-05-02 10:00:00'
            ],[
                'title' => '4の投稿',
                'description' => '4の投稿の概要',
                'body' => '4の投稿の内容',
                'published' => '0',
                'created' => '2020-01-12 10:00:00',
                'modified' => '2020-05-02 10:00:00'
            ],[
                'title' => '5の投稿',
                'description' => '5の投稿の概要',
                'body' => '5の投稿の内容',
                'published' => '1',
                'created' => '2019-09-02 10:00:00',
                'modified' => '2019-09-02 10:00:00'
            ]
          
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}