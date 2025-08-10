strlen() - Get string length  
strtolower() - Convert string to lowercase  
strtoupper() - Convert string to uppercase  
ucfirst() - Uppercase first character  
ucwords() - Uppercase first character of each word  
strrev() - Reverse a string  
substr() - Return part of a string  
strpos() - Find position of first occurrence of a substring  
strrpos() - Find position of last occurrence of a substring  
str_replace() - Replace all occurrences of a search string  
str_ireplace() - Case-insensitive version of str_replace()  
strstr() - Find first occurrence of a string  
stristr() - Case-insensitive version of strstr()  
str_split() - Split string into array  
explode() - Split string by string  
implode() (alias: join()) - Join array elements into a string  
trim() - Strip whitespace (or other characters) from start and end  
ltrim() - Strip whitespace (or other characters) from start  
rtrim() - Strip whitespace (or other characters) from end  
htmlspecialchars() - Convert special characters to HTML entities  
htmlentities() - Convert all applicable characters to HTML entities  
addslashes() - Quote string with slashes  
str_pad() - Pad a string to a certain length  
str_repeat() - Repeat a string  
strcmp() - Binary safe string comparison  
strcasecmp() - Case-insensitive string comparison  
substr_count() - Count the number of substring occurrences  
number_format() - Format a number with grouped thousands  
md5() - Calculate MD5 hash of a string  
sha1() - Calculate SHA1 hash of a string  

1. **strlen()**  
   Returns the length of a string.  
   ```php
   strlen("Hello"); // 5
   ```

2. **strtolower()**  
   Converts a string to lowercase.  
   ```php
   strtolower("Hello World!"); // hello world!
   ```

3. **strtoupper()**  
   Converts a string to uppercase.  
   ```php
   strtoupper("Hello World!"); // HELLO WORLD!
   ```

4. **ucfirst()**  
   Capitalizes the first character of a string.  
   ```php
   ucfirst("hello world!"); // Hello world!
   ```

5. **ucwords()**  
   Capitalizes the first character of each word in a string.  
   ```php
   ucwords("hello world!"); // Hello World!
   ```

6. **strrev()**  
   Reverses a string.  
   ```php
   strrev("Hello"); // olleH
   ```

7. **substr()**  
   Returns a part of a string.  
   ```php
   substr("abcdef", 1, 3); // bcd
   ```

8. **strpos()**  
   Finds the position of the first occurrence of a substring.  
   ```php
   strpos("hello world", "world"); // 6
   ```

9. **strrpos()**  
   Finds the position of the last occurrence of a substring.  
   ```php
   strrpos("abcabc", "a"); // 3
   ```

10. **str_replace()**  
    Replaces all occurrences of a search string with a replacement.  
    ```php
    str_replace("world", "PHP", "Hello world!"); // Hello PHP!
    ```

11. **str_ireplace()**  
    Case-insensitive version of str_replace().  
    ```php
    str_ireplace("WORLD", "PHP", "Hello world!"); // Hello PHP!
    ```

12. **strstr()**  
    Finds the first occurrence of a string. Returns the rest of the string from there.  
    ```php
    strstr("user@example.com", "@"); // @example.com
    ```

13. **stristr()**  
    Case-insensitive version of strstr().  
    ```php
    stristr("user@Example.com", "E"); // Example.com
    ```

14. **str_split()**  
    Splits a string into an array.  
    ```php
    str_split("Hello"); // ['H','e','l','l','o']
    ```

15. **explode()**  
    Splits a string by a string delimiter.  
    ```php
    explode(",", "a,b,c"); // ['a','b','c']
    ```

16. **implode() / join()**  
    Joins array elements with a string.  
    ```php
    implode("-", ['a','b','c']); // a-b-c
    ```

17. **trim()**  
    Strips whitespace (or other characters) from the beginning and end of a string.  
    ```php
    trim("  Hello World!  "); // Hello World!
    ```

18. **ltrim()**  
    Strips whitespace (or other characters) from the beginning of a string.  
    ```php
    ltrim("  Hello"); // Hello
    ```

19. **rtrim()**  
    Strips whitespace (or other characters) from the end of a string.  
    ```php
    rtrim("Hello  "); // Hello
    ```

20. **htmlspecialchars()**  
    Converts special characters to HTML entities.  
    ```php
    htmlspecialchars("<b>Hello</b>"); // &lt;b&gt;Hello&lt;/b&gt;
    ```

21. **htmlentities()**  
    Converts all applicable characters to HTML entities.  
    ```php
    htmlentities("© 2025"); // &copy; 2025
    ```

22. **addslashes()**  
    Quotes string with slashes.  
    ```php
    addslashes("John's book"); // John\'s book
    ```

23. **str_pad()**  
    Pads a string to a certain length.  
    ```php
    str_pad("Hello", 10, "."); // Hello.....
    ```

24. **str_repeat()**  
    Repeats a string a specified number of times.  
    ```php
    str_repeat("abc", 3); // abcabcabc
    ```

25. **strcmp()**  
    Binary safe string comparison. Returns 0 if strings are equal.  
    ```php
    strcmp("Hello", "hello"); // nonzero (case-sensitive)
    ```

26. **strcasecmp()**  
    Case-insensitive string comparison.  
    ```php
    strcasecmp("Hello", "hello"); // 0
    ```

27. **substr_count()**  
    Counts the number of times a substring occurs in a string.  
    ```php
    substr_count("abcabcabc", "a"); // 3
    ```

28. **number_format()**  
    Formats a number with grouped thousands.  
    ```php
    number_format(1234567.89, 2, ".", ","); // 1,234,567.89
    ```

29. **md5()**  
    Calculates the MD5 hash of a string.  
    ```php
    md5("password"); // 5f4dcc3b5aa765d61d8327deb882cf99
    ```

30. **sha1()**  
    Calculates the SHA1 hash of a string.  
    ```php
    sha1("password"); // 5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8
    ```