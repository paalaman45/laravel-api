<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel API Project
This Laravel API project allows users to perform CRUD operations on various resources, such as products, users, or posts. The API is designed to be RESTful, meaning that it uses standard HTTP methods (GET, POST, PUT, and DELETE) to perform the various CRUD operations.

To use the API, users must first authenticate themselves by sending a valid API token with their requests. Once authenticated, users can then use the API to perform the following operations:

### View
To view a list of all resources, users can send a GET request to the appropriate endpoint. For example, to view a list of all products, the user would send a GET request to /api/v1/tasks/1 .

To view a specific resource, the user can send a GET request to the appropriate endpoint with the ID of the resource in the URL. For example, to view the product with the ID of 1, the user would send a GET request to /api/v1/tasks/1.

### Create
To create a new resource, the user can send a POST request to the appropriate endpoint with the resource data in the request body. For example, to create a new product, the user would send a POST request to /api/v1/tasks/ with the product data in the request body.

### Update
To update an existing resource, the user can send a PUT request to the appropriate endpoint with the ID of the resource in the URL and the updated resource data in the request body. For example, to update the product with the ID of 1, the user would send a PUT request to /api/v1/tasks/1 with the updated product data in the request body.

### Delete
To delete a resource, the user can send a DELETE request to the appropriate endpoint with the ID of the resource in the URL. For example, to delete the product with the ID of 1, the user would send a DELETE request to /api/v1/tasks/1.

This Laravel API project can be used as a starting point for developing your own API-driven applications. It provides a solid foundation for performing CRUD operations on various resources, and it is easily extensible to meet your specific needs.


### Technology Used
#### Laravel

Laravel is a popular PHP framework for developing web applications. It is known for its elegant syntax, robust features, and large community support.

#### Postman
Postman is a powerful API testing tool that can be used to send and receive HTTP requests. It provides a variety of features to help you test your APIs, such as request builders, collection runners, and test scripts
