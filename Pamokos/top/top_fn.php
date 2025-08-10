1. **echo()**  
   Outputs one or more strings.
   ```php
   echo "Hello, world!";
   ```

2. **print()**  
   Outputs a string.
   ```php
   print("Hello, PHP!");
   ```

3. **isset()**  
   Checks if a variable is set and not null.
   ```php
   if (isset($name)) { echo "Set!"; }
   ```

4. **empty()**  
   Checks if a variable is empty.
   ```php
   if (empty($value)) { echo "Empty!"; }
   ```

5. **strlen()**  
   Returns the length of a string.
   ```php
   echo strlen("OpenAI"); // 6
   ```

6. **str_replace()**  
   Replaces all occurrences of the search string with the replacement string.
   ```php
   echo str_replace("world", "PHP", "Hello world!"); // Hello PHP!
   ```

7. **strpos()**  
   Finds the position of the first occurrence of a substring in a string.
   ```php
   echo strpos("Hello world", "world"); // 6
   ```

8. **substr()**  
   Returns part of a string.
   ```php
   echo substr("abcdef", 1, 3); // bcd
   ```

9. **array_merge()**  
   Merges one or more arrays.
   ```php
   $result = array_merge([1, 2], [3, 4]);
   ```

10. **array_push()**  
    Pushes one or more elements onto the end of an array.
    ```php
    $arr = [1, 2];
    array_push($arr, 3, 4); // $arr is now [1,2,3,4]
    ```

11. **array_pop()**  
    Pops the element off the end of an array.
    ```php
    $arr = [1, 2, 3];
    array_pop($arr); // $arr is now [1,2]
    ```

12. **array_shift()**  
    Shifts an element off the beginning of an array.
    ```php
    $arr = [1, 2, 3];
    array_shift($arr); // $arr is now [2,3]
    ```

13. **array_unshift()**  
    Prepends one or more elements to the beginning of an array.
    ```php
    $arr = [2, 3];
    array_unshift($arr, 1); // $arr is now [1,2,3]
    ```

14. **in_array()**  
    Checks if a value exists in an array.
    ```php
    if (in_array(2, [1,2,3])) { echo "Found!"; }
    ```

15. **explode()**  
    Splits a string into an array by a delimiter.
    ```php
    $arr = explode(",", "a,b,c"); // ["a", "b", "c"]
    ```

16. **implode()**  
    Joins array elements with a string.
    ```php
    echo implode("-", ["a", "b", "c"]); // a-b-c
    ```

17. **count()**  
    Counts all elements in an array or properties in an object.
    ```php
    echo count([1,2,3]); // 3
    ```

18. **sort()**  
    Sorts an array.
    ```php
    $arr = [3,1,2];
    sort($arr); // [1,2,3]
    ```

19. **ksort()**  
    Sorts an array by key.
    ```php
    $arr = ["b"=>2, "a"=>1];
    ksort($arr); // ["a"=>1,"b"=>2]
    ```

20. **json_encode()**  
    Returns the JSON representation of a value.
    ```php
    echo json_encode(["a"=>1, "b"=>2]); // {"a":1,"b":2}
    ```

21. **json_decode()**  
    Decodes a JSON string.
    ```php
    $obj = json_decode('{"a":1,"b":2}');
    ```

22. **print_r()**  
    Prints human-readable information about a variable.
    ```php
    print_r([1,2,3]);
    ```

23. **var_dump()**  
    Dumps information about a variable.
    ```php
    var_dump([1,2,3]);
    ```

24. **require()**  
    Includes and evaluates a specified file.
    ```php
    require "config.php";
    ```

25. **include()**  
    Includes and evaluates a specified file.
    ```php
    include "header.php";
    ```

26. **require_once()**  
    Includes and evaluates a file only once.
    ```php
    require_once "config.php";
    ```

27. **include_once()**  
    Includes and evaluates a file only once.
    ```php
    include_once "header.php";
    ```

28. **header()**  
    Sends a raw HTTP header.
    ```php
    header("Location: /index.php");
    ```

29. **die() / exit()**  
    Outputs a message and terminates the script.
    ```php
    if (!$authenticated) die("No access!");
    ```

30. **date()**  
    Formats a local date and time.
    ```php
    echo date("Y-m-d H:i:s");
    ```

31. **time()**  
    Returns the current Unix timestamp.
    ```php
    echo time();
    ```

32. **microtime()**  
    Returns the current Unix timestamp with microseconds.
    ```php
    echo microtime(true);
    ```

33. **md5()**  
    Calculates the MD5 hash of a string.
    ```php
    echo md5("password");
    ```

34. **sha1()**  
    Calculates the SHA1 hash of a string.
    ```php
    echo sha1("password");
    ```

35. **trim()**  
    Strips whitespace (or other characters) from the beginning and end of a string.
    ```php
    echo trim("  hello  "); // "hello"
    ```

36. **ltrim()**  
    Strips whitespace from the beginning of a string.
    ```php
    echo ltrim("  hello"); // "hello"
    ```

37. **rtrim()**  
    Strips whitespace from the end of a string.
    ```php
    echo rtrim("hello  "); // "hello"
    ```

38. **strtolower()**  
    Makes a string lowercase.
    ```php
    echo strtolower("HELLO"); // "hello"
    ```

39. **strtoupper()**  
    Makes a string uppercase.
    ```php
    echo strtoupper("hello"); // "HELLO"
    ```

40. **ucfirst()**  
    Capitalizes the first character of a string.
    ```php
    echo ucfirst("hello"); // "Hello"
    ```

41. **ucwords()**  
    Capitalizes the first character of each word in a string.
    ```php
    echo ucwords("hello world"); // "Hello World"
    ```

42. **htmlspecialchars()**  
    Converts special characters to HTML entities.
    ```php
    echo htmlspecialchars("<b>bold</b>");
    ```

43. **htmlentities()**  
    Converts all applicable characters to HTML entities.
    ```php
    echo htmlentities('a "quote"');
    ```

44. **is_array()**  
    Checks if a variable is an array.
    ```php
    if (is_array($arr)) { /* ... */ }
    ```

45. **is_string()**  
    Checks if a variable is a string.
    ```php
    if (is_string($str)) { /* ... */ }
    ```

46. **is_numeric()**  
    Checks if a variable is a number or a numeric string.
    ```php
    if (is_numeric("123.45")) { /* ... */ }
    ```

47. **file_get_contents()**  
    Reads a file into a string.
    ```php
    $data = file_get_contents("data.txt");
    ```

48. **file_put_contents()**  
    Writes a string to a file.
    ```php
    file_put_contents("data.txt", "Hello!");
    ```

49. **fopen()**  
    Opens a file or URL.
    ```php
    $handle = fopen("data.txt", "r");
    ```

50. **fclose()**  
    Closes an open file pointer.
    ```php
    fclose($handle);
    ```
