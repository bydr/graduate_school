<?php

namespace models;


class Supervisor
{
    private $id;
    private $fio;
    private $date_birth;
    private $registration;
    private $specialty;
    private $rank;
    private $date_employent;
    private $date_dismissal;
    private $phone;
    private $diplom_series;
    private $diplom_number;
    private $education;
    private $passport;
    private $issued_by;
    private $issued_when;

    /**
     * Supervisor constructor.
     * @param $id
     * @param $fio
     * @param $date_birth
     * @param $registration
     * @param $specialty
     * @param $rank
     * @param $date_employent
     * @param $date_dismissal
     * @param $phone
     * @param $diplom_series
     * @param $diplom_number
     * @param $education
     * @param $passport
     * @param $issued_by
     * @param $issued_when
     */
    public function __construct($id, $fio, $date_birth, $registration, $specialty, $rank, $date_employent, $date_dismissal, $phone, $diplom_series, $diplom_number, $education, $passport, $issued_by, $issued_when)
    {
        $this->id = $id;
        $this->fio = $fio;
        $this->date_birth = $date_birth;
        $this->registration = $registration;
        $this->specialty = $specialty;
        $this->rank = $rank;
        $this->date_employent = $date_employent;
        $this->date_dismissal = $date_dismissal;
        $this->phone = $phone;
        $this->diplom_series = $diplom_series;
        $this->diplom_number = $diplom_number;
        $this->education = $education;
        $this->passport = $passport;
        $this->issued_by = $issued_by;
        $this->issued_when = $issued_when;
    }


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
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * @param mixed $fio
     */
    public function setFio($fio)
    {
        $this->fio = $fio;
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
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * @param mixed $specialty
     */
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
    }

    /**
     * @return mixed
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @param mixed $rank
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * @return mixed
     */
    public function getDateEmployent()
    {
        return $this->date_employent;
    }

    /**
     * @param mixed $date_employent
     */
    public function setDateEmployent($date_employent)
    {
        $this->date_employent = $date_employent;
    }

    /**
     * @return mixed
     */
    public function getDateDismissal()
    {
        return $this->date_dismissal;
    }

    /**
     * @param mixed $date_dismissal
     */
    public function setDateDismissal($date_dismissal)
    {
        $this->date_dismissal = $date_dismissal;
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
    public function getDiplomSeries()
    {
        return $this->diplom_series;
    }

    /**
     * @param mixed $diplom_series
     */
    public function setDiplomSeries($diplom_series)
    {
        $this->diplom_series = $diplom_series;
    }

    /**
     * @return mixed
     */
    public function getDiplomNumber()
    {
        return $this->diplom_number;
    }

    /**
     * @param mixed $diplom_number
     */
    public function setDiplomNumber($diplom_number)
    {
        $this->diplom_number = $diplom_number;
    }

    /**
     * @return mixed
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * @param mixed $education
     */
    public function setEducation($education)
    {
        $this->education = $education;
    }

    /**
     * @return mixed
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * @param mixed $passport
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;
    }

    /**
     * @return mixed
     */
    public function getIssuedWhen()
    {
        return $this->issued_when;
    }

    /**
     * @param mixed $issued_when
     */
    public function setIssuedWhen($issued_when)
    {
        $this->issued_when = $issued_when;
    }

    /**
     * @return mixed
     */
    public function getIssuedBy()
    {
        return $this->issued_by;
    }

    /**
     * @param mixed $issued_by
     */
    public function setIssuedBy($issued_by)
    {
        $this->issued_by = $issued_by;
    }



}
