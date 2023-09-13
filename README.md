# Backdoor-For-Freelance
### Useful script for freelance workers to avoid customer`s fraud attempts.
* Sometimes, when clients control a production server, there's a risk of them taking the completed website without payment. An unscrupulous client might change SSH and hosting passwords, thereby denying access to the remote production server—in other words, hijacking it.
* This script reliably ensures remote access to the server past the SSH login system and allows manipulation of directories and files within.

### Script 
* Base64 encoding is used to conceal messages from a hosting's security system, which might detect commands like "rm" or "rmdir" and block their execution (observed on SpaceWeb hosting).
* A password has been added to prevent others from exploiting this backdoor.

## Set up
1) Place a main.php within a server directory.
2) Insert the path to main.php into script.py.
3) Run the script.py
