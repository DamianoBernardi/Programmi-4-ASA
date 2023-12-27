#include <WiFi.h>
#include <HTTPClient.h>
#include <string>

const char *ssid = "NomeWifi";
const char *password = "PasswordWifi";
const char *serverUrl = "http://indirizzo-server/dati";
const int pinLM35 = A0; // Pin analogico per LM35

void setup() {
  Serial.begin(115200);
  connectToWiFi();
}

void loop() {
  float temperatura = leggiTemperatura();
  float umidita = leggiUmidita();
  int luce = leggiLuce();

  inviaDatiAlServer();

  delay(60000); // attendi 1 minuto prima di rilevare nuovamente i dati
}

void connectToWiFi() {
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connessione WiFi in corso...");
  }
  Serial.println("Connesso al Wi-Fi!" + String(ssid));
  Serial.println("Indirizzo IP: " + WiFi.localIP().toString());

}

float leggiTemperatura() {
 int lettura = analogRead(pinLM35); // Legge il valore dal sensore
  float tensione = lettura * (3.3 / 4096.0);
  float temperatura = (tensione-0.5) * 100.0; // Converte la tensione in temperatura (solo se LM35)

  float value = temperatura;

  delay(1000); // Aspetta un secondo per la prossima lettura
  return 25.0;
}

float leggiUmidita() {
  // Codice per leggere l'umidità dal sensore
  // Sostituisci questo commento con la logica del tuo sensore di umidità
  return 50.0;
}

int leggiLuce() {
  // Codice per leggere la luminosità dal sensore
  // Sostituisci questo commento con la logica del tuo sensore di luce
  return 500;
}

void inviaDatiAlServer() {
  WiFiClient client;

if (!client.connect(“Indirizzo del server”, 80)) { // inserire l’indirizzo del server e la porta del servizio
    Serial.println("Connessione al server fallita.");
    return;
}

// Crea il messaggio HTTP
String message = GET pagina da richiedere;
message +=  HTTP/1.1\r\n;
message += "Host:"  + String("Indirizzo del server") + "\r\n";
message += "Connection: close\r\n\r\n";

// Invia il messaggio al server
client.print(message);

// Attendi la risposta del server
delay(1000);

// Leggi e stampa la risposta del server
while (client.available()) {
    String line = client.readStringUntil('\r');
    Serial.print(line);
}

Serial.println();
Serial.println("Dati inviati con successo al server.");

// Chiudi la connessione
client.stop();
}