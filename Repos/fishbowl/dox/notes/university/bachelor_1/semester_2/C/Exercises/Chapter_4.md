1.	a.	Counter-controlled iteration is also known as definite iteration because it's known in advance how many times the loop will be executed.
	b.	Sentinel-controlled iteration is also known as indefinite iteration because it's not known in advance how many times the loop will be executed.
	c.	In counter-controlled iteration, a control varible or counter is used to count the number of times a group of instructions should be repeated.
	d.	The continue statement, when executed in an iteration statement, causes the next iteration of the loop to be performed immediately.
	e.	The break statement, when executed in an iteration statement, causes the next iteration of the loop to be performed immediately.
	f.	The selection statement is used to test a particular variable or expression for each of the constant integral values it may asume.
2. 		True or false
	a.	The default case is required in the switch selection statement. (False) It is optional.
	b.	The break statement is required in the default case of a switch selection statement. (False) used to exit the switch statement.
	c.	The expression (x > y && a < b) is true if either x > y is true or a < b is true. (False) both must be true using && operator.
	d.	An expression containing the || operator is true if either or both of its operands is true. (True)
3. 	Write a statement:
	a.	Sum the odd integers between 1 and 99 using a for statement. Use the unsigned integer variable sum and count.

		unsigned int sum = 0;
		for (unsigned int count = 1; count <= 99; count +=2) {
			sum += count;
		}

	b. 	Print the value 333.546372 in a field width of 15 characters with precisions of 1,2,3,4, and 5. Left justify the output. What are the five values that print?

		printf("%-15.1f\n", 333.546372); // prints 333.5
		printf("%-15.2f\n", 333.546372); // prints 333.55
		printf("%-15.3f\n", 333.546372); // prints 333.546
		printf("%-15.4f\n", 333.546372); // prints 333.5464
		printf("%-15.5f\n", 333.546372); // prints 333.54637

	c.	Calculate the value of 2.5 raised to the power of 3 using the pow function. Print the result with a precision of 2 in a field width of 10 positions. What is the value that prints?

		printf("%10.2f\n", pow(2.5, 3)); // prints 15.63

	d.	Print the integers from 1 to 20 using a while loop and the counter variable x.
		Print only five integers per line

		unsigned int x = 1;
		while (x <= 20) {
			printf("%u", x);
			if (x % 5 == 0) {
				puts("");
			}
			else {
				printf("%s", "\t");
			}
			++x;
		}

	e.	Repeat 4.3(d) using a for statement.

		for (unsigned int x = 1; x <= 20; ++x) {
			printf("%u", x);
			if (x % 5 == 0) {
				puts("");
			}
			else {
				printf("%s", "\t");
			}
		}
