#include <WiFi.h>
#include <HTTPClient.h>

const char *ssid = "NomeWifi";
const char *password = "PasswordWifi";
const char *serverUrl = "http://indirizzo-server/dati";

void setup() {
  Serial.begin(115200);
  connectToWiFi();
}

void loop() {
  float temperatura = leggiTemperatura();
  float umidita = leggiUmidita();
  int luce = leggiLuce();

  inviaDatiAlServer(temperatura, umidita, luce);

  delay(60000); // attendi 1 minuto prima di rilevare nuovamente i dati
}

void connectToWiFi() {
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connessione WiFi in corso...");
  }
  Serial.println("Connesso a WiFi");
}

float leggiTemperatura() {
  // Codice per leggere la temperatura dal sensore
  // Sostituisci questo commento con la logica del tuo sensore di temperatura
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

void inviaDatiAlServer(float temperatura, float umidita, int luce) {
  String dati = "temperatura=" + String(temperatura) + "&umidita=" + String(umidita) + "&luce=" + String(luce);
  HTTPClient http;
  http.begin(serverUrl);
  http.addHeader("Content-Type", "application/x-www-form-urlencoded");

  int codiceRisposta = http.POST(dati);

  if (codiceRisposta > 0) {
    Serial.println("Dati inviati con successo al server");
  } else {
    Serial.println("Errore nell'invio dei dati al server");
  }

  http.end();
}