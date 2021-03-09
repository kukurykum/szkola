package com.company;

import java.io.InputStream;
import java.util.Scanner;

class Reader implements Runnable {
    private InputStream server;

    public Reader(InputStream server) {
        this.server = server;
    }

    public void run() {
        Scanner scanner = new Scanner(server);
        String message = "";
        while (scanner.hasNextLine()) {
            message = scanner.nextLine();
            System.out.println(message);
        }
    }
}
