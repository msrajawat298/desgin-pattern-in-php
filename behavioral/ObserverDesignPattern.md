The Observer Design Pattern is a behavioral design pattern that defines a one-to-many dependency between objects so that when one object changes its state, all its dependents are notified and updated automatically. 

* This pattern is useful in scenarios where a subject (or publisher) needs to notify a group of observers (or subscribers) about changes without knowing who or what those observers are.

* You can take the example of youtube creator and users.
When creator uploads the video all the subscribers got the notification.

Here's an example of implementing the Observer Design Pattern in PHP:

```php
<?php

// Subject (Observable)
interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}

// Concrete Subject
class NewsAgency implements Subject {
    private $observers = [];
    private $news;

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function setNews($news) {
        $this->news = $news;
        $this->notify();
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getNews() {
        return $this->news;
    }
}

// Observer
interface Observer {
    public function update(Subject $subject);
}

// Concrete Observer
class NewsReader implements Observer {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update(Subject $subject) {
        if ($subject instanceof NewsAgency) {
            echo "{$this->name} received news: {$subject->getNews()}\n";
        }
    }
}

// Usage example
$newsAgency = new NewsAgency();

$reader1 = new NewsReader("Reader 1");
$reader2 = new NewsReader("Reader 2");

$newsAgency->attach($reader1);
$newsAgency->attach($reader2);

$newsAgency->setNews("Breaking news: Observer pattern in action!");

$newsAgency->detach($reader1);

$newsAgency->setNews("More news: Detached reader didn't receive this.");

?>
```

In this example:

- `NewsAgency` is the subject (observable) that maintains a list of observers (`NewsReader` instances).
- `NewsReader` is an observer that implements the `update` method to receive and process updates from the subject.
- The `attach` method is used to add observers, and `detach` is used to remove them.
- When `setNews` is called on the `NewsAgency`, it triggers the `notify` method, which, in turn, calls the `update` method on all registered observers.

This pattern helps achieve a loose coupling between the subject and its observers, allowing for easy addition or removal of observers without modifying the subject. It is commonly used in event handling systems and other scenarios where changes in one part of the system need to be communicated to multiple other parts.


## References Links
[The SplSubject interface](https://www.php.net/manual/pt_BR/class.splsubject.php)
[Observer in PHP](https://refactoring.guru/design-patterns/observer/php/example#:~:text=to%20the%20event.-,Real%20World%20Example,well%20as%20only%20individual%20ones.)
[Observer Pattern In PHP 8+](https://medium.com/codex/observer-pattern-in-php-8-569c71dd7837#:~:text=The%20Observer%20Pattern%20is%20one,object%20needs%20to%20notify%20others)