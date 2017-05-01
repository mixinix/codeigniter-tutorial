<?php namespace Library\Anto;

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog
{
    public function getPostMeta()
    {
        $blogModel = new \Model\Anto\Blog;
        
        return $blogModel->getPostData();
    }
}