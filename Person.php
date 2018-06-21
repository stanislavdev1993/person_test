<?php

class Person implements PersonInterface
{
    protected $first_name;
    protected $last_name;
    protected $age;
    protected $birth_date;

    public function setAttributes(array $attributes)
    {
        $this->first_name = $attributes['first_name'] ?? null;
        $this->last_name = $attributes['last_name'] ?? null;
        $this->age = $attributes['age'] ?? null;
        $this->birth_date = $attributes['birth_date'] ?? null;
    }

    public function getAttributes(): array
    {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'age' => $this->age,
            'birth_date' => $this->birth_date
        ];
    }

    public function setFirstName(string $firstName)
    {
        $this->first_name = $firstName;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getBirthDay()
    {
        return $this->birth_date;
    }

    /**
     * @param mixed $birth_day
     */
    public function setBirthDay($birth_day): void
    {
        $this->birth_date = $birth_day;
    }


}