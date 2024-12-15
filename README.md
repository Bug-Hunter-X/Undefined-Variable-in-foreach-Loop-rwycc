# PHP Undefined Variable Bug

This repository demonstrates a common yet easily missed bug in PHP: using an undefined variable within a `foreach` loop.  The bug arises when the `$sum` variable isn't properly initialized before use within the loop. The solution shows how to correct this by initializing the variable before the loop begins.

## Bug
The `bug.php` file contains the erroneous code. The `foreach` loop attempts to add values to `$sum`, but because `$sum` is not initialized, this results in a PHP Notice.  This notice can escalate to more serious errors under certain conditions.

## Solution
The `bugSolution.php` file provides a corrected version of the code, where `$sum` is initialized to 0 before the loop.