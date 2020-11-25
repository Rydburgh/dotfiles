<!-- Jasper Runco -->
<!-- 2020-09-02 --> <!-- [C](C) Cheatsheet --> # Best Practices
* Comment before every function describing what it does. (// function main begins program execution).
* Always comment after right brace, }, that closes every function (// end function main).
* Indent the entire contents of every function.
* First letter of simple variables should be lowercase, with multiple words in camel case or underscores.
* Calculation in an assignment statement must be right of the = operator.

# Library
*	#include <math.h>
*	#include <time.h>
# Types
##int
* non-negative integers should be declared with unsigned before the integer type.


# Escape sequences

* \\n 	Newline
* \\t	Tab
* \\a	Alert
* \\\	Backslash
* \\"	Double Quote

# scanf

```c
scanf( "%d", &integer1 );
```
* "%d" - Formatted control string
* %d - conversion specifier
* & - address operator before the variable

# CERT secure printf function (avoid single string argument)

```c
printf( "Welcome to C!\n" );
```
should be written as
```c
puts( "Welcome to C!" );
```
and

```c
printf( "Welcome " );
```
should be written as

```c
printf( "%s", "Welcome " );
```
