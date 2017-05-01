<?php namespace Model\Anto;

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog
{
    public function getPostData()
    {
        $data = [
            'title' => 'Welcome to CodeIgniter!'
        ];
        
        return $data;
    }
}