# Coding challenge
Help us to understand your skillset as a frontend developer at Thomann.

# Purpose
Aim of this test is three fold,

- evaluate your coding abilities 
- judge your technical experince
- understand how you design a solution

# How you will be judged
You will be scored on,

- coding standard, comments and style
- unit testing strategy
- overall solution design

# Instructions

- Please use React for the following challenge
- To hand in your task, please provide us with a private repository via Github

# Challenge - Thomann article list viewer

Write a simple web application that reads data from a backend and displays manufacturer, model and mainImage on the page to the user.

The format of the list is like this:

```json
{
  "articles": [
    {
      "manufacturer": "Yamaha",
      "model": "C40",
      "mainImage": {
        "fileName": "135317.jpg"
      }
    },
  ...
```


## Details

- If you applied as Fullstack Developer, please read Additional Fullstack Task Details before starting!
- Write a small web application - backend & frontend. You can build your backend in NodeJS but keep in mind that our tech stack is based on PHP.
- please include instructions on how to start the webapp.

- The backend reads the contained json file and forwards it to the client
- On page load the applications should load the data and display it as a list
- each list item must contain only manufacturer, model and an image
- imageUrl is generated from fileName like this: https://thumbs.static-thomann.de/thumb/thumb120x/pics/prod/${FILENAME}
- clicking an image of a list item should display the zoomImage (zoomImage fileName is generated like this: https://thumbs.static-thomann.de/thumb/thumb1000x/pics/prod/${FILENAME}) 
- To show us your CSS skills, please make sure your application is at least a little pretty, maybe even without a CSS framework.
- Include unit/component testing  

- Bonus point: PHP as backend language.
- Bonus point: Deploy your application somewhere to show us directly that it works.

## Additional Fullstack Task Details

- The backend must be written in PHP
- Instead of using data from json file, please load data from included sqlite3 database (data.sqlite). The data is in table 'articles' and has the following fields: `articleNumber`,`manufacturer`,`model`,`price`,`category`,`rank`,`rating`,`ratingCount`
- The database contains more than 10 items. Please add pagination, so that only 10 items are displayed at the same time
- Clicking a list item should open a new page with additional details (price, rank, category, rating)
- The database doesn't contain an ID column. Just use articleNumber

## Hints

- You do not need to add support for old browsers, or IE
- If you use ES6, don't worry about cross-compilation
- Use any other third party library of your choice if needed (but be prepared to justify your decision)
