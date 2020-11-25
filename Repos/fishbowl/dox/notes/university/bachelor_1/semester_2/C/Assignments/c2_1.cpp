// Author: Jasper Runco
// Project: Chapter 2 part 1
// Compiler: GCC

#include <stdio.h>
#pragma warning(disable: 4996)
#include<string>
#include<stdlib.h>
#include<time.h>

// function main outputs the larger of two integers
int main( void )
{
	// prompt user for two integers
	printf( "%s", "This program finds the larger of two integers. Enter two integers:\n" );

	int integer1; // first number entered by the user
	int integer2; // second number entered by the user

	scanf( "%d%d", &integer1, &integer2 ); // read two integers

	// output the larger integer
	if (integer1 > integer2){
		printf( "%d is the larger integer.\n", integer1 );
	} // end if

	if (integer1 < integer2){
		printf( "%d is the larger integer.\n", integer2 );
	} // end if

	if (integer1 == integer2){
		printf( "The integers are the same.\n" );
	} // end if

	system("pause"); //before return in main
} // end class main
