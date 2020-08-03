---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Authentication Management


Admin user, Bin Owner and Rider authentication and account settings.

Class AuthenticationController
<!-- START_7a184547882598fc164c10be7745584b -->
## Login a admin user

Authenticates the admin user.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/user/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"mail@mail.com","password":"iusto"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "mail@mail.com",
    "password": "iusto"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": {
        "code": 200,
        "message": "Request completed successfully."
    },
    "data": {
        "id": 1,
        "name": "Jane Doe",
        "email": "jane@doe.com",
        "token": "7geRI9P4LUFj3ensaxOV070Uk1yXeQ23ptqerJYc"
    }
}
```
> Example response (404):

```json
{
    "error": {
        "code": 422,
        "message": "Invalid credentials."
    }
}
```

### HTTP Request
`POST api/v1/user/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | The email of the admin user.
        `password` | string |  required  | The password of the admin user.
    
<!-- END_7a184547882598fc164c10be7745584b -->

<!-- START_7fef01e7235c89049ebe3685de4bff17 -->
## Register an admin user

Registers an admin user of the platform.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/user/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"Jane","last_name":"Doe","other_name":"Elinam","telephone":"0241406244","email":"mail@mail.com","password":"delectus"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "Jane",
    "last_name": "Doe",
    "other_name": "Elinam",
    "telephone": "0241406244",
    "email": "mail@mail.com",
    "password": "delectus"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": {
        "code": 200,
        "message": "Request completed successfully."
    },
    "data": {
        "id": 1,
        "first_name": "Jane",
        "last_name": "Doe",
        "other_name": "Elinam",
        "telephone": "0241406244",
        "email": "jane@doe.com",
        "token": "7geRI9P4LUFj3ensaxOV070Uk1yXeQ23ptqerJYc"
    }
}
```

### HTTP Request
`POST api/v1/user/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `first_name` | string |  required  | The first name of the admin user.
        `last_name` | string |  required  | The last name of the admin user.
        `other_name` | string |  required  | The other name of the admin user.
        `telephone` | numeric |  required  | The telephone number of the admin user.
        `email` | string |  required  | The email of the user.
        `password` | string |  required  | The password of the user.
    
<!-- END_7fef01e7235c89049ebe3685de4bff17 -->

<!-- START_4071205fadd9472d0d55124a1f7aa9c3 -->
## Login a Bin Owner

Authenticates the Bin Owner.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/owner/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"mail@mail.com","password":"nisi"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/owner/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "mail@mail.com",
    "password": "nisi"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": {
        "code": 200,
        "message": "Request completed successfully."
    },
    "data": {
        "id": 1,
        "name": "Jane Doe",
        "email": "jane@doe.com",
        "token": "7geRI9P4LUFj3ensaxOV070Uk1yXeQ23ptqerJYc"
    }
}
```
> Example response (404):

```json
{
    "error": {
        "code": 422,
        "message": "Invalid credentials."
    }
}
```

### HTTP Request
`POST api/v1/owner/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | The email of the binOwner.
        `password` | string |  required  | The password of the binOwner.
    
<!-- END_4071205fadd9472d0d55124a1f7aa9c3 -->

<!-- START_688925598239fc4cecb45a39564f5a4b -->
## Register a Bin Owner

Registers a Bin Owner of Whom each bin is supposed to have one.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/owner/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"Mr","first_name":"Jane","last_name":"Doe","other_name":"Doe","telephone":"0241406244","address":"Plt adjacent max-gee hotel.","email":"mail@mail.com","password":"tempora"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/owner/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Mr",
    "first_name": "Jane",
    "last_name": "Doe",
    "other_name": "Doe",
    "telephone": "0241406244",
    "address": "Plt adjacent max-gee hotel.",
    "email": "mail@mail.com",
    "password": "tempora"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": {
        "code": 200,
        "message": "Request completed successfully."
    },
    "data": {
        "title": "Mr",
        "id": 1,
        "first_name": "Jane",
        "last_name": "Doe",
        "other_name": "Elinam",
        "telephone": "0241406244",
        "email": "jane@doe.com",
        "address": "plt. adjacent max gee hotel",
        "token": "7geRI9P4LUFj3ensaxOV070Uk1yXeQ23ptqerJYc"
    }
}
```

### HTTP Request
`POST api/v1/owner/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | The name title of the bin owner.
        `first_name` | string |  required  | The first name of the bin owner.
        `last_name` | string |  required  | The last name of the bin owner.
        `other_name` | string |  required  | The other name of the bin owner.
        `telephone` | numeric |  required  | The telephone number of the bin owner.
        `address` | string |  required  | The address of the bin owner.
        `email` | string |  required  | The email of the user.
        `password` | string |  required  | The password of the user.
    
