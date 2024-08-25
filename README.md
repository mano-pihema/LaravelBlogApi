# Laravel Blogs Api
A simple Laravel api with CRUD operations for Blog Posts

## Routes
Request schema for POST and PUT
`
{
		"title":"title",
		"body": "body",
		"created_at":" ",
		"updated_at":" "
}
`
### Blogs
- GET retrieve all blogs 
    ```sh
    http://127.0.0.1:8000/api/blogs
    ```
- GET retrieve a single blog
    ```sh
    http://127.0.0.1:8000/api/blogs/{id}
    ```
- POST create a blog post
    ```sh
    http://127.0.0.1:8000/api/blogs
    ```
- PUT update a blog post 
    ```sh
    http://127.0.0.1:8000/api/blogs/{id}
    ```
- DELETE remove a blog post
    ```sh
    http://127.0.0.1:8000/api/blogs/{id}
    ```
