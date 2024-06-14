package onlits2201.multithreading;

public class T1 extends Thread {
    @Override
    public void run() {
        for (int i = 1; i <= 20; i++)
            System.out.println("Thread T1");
        System.out.println("---------- End of Thread 1 ------------");
    }
}
