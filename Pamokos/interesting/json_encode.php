
pvz.: var_dump(json_encode($people));

The result is a string containing JSON data, not a PHP object.
In PHP, json_encode always returns a string (the JSON representation).

If you want to turn it back into a PHP object, you would use json_decode($json, false).
json_decode($json, **true**) returns an associative array.
json_decode($json, **false**) (or omitting the second parameter) returns a PHP object 
(an instance of stdClass).

If you want a PHP object: use json_decode($json) or json_decode($json, false).
If you want a PHP array: use json_decode($json, true).

1. Send Data to JavaScript (Front-End)
JSON is a universal data format, so you can output the string 
to your HTML page and use it directly in JavaScript.
<script>
    let people = <?php echo json_encode($people); ?>;
    console.log(people);
</script>
// Now I have a JavaScript array of objects

2. Store in a File or Database
I can save the JSON string in a text file or a database column 
for later retrieval.

file_put_contents('people.json', json_encode($people));

3. Send via API or HTTP
JSON is the standard for APIs. 
I can send this string as a response to an API request:

header('Content-Type: application/json');
echo json_encode($people);

4. Send to Other Languages/Systems
Any language that understands JSON (Python, Java, Node.js, etc.) 
can receive, parse, and use this data.

5. Decode Back into PHP
If I get the JSON string from somewhere else, 
I can turn it back into a PHP array or object using json_decode():

$json = '[{"first_name":"Brad","last_name":"Traversy"}]';
$people = json_decode($json, true); // as associative array

    Action	                    Example Code/Usage
Use in JavaScript frontend	let data = <?php echo $json; ?>;
Save as file	            file_put_contents('x.json', $json);
Send as API response	    header('Content-Type: application/json'); echo $json;
Store in database	        Insert JSON string in DB column
Parse back to PHP	        $arr = json_decode($json, true);

