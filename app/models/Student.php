<?php

namespace models;


class Student
{

    private $id;
    private $name;
    private $surname;
    private $patronymic;
    private $date_birth;
    private $registration;
    private $phone;
    private $theme;
    private $date_begin;
    private $date_end;
    private $type;
    private $supervisor;

    /**
     * Student constructor.
     * @param $id
     * @param $name
     * @param $surname
     * @param $patronymic
     * @param $date_birth
     * @param $registration
     * @param $phone
     * @param $theme
     * @param $date_begin
     * @param $date_end
     * @param $type
     * @param $supervisor
     */
    public function __construct($id, $name, $surname, $patronymic, $date_birth, $registration, $phone, $theme, $date_begin, $date_end, $type, $supervisor)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
        $this->date_birth = $date_birth;
        $this->registration = $registration;
        $this->phone = $phone;
        $this->theme = $theme;
        $this->date_begin = $date_begin;
        $this->date_end = $date_end;
        $this->type = $type;
        $this->supervisor = $supervisor;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getPatronymic()
    {
        return $this->patronymic;
    }

    /**
     * @param mixed $patronymic
     */
    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getDateBirth()
    {
        return $this->date_birth;
    }

    /**
     * @param mixed $date_birth
     */
    public function setDateBirth($date_birth)
    {
        $this->date_birth = $date_birth;
    }

    /**
     * @return mixed
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * @param mixed $registration
     */
    public function setRegistration($registration)
    {
        $this->registration = $registration;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param mixed $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return mixed
     */
    public function getDateBegin()
    {
        return $this->date_begin;
    }

    /**
     * @param mixed $date_begin
     */
    public function setDateBegin($date_begin)
    {
        $this->date_begin = $date_begin;
    }

    /**
     * @return mixed
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * @param mixed $date_end
     */
    public function setDateEnd($date_end)
    {
        $this->date_end = $date_end;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @return mixed
     */
    public function getFio()
    {
        return sprintf("%s %s %s", $this->getSurname(), $this->getName(), $this->getPatronymic());
    }

    /**
     * @return mixed
     */
    public function getFioSupervisor()
    {
        return $this->supervisor;
    }

    /**
     * @param mixed $supervisor
     */
    public function setFioSupervisor($supervisor)
    {
        $this->supervisor = $supervisor;
    }


}
