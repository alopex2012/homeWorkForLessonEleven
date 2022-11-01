<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework for Lesson 11</title>
    <style>
        body {
            max-width: 800;
            color: darkblue;
        }
    </style>
</head>

<body>

    <h5>Заняття 11. Наслідування класів </h5>
    <hr>

    <?php

    require_once __DIR__ . '/vendor/autoload.php';

    use App\User, App\Employee, App\Driver, App\Programmer, App\Student;

    echo "<pre>",
    "
    1.	Не підглядаючи в мій код, реалізуйте такі ж класи User, Employee
        ",
    "</pre>";

    $newUser = new User(); //create an instance of the class
    $newUser->setName("Ahmet");
    $newUser->setAge(28);
    echo ("Name: " . $newUser->getName() . " " . "Age: " . $newUser->getAge()); //display $newUser information
    echo "<br />";

    $newEmployee = new Employee(); //create an instance of the class
    $newEmployee->setName("Abdula");
    $newEmployee->setAge(54);
    echo ("Name: " . $newEmployee->getName() . " " . "Age: " . $newEmployee->getAge()); //display $newEmployee information
    echo "<br />";

    echo "<hr />";

    echo "<pre>",
    "
    2.	Не підглядаючи в мій код, реалізуйте такий же клас Student, що успадковує від класу User.
    ",
    "</pre>";

    $newStudent = new Student(); //create an instance of the class
    $newStudent->setName("Ali");
    $newStudent->setAge(19);
    echo ("Name: " . $newStudent->getName() . " " . "Age: " . $newStudent->getAge()); //display $newStudent information
    echo "<br />";

    echo "<hr />";

    echo "<pre>",
    "
    3.	Зробіть клас Programmer, який успадковуватиметься від класу Employee. 
    Нехай новий клас має властивість langs, в якому зберігається масив мов, якими володіє програміст. 
    Зробіть також геттер та сеттер для цієї властивості.
    ",
    "</pre>";

    $newProgrammer = new Programmer(); //create an instance of the class
    $newProgrammer->setName("Faizulo");
    $newProgrammer->setAge(20);
    $newProgrammer->setLangs(["PHP", "Javascript", "C#"]);
    echo ("Name: " . $newProgrammer->getName() . " " . "Age: " . $newProgrammer->getAge()); //display $newProgrammer information
    echo "<br />";
    echo "Langs: ";
    foreach ($newProgrammer->getLangs() as $item) {
        echo "{$item}" . "  ";
    }

    echo "<hr />";

    echo "<pre>",
    "
    4.	Зробіть клас Driver (водій), який успадковуватиметься від класу Employee. 
    Нехай новий клас додає такі властивості: стаж водія, категорія водіння (A, B, C, D), 
    а також геттери і сеттери до них.
    ",
    "</pre>";

    $newDriver = new Driver(); //create an instance of the class
    $newDriver->setName("Omar");
    $newDriver->setAge(31);
    $newDriver->setExperience(10);
    $newDriver->setCategory(["B", "C"]);
    echo ("Name: " . $newDriver->getName() . " " . "Age: " . $newDriver->getAge()); //display $newDriver information
    echo "<br />";
    echo "Experience: " . $newDriver->getExperience();
    echo "<br />";
    echo "Categories: ";
    foreach ($newDriver->getCategory() as $item) {
        echo "{$item}" . "  ";
    }
    echo "<hr />";

    echo "<pre>",
    "
    5.	Скопіюйте мій код класу User. Самостійно не підглядаючи в мій код реалізуйте
    описаний клас Student з методами getCourse, setCourse та addOneYear.
    ",
    "</pre>";

    $newStudent = new Student(); //create an instance of the class
    $newStudent->setName("Muhammad");
    $newStudent->setAge(24);
    $newStudent->setCourse(6);
    echo ("Name: " . $newStudent->getName() . " " . "Age: " . $newStudent->getAge()); //display $newStudent information
    echo "<br />";
    echo "Course: " . $newStudent->getCourse();
    echo "<br />";
    $newStudent->addOneYear();
    echo ("Name: " . $newStudent->getName() . " " . "Age: " . $newStudent->getAge()); //display $newStudent information
    echo "<hr />";

    ?>

</body>

</html>