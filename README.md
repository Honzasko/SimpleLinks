# <u>**SimpleLinks**</u>
## About 
It is simple project to create site for links,it was made to practice PHP
## How to use it
Lets see how to use it
### data/settings.json 
Contain title and background image path in static/
Example:
```json
{
    "title" : "Example Links",
    "background" : "bg.jpg"
} 
```
### data/links.json 
Contain titles of links and url of links. 
Example:
```json 
{
    "0" : {
        "title" : "Example",
        "url" : "https://google.com"
    } , 
    "1" : {
        "title" : "Example 2",
        "url" : "https://duckduckgo.com"

}
```
You can use icons in title in this format ``[icon_name]``   
Currently supported icon names:
- instagram
- discord
- github
- twitter
- youtube
- twitch
- discord
- facebook
