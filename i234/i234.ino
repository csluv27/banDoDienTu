#include <Servo.h>
#include <Wire.h>
#include <LiquidCrystal_I2C.h>

// Servo
Servo servoA;           // Servo ngang 1 (0–180)
Servo servoB;           // Servo ngang 2 (0–179)
Servo servoVertical;    // Servo dọc (0–170)

#define TRIG_PIN 13
#define ECHO_PIN 12
#define BUZZER_PIN 5

// Chân kết nối
const int servoA_pin = 9;
const int servoB_pin = 10;
const int servoVertical_pin = 11;

// LCD
LiquidCrystal_I2C lcd(0x27, 16, 2);

void setup() {
  Serial.begin(9600);
  servoA.attach(servoA_pin);
  servoB.attach(servoB_pin);
  servoVertical.attach(servoVertical_pin);
  pinMode(TRIG_PIN, OUTPUT);
  pinMode(ECHO_PIN, INPUT);
  pinMode(BUZZER_PIN, OUTPUT);

  lcd.init();
  lcd.backlight();
  lcd.setCursor(0, 0);
  lcd.print(" Radar dang chay ");
  delay(2000);
  lcd.clear();
}

// Đo khoảng cách
long measureDistance() {
  digitalWrite(TRIG_PIN, LOW);
  delayMicroseconds(2);
  digitalWrite(TRIG_PIN, HIGH);
  delayMicroseconds(10);
  digitalWrite(TRIG_PIN, LOW);

  long duration = pulseIn(ECHO_PIN, HIGH);
  long distance = duration * 0.034 / 2;
  return distance;
}

void loop() {
  // --- Giai đoạn 1: Servo A xoay 0–180 ---
  servoB.write(0);
  for (int angleA = 0; angleA <= 180; angleA += 20) {
    servoA.write(angleA);
    delay(100);

    for (int vAngle = 0; vAngle <= 170; vAngle += 1) {
      servoVertical.write(vAngle);

      long distance = measureDistance();

      // Bật còi nếu vật thể quá gần (< 1 cm)
      if (distance < 10) {
        digitalWrite(BUZZER_PIN, HIGH);
      } else {
        digitalWrite(BUZZER_PIN, LOW);
      }

      // Hiển thị LCD
      lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("X:");
      lcd.print(angleA);
      lcd.print((char)223);
      lcd.print(" Y:");
      lcd.print(vAngle);
      lcd.print((char)223);

      lcd.setCursor(0, 1);
      lcd.print("Dist:");
      lcd.print(distance);
      lcd.print("mm");

      delay(100);
    }
  }

  // --- Giai đoạn 2: Servo A giữ 180, Servo B xoay 0–179 ---
  servoA.write(180);
  for (int angleB = 0; angleB <= 179; angleB += 20) {
    servoB.write(angleB);
    int totalAngle = 180 + angleB;
    delay(100);

    for (int vAngle = 0; vAngle <= 170; vAngle += 1) {
      servoVertical.write(vAngle);

      long distance = measureDistance();

      if (distance < 10) {
        digitalWrite(BUZZER_PIN, HIGH);
      } else {
        digitalWrite(BUZZER_PIN, LOW);
      }

      // Hiển thị LCD
      lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("X:");
      lcd.print(totalAngle);
      lcd.print((char)223);
      lcd.print(" Y:");
      lcd.print(vAngle);
      lcd.print((char)223);

      lcd.setCursor(0, 1);
      lcd.print("Dist:");
      lcd.print(distance);
      lcd.print("mm");

      delay(100);
    }
  }

  // Optional: Quay ngược lại nếu cần
}
