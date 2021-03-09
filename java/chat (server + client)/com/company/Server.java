package com.company;

import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Server {
    private final int port;
    private final List<Connection> clients;

    public Server(int port) {
        this.port = port;
        this.clients = new ArrayList<>();
    }

    public static void main(String[] args) throws IOException {
        int port = 3000;
        Server s = new Server(port);
        s.run();
    }

    public void run() throws IOException {
        ServerSocket server = new ServerSocket(port);
        System.out.println("Server dziala na porcie: " + port);

        while (true) {
            Socket client = server.accept();
            Scanner scanner = new Scanner(client.getInputStream());
            String name = scanner.nextLine();
            System.out.println("Nowy klient: " + name + " - " + server.toString());
            Connection newConnection = new Connection(client, name, this);
            this.clients.add(newConnection);
            newConnection.getOutStream().println("Polaczono: " + newConnection.getName());
            Thread t = new Thread(newConnection);
            t.start();
        }
    }

    public void sendToAll(String msg, Connection connection) {
        for (Connection client : this.clients) {
            client.getOutStream().println(connection.getName() + ": " + msg);
        }
    }
}