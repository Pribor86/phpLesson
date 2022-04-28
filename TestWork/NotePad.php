<?php

class NotePad
{
    private $phone;
    public $name;
    public $surname;
    const TEXT_SIZE = 20;

    public function getName()
    {
        return $this->name;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function __construct($name, $surname, $phone)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
    }

    public function note_show(){
        echo "Name: $this->name<br>";
        echo "Surname: $this->surname<br>";
        echo "Phone: $this->phone<br>";
        echo "Text size: ".self::TEXT_SIZE."<br>";
    }

    public function __clone()
    {
        $this->name = "";
        $this->surname = "";
        $this->phone = "";
    }
}

$note1 = new NotePad("Ivan", "Ivanov", "123456789");
$note1->note_show();
echo "TEXT_SIZE = ".$note1::TEXT_SIZE."<br>";

$note2 = new NotePad("Petr", "Petrov", "987654321");
$note2->note_show();

$note2_copy = clone $note2;
$note2_copy->note_show();

class NoteChild extends NotePad
{
    public function note_show(){
        echo "Class Name: ".__CLASS__."<br>";
        echo "Вызов родительского метода note_show()<br>";
        parent::note_show();
    }
    public function cut_note(){
        $this->name =  mb_substr($this->name, 0, self::TEXT_SIZE);
        $this->surname =  mb_substr($this->surname, 0, self::TEXT_SIZE);
        $this->setPhone(mb_substr($this->getPhone(), 0, self::TEXT_SIZE));
    }
}

$child1 = new NoteChild("Ivan1", "Ivanov1", "123456789");
$child1->note_show();
$child1_copy = clone $child1;
echo "child1_copy Phone: ".$child1_copy->getPhone(). "<br>";
echo "child1_copy Name: ".$child1_copy->getName(). "<br>";
echo "child1_copy Surname: ".$child1_copy->getSurname(). "<br>";

$child2 = new NoteChild("Petr123456789098765asdasdsad", "Petrov", "98765987654567898765456784321");
$child2->cut_note();
echo "child2 Phone: ".$child2->getPhone(). "<br>";
echo "child2 Name: ".$child2->getName(). "<br>";
echo "child2 Surname: ".$child2->getSurname(). "<br>";
