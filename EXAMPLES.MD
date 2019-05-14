- Для инициализации библиотеки необходимо создать пустой файл в корне проекта:

```index.php```

- Выполните команду:


*composer install*

- Запишите в файл:

```
// index.php

$loader = require_once __DIR__ . '/vendor/autoload.php';

use TargetApi\TargetClient;
```

***В случае прямых запросов:***

```
$client = new TargetClient([
    'app_id' => 'dWesGENrjZBV8GCF',
    'app_secret' => 'dOAWgK4KYqGxQtDo6mkp1L8khqmXCPZU6NELHpNcr2AMKtsva4vAUq6B...',
    'base_path' => 'https://target.my.com/',
    'api' => 'api/v2/',
]);

$client->setAccessToken([
    'access_token' => '9zfUakDdV1pc5njoG7vbjpID9YEwWHXarUYGUb7iRIoSqvVM8tQY8r9VGC9k...',
    'token_type' => 'Bearer',
    'expires_in' => 86400,
    'refresh_token' => 'DNY6QralBdSE549mwZ2J4vIOzeG4nVWvivTq8CHxbitCLLSdCWFvAr0fwMK',
]);
$client->fetchAccessTokenWithRefreshToken();
```

***В случае запросов через proxy:***

```
$client = new TargetClient([
    'base_path' => 'https://target-proxy.icontext.ru/',
    'api' => 'api/v2/',
    'client_name' => 'some_number@agency_client',
    'proxy_token' => 'proxy_access_token',
]);
```

##### Создание сервиса вызова запросов:

*$audience = new TargetApi\Audience($client);*

##### Запросы:

- **СounterGoals**

Извлечь список всех целей указанного счетчика:

```
$result = $audience->counterGoals()->get(2368507);
```

```********************************************************************```

Создать цель указанного счетчика:

```
$model = new \TargetApi\Model\Audiences\RemarketingCounterGoal();
$model
    ->setCondition('uss')
    ->setGoalType('content')
    ->setName('test3 goal3')
    ->setSubstr('/test3/test3/test3');
$result = $audience->counterGoals()->post(2368507, $model);
```

*В случае успеха получаем модель запрошенных данных*


- **DmpSegment**

Получить список всех внешних сегментов, доступных для добавления в источники данных:

$result = $audience->dmpSegment()->get();

*В случае успеха получаем модель запрошенных данных:*

```  0 => TargetApi\Model\Audiences\DmpSegment {#53
       -entriesCount: null
       -id: 16105
       -isActivated: null
       -key: "00OA2e6fCmIfh5kAhtZcjMFFFna3RY"
       -lastUpdate: null
       -name: null
       -objectId: 2505867
       -objectType: "users_list"
       -owner: null
       -price: null
     }
     1 => TargetApi\Model\Audiences\DmpSegment {#54
       -entriesCount: null
       -id: 16106
       -isActivated: null
       -key: "00OA2e6fCmIfh5kAhtZcjMFFFna3RY"
       -lastUpdate: null
       -name: null
       -objectId: 2505869
       -objectType: "users_list"
       -owner: null
       -price: null
     }
     2 => TargetApi\Model\Audiences\DmpSegment {#55
       -entriesCount: null
       -id: 16107
       -isActivated: null
       -key: "00OA2e6fCmIfh5kAhtZcjMFFFna3RY"
       -lastUpdate: null
       -name: null
       -objectId: 2505871
       -objectType: "users_list"
       -owner: null
       -price: null
     }
     3 => TargetApi\Model\Audiences\DmpSegment {#64
       -entriesCount: null
       -id: 16108
       -isActivated: null
       -key: "00OA2e6fCmIfh5kAhtZcjMFFFna3RY"
       -lastUpdate: null
       -name: null
       -objectId: 2505873
       -objectType: "users_list"
       -owner: null
       -price: null
     }
```

**Вызовы методов статистики отличается от других:**

- Для извлечения информацию по лидам, полученным с помощью рекламных объявлений.

Создайте тип-модель:

```
$leadInfo = new \TargetApi\Types\LeadInfoTypes();
```

Укажите форму лидов:

```
$leadInfo->setFormId(mt_rand(1, 99999));
```

Лимиты, при большом количестве лидов на форму:

```
$leadInfo->setLimit(10);
```

Создайте запрос:

```
$result = $statistics->leadInfo()->get($leadInfo);
```

- Получени информации о взаимосвязи форм LeadAds, баннеров и кампаний

Создайте тип-модель:

```
$leadForm = new \TargetApi\Types\LeadFormTypes();
```

Задайте все необходимые поля для модели и передайте ее в метод:

```
$leadForm->setLimit(10);
......

$result = $statistics->leadForm()->get($leadForm);

```