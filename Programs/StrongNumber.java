/* Write a java program to check if a given positive number is a strong number. 
A strong number is a number whose sum of factorial of each digit is the number itself. 
Print 1 if it is strong number, else 0.

example: 145
1! + 4! + 5! = 1+24+120 = 145

Sample:
Input=145
output=1

Input=128
output=0

Input=1
Output=1

Input=40585
Output=1
*/
import java.util.Scanner;
class StrongNumber
{
	public static void main(String args[])
	{
		Scanner sc=new Scanner(System.in);
		int n=sc.nextInt();
		int temp=n,sum=0;
		while(temp>0)
		{
			int dig=temp%10;
			int fact=1;
			temp=temp/10;
			while(dig>0)
			{
				fact=fact*dig--;
			}
			sum+=fact;
		}
		if(sum==n)
			System.out.println("1");
		else
			System.out.println("0");
	}
}