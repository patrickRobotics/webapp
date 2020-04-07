<?php

namespace App;

class Post 
{
    public function getPosts($session) 
    {
        if(!$session->has('posts')) {
            $this->createDummyData($session);
        }
        return $session->get('posts');
    }

    public function getPost($session, $id)  
    {
        if(!$session->has('posts')) {
            $this->createDummyData($session);
        }
        return $session->get('posts')[$id];
    }

    public function addPost($session, $title, $content)
    {
        if(!$session->has('posts')) {
            $this->createDummyData($session);
        }
        $posts = $session->get('posts');
        array_push($posts, ['title'=>$title, 'content'=>$content]);
        $session->put('posts', $posts);
    }

    function editPost($session, $id, $title, $content)
    {
        $posts = $session->get('posts');
        $posts[$id] = ['title'=>$title, 'content'=>$content];
        $session->put('posts', $posts);
    }

    private function createDummyData($session) 
    {
        $posts = [
            [
                'title' => 'Learning Laravel',
                'content' => 'Some other content on how to create something great using Laravel!'
            ],
            [
                'title' => 'Native Types',
                'content' => 'The attributes that should be cast to native types.'
            ],
            [
                'title' => 'Arrays',
                'content' => 'The attributes that should be hidden for arrays.'
            ],
        ];
        $session->put('posts', $posts);
    }

}