<!-- END_688925598239fc4cecb45a39564f5a4b -->

<!-- START_68bcfbfe3201c132ab2bbb26ddec1230 -->
## Login a Tricycle Rider

Authenticates a Tricycle Rider.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/rider/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"mail@mail.com","password":"sit"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/rider/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "mail@mail.com",
    "password": "sit"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": {
        "code": 200,
        "message": "Request completed successfully."
    },
    "data": {
        "id": 1,
        "name": "Jane Doe",
        "email": "jane@doe.com",
        "token": "7geRI9P4LUFj3ensaxOV070Uk1yXeQ23ptqerJYc"
    }
}
```
> Example response (404):

```json
{
    "error": {
        "code": 422,
        "message": "Invalid credentials."
    }
}
```

### HTTP Request
`POST api/v1/rider/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | The email of the Tricycle Rider.
        `password` | string |  required  | The password of the Tricycle Rider.
    
<!-- END_68bcfbfe3201c132ab2bbb26ddec1230 -->

<!-- START_05460b3b3ba25b151f80f2caf71b8714 -->
## Register a Rider

Registers a Rider as the one responsible for the waste collection.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/rider/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"Mr.","first_name":"Jane","last_name":"Doe","other_name":"Doe","telephone":"0244444444","email":"mail@mail.com","address":"plt. adjacent max-gee hotel.","password":"voluptatum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/rider/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "Mr.",
    "first_name": "Jane",
    "last_name": "Doe",
    "other_name": "Doe",
    "telephone": "0244444444",
    "email": "mail@mail.com",
    "address": "plt. adjacent max-gee hotel.",
    "password": "voluptatum"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": {
        "code": 200,
        "message": "Request completed successfully."
    },
    "data": {
        "id": 1,
        "title": "Mr",
        "first_name": "Jane",
        "last_name": "Doe",
        "other_name": "Elinam",
        "telephone": "0241406244",
        "address": "plt. adjacent max-gee hotel",
        "email": "jane@doe.com",
        "token": "7geRI9P4LUFj3ensaxOV070Uk1yXeQ23ptqerJYc"
    }
}
```

### HTTP Request
`POST api/v1/rider/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | The name title of the rider.
        `first_name` | string |  required  | The first name of the Rider.
        `last_name` | string |  required  | The last name of the Rider.
        `other_name` | string |  required  | The last name of the Rider.
        `telephone` | string |  required  | The telephone number of the Rider.
        `email` | string |  required  | The email of the Rider.
        `address` | numeric |  required  | The address of the Rider.
        `password` | string |  required  | The password of the Rider.
    
<!-- END_05460b3b3ba25b151f80f2caf71b8714 -->

#Bin Management.


Bin Owners management
Class BinController
<!-- START_3dd5a7d02a332200d256aae0f9b39483 -->
## Function responsible for getting the individual bins for their respective owner

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/owner/bins" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/owner/bins"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "nick_name": "Office Bin",
            "serial_number": "GHR-2343-A",
            "max_level": "10",
            "max_weight": "5",
            "location_id": "5.1106446\/ -1.2987443",
            "smoke_noti": null
        }
    ]
}
```

### HTTP Request
`GET api/v1/owner/bins`


<!-- END_3dd5a7d02a332200d256aae0f9b39483 -->

<!-- START_40fb1ea21ca7ce67eeb95a6059e0b287 -->
## Register a new Bin statistics

Registers a new request issued by the bin for pickup.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/b" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":1,"c_level":2,"c_weight":3,"s_noti":false,"loc_long":"5.1106446","loc_lat":"-5.1106446"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/b"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 1,
    "c_level": 2,
    "c_weight": 3,
    "s_noti": false,
    "loc_long": "5.1106446",
    "loc_lat": "-5.1106446"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/v1/b`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | integer |  required  | The id of the bin issuing the request.
        `c_level` | float |  required  | The level of waste in the bin.
        `c_weight` | float |  required  | The weight of the bin.
        `s_noti` | boolean |  required  | The smoke notification status.
        `loc_long` | string |  required  | The longitude of the location of the bin.
        `loc_lat` | string |  required  | The latitude of the location of the bin.
    
