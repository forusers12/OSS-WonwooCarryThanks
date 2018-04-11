#include "stdafx.h"
#include <stdio.h>

int sum(int, int);
int min(int num1, int num2);
int mul(int num1, int num2);



int main()
{
	int num1 = 0, num2 = 0;


	printf("Input two number : ");
	scanf_s("%d %d", &num1, &num2);
	printf("%d \n", sum(num1, num2)); //SUM결과 출력
	printf("%d\n", min(num1,num2)); //min 결과 출력
	printf("%d \n", mul(num1, num2));
	
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

int mul(int num1, int num2){
	return num1 * num2;
}
