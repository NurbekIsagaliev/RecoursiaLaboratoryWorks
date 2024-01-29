<?php



interface PerformInterface {
    public function perform();
}


class Doll implements PerformInterface {
    private $type;
    private $gender;
    private $age;
    private $color;
    private $text;

    public function __construct($type, $gender, $age, $color, $text) {
        $this->type = $type;
        $this->gender = $gender;
        $this->age = $age;
        $this->color = $color;
        $this->text = $text;
    }

    public function perform() {
        echo $this->text .'<br>';
    }
}

// Класс Кукловод
class Puppeteer implements PerformInterface {
    private $gender;
    private $voiceType;
    private $talent;
    private $dolls;

    public function __construct($gender, $voiceType, $talent) {
        $this->gender = $gender;
        $this->voiceType = $voiceType;
        $this->talent = $talent;
        $this->dolls = [];
    }

    public function addDoll(Doll $doll) {
        $this->dolls[] = $doll;
    }

    public function perform() {
        foreach ($this->dolls as $doll) {
            $doll->perform();
        }
    }
}

// Класс Актер
class Actor implements PerformInterface {
    private $gender;
    private $age;
    private $text;

    public function __construct($gender, $age, $text) {
        $this->gender = $gender;
        $this->age = $age;
        $this->text = $text;
    }

    public function perform() {
        echo $this->text . '<br>';
    }
}


class Performance {
    private $queue = [];

    public function addToQueue(PerformInterface $performer) {
        $this->queue[] = $performer;
    }

    public function start() {
        foreach ($this->queue as $performer) {
            $performer->perform();
        }
    }
}

// Класс Зритель
class Viewer {
    private $reaction;

    public function __construct($reaction) {
        $this->reaction = $reaction;
    }

    public function applaud() {
        echo $this->reaction .'<br>';
    }
}

// Класс Театр
class Theater {
    private $performance;
    private $audience = [];

    public function setPerformance(Performance $performance) {
        $this->performance = $performance;
    }

    public function addViewer(Viewer $viewer) {
        $this->audience[] = $viewer;
    }

    public function run() {
        $this->performance->start();
        foreach ($this->audience as $viewer) {
            $viewer->applaud();
        }
    }
}


$performance = new Performance();
$actor = new Actor("male", 30, "This is an actor's performance.");
$doll1 = new Doll("puppet", "female", 5, "red", "I'm a puppet!");
$doll2 = new Doll("puppet", "male", 3, "blue", "Hello from the puppet!");
$puppeteer = new Puppeteer("male", "deep", 8);

$puppeteer->addDoll($doll1);
$puppeteer->addDoll($doll2);

$performance->addToQueue($actor);
$performance->addToQueue($puppeteer);

$viewer1 = new Viewer("Браво!");
$viewer2 = new Viewer("На бис!");

$theater = new Theater();
$theater->setPerformance($performance);
$theater->addViewer($viewer1);
$theater->addViewer($viewer2);

$theater->run();




