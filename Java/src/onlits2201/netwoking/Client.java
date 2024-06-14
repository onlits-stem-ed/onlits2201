package onlits2201.netwoking;

import java.io.DataOutputStream;
import java.io.IOException;
import java.net.Socket;
import java.util.Scanner;

public class Client {
    public static void main(String[] args) throws IOException {
        Socket socket = new Socket("localhost", 3000);
        DataOutputStream outputStream;
        String message;
        Scanner scanner;
        do {
            scanner = new Scanner(System.in);
            message = scanner.next();
            outputStream = new DataOutputStream(socket.getOutputStream());
            outputStream.writeUTF(message);
        } while (!message.equals("bye"));
        scanner.close();
        outputStream.close();
        socket.close();
    }
}
