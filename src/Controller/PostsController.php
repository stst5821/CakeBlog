<?php

namespace App\Controller;

class PostsController extends AppController {

    public $paginate = [
        'limit' => 2,
        'order' => [
            'created' => 'desc'
        ]
    ];

    public function index()
    {
        // モデルからデータを取得している。
        $posts = $this->paginate($this->Posts->find());

        // ビューに取得したデータを送っている。
        $this->set(['posts' => $posts]);
    }

    public function view($id)
    {
        $post = $this->Posts->get($id);
        
        $this->set(['post' => $post]);
    }
}

?>