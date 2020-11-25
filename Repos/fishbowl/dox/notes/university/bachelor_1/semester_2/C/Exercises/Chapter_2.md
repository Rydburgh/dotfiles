1.	a) Every C program begins execution at the function main.
	b) Every function's body begins with a left brace and ends with a right brace.
	c) Every statement ends with a semicolon.
	d) The printf standard library function displays information on the screen.
	e) The escape sequence \n represents the newline character, which causes the cursor to position to the beginning of the next line on the screen.
	f) The scanf standard library function is use to obtain data from the keyboard.
	g) The conversion specifier %d is used in a scanf format control string to indicate that an integer will be input and in a printf format control string to indicate that an integer will be output.
	h) Whenever a new value is placed in a memory location, that value overrides the previous value in that location. This process is said to be destructive.
	i) When a value is read from a memory location, the value in that location is preserved; this process is said to be nondestructive.
	j) the if statement is used to make decisions.
2.  a) (False) Function printf always begins printing at the beginning of a new linne
	b) (False) Comments cause the computer to display the text after // on the screen when the program is executed
	c) (True) The escape sequence \n when used in a printf format control string causes the cursor to position to the beginning of the next line on the screen
	d) (True) All variables must be defined before they're used.
	e) (True) All variables must be given a type when they're defined.
	f) (False) C considers the variables number and NuMbEr to be identical.
	g) (True) Definitions can appear anywhere in the body of a function.
	h) (False) All arguments following the format control string in a printf function must be preceded by an ampersand (&)
	i) (True) The remainder operator (%) can be used only with integer operands.
	j) (False) the arithmetic operators *, /, %, +, and - all have the same level of precednece.
	k) (False) A program that prints three lines of output must contain three printf statements.
3.  a) int c, thisVariable, q838383, number;
	b) printf( "Enter an integer: ");
	c) scanf( "%d", &a );
	d) if(number != 7){
		printf( "The variable number is not equal to 7.\n" );
		}
	e) printf( "This is a C program.\n" );
	f) printf( "This is a C\nprogram.\n" );
	g) printf( "This\nis\na\nC\nprogram.\n" );
	h) printf( "This\tis\ta\tC\tprogram.\n" );
4.	a) // This program will calculate the product of three integers.
	b) printf( "Enter three integers: " );
	c) int x, y, z;
	d) scanf( "%d%d%d", &x, &y, &z);
	e) int result = &x * &y * &z;
	f) printf( "The product is %d\n", result );
5.  \\ Calculate the product of three integers
	#include <stdio.h>

	int main ( void )
	{
		printf( "Enter three integers: "); //prompt

		int x, y, z; //declare variables
		scanf( "%d%d%d", &x, &y, &z ); // read three integers

		int result = x * y * z; // multiply values
		printf( "The product is %d\n", result ); //display result
	} // end function main
7.
