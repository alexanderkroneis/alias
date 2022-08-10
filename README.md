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

<img src="./docs/images/setup-example.png" width="400px"/>

## Usage
### Summary
To get an overview of all available commands you can call alias without any parameters.

<img src="./docs/images/summary-example.png" width="400px"/>

### Execute an alias
After defining your aliases in `aliases.json` or `aliases.dev.json` you can call

<img src="./docs/images/execute-example.png" width="400px"/>

to get an overview of all available aliases. You can also call an alias directly:

<img src="./docs/images/execute-with-alias-example.png" width="400px"/>

## aliases.json
At the moment our packages scans your root directory of your project for following files
- `aliases.dev.json`
- `aliases.json`

Please be aware that your values must be executable by your terminal.

### `aliases.json` example
<img src="./docs/images/aliases-example.png" width="400px"/>

## Support the development
**Do you like this project? Support it by donating**

- PayPal: [Donate](https://paypal.me/alexandergaal95)
- Patreon: [Donate](https://www.patreon.com/alexandergaal)

## License
Alias CLI is an open-source software licensed under the MIT license.