<!-- END_40fb1ea21ca7ce67eeb95a6059e0b287 -->

<!-- START_3178cf80d8728c8e64f0d94a56100304 -->
## Update a  Bin statistics

Updates the states of bin.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/b/u" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":1,"c_level":2,"c_weight":3,"s_noti":false,"loc_long":"5.1106446","loc_lat":"-5.1106446"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/b/u"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 1,
    "c_level": 2,
    "c_weight": 3,
    "s_noti": false,
    "loc_long": "5.1106446",
    "loc_lat": "-5.1106446"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/v1/b/u`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | integer |  required  | The id of the bin issuing the request.
        `c_level` | float |  required  | The level of waste in the bin.
        `c_weight` | float |  required  | The weight of the bin.
        `s_noti` | boolean |  required  | The smoke notification status.
        `loc_long` | string |  required  | The longitude of the location of the bin.
        `loc_lat` | string |  required  | The latitude of the location of the bin.
    
<!-- END_3178cf80d8728c8e64f0d94a56100304 -->

<!-- START_b84031acc4697616d24555b8c4088f56 -->
## create a  Bin manual pickup statistics

creates bin pickup statistics of bin.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/bins/statistics/manualPickup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"bin_id":1}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/bins/statistics/manualPickup"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "bin_id": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`POST api/v1/bins/statistics/manualPickup`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `bin_id` | integer |  required  | The id of the bin issuing the request.
    
<!-- END_b84031acc4697616d24555b8c4088f56 -->

<!-- START_c61022c1e720f6723fd791e3e57fa1bf -->
## api/v1/bins/test
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/bins/test" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/bins/test"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": {
        "code": 200,
        "message": "Request completed successfully."
    },
    "data": "Request received successfully"
}
```

### HTTP Request
`GET api/v1/bins/test`


<!-- END_c61022c1e720f6723fd791e3e57fa1bf -->

#general


<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "http://localhost/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## logout
> Example request:

```bash
curl -X POST \
    "http://localhost/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

<!-- START_67ef764403159da016f8318858d1f94b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/bins" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bins"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET bins`


<!-- END_67ef764403159da016f8318858d1f94b -->

<!-- START_dbf24a43b7328b093343228bbd805293 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/bins/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bins/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET bins/create`


<!-- END_dbf24a43b7328b093343228bbd805293 -->

<!-- START_5d49cb3471c6b1b7fc7c946500ca3bfc -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/bins/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bins/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET bins/{id}`


<!-- END_5d49cb3471c6b1b7fc7c946500ca3bfc -->

<!-- START_917451450c35c7665359b0609255f5d0 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/bins/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bins/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET bins/{id}/edit`


<!-- END_917451450c35c7665359b0609255f5d0 -->

<!-- START_4fb848017d8507c8fe97c8693af6d460 -->
## Store a newly created Bin resource in the database.

> Example request:

```bash
curl -X POST \
    "http://localhost/bins/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bins/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST bins/store`


<!-- END_4fb848017d8507c8fe97c8693af6d460 -->

<!-- START_4ce73b199d0d0516bbb3daae84a6e5fb -->
## bins/assign/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/bins/assign/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bins/assign/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET bins/assign/{id}`


<!-- END_4ce73b199d0d0516bbb3daae84a6e5fb -->

<!-- START_8e76baba4a74d8faf570dfba8700faf7 -->
## bins/assign/save
> Example request:

