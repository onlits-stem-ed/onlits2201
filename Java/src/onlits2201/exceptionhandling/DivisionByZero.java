package onlits2201.exceptionhandling;

import java.util.Scanner;

public class DivisionByZero {

    public static void testException() {
        int a = 400, b = 50, c = 50, x;
        x = a / (b - c);
        System.out.println("x = " + x);
        System.out.println("Aal is well!");
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int a = scanner.nextInt();
        try {
            testException();

        } catch (ArithmeticException exception) {
            System.out.println(exception);
        }
        System.out.println("Aal is well! From main()");
    }
}
