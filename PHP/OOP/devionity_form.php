<?php

class ContactForm {

    public function __construct()
    {
        $this->name = $_POST['name'];
        $this->age = $_POST['age'];
        $this->comment = $_POST['text'];
    }

    public $name = 'name';
    public $age = 'age';
    public $comment = 'text';
}

$form = new ContactForm();
echo "<pre>";
print_r($form);
echo "</pre>";

?>