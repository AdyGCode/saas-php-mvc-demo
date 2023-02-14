<?php

namespace App\Models;

/*
 * CREATE TABLE IF NOT EXISTS products (
 *  id int(10) NOT NULL auto_increment,
 *  title varchar(255) collate utf8_unicode_ci NOT NULL,
 *  description text collate utf8_unicode_ci,
 *  price decimal(12,5) NOT NULL,
 *  sku varchar(255) collate utf8_unicode_ci NOT NULL,
 *  image varchar(255) collate utf8_unicode_ci NOT NULL,
 *  PRIMARY KEY  (id)
 * ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
 *
 */

class Product
{

    protected $id;
    protected $title;
    protected $description;
    protected $price;
    protected $sku;
    protected $image;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


    // CRUD / BREAD Operators

    public function create(array $data)
    {    }

    public function read(int $id)
    {
        $this->title = "My Test Product";
        $this->description = "Some description";
        $this->price = 4.66;
        $this->sku = "PHP-MVC-001";
        $this->image = "https://via.placeholder.com/150";

        return $this;
    }

    public function update(int $id, array $data)
    {    }

    public function delete(int $id)
    {    }
}