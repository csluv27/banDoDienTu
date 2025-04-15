#include <Servo.h>
#include <Wire.h>
#include <LiquidCrystal_I2C.h>

// Khai báo servo
Servo servo1;
Servo servo2;

// Khởi tạo LCD với địa chỉ I2C 0x27 và màn hình 16x2
LiquidCrystal_I2C lcd(0x27, 16, 2);

void setup() {
  // Gắn servo vào chân
  servo1.attach(9);
  servo2.attach(10);

  // Khởi động LCD
  lcd.init();
  lcd.backlight();
  lcd.setCursor(0, 0);
  lcd.print("He thong Radar");
  delay(2000);
  lcd.clear();
}

void loop() {
  for (int goc = 0; goc <= 359; goc += 1) {
    int angle1, angle2;

    if (goc <= 180) {
      angle1 = goc;
      angle2 = 180;
    } else {
      angle1 = 180;
      angle2 = 180 - (goc - 180);
    }

    servo1.write(angle1);
    servo2.write(angle2);

    // Hiển thị lên LCD
    lcd.setCursor(0, 0);
    lcd.print("Goc: ");
    lcd.print(goc);
    lcd.print(" deg   ");  // In dư ký tự để xoá ký tự cũ

    lcd.setCursor(0, 1);
    lcd.print("S1:");
    lcd.print(angle1);
    lcd.print(" S2:");
    lcd.print(angle2);
    lcd.print("   ");

    delay(20);
  }

  // Quay ngược lại
  for (int goc = 359; goc >= 0; goc -= 1) {
    int angle1, angle2;

    if (goc <= 180) {
      angle1 = goc;
      angle2 = 180;
    } else {
      angle1 = 180;
      angle2 = 180 - (goc - 180);
    }

    servo1.write(angle1);
    servo2.write(angle2);

    // Hiển thị lên LCD
    lcd.setCursor(0, 0);
    lcd.print("Goc: ");
    lcd.print(goc);
    lcd.print(" deg   ");

    lcd.setCursor(0, 1);
    lcd.print("S1:");
    lcd.print(angle1);
    lcd.print(" S2:");
    lcd.print(angle2);
    lcd.print("   ");

    delay(20);
  }
  }