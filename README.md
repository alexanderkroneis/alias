<a href="https://supportukrainenow.org/">
<img src="https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner-direct.svg" width="100%">
</a>

------

# Alias CLI
A PHP CLI application that helps you organize your aliases.

<p align="center">
  <a href="https://github.com/gipfel-dev/alias/actions"><img src="https://img.shields.io/github/workflow/status/gipfel-dev/alias/Tests.svg" alt="Build Status"/></a>
  <a href="https://packagist.org/packages/gipfel-dev/alias"><img src="https://img.shields.io/packagist/dt/gipfel-dev/alias.svg" alt="Total Downloads"/></a>
  <a href="https://packagist.org/packages/gipfel-dev/alias"><img src="https://img.shields.io/packagist/v/gipfel-dev/alias.svg?label=stable" alt="Latest Stable Version"/></a>
  <a href="https://packagist.org/packages/gipfel-dev/alias"><img src="https://img.shields.io/packagist/l/gipfel-dev/alias.svg" alt="License"/></a>
</p>

## Installation
```bash
composer require gipfel-dev/alias
```

After installing Alias CLI we recommend to call the setup command once for automatically creation of `aliases.json`.

```bash
./vendor/bin/alias setup
```

## Usage
### Summary
To get an overview of all available commands you can call alias without any parameters.
```bash
./vendor/bin/alias
```

### Execute an alias
After defining your aliases in `aliases.json` or `aliases.dev.json` you can call
```bash
./vendor/bin/alias execute
```

to get an overview of all available aliases. You can also call an alias directly:

```bash
./vendor/bin/alias execute {alias}
```

## aliases.json
At the moment our package looks for `aliases.dev.json` and if not exists for `aliases.json`. Run `./vendor/bin/alias setup` for automatically creating a `aliases.json` file. Please be aware that your values must be executable by your terminal.

### Allowed schema
```json
{
  "about": "echo 'This is allowed.'",
  
  "update": [
    "echo 'This is also allowed'",
    "composer update",
    "npm update"
  ] 
}
```

## Support the development
**Do you like this project? Support it by donating**

- PayPal: [Donate](paypal.me/alexandergaal95)
- Patreon: [Donate](https://www.patreon.com/alexandergaal)

## License
Alias CLI is an open-source software licensed under the MIT license.