#include "stdafx.h"
#include <stdio.h>

int sum(int, int);
int min(int num1, int num2);



int main()
{
	int num1 = 0, num2 = 0;


	printf("Input two number : ");
	scanf_s("%d %d", &num1, &num2);
	printf("%d \n", sum(num1, num2)); //SUM결과 출력

	return 0;
}

int sum(int num1, int num2)
{
	return num1 + num2;
}


int min(int num1, int num2)
{
	return num1-num2;
}
