## ROUTE DOCUMENTATION EXAMPLE


### 1. [signin/signup Routes]
---
| HTTP REQUEST| ROUTES | DESCRIPTION |
| :---        | :----   |          :--- |
| POST        | /signup       |The route for create new user   |
| POST        | /signin       |The route for login own user   |

---

| GET         | /users       |The route for get all users   |
| GET         | /users/{id}  |The route to get a user by given id |
| PUT         | /users/{id}  | The route to update a user by given id |


### 2. update Route Create Events
| HTTP REQUEST| ROUTES            | DESCRIPTION |
| :---        | :----             |          :--- |
|GET          | /events         |The route for get all events   |
|GET          | /events/{id}    |The route to get an event by given id |
|POST         | /events         |The route to create an event |
|UPDATE       | /events/{id}    |The route to update an event  by given id |
|DELETE       | /events/{id}    |The route to delete an event by given id |


### 3. update Route  Categories
| HTTP REQEST | ROUTES             | DESCRIPTION  |
|:---         | :---               |          :---|
|GET          | /categories        |The route to get all categories   |
|GET          | /categories/{id}   |The route to get a category by given id |
|POST         | /categories        |The route to create a category     |
|UPDATE       | /categories/{id}   |The route to update a category by given id  |
|DELETE       | /categories/{id}   |The route to delete a category by given id  |

### 4. update Route Join
|HTTP REQEST  |ROUTES              |DESCRIPTION   |
|---         |:---                |          :---|
|GET         | /joins             |The route to get amount of user join event  |
|POST        | /joins             |The route to count user join event   |



