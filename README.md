# PHP Array Key Implicit Assignment Bug

This repository demonstrates a common, yet easily overlooked, bug in PHP's array handling: implicit key assignment. When you mix string and numeric keys, or append elements using `[]`, PHP might not assign keys in the order you anticipate. This leads to potential unexpected behavior, data corruption, and difficult-to-debug errors.

The `bug.php` file contains the buggy code, while `bugSolution.php` presents a corrected version, emphasizing the importance of explicit key declaration.