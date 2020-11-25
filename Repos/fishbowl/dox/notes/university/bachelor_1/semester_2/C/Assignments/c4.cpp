// Author: Jasper Runco
// Project: Chapter 4
// Compiler: GCC

#include <stdio.h>
#pragma warning(disable: 4996)
#include<string>
#include<stdlib.h>
#include<time.h>

// Computes the final ballance for various interest rates, compounded annually, for a given term.
// Prints "rate total" for each interest rate.
int main( void )
{
	int term_years = 10; 			// interest term in years (positive integer)
	float principal = 1000.00;		// principal sum
	float rate_min = 0.05;			// smallest interest rate to calculate
	float rate_max = 0.1;			// largest interest rate to calculate
	float rate_increment = 0.01;	// increase in interest rate between each calculation

	printf("%4s%7s\n", "rate", "total" );  // output table header

	// loop throught each interest rate
	for(double rate = rate_min; rate <= rate_max; rate += rate_increment) {
		double total = principal;  // reset the starting sum

		// loop to calculate the interest for given term
		for(unsigned int counter = 1; counter <= term_years; ++counter){
			total = rate * total + total;
		}  // end for loop

		printf("%g $%.2f\n", rate, total);  // output "rate total"
	}  // end for loop

	system("pause"); //before return in main
} // end class main
