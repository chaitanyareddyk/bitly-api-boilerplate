# Bitly API Boilerplates

## How to use

<details>
<summary><b>Usage in PHP</b></summary>

- include bitly.php in your file `require_once('bitly.php');`
- goto app.bitly.com and generate a generic access token from Right top breadcrumb -> Click on your username -> Generic Access Token -> Enter your bitly account password -> Click on Generate Token Button
- define a variable with the above generated access token: `$access_token = 'YOUR_ACCESS_TOKEN_HERE';`
- call the "bitly_shorten_url" function: `$short_url = bitly_shorten_url($access_token, $longUrl);`
- the `$longUrl` varible in the above step's funciton call contains the orignal long url, which has to be shorten
- after the function call, the generated short url will be stored in the varible `$short_url` defined above

</details>

<details>
<summary><b>Usage in ReactJS</b></summary>

- coming soon...

</details>
