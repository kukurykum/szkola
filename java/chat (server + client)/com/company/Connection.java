package com.company;

import java.io.IOException;
import java.io.InputStream;
import java.io.PrintStream;
import java.net.Socket;
import java.util.Scanner;

class Connection implements Runnable {
    private final String nickname;
    private final PrintStream streamOut;
    private final InputStream streamIn;
    private final Server server;

    public Connection(Socket client, String name, Server server) throws IOException {
        this.streamOut = new PrintStream(client.getOutputStream());
        this.streamIn = client.getInputStream();
        this.nickname = name;
        this.server = server;
    }

    public void run() {
        String message;
        Scanner scanner = new Scanner(this.getInputStream());
        while (scanner.hasNextLine()) {
            message = scanner.nextLine();
            server.sendToAll(message, this);
        }
    }

    public String getName(){
        return this.nickname;
    }

    public PrintStream getOutStream(){
        return this.streamOut;
    }

    public InputStream getInputStream(){
        return this.streamIn;
    }
}