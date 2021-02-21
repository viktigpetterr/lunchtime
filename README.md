# Bellan

![Packagist Version](https://img.shields.io/packagist/v/viktigpetterr/lunchtime)
![Packagist License](https://img.shields.io/packagist/l/viktigpetterr/lunchtime)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/viktigpetterr/lunchtime/PHP%20Composer)

**Installation**
- ```sh
  $ git clone https://github.com/viktigpetterr/bellan.git
  ```
- ```sh
  $ cd bellan
  ```
- ```sh
  $ composer install
  ```
- ```sh
  $ cp bellan.example.yaml bellan.yaml
  ```
- Open `bellan.yaml` and paste your Slack web hook.


- ```sh
  $ cp working-hours.example.yaml working-hours.yaml
  ```  
- ```sh
  $ crontab -e
  ```
- Append the line `* * * * * /usr/bin/php /[path]/bellan/Bellan.php 1>> /dev/null 2>&1`. Make sure to change `[path]` to your path!

**How to add a restaurant**
 - Create a restaurant class that extend `Restaurant.php` in `src/restaurants`.
 - Implement the functions `parse()` and `__toString()`.
 - Create a test class that extend `RestaurantTest.php` in `tests/restaurants`.
 - Implement the test functions `testParse()` and `testToString()`. Add a static test file in `tests/static` if needed.

**Run tests**
```sh
$  composer test
```
