# LSBProjectBlacklistBundle
Flexible bundle to handle blacklist with annotations. 
Highly inspired by https://github.com/AntoineLemaire/BlacklistBundle

Installation
============

Applications that use Symfony Flex
----------------------------------

Open a command console, enter your project directory and execute:

```console
$ composer require lsbproject/blacklist-bundle
```

Applications that don't use Symfony Flex
----------------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require lsbproject/blacklist-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    LSBProject\BlacklistBundle\LSBProjectBlacklistBundle::class => ['all' => true],
];
```

Usage
=====

```php
    use LSBProject\BlacklistBundle\Validator\Constraints\IsNotBlacklisted;

    //...

    /**
     * 'baz' type isn't defined in bundle, so it will be handled with
     * default_type class. Default one has no validation and will compare
     * any value with other existed
     *
     * @IsNotBlacklisted(type="baz", caseSensetive=true)
     * @var string
     */
    private $bar;

    /**
     * 'email' type will dissallow to put invalid emails in blacklist
     *
     * @IsNotBlacklisted(type="email", caseSensetive=true)
     * @var string
     */
    private $email;
```

Types
-----

Bundle tries to validate exact blacklist type with validator types.
You can implement your own type or use default one.
To add your own validator just implement `TypeInterface`

e.g.
```php
use LSBProject\BlacklistBundle\Type\TypeInterface;
use LSBProject\BlacklistBundle\Type\DefaultType;

class EmailType extends DefaultType implements TypeInterface
{
    /**
     * {@inheritDoc}
     */
    public function satisfies(string $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    /**
     * {@inheritDoc}
     */
    public function supports(string $type): bool
    {
        return $type === 'email';
    }
}
```

and tag it with `lsbproject.blacklist.type`

```yaml
  email_blacklist_type:
    class: 'LSBProject\BlacklistBundle\Type\EmailType'
    tags:
      - { name: 'lsbproject.blacklist.type' }
```

Default
-------

If there are no supported types found bundle will use default type.
You can override it in config:

```yaml
    lsb_project_blacklist:
      default_type: LSBProject\BlacklistBundle\Type\DefaultType
```

Validate storage
----------------

If you do not want to use database as a storage for blacklist you
can implement your own `validate` method for a separate or default types.

example of default `validate`

```php
class DefaultType implements TypeInterface
{
    //...    

    /**
     * {@inheritDoc}
     */
    public function validate(
        string $value,
        Constraint $constraint,
        ExecutionContextInterface &$context,
        BlacklistManagerInterface $manager
    ): void {
        if ($manager->isBlacklisted($value, $constraint->type, $constraint->caseSensetive)) {
            $context->buildViolation($constraint->message)->addViolation();
        }
    }
}
```
