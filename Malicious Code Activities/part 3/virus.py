import os
import sys

def insert_self(filename):
  with open(filename, 'r') as f:
    contents = f.read()

  contents = 'import {}'.format(__name__) + '\n' + contents

  with open(filename, 'w') as f:
    f.write(contents)


if __name__ == '__main__':
  for filename in os.listdir():
    if filename.endswith('.py'):
      insert_self(filename)