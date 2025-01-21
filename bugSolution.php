The correct way to check if a needle exists using `strpos()` is to use strict comparison (`!==`) or to explicitly check for `false`:

```php
$haystack = "This is a test string";
$needle = "This";

// Correct using strict comparison
if (strpos($haystack, $needle) === false) {
    echo "Needle not found";
} else {
    echo "Needle found";
}

// Correct by explicitly checking for false
if (strpos($haystack, $needle) === false) {
    echo "Needle not found";
} else {
    echo "Needle found";
}
```

This ensures that the function correctly identifies whether the needle is present or not, regardless of its position within the haystack.