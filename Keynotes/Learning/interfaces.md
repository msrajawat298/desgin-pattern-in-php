## PHP - Interfaces vs. Abstract Classes
Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

Interfaces cannot have properties, while abstract classes can
All interface methods must be public, while abstract class methods is public or protected
All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
Classes can implement an interface while inheriting from another class at the same time

Note: interfaces in PHP cannot have properties (i.e., instance variables). However, interfaces can have constants. Constants in an interface are not the same as properties; they are immutable values that can be accessed directly using the interface name.


In PHP, interfaces can define constants, and these constants can be accessed using the interface name followed by the scope resolution operator (::). This allows you to use the constants defined in an interface without needing to instantiate any class.

## Explanation

### Interface with Constants

An interface in PHP can define constants that are meant to be used by any class that implements the interface or even directly via the interface itself. Here’s an example of how this works:

Interface: ExistingAccounts

```php 
<?php
namespace TransactionProcessing\Domain;

interface ExistingAccounts
{
    const BANK_EUR = 'BANK_EUR';
    const BANK_USD = 'BANK_USD';
    // Other constants can be defined here
}
```

In this example, the ExistingAccounts interface defines two constants: BANK_EUR and BANK_USD. These constants can be accessed directly using the interface name.

You can access these constants directly using the interface name followed by the scope resolution operator (::). Here’s how you can use the constants defined in the ExistingAccounts interface:

```php
<?php
use TransactionProcessing\Domain\ExistingAccounts;

$accountType = ExistingAccounts::BANK_EUR;
echo $accountType; // Outputs: BANK_EUR
```
