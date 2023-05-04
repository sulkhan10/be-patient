
# Backend for Hospital Patient Management System

Backend for Hospital Patient Management System

## Endpoints

List of Available Endpoints:

- `GET /users`
- `POST /users`
- `PUT /users/:id`
- `GET /users/:id`
- `DELETE /users/:id`

### GET /users

#### Description

- Get all patients data

#### Response

_200 - OK_

```json
{
    "status": {
        "code": 200,
        "response": "success",
        "message": "Example of success get data"
    },
    "result": [
            {
                "id": Integer,
                "nik": String,
                "name": String,
                "sex": String,
                "religion": String,
                "phone": String,
                "address": String
                }
            ]
}

```

### POST /users

#### Description

- Create new data patient

#### Request

- Body

  ```json
    {
    "nik" : String,
    "name" : String,
    "sex" : String,
    "religion" : String,
    "phone" : String,
    "address" : String
    }
  ```

- Headers

  ```json
  {
    "Accept": "application/json",
    "Content-Type": "application/json"
  }
  ```

#### Response

_200 - OK_

```json
{
    "status": {
        "code": 200,
        "response": "success",
        "message": "Example of success created data"
    },
    "result": {
            "id": Integer,
            "nik": String,
            "name": String,
            "sex": String,
            "religion": String,
            "phone": String,
            "address": String
            }
}
```

### PUT /users/:id

#### Description

- Edit data patient

#### Request

- Params

  ```json
    {
    "id" : Integer
    }
  ```

- Body

  ```json
    {
    "nik" : String,
    "name" : String,
    "sex" : String,
    "religion" : String,
    "phone" : String,
    "address" : String
    }
  ```

- Headers

  ```json
  {
    "Accept": "application/json",
    "Content-Type": "application/json"
  }
  ```

#### Response

_200 - OK_

```json
{
    "status": {
        "code": 200,
        "response": "success",
        "message": "Example of success update data"
    },
    "result": {
            "id": Integer,
            "nik": String,
            "name": String,
            "sex": String,
            "religion": String,
            "phone": String,
            "address": String
            }
}
```

### GET /users/:id

#### Description

- Get detail data patient by id

#### Request

- Params

  ```json
    {
    "id" : Integer
    }
  ```

  ```

  ```

- Headers

  ```json
  {
    "Accept": "application/json",
    "Content-Type": "application/json"
  }
  ```

#### Response

_200 - OK_

```json
{
    "status": {
        "code": 200,
        "response": "success",
        "message": "Example of success get detail data"
    },
    "result": {
            "id": Integer,
            "nik": String,
            "name": String,
            "sex": String,
            "religion": String,
            "phone": String,
            "address": String
            }
}
```

### DELETE /users/:id

#### Description

- Delete data patient by id

#### Request

- Headers
  ```json
  {
    "Accept": "application/json",
    "Content-Type": "application/json"
  }
  ```
- Params
  ```json
  {
    "id" : Integer
  }
  ```

#### Response

_200 - OK_

```json
{
  "status": {
    "code": 204,
    "response": "success",
    "message": "Example of success delete data"
  }
}
```
