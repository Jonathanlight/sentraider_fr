# Faker Providers

As explained in [nelmio/alice](https://github.com/nelmio/alice#custom-faker-data-providers) documentation, you have
three ways to declare custom data provider. To use [Custom Faker Provider classes][1]
you will have to declare them as services:

```php
<?php

namespace AppBundle\DataFixtures\Faker\Provider;

class FooProvider
{
    public static function foo($str)
    {
        return 'foo'.$str;
    }
}
```

Then declare it as a service with the `nelmio_alice.faker.provider` tag unless you have `autoconfigure` enabled:

```yaml
# config/services.yaml

services:
    AppBundle\DataFixtures\Faker\Provider\FooProvider: ~
```

Without `autoconfigure`:

```yaml
# config/services.yaml

services:
    AppBundle\DataFixtures\Faker\Provider\FooProvider:
        tags: [ { name: nelmio_alice.faker.provider } ]
```

That's it! You can now use it in your fixtures:

```yaml
# fixtures/orm/dummy.yml (Sf4)
# or app/Resources/fixtures/orm/dummy.yml

AppBundle\Entity\Dummy:
    brand{1..10}:
        name: <foo('a string')>
```

**Warning**: rely on [Custom Faker Providers helpers][2] to generate random data (most of them are static).

Refer to [nelmio/alice](https://github.com/nelmio/alice#custom-faker-data-providers) for a more advanced documentation.


Previous chapter: [Advanced usage](advanced-usage.md)<br />
Next chapter: [Custom Alice Processors](alice-processors.md)

[1]: https://github.com/nelmio/alice/blob/2.x/doc/customizing-data-generation.md#add-a-custom-faker-provider-class
[2]: https://github.com/fzaninotto/Faker/blob/master/src/Faker/Provider/Base.php
