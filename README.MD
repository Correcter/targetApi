#### Клиент для работы с target.my.com

##### Приложение реализует все доступные методы TargetMail.

##### Установка из корневой директории:

- Из репозитория bitbucket:

**git clone git@bitbucket.org:icontext/targetapi.git**

- Из репозитория gitlab:

**git clone git@gitlab.icontextdev.ru:target-mail/targetapi.git**

**composer install**

##### Настройки по-умолчанию:

- api - api/v2/
- base_path - https://target.my.com/

##### Набор параметров для создания подключения к TargetMail:

- app_id  - ID Клиента
- app_secret - Secret Клиента
- base_path  - https://target.my.com/
- api - api/v2/

##### Необходимый набор параметров для OAuth2 аутентификации:

- access_token  - динамически обновляемый access токен
- token_type  - тип аутентифиикации
- expires_in  - время жизни токена
- refresh_token  - используется для обновления access_token

##### Набор параметров для создания подключения к TargetMail через Proxy:

- api - api/v2/
- base_path   - https://target-proxy.icontext.ru/
- client_name  - Secret Клиента
- proxy_token - Токен для proxy

##### Набор доступных ресурсов:

- AdvertisingObjects
- Audience
- Finance
- Handbooks
- PartnerPlatforms
- PriceLists
- Statistics
- Users

***Для ознакомления со всеми возможными параметрами запросов к объектам, ознакомьтесь с документацией:***

https://target.my.com/doc/apiv2/ru/objects/detailed.html

***Набор доступных ресурсов, с необходимыми для запросов параметрами, можно найти по адресу:***

https://target.my.com/doc/apiv2/ru/resources/detailed.html

#### Пример конфигурации для запроса напрямую к TargetMail:

- Создаем клиента:
```
$client = new TargetClient([
    'app_id' => 'FjTCKgMXOwadWLVmj',
    'app_secret' => ''
]);
```
- Создаем accessToken: 

```
$client->setAccessToken([
    'access_token' => '',
    'token_type' => 'Bearer',
    'expires_in' => 86400,
    'refresh_token' => ''
]);
```

- Освежаем accessToken, в случае необходимости

 *$client->fetchAccessTokenWithRefreshToken();*

- Создаем объект для работы с конкретным ресурсом, используя созданного нами ранее клиента:

```$advObjects = new TargetApi\AdvertisingObjects($client);```

#### Примеры запросов

- Создаем экземпляр желаемого ресурса:

***$finance = new TargetApi\Finance($client);***

 Для запросов GET:

- Нет необходимости передавать модель

- Вызов будет выглядеть следующим образом:

***$result = $finance->transactionGroups()->get();***

###### Параметры запроса можно уточнить по ссылке:

https://target.my.com/doc/apiv2/ru/resources/billing.transaction_groups.html

- В случае наличия обязательных параметров, необходимо передавать их непосредственно в метод: ***get($param1, $param2..)***

 Для запросов **POST**, необходимо создать **модель** и задать все обязательные для нее параметры:

***$model = new \TargetApi\Model\Finance\Transaction();***
***$model->setAmount(100);*** ```--> это поле обязательно для заполнения```

##### Все возможные и обязательные параметры модели можно уточнить по ссылке: 

https://target.my.com/doc/apiv2/ru/objects/billing.api_v2.transaction_group.TransactionGroupResource.html

- Если *POST* запрос должен иметь параметры, необходимо передавать их перед моделью: **post($param1, $param2.. $model)**

***$result = $finance->transaction()->post('billing/transactions/to/', 1234567,  $model);***

Для запросов на удаление записей следует выполнить аналогичный *GET* вызов.
В качестве параметра такие запросы, как правило, принимают ID удаляемой записи:

**DELETE**

$priceLists = new TargetApi\PriceLists($client);


$result = $priceLists->carsPricelist()->delete(153);

[Полные примеры запросов](./EXAMPLES.MD)

**Пример ответа, в случае успешного выполнения**


```
 array:3 [
    0 => TargetApi\Model\Finance\TransactionGroup {#89
      -amount: "62000"
      -clientId: 1010219
      -date: null
      -description: "Перевод клиенту"
      -firstAt: "2016-05-12 15:06:57"
      -id: 23715661
      -invoices: TargetApi\Collections\ArrayCollection {#90
        -elements: []
      }
      -isCommercial: false
      -lastAt: "2016-05-16 18:28:20"
      -paymentsTotal: "0"
      #receipt: null
      -taxAmount: "0"
      -type: "deposit"
    }
    1 => TargetApi\Model\Finance\TransactionGroup {#88
      -amount: "10399.75"
      -clientId: null
      -date: null
      -description: "Переходы кампании 'Ренессанс кредит 55+ интересы тизер' (6419377)"
      -firstAt: "2016-05-12 15:09:15"
      -id: 23715730
      -invoices: TargetApi\Collections\ArrayCollection {#118
        -elements: []
      }
      -isCommercial: false
      -lastAt: "2016-05-30 14:11:42"
      -paymentsTotal: "0"
      #receipt: null
      -taxAmount: "0"
      -type: "charge"
    }
    2 => TargetApi\Model\Finance\TransactionGroup {#119
      -amount: "6216.7"
      -clientId: null
      -date: null
      -description: "Переходы кампании 'Кредитные карты 25+ интересы 240*400' (6430704)"
      -firstAt: "2016-05-18 11:56:23"
      -id: 23732655
      -invoices: TargetApi\Collections\ArrayCollection {#120
        -elements: []
      }
      -isCommercial: false
      -lastAt: "2016-05-31 21:17:03"
      -paymentsTotal: "0"
      #receipt: null
      -taxAmount: "0"
      -type: "charge"
    }
    3 => TargetApi\Model\Finance\TransactionGroup {#121
      -amount: "6800.3"
      -clientId: null
      -date: null
      -description: "Переходы кампании 'Кредитные карты 24+ интересы тизер' (6430530)"
      -firstAt: "2016-05-16 18:36:43"
      -id: 23727175
      -invoices: TargetApi\Collections\ArrayCollection {#122
        -elements: []
      }
      -isCommercial: false
      -lastAt: "2016-05-31 21:55:47"
      -paymentsTotal: "0"
      #receipt: null
      -taxAmount: "0"
      -type: "charge"
    }
]
```
 
#### В случае ошибки будет выброшено исключение, с причиной неудачного запроса