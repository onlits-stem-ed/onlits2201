package onlits2201.multithreading;

public class MultiThreadingExample {
    public static void main(String[] args) {
        T1 t1 = new T1();       //new state
        System.out.println(t1.getState());
        t1.start();             //runnable state
        System.out.println(t1.getState());
        new T2().start();
        new T3().start();
    }
}