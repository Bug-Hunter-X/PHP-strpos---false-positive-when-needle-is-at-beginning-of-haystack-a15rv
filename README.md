# PHP strpos() Unexpected Behavior

This repository demonstrates a subtle bug in PHP code involving the `strpos()` function and loose comparison.  The issue arises when checking if a needle exists at the beginning of a haystack string.

The problem stems from the fact that `strpos()` returns `false` if the needle is not found, and `0` if found at the beginning.  Since `false` is loosely equal to `0` in PHP, a simple comparison like `strpos(...) != 0` can produce inaccurate results.  This repository shows how to correctly handle this situation to avoid unexpected behavior.

See `bug.php` for the problematic code and `bugSolution.php` for the corrected version.