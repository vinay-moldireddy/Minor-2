#include <ESP8266WiFi.h>
#include <Servo.h>
const char* password = "12345678";
const char* ssid  = "redmi 7";
const char* host = "rwhiot.000webhostapp.com";
Servo servo;
const int trigPin = 2;  //D4
const int echoPin = 0;  //D3
//const int trigPin2 = 2;  //D4
//const int echoPin2 = 3;  //D3
const int yonpin=16;//D0
long int duration;
int distance;
int vol1=12;
int vol2=10;
float ph;
int yon;

//int calculatevol1()
//{
//digitalWrite(trigPin, LOW);
//delayMicroseconds(2);
//digitalWrite(trigPin, HIGH);
//delayMicroseconds(10);
//digitalWrite(trigPin, LOW);
//duration = pulseIn(echoPin, HIGH);
//distance= duration*0.034/2;
//Serial.print("Distance: ");
//Serial.println(distance);
//return distance;
//}

//int calculatevol2()
//{
//digitalWrite(trigPin2, LOW);
//delayMicroseconds(2);
//digitalWrite(trigPin2, HIGH);
//delayMicroseconds(10);
//digitalWrite(trigPin2, LOW);
//duration = pulseIn(echoPin2, HIGH);
//distance = duration*0.034/2;
//Serial.print("Distance: ");
//Serial.println(distance);
//return distance;
//}

int calculateyon()
{
    if (digitalRead(yonpin))
        {return 2;}
    else
    {return 1;}
}

float calculateph()
{
 float ph = analogRead(A0);
 ph = ph*5*3;
 ph=ph/1023.0;
 return ph;
}

void setup() {
pinMode(A0,INPUT);
pinMode(trigPin, OUTPUT);
pinMode(echoPin, INPUT);
//pinMode(trigPin2, OUTPUT);
//pinMode(echoPin2, INPUT);
pinMode(yonpin,INPUT);
servo.attach(5);//D1
  servo.write(45);

  Serial.begin(115200);
  delay(10);
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500); 
    Serial.print(".");
  }
  
  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());


//Serial.print("yon=");
//Serial.println(yon);
//Serial.print("ph=");
//Serial.println(ph);
//Serial.print("vol1=");
//Serial.println(vol1);
//Serial.print("vol2=");
//Serial.println(vol2);


  delay(5000);
  Serial.print("Connecting to ");
  Serial.println(host);
  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort)) {
    Serial.println("Connection failed!");
    return;
  }

  
//  String url = "/?yon=";
//  url += yon;
//  url += "&ph";
//  url += ph;
//  url += "&vol1=";
//  url += vol1;
//  url += "&vol2=";
//  url += vol2;
//  Serial.print("Requesting URL: ");
//  Serial.println(url);
//  client.print(String("GET ") + url + " HTTP/1.1\r\n" + "Host: " + host + "\r\n" + "Connection: close\r\n\r\n");
//  unsigned long timeout = millis();
//  while (client.available() == 0) {
//    if (millis() - timeout > 5000) {
//      Serial.println(">>> Client Timeout !");
//      client.stop();
//      return;
//    }
//  }
//  while (client.available()) {
//    String line = client.readStringUntil('\r');
//    Serial.print(line);
//  }
//  Serial.println();
//  Serial.println("Closing connection");
}



void loop() {
//int vol1=calculatevol1();
//int vol2=7;//calculatevol2();
float ph=calculateph();
int yon=calculateyon();
if(yon==2)
{servo.write(45);}
else if(ph>=5.5)
{servo.write(0);}
else
servo.write(45);

Serial.print("yon=");
Serial.println(yon);  
Serial.print("ph=");
Serial.println(ph);
Serial.print("vol1=");
Serial.println(vol1);
Serial.print("vol2=");
Serial.println(vol2);


  delay(4000);
  Serial.print("Connecting to ");
  Serial.println(host);
  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort)) {
    Serial.println("Connection failed!");
    return;
  }
  

String url = "/?yon=";
  url += yon;
  url += "&ph=";
  url += ph;
  url += "&vol1=";
  url += vol1;
  url += "&vol2=";
  url += vol2;
  Serial.print("Requesting URL: ");
  Serial.println(url);
  client.print(String("GET ") + url + " HTTP/1.1\r\n" + "Host: " + host + "\r\n" + "Connection: close\r\n\r\n");

    while (client.available()) {
    String line = client.readStringUntil('\r');
    Serial.print(line);
  }
  Serial.println();
  Serial.println("Closing connection");
}
