<?php

namespace Admin\Lib;

use Admin\Lib\Database;

class Post extends Database
{
    public $id;
    public $product_id;
    public $title;
    public $content;
    public $author;
    public $image_url;
    public $tags;
    protected static $db_table = "posts";
    protected static $db_tables_fields = array('product_id', 'title', 'content', 'author', 'image_url', 'tags',);

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getProductId()
    {
        return $this->product_id;
    }

    public function setProductId($product_id): void
    {
        $this->product_id = $product_id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content): void
    {
        $this->content = $content;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    public function getImageUrl()
    {
        return $this->image_url;
    }

    public function setImageUrl($image_url): void
    {
        $this->image_url = $image_url;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags($tags): void
    {
        $this->tags = $tags;
    }



}