```bash
curl -X POST \
    "http://localhost/bins/assign/save" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bins/assign/save"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST bins/assign/save`


<!-- END_8e76baba4a74d8faf570dfba8700faf7 -->

<!-- START_a426696a4dcce047662e9c9cc113b32d -->
## bins/de_assign/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/bins/de_assign/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bins/de_assign/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET bins/de_assign/{id}`


<!-- END_a426696a4dcce047662e9c9cc113b32d -->

<!-- START_690eedf5a8e252b113a09085f2a4c6b1 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/bins/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bins/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE bins/{id}`


<!-- END_690eedf5a8e252b113a09085f2a4c6b1 -->

<!-- START_26e366bd435f781cfa1a8b430de66b0b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/binOwners" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/binOwners"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET binOwners`


<!-- END_26e366bd435f781cfa1a8b430de66b0b -->

<!-- START_8c09ac569f9f0aa413dafce88787d075 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/binOwners/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/binOwners/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET binOwners/create`


<!-- END_8c09ac569f9f0aa413dafce88787d075 -->

<!-- START_eebcb88d7849e698130c595cdf2b17b9 -->
## Displays the specified bin owner and their details. .

> Example request:

```bash
curl -X GET \
    -G "http://localhost/binOwners/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/binOwners/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET binOwners/{id}`


<!-- END_eebcb88d7849e698130c595cdf2b17b9 -->

<!-- START_65e185127fe2b7b165a7cd9b6ea987b5 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/binOwners/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/binOwners/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET binOwners/{id}/edit`


<!-- END_65e185127fe2b7b165a7cd9b6ea987b5 -->

<!-- START_bf5b9cc35b528f9f5b487023201e081d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/binOwners/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/binOwners/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT binOwners/{id}`


<!-- END_bf5b9cc35b528f9f5b487023201e081d -->

<!-- START_72776c504b0ae520e8b84cb88752f1e1 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/binOwners/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/binOwners/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST binOwners/store`


<!-- END_72776c504b0ae520e8b84cb88752f1e1 -->

<!-- START_30e3371e55b4a324a4c3a0fdf77792c8 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/binOwners/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/binOwners/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE binOwners/{id}`


<!-- END_30e3371e55b4a324a4c3a0fdf77792c8 -->

<!-- START_38edf23b01946b641ef14e34e0d3019e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/riders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/riders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET riders`


<!-- END_38edf23b01946b641ef14e34e0d3019e -->

<!-- START_73e3a71f0e104bbd3d23ee89acff135d -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/riders/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/riders/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET riders/create`


<!-- END_73e3a71f0e104bbd3d23ee89acff135d -->

<!-- START_2b5175ffe689e79b5e5d267189317e80 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/riders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/riders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET riders/{id}`


<!-- END_2b5175ffe689e79b5e5d267189317e80 -->

<!-- START_77d49b86c61c251d91d5429810b3d9df -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/riders/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/riders/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET riders/{id}/edit`


<!-- END_77d49b86c61c251d91d5429810b3d9df -->

<!-- START_6abf8a97ddc30f4fff7eaf051dddd568 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/riders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/riders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT riders/{id}`


<!-- END_6abf8a97ddc30f4fff7eaf051dddd568 -->

<!-- START_26e50db014816304c9752717d9089d6e -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/riders/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/riders/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST riders/store`


<!-- END_26e50db014816304c9752717d9089d6e -->

<!-- START_42d91648a67b9468eaa19e9c695bd110 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/riders/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/riders/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE riders/{id}`


<!-- END_42d91648a67b9468eaa19e9c695bd110 -->

<!-- START_82edf9d506df0d18ad1541dae2932a15 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/tricycles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/tricycles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET tricycles`


<!-- END_82edf9d506df0d18ad1541dae2932a15 -->

<!-- START_48c8ce6906b17c417a7fc83297a2474b -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/tricycles/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/tricycles/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET tricycles/create`


<!-- END_48c8ce6906b17c417a7fc83297a2474b -->

<!-- START_59f1e930a97f6aa1c4d3048f1a7e5274 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/tricycles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/tricycles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET tricycles/{id}`


