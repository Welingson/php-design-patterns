<?php

namespace Prototype;

abstract class BookPrototype
{
    protected string $title;
    protected string $subject;
    protected string $titularName;


    abstract public function __clone();

    

   /**
    * @return string
    */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return BookPrototype
     */
    public function setTitle(string $title): BookPrototype
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return BookPrototype
     */
    public function setSubject(string $subject): BookPrototype
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get the value of titularName
     *
     * @return string
     */
    public function getTitularName(): string
    {
        return $this->titularName;
    }

   /**
    * @param string $titularName
    * @return BookPrototype
    */
    public function setTitularName(string $titularName): BookPrototype
    {
        $this->titularName = $titularName;

        return $this;
    }
}
