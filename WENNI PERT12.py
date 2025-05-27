import re

regex = input("Enter a regular expression: ")

try:
    with open("mbox.txt", "r") as file:
        count = 0
        for line in file:
            line = line.rstrip()
            if re.search(regex, line):
                count += 1
        print(f"mbox.txt had {count} lines that matched {regex}")
except FileNotFoundError:
    print("File 'mbox.txt' tidak ditemukan. Pastikan file berada di direktori yang sama dengan skrip.")
