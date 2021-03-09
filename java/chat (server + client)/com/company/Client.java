package com.company;

import java.io.IOException;
import java.io.PrintStream;
import java.net.Socket;
import java.util.Scanner;

public class Client {
    public static void main(String[] args) throws IOException {
        String host = "127.0.0.1";
        int port = 3000;

        Socket client = new Socket(host, port);
        System.out.println("Polaczono ip: " + host + " port: " + port);

        Scanner scanner = new Scanner(System.in);
        System.out.print("Podaj nazwe uzytkownika: ");
        String name = scanner.nextLine();

        PrintStream output = new PrintStream(client.getOutputStream());
        output.println(name);

        Reader reader = new Reader(client.getInputStream());
        Thread t = new Thread(reader);
        t.start();

        while (scanner.hasNextLine()) {
            output.println(scanner.nextLine());
        }
        client.close();
    }
}