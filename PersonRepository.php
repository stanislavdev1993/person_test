<?php

/**
 * Class PersonRepository
 * @property PDO $db
 */
class PersonRepository
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    protected function removeLastChar(string $str)
    {
        return substr($str, 0, strlen($str) - 1);
    }

    protected function getInsertFields(array $attributes)
    {
        $fields = '(';

        foreach ($attributes as $key => $value) {
            $fields .= $key . ',';
        }

        $fields = $this->removeLastChar($fields);
        $fields .= ')';

        return $fields;
    }

    protected function getInsertValues($attributes)
    {
        $values = '(';

        foreach ($attributes as $key => $value) {
            $values .= ':' . $key . ',';
        }

        $values = $this->removeLastChar($values);
        $values .= ')';

        return $values;
    }

    /**
     * @param PersonInterface $person
     * @return bool
     */
    public function save(PersonInterface $person)
    {
        $attributes = $person;

        $stmt = $this->db->prepare("
                                    INSERT INTO persons {$this->getInsertFields($attributes)} 
                                    VALUES {$this->getInsertValues($attributes)}"
        );

        return $stmt->execute($attributes);
    }
}