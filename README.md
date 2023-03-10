# README

## General
This web app was created as part of the interview process for UMN and fulfills the requirements as described in the project overview.

## Instructions
This was built with laravel v10.3.3 and PHP v8.2.0.

While this project does not use a database, an empty dev database was created to satisfy the laravel requirement of a database call when making a post call on form submission.

With composer installed, within the project directory the standard launch command of php artisan serve should launch the project. Migration may be necessary as well.

## Design Approach 
My approach was primarily to demonstrate my capabilities of being able to develop in a PHP environment in an organized way. I added bootstrap to provide a modern look and feel. 

## Challenges
The use of ValidatorMake was not allowing me to display errors properly on the form, because of that a reliable was of determining when to log the information was hard to find within the time I had. This resulted in me logging the data either way whether it was a successful submission or not. I figured this was a better choice than excluding logging altogether.