# Fries

Although I'm likely to tweak this a bit more before Friday, these are my 
thoughts on implementing OO, thus far.


## Getting started

I'd look at [Fries](src/Fries.php) ([test](tests/FriesTest.php)) for the basic idea and [WaffleFries](src/WaffleFries.php) ([test](tests/WaffleFriesTest.php)) for a
look at how abstraction would work. I refrained from using dependency injection
for the Peeler, Slicer, Fryer, Salter and Boxer objects, although that would 
make it easier to test. We could use mocks to get at those methods if necessary.

This is fully tested and namespaced so a `composer install` should get you up 
and running and `composer test` will run the unit tests.

### Basic structure

#### Interfaces
- BoxableInterface
- FryableInterface
- PeelableInterface
- SaltableInterface
- SliceableInterface

#### Abstract Classes
- AbstractBoxed
- AbstractFried
- AbstractPeeled
- AbstractSalted
- AbstractSliced
- AbstractUnpeeled

These represent the product of an interface getting used ie:// calling 
FryableInterface::fry will result in an AbstractFried object

#### Entities
- Boxer
- FriedPotato
- Fries
- FryBox
- Fryer
- PeeledPotato
- Peeler
- Potato
- RussetPotato
- SaltedPotato
- Salter
- SlicedPotato
- Slicer
- UnpeeledPotato
- WaffleFries
- WaffleSlicer

### Things I'm not happy with
- I don't like the use of Fries::$state to keep track of where we are in the process. My first implementation used chaining to negate the need for internal state, but I didn't want to violate the Law of Demeter.
- I'd be happier with Dependency Injection instead of overriding the protected methods, but I think I'm in the minority. This will make testing that WaffleSlicer::slice gets called more difficult, but doable.
- Not sold on directory structure/naming conventions for interfaces and abstract classes, but they are [PSR suggestions](https://www.php-fig.org/bylaws/psr-naming-conventions/).
