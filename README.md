## PHPUnit Exercise

### Running PHPUnit

```bash
./vendor/bin/phpunit

# with filter which tests to run
./vendor/bin/phpunit --filter <pattern>
```

### Running Pint

```bash
./vendor/bin/pint

# with view even more detail about Pint's changes
./vendor/bin/pint -v

# with inspect your code for style errors without actually changing the files
./vendor/bin/pint --test
```