#### Client to work with target.my.com

##### The application implements all available TargetMail methods.

##### Installation from the root directory:

**git clone git@github.com:Correcter/targetApi.git**

**composer install**

##### Default Settings:

- api - api/v2/
- base_path - https://target.my.com/

##### A set of parameters for creating a connection to TargetMail:

- app_id - Client ID
- app_secret - Client's Secret
- base_path  - https://target.my.com/
- api - api/v2/

##### Required set of parameters for OAuth2 authentication:

- access_token - dynamically updated access token
- token_type - authentication type
- expires_in - token lifetime
- refresh_token - used to update access_token

##### A set of parameters for creating a connection to TargetMail via Proxy:

- api - api/v2/
- base_path - https://target-proxy.icontext.ru /
- client_name - Client's Secret
- proxy_token - Token for proxy

##### Set of available resources:

- AdvertisingObjects
- Audience
- Finance
- Handbooks
- PartnerPlatforms
- PriceLists
- Statistics
- Users

***To get acquainted with all possible parameters of requests to objects, read the documentation:***

https://target.my.com/doc/apiv2/ru/objects/detailed.html

***A set of available resources, with the necessary parameters for requests, can be found at:***

https://target.my.com/doc/apiv2/ru/resources/detailed.html

#### Configuration example for requesting directly to TargetMail:

- Creating a client:
``
$client = new TargetClient([
'app_id' => 'FjTCKgMXOwadWLVmj',
    'app_secret' => ''
]);
``
- Creating an accessToken: 

```
$client->setAccessToken([
    'access_token' => '',
    'token_type' => 'Bearer',
    'expires_in' => 86400,
    'refresh_token' => ''
]);
```

- Refresh the accessToken, if necessary

 *$client->fetchAccessTokenWithRefreshToken();*

- Creating an object to work with a specific resource using the client we created earlier:

```$advObjects = new TargetApi\AdvertisingObjects($client);```

#### Query examples

- Creating an instance of the desired resource:

***$finance = new TargetApi\Finance($client);***

 For GET requests:

- There is no need to transmit the model

- The call will look like this:

***$result = $finance->transactionGroups()->get();***

###### Request parameters can be specified by the link:

https://target.my.com/doc/apiv2/ru/resources/billing.transaction_groups.html

- If there are required parameters, you must pass them directly to the method: ***get($param1, $param2..)***

 For **POST** requests, you need to create a **model** and set all the required parameters for it:

***$model = new \TargetApi\Model\Finance\Transaction();***
***$model->setAmount(100);*** ``--> this field is mandatory``

##### All possible and mandatory parameters of the model can be specified by the link: 

https://target.my.com/doc/apiv2/ru/objects/billing.api_v2.transaction_group.TransactionGroupResource.html

- If the *POST* request must have parameters, it is necessary to pass them before the model: **post($param1, $param2.. $model)**

***$result = $finance->transaction()->post('billing/transactions/to/', 1234567,  $model);***

For requests to delete records, a similar *GET* call should be made.
As a parameter, such requests usually take the ID of the record being deleted:

**DELETE**

$priceLists = new TargetApi\PriceLists($client);


$result = $priceLists->carsPricelist()->delete(153);

[Full query examples](./EXAMPLES.MD )

**Sample response, if successful**


```
 array:3 [
    0 => TargetApi\Model\Finance\TransactionGroup {#89
      -amount: "62000"
      -clientId: 1010219
      -date: null
      -description: "Transfer to client"
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
      -description: "Transitions of the 'Renaissance Credit 55+ interests teaser' campaign (6419377)"
-firstAt: "2016-05-12 15:09:15"
- id: 23715730
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
      -description: "Campaign transitions 'Credit cards 25+ interests 240*400' (6430704)"
-firstAt: "2016-05-18 11:56:23"
- id: 23732655
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
      -description: "Transitions of the campaign 'Credit cards 24+ interests teaser' (6430530)"
-firstAt: "2016-05-16 18:36:43"
- id: 23727175
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
``

#### In case of an error, an exception will be thrown, with the reason for the failed request
