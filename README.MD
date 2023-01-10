# phaxios

phaxios is a wrapper for php-curl based on [axios](https://axios-http.com/) syntax

## Static methods

- get
- post
- put
- patch
- delete

## optional parameters

|      Parameter      |                   Description                |        Type         |Default Value|
|---------------------|----------------------------------------------|---------------------|----------------------------------|
|`$headers`           |             Headers to send on request       |        Array        |    `[]`                          |
|`$assoc`             |      applies `PDO::FETCH_ASSOC` flag         |       boolean       |`true`                            |
|`$send_body_as_json` |Sends header `Content-Type: application/json` |       boolean       |`true`                            |
|`$auth[$user, $pass]`|sends `Authorization Basic` header to php-curl|Array(string, string)|`['user' => null, 'pass' => null]`|

## Examples

#### GET

```php
<?php
include 'lib/phaxios.php';

$response = phaxios::get('https://jsonplaceholder.typicode.com/users');

echo json_encode($response);
```

#### POST

```php
<?php
include 'lib/phaxios.php';

$response = phaxios::post(
    // url
    'https://jsonplaceholder.typicode.com/users',

    // headers
    ['Authorization: Bearer eyBJroF4keT0k3n'],

    // body
    [
        'name' => 'User One',
        'username'  => 'user-01',
        'address' => [
            'street' => 'sample street',
            'city' => 'sample city',
            'zipcode' => '11111-1111',
            'location' => [
                'lat' => '-12.3456',
                'long' => '65.4321'
            ]
        ],
        'phone' => '55-24-98765-4321',
        'website' => 'userone.com'
    ]);
    
echo json_encode($response);
```

#### PUT

```php
<?php
include 'lib/phaxios.php';
    
$response = phaxios::put(
    // url
    'https://jsonplaceholder.typicode.com/users/1',

    // headers
    ['Authorization: Bearer eyBJroF4keT0k3n'],

    // body
    [
        'name' => 'User Two',
        'username'  => 'user-02',
        'address' => [
            'street' => 'another sample street',
            'city' => 'another sample city',
            'zipcode' => '22222-2222',
            'location' => [
                'lat' => '-65.4321',
                'long' => '12.3456'
            ]
        ],
        'phone' => '55-24-91234-5678',
        'website' => 'usertwo.com'
    ]);
    
echo json_encode($response);
```

#### PATCH

```php
<?php
include 'lib/phaxios.php';
    
$response = phaxios::patch(
    // url
    'https://jsonplaceholder.typicode.com/users/1',

    // headers
    ['Authorization: Bearer eyBJroF4keT0k3n'],

    // body
    ['website' => 'newusertwowebsite.com']);
    
echo json_encode($response);
```

#### DELETE

```php
<?php
include 'lib/phaxios.php';
    
$response = phaxios::delete(
    // url
    'https://jsonplaceholder.typicode.com/users/1',

    // headers
    ['Authorization: Bearer eyBJroF4keT0k3n']);
    
echo json_encode($response);
```

## Known issues

- It only returns the axios equivalent of `response.data`
- It doesn't accept the `axios(url, config)` syntax