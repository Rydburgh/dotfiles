// Author: Jasper Runco
// Project: Chapter 2 part 2
// Compiler: GCC
#include <stdio.h>
#pragma warning(disable: 4996)
#include<string>
#include<stdlib.h>
#include<time.h>

// function main outputs the smallest, largest, sum and average of three integers
int main( void )
{
	// prompt user for three integers
	printf( "%s", "This program finds the largest, smallest, sum and average of three integers.\nEnter three integers:\n" );

	int integer1, integer2, integer3; // three numbers to be entered by user

	scanf( "%d%d%d", &integer1, &integer2, &integer3);

	// output the smallest integer
	if (integer1 < integer2 && integer1 < integer3){
		printf( "%d is the smallest integer.\n", integer1 );
	} // end if
	if (integer2 < integer3 && integer2 < integer1){
		printf( "%d is the smallest integer.\n", integer2 );
	} // end if
	if (integer3 < integer1 && integer3 < integer2){
		printf( "%d is the smallest integer.\n", integer3 );
	} // end if

	// output the largest integer
	if (integer1 > integer2 && integer1 > integer3){
		printf( "%d is the greatest integer.\n", integer1 );
	} // end if
	if (integer2 > integer3 && integer2 > integer1){
		printf( "%d is the greatest integer.\n", integer2 );
	} // end if
	if (integer3 > integer1 && integer3 > integer2){
		printf( "%d is the greatest integer.\n", integer3 );
	} // end if

	// output the sum of the three integers
	float sum = integer1 + integer2 + integer3; // assign sum of three integers to this variable
	printf( "%.0f is the sum.\n", sum );

	// output the average of the three integers
	float average = sum / 3; // assign average of three integers to this variable
	printf( "%.2f is the average.\n", average );

	system("pause"); //before return in main
} // end class main
