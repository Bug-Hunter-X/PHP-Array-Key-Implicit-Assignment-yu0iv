In PHP, a common yet subtle error arises when dealing with array keys that are not explicitly defined.  Consider this scenario:

```php
<?php
$myArray = [];
$myArray["key1"] = 10;
$myArray[1] = 20;
$myArray[] = 30; //This adds 30 at the next numeric index.

echo "Value of key1: " . $myArray["key1"] . "\n"; // Outputs 10
echo "Value of 1: " . $myArray[1] . "\n"; // Outputs 20
echo "Value of 0: " . $myArray[0] . "\n"; // Outputs 30 (This may be unexpected!)
?>
```

The unexpected behavior lies in how PHP handles array keys.  While `"key1"` and `1` are explicitly defined, `$myArray[]` implicitly creates a numeric key. Importantly, PHP will automatically determine the next available *numeric* index, even if string keys already exist.  This means 30 is assigned to index 0, not 2 as one might expect.