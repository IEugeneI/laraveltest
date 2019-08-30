1) you need to install all this files to you virtual server
2)then configurate you .env file like .env.exmaple
3) go migration to your DB(write in you command line located in your project folder "php artisan migrate")
4) to added some data to DB write in command line located in you folder "php artisan db:seed"


Now you can find api methods on url:
{{your_base_url}}/api/getAllCountries
{{your_base_url}}/api/getCountryBNameyISO3/{{ISO3 name}}
{{your_base_url}}/api/getCountryIDByName/{{id country}}
{{your_base_url}}/api/getCitiesByCountryID/{{id country}}
{{your_base_url}}/api/getCitiesByCountryISO3/{{ISO3 country}}


Then you can go to {{your_base_url}} and see 2 select ,where you can choice county and 
city. And then push button "save" for save info to DB 