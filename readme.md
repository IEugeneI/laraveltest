1) you need to install all this files to you virtual server
2) then configurate you .env file like .env.exmaple
3) go migration to your DB
4) change tables name on DB(CITY,COUNTRY,INFORMATION) (if needed)

Now you can find api methods on url:
{{your_base_url}}/api/getAllCountries
{{your_base_url}}/api/getCountryBNameyISO3/{{ISO3 name}}
{{your_base_url}}/api/getCountryIDByName/{{id country}}
{{your_base_url}}/api/getCitiesByCountryID/{{id country}}
{{your_base_url}}/api/getCitiesByCountryISO3/{{ISO3 country}}


Then you can go to {{your_base_url}} and see 2 select ,where you can choice county and 
city. And then push button save for save info to DB 
