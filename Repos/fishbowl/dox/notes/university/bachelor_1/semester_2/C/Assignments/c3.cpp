// Author: Jasper Runco
// Project: Assignment 2
// Compiler: GCC
#include <stdio.h>
#pragma warning(disable: 4996)
#include<string>
#include<stdlib.h>
#include<time.h>

// encryption and decryption algorithm with four digit input
int main( void ) {
	int again = 1; // initialize variable to loop entire process
	int encode_decode = 0; // initialize variable for encode/decode option

	while ( again == 1 ){
		int code = 0; // integer to be encoded or decoded

		// prompt user to encode or decode
		printf( "%s", "Encode (1) Decode (2): " );
		scanf( "%d", &encode_decode );

		// encode option
		if ( encode_decode == 1 ){

			// prompt user for number
			printf( "%s", "Enter a four digit number: " );
			scanf( "%d", &code );

			// encode algorithm
			int output = ( code % 10 + 7 ) % 10 * 100 +
				( code / 10 % 10 + 7 ) % 10 * 1000 +
				( code / 100 % 10 + 7 ) % 10 +
				( code / 1000 % 10 + 7 ) % 10 * 10;

			// output encoded number
			printf("Encode Digits: %04d\n", output );
		} // end if

		// decode option
		if ( encode_decode == 2 ){

			// prompt user for number
			printf( "%s", "Enter a four digit number: " );
			scanf( "%d", &code );

			// decode algorithm
			int output = ( code % 10 + 3 ) % 10 * 100 +
				( code / 10 % 10 + 3 ) % 10 * 1000 +
				( code / 100 % 10 + 3 ) % 10 +
				( code / 1000 % 10 + 3 ) % 10 * 10;

			// output decoded number
			printf("Decode Digits: %04d\n", output );
		} // end if

		// prompt user to continue
		printf( "%s", "Continue (1) Exit (0): " );
		scanf( "%d", &again );
	} // end while

	system("pause"); //before return in main
} // end class main
