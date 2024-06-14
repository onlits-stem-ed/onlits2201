package onlits2201.netwoking;

import java.io.DataInputStream;
import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;

public class Server {
    public static void main(String[] args) throws IOException {
        System.out.println("Server started...");
        ServerSocket serverSocket = new ServerSocket(3000);
        Socket socket = serverSocket.accept();
        if (socket != null)
            System.out.println("Connected...");

        String message;
        do {
            DataInputStream inputStream = new DataInputStream(socket.getInputStream());
            message = inputStream.readUTF();
            System.out.println(message);
            
        } while (!message.equals("bye"));

        serverSocket.close();
    }
}