<!-- END_59f1e930a97f6aa1c4d3048f1a7e5274 -->

<!-- START_3ae0906701807ead85ade88275bb231e -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/tricycles/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/tricycles/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET tricycles/{id}/edit`


<!-- END_3ae0906701807ead85ade88275bb231e -->

<!-- START_d9578115574358ccfdfb737322027ce6 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/tricycles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/tricycles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT tricycles/{id}`


<!-- END_d9578115574358ccfdfb737322027ce6 -->

<!-- START_4d107b083672a0791183863186d3c465 -->
## tricycles/assign/save
> Example request:

```bash
curl -X POST \
    "http://localhost/tricycles/assign/save" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/tricycles/assign/save"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST tricycles/assign/save`


<!-- END_4d107b083672a0791183863186d3c465 -->

<!-- START_26964822fc287dd3b668cd022b7f2cdb -->
## tricycles/de_assign/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/tricycles/de_assign/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/tricycles/de_assign/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET tricycles/de_assign/{id}`


<!-- END_26964822fc287dd3b668cd022b7f2cdb -->

<!-- START_6897138875e43d15f5503e9cc7ec1a17 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/tricycles/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/tricycles/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST tricycles/store`


<!-- END_6897138875e43d15f5503e9cc7ec1a17 -->

<!-- START_155e51bcea8f4063e352d59bf08d7242 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/tricycles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/tricycles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE tricycles/{id}`


<!-- END_155e51bcea8f4063e352d59bf08d7242 -->

<!-- START_62c09084921155416dc5e292b293a549 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET settings`


<!-- END_62c09084921155416dc5e292b293a549 -->

<!-- START_fd98cbfb92cf5c7b6a8e50a5ebe4b24c -->
## show the page to assign Bin to respective registered owners.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/settings/assignBin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/settings/assignBin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET settings/assignBin`


<!-- END_fd98cbfb92cf5c7b6a8e50a5ebe4b24c -->

<!-- START_9daff6b07651ab1e88ddea0dbe660ed4 -->
## bin_requests
> Example request:

```bash
curl -X GET \
    -G "http://localhost/bin_requests" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bin_requests"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET bin_requests`


<!-- END_9daff6b07651ab1e88ddea0dbe660ed4 -->

<!-- START_869b57fb2ee978c08ff3b121dcbafe78 -->
## bin_requests/all
> Example request:

```bash
curl -X GET \
    -G "http://localhost/bin_requests/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bin_requests/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET bin_requests/all`


<!-- END_869b57fb2ee978c08ff3b121dcbafe78 -->

<!-- START_c4e35b7468a8835996862238e8838822 -->
## bin_requests/pickup
> Example request:

```bash
curl -X GET \
    -G "http://localhost/bin_requests/pickup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bin_requests/pickup"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET bin_requests/pickup`


<!-- END_c4e35b7468a8835996862238e8838822 -->

<!-- START_757889525224f858caf46ebe6d8e33b6 -->
## bin_requests/pending
> Example request:

```bash
curl -X GET \
    -G "http://localhost/bin_requests/pending" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bin_requests/pending"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET bin_requests/pending`


<!-- END_757889525224f858caf46ebe6d8e33b6 -->

<!-- START_567ef6ff5aec0a50c4299d9180074f92 -->
## bin_requests/resolved
> Example request:

```bash
curl -X GET \
    -G "http://localhost/bin_requests/resolved" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bin_requests/resolved"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET bin_requests/resolved`


<!-- END_567ef6ff5aec0a50c4299d9180074f92 -->

<!-- START_2704d9e2f9e9ac7247e1d06fbd58b643 -->
## bin_requests/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/bin_requests/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bin_requests/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET bin_requests/{id}`


<!-- END_2704d9e2f9e9ac7247e1d06fbd58b643 -->

<!-- START_5a060fed57e402063ee3847ad388d66c -->
## bin_requests/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/bin_requests/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/bin_requests/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE bin_requests/{id}`


<!-- END_5a060fed57e402063ee3847ad388d66c -->


