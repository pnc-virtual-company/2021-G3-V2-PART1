## ROUTE DOCUMENTATION EXAMPLE


### 1. [signin/signup Routes]
---
| HTTP REQUEST| ROUTES | DESCRIPTION |
| :---        | :----   |          :--- |
| POST        | /signup       |The route for create new user   |
| POST        | /signin       |The route for login own user   |
| POST        | /signout      |The route for logn out from user   |
| GET         | /events       |The route for get all events   |
| GET         | /events/{id}  |The route to get a event by given id |
| POST        | /events       |  The route to create a new event |
| PUT         | /events/{id}  | The route to update a event by given id |
| DELETE      | /events/{id}  | The route to delete a event|

### 2. [signin/signup Routes from frontend]

routes:[
    {path:  |'/signup' , |component:   SignupView},
    {path:  |'/signin' , |component:   SigninView},
    {path:  |'/signout' , |component:  SignoutView}
]

---
<i>@Student Name: <b> Rady Y</b